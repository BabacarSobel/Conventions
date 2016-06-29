<?php

namespace PC\FicheBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use PC\FicheBundle\Entity\Alerte;
use Knp\Snappy\Pdf;
use PC\FicheBundle\Entity\PIFEClassique;
use PC\FicheBundle\Form\AlerteType;
use PC\FicheBundle\Entity\Avenant;
use PC\FicheBundle\Entity\Fichier;
use PC\FicheBundle\Form\FichierType;
use DateTime;
use PC\FicheBundle\Form\AvenantType;
use PC\FicheBundle\Form\FicheMessageType;
use PC\FicheBundle\Entity\FicheMessage;
use PC\FicheBundle\Form\ActionType;
use PC\FicheBundle\Form\EditConventionType;

/**
 * Fiche controller.
 *
 */
class FicheController extends DefaultController
{

    /**
     * Liste de toutes les fiches
     */
    public function indexAction()
    {  
        $em = $this->getDoctrine()->getManager();
        $aujourdhui = new DateTime();
        $alertes = array();
        
        // tableau contenant les alertes expiration
        $alertesExp = array();
        
        $entities = $em->getRepository('PCFicheBundle:Commun')->findAll();
        foreach ($entities as $entity) {
            // on définit la route vers la fiche
            $entity->setRoute(strtolower($entity->getTemplate()));
            // on récupère les fiches expirant prochainement
            if ($entity->getDateEcheance() != null){
                $dateAlerte = $entity->getDateEcheance()->diff($aujourdhui);
                if (( $dateAlerte->format('%a') < 13 && $dateAlerte->format('%R') === '-') ||($dateAlerte->format('%a') == 0 )){
                    $alerte = new Alerte();
                    $alerte->setIntitule('Expiration de la convention '.$entity->getId().' proche');
                    $alerte->setDateAlerte($entity->getDateEcheance());
                    $alerte->setObjet('Expiration de la convention');
                    $alerte->setRoute($entity->getRoute().'_show');
                    $alerte->setCommun($entity);
                    $alerte->setOwnerId($entity->getId());
                    $alertesExp[] = $alerte;
                }
            }
        }
        $entitiesEnCours =[];$entitiesEnVigueur =[];$entitiesNonAssignees =[];
        foreach ($entities as $entity){
            if ($entity->getEtatDemande() == 'En cours de traitement'){
                $entitiesEnCours[] = $entity;
            }
            if ($entity->getEtatDemande() == 'Traitée'){
                $entitiesEnVigueur[] = $entity;
            }
            
            if ($entity->getEtatDemande() == null){
                $entitiesNonAssignees[] = $entity;
        }}
        //inutile lorsque le datagrid est utilisé
        usort($entitiesEnCours, array($this,'dateSortDescending'));
        usort($entitiesEnVigueur, array($this,'dateSortDescending')); 
        usort($entitiesNonAssignees, array($this,'dateSortDescending'));
        
        // les alertes sont récupérées        
        $alertes += $em->getRepository('PCFicheBundle:Alerte')->findBy(
                array(),
                array('dateAlerte' => 'ASC'));
        // on définit la route de chaque alerte
        foreach ($alertes as $alerte){
            if ($alerte->getCommun() != NULL){
                $alerte->setOwnerId($alerte->getCommun()->getId());
            }
        }
        
        $notifications = $this->getNotifications();
        $alertes+= $notifications[0];
        $messages = $notifications[1];
        usort($alertes, array($this,'alerteDateSortDescending'));
        
        return $this->render('PCFicheBundle:Fiche:index.html.twig', array(
            'entitiesEnCours' => $entitiesEnCours,
            'entitiesEnVigueur' => $entitiesEnVigueur,
            'entitiesNonAssignees' => $entitiesNonAssignees,
            'alertesA' => $alertes,
            'messagesA' => $messages,
            'alertesExp' => $alertesExp
        ));
    }
    
    /**
     * Permet de choisir un type de fiche à créer
     *
     */
    public function chooseTypeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $types = $em->getRepository('PCFicheBundle:Type')->findAll();

