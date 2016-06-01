<?php

namespace PC\FicheBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PC\FicheBundle\Entity\Autre;
use DateTime;
use Knp\Snappy\Pdf;

/**
 * Export controller.
 *
 */

/*
    On a un souci avec les clés identiques dans le tableau de donnees $donnees.
    Le problème devrait être résolue en creant des clés liées au type.

*/
class ExportController extends Controller
{
    

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $types = $em->getRepository('PCFicheBundle:Type')->findAll();
        return $this->render('PCFicheBundle:Export:exportStep1.html.twig', array('types' => $types));
    }

    public function chooseSubTypeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $type = $em->getRepository('PCFicheBundle:Type')->find(array('id' => $id));
        $sousTypes = $em->getRepository('PCFicheBundle:SousType')->findByType($type);
        return $this->render('PCFicheBundle:Export:exportStep2.html.twig', array('sousTypes' => $sousTypes, 'type' => $type));
    }

    public function chooseColumnToExportAction(Request $request= null ,$parentId , $id)
    {

        $em = $this->getDoctrine()->getManager();
        $donnees = array();
        $type = $em->getRepository('PCFicheBundle:Type')->find(array('id' => $parentId));
        if ($id == 0)
        {
            $sousTypes = $em->getRepository('PCFicheBundle:SousType')->findByType($type);
            $templates = array();
            foreach ($sousTypes as $sousType) {
                if (!in_array($sousType->getDB(), $templates)){
                     $templates[] = $sousType->getDB();
                     echo count($templates);
                }
                
            }


            foreach ($templates as $template) {
                $donnees[]= $em->getRepository('PCFicheBundle:'.$template)->findByType($type);
            }

        }


        else

        {
            $request->getSession()
                    ->getFlashBag()
                    ->add('error', "Cette fonction n'est pas disponible pour le moment. Veillez choisir Toutes.");
            return $this->redirect($this->getRequest()->headers->get('referer'));
        }


        if (count($donnees) != 0){
            $estVide = false;
            
            $cles = array();
            for ($i = 0; $i<count($donnees); $i++)
            {
                $colonnes = $donnees[$i][0]->getObjectVars();
                foreach ($colonnes as  $cle => $valeur) {
                    $cles[$cle] =  $cle;
                }
            }
            

            $form = $this->columnChoiceForm($cles, $id,$parentId);
            $form->handleRequest($request);

            if($form->isSubmitted()){
                $data = $form->getData();
                $choix = array();
                foreach ($data['Choix'] as $key => $value){
                    $choix[] = $value;
                }
                if ($data['typedesortie'] === 'pdf'){
                    return $this->createPDF($donnees, $choix);
                }elseif($data['typedesortie'] === 'csv'){
                    return $this->createCSV($donnees, $choix);
                }

               
            }
            return $this->render('PCFicheBundle:Export:exportStep3.html.twig', array('donnees' => $donnees, 'form' => $form->createView(),'estVide' => $estVide ));
        }
        else
        {
            $estVide = true;
            return $this->render('PCFicheBundle:Export:exportStep3.html.twig', array('estVide' => $estVide ));
        }

        
    }

    public function columnChoiceForm(array $cles, $id, $parentId)
    {
        $builder = $this->createFormBuilder();
        $builder->setAction($this->generateUrl('export_chooseColumns',array('id'=>$id, 'parentId' => $parentId)));
        $builder->add('typedesortie','choice', array('choices' => array(
                                                                    'pdf' => 'pdf',
                                                                    'csv' => 'csv')));
        $builder->add('Choix','choice', array( 'choices' => $cles,'multiple' => true,'expanded'  => true, 'attr' => array('class' => 'row col-xs-5','style' => 'width : 2%; margin-top: 2%; margin-left: 10%; height : 20px', 'checked' => 'checked')));
        $builder->add('valider','submit', array('attr' => array('class' => 'btn pc_skyblue_btn','style' => 'margin-top: 120%')));

        $form = $builder->getForm();
        return $form;

    }

    public function createCSV(array $donnees,array $choix){
        $handle = fopen('php://memory', 'r+');
            if($donnees) {
            $header = Array();
            foreach ($donnees[0][0]->getObjectVars() as $key => $value) {
                if (in_array($key, $choix)){
                    array_push($header, $key);
                }
            }
            fputcsv($handle, $header, ";");
            }

            for ($i = 0; $i<count($donnees); $i++)
            {
                foreach ($donnees[$i] as $donnee) {
                   $entityToArrayOfStrings = Array();
                   foreach ($donnee->getObjectVars() as $key => $value) {
                        if (in_array($key, $choix)){
                            if(is_null($value)){
                                $value = '';
                            }
                            elseif(is_object($value) && get_class($value) == 'DateTime') {
                               $value = $value->format('Y-m-d H:i:s');
                            } elseif (is_array($value)) {
                               $value = implode(", ", $value);
                            }elseif (is_object($value) && get_class($value) === 'Doctrine\ORM\PersistentCollection') {
                               $value = null;
                            }elseif (is_object($value) && get_class($value) === 'PC\FicheBundle\Entity\SousType') {
                               $value = $value->getNom();
                            }elseif (is_object($value) && get_class($value) === 'PC\FicheBundle\Entity\Type') {
                               $value = $value->getNom();
                            }
                            array_push($entityToArrayOfStrings, $value);
                        }
                   }
                   fputcsv($handle, $entityToArrayOfStrings,";");
                }
            }

            rewind($handle);
            $content = stream_get_contents($handle);
            fclose($handle);
        
            return new Response($content, 200, array(
            'Content-Type' => 'application/force-download',
            'Content-Disposition' => 'attachment; filename="export.csv"'
            )); 

    }


    public function createPDF(array $donnees,array $choix)
    {
        
        //<link rel='stylesheet' href=".$this->get('kernel')->getRootDir()."\..\web\assets\css\bootstrap.min.css'>
        $contenu = "<!DOCTYPE html>
                    <html>
                        <head>
                            <meta charset='utf-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1'>
                            <title>PolyConvention</title>                    
                        </head><body>  "
                . "<table class='table table-bordered table-hover table-condensed'>";
        if($donnees) {
            $contenu .=  "<thead><tr>";  
            foreach ($donnees[0][0]->getObjectVars() as $key => $value) {
                 if (in_array($key, $choix)){
                    $contenu.= "<th>".$key."</th>";
                }
            }
            $contenu .=  "</tr></thead>"; 
        }
        $contenu .= "<tbody>";
        for ($i = 0; $i<count($donnees); $i++)
        {
            foreach ($donnees[$i] as $donnee) {
                $contenu .= "<tr>";
               $entityToArrayOfStrings = Array();
               foreach ($donnee->getObjectVars() as $key => $value) {
                    if (in_array($key, $choix)){
                        if(is_null($value)){
                            $value = '';
                        }
                        elseif(is_object($value) && get_class($value) == 'DateTime') {
                           $value = $value->format('Y-m-d H:i:s');
                        } elseif (is_array($value)) {
                           $value = implode(", ", $value);
                        }elseif (is_object($value) && get_class($value) === 'Doctrine\ORM\PersistentCollection') {
                           $value = null;
                        }elseif (is_object($value) && get_class($value) === 'PC\FicheBundle\Entity\SousType') {
                           $value = $value->getNom();
                        }elseif (is_object($value) && get_class($value) === 'PC\FicheBundle\Entity\Type') {
                           $value = $value->getNom();
                        }
                        $contenu .="<td align='right'>".$value."</td>";
                    }
               }
               $contenu .= "</tr>";
            }
        }
        $contenu .= "</tbody></table></body></html>";
        $snappy = new Pdf($this->get('kernel')->getRootDir()."\..\wkhtmltopdf\bin\wkhtmltopdf");
        $name = 'exportpdf-'.Date("YmdHis");
        

        return new Response(
            $snappy->getOutputFromHtml($contenu),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename='.$name.'.pdf',
            )
        );
        
    }


    
    public function exportAllAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entitiesFromCP = $em->getRepository('PCFicheBundle:ChartePartenariat')->findAll();
        foreach ($entitiesFromCP as $entity) {
            
            $entity->setRoute("chartepartenariat");
        }
        $entitiesFromME = $em->getRepository('PCFicheBundle:MADEvenementGratuit')->findAll();
        foreach ($entitiesFromME as $entity) {
            
            $entity->setRoute("MADEvenementGratuit");
        }
        $entitiesFromMS = $em->getRepository('PCFicheBundle:MADSalles')->findAll();
        foreach ($entitiesFromMS as $entity) {
            
            $entity->setRoute("MADSalles");
        }
        $entitiesFromPC = $em->getRepository('PCFicheBundle:PIFEClassique')->findAll();
        foreach ($entitiesFromPC as $entity) {
            
            $entity->setRoute("pifeclassique");
        }
        $entitiesFromPL = $em->getRepository('PCFicheBundle:PIFELaboratoire')->findAll();
        foreach ($entitiesFromPL as $entity) {
            
            $entity->setRoute("pifelaboratoire");
        }
        $entitiesFromPS = $em->getRepository('PCFicheBundle:PSCati')->findAll();

        foreach ($entitiesFromPS as $entity) {
            
            $entity->setRoute("pscati");
        }
        $entitiesFromA = $em->getRepository('PCFicheBundle:Autre')->findAll();

        foreach ($entitiesFromA as $entity) {
            
            $entity->setRoute("autre");
        }
        
        
        $entities = array_merge($entitiesFromCP,$entitiesFromME,$entitiesFromMS,$entitiesFromPC,$entitiesFromPL,$entitiesFromPS,$entitiesFromA);
        
        $handle = fopen('php://memory', 'r+');
        if($entities) {
            $header = Array();
            foreach ($entities[0]->getObjectVars() as $key => $value) {
                array_push($header, $key);
            }
            fputcsv($handle, $header, ";");
        }

       foreach ($entities as $entity) {
           $entityToArrayOfStrings = Array();
           foreach ($entity->getObjectVars() as $value) {
                if(is_null($value)){
                                $value = '';
                            }
                elseif(is_object($value) && get_class($value) == 'DateTime') {
                   $value = $value->format('d-m-Y');
                }elseif (is_array($value)) {
                   $value = implode(", ", $value);
                }elseif (is_object($value) && get_class($value) === 'Doctrine\ORM\PersistentCollection') {
                     $value = null;
                }elseif (is_object($value) && get_class($value) === 'Proxies\__CG__\PC\FicheBundle\Entity\SousType') {
                      $value = $value->getNom();
                }elseif (is_object($value) && get_class($value) === 'Proxies\__CG__\PC\FicheBundle\Entity\Type') {
                    $value = $value->getNom();
                }
               array_push($entityToArrayOfStrings, $value);
           }
           fputcsv($handle, $entityToArrayOfStrings,";");
       }


        rewind($handle);
        $content = stream_get_contents($handle);
        fclose($handle);
        
        return new Response($content, 200, array(
            'Content-Type' => 'application/force-download',
            'Content-Disposition' => 'attachment; filename="export.csv"'
        ));                           
       
 
    }
   
}