        return $this->render('PCFicheBundle:Fiche:new.html.twig', array(
            'types' => $types
        ));
    }
    
    /**
     * Montre les sous types en fonction du type choisi.
     * @param int $id l'id du type
     *
     */
    public function chooseSubTypeAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $sousTypes = $em->getRepository('PCFicheBundle:SousType')->findBy(array('type' => $id));

        return $this->render('PCFicheBundle:Fiche:chooseSubType.html.twig', array(
            'sousTypes' => $sousTypes
        ));
    }
    
    /**
     * Télécharger un fichier
     * @param string $filename
     */
    public function downloadAction($filename)
    {
        $path = $this->get('kernel')->getRootDir(). "/../files/";
        $content = file_get_contents($path.$filename);
        $response = new Response();        
        //mettre en place l'entête du fichier
        $response->headers->set('Content-Type', 'mime/type');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);
        $response->setContent($content);
        return $response;
    }
  
    
    
    /**
     * Créer une alerte 'nouvelle action'
     */
    public function newActionNotification($alerte,$entity)
    {
        $alerte->setIntitule('Nouvelle action sur '.$entity->getId());
        $alerte->setObjet('Une nouvelle action');
        $alerte->setType('action');
        $alerte->setCommun($entity);
        $alerte->setRoute('autre_show');
        $alerte->setDateAlerte(new DateTime());
        $alerte->setOwnerId($entity->getId());
    }

    
    public function editConventionAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PCFicheBundle:Commun')->find($id);
        $form = $this->createEditConventionForm($entity,$id);
        
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PCFicheBundle:Commun')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PIFEClassique entity.');
            }

            $em->remove($entity);
            $em->flush();
        }
        
        return $this->render('PCFicheBundle:Commun:editconvention.html.twig', array(
            'entity'      => $entity,
            'form'   => $form->createView(),
        ));
        
    }
    
    private function createEditConventionForm(PIFEClassique $entity,$id){
        $form = $this->createForm(new EditConventionType(), null, array(
        'action' => $this->generateUrl('fiche_editconvention',array("id" => $id)),
        'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Modifier'));
        return $form;
    }
    
    public function pdfAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PCFicheBundle:Commun')->find($id);
        $snappy = new Pdf($this->get('kernel')->getRootDir()."/../wkhtmltox/bin/wkhtmltopdf");
        $name ='pl-'.$id.Date("YmdHis");
        $template = $em->getRepository('PCFicheBundle:Template')->findBy(array('type'=> $entity->getSousType()->getId()));
        // on cree le contenu
        $twig = clone $this->get('twig');
        $twig->setLoader(new \Twig_Loader_String());
        $content = $twig->render(
          $template[0]->getTemplate(),
          array('entity'=>$entity)
        );
        $snappy->generateFromHtml($content, $this->get('kernel')->getRootDir().'/../files/'.$name.'.pdf');
            return $this->render('PCFicheBundle:Fiche:pdf.html.twig'
                    ,array('pdf' => $snappy,
                        'filename' => $name.'.pdf')
                    );
    }
	
    public function wordAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PCFicheBundle:PIFELaboratoire')->find($id);
        $content = $this->renderView('PCFicheBundle:Template:pl.html.twig',array('entity'=>$entity)); 
        $filename="convention".$id.Date("YmdHis").".docx";
        $file =$this->get('kernel')->getRootDir()."/../files/convention".$id.Date("YmdHis").".docx";
        touch($file);
        if (is_writable($file)) {
         if (!$handle = fopen($file, 'a')) {
          echo "Impossible d'ouvrir le fichier ($file)";
          exit;
         }
         if (fwrite($handle, $content) === FALSE) {
          echo "Impossible d'écrire dans le fichier ($file)";
          exit;
         }
         fclose($handle);
        } else {
         echo "Le fichier $file n'est pas accessible en écriture.";
        }
        
        return $this->render('PCFicheBundle:Fiche:pdf.html.twig'
                    ,array(
                        'filename' => $filename)
                    );
    }
}
