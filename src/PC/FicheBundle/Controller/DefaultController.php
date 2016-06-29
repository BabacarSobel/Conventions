<?php

/* 
 * Copyright (C) 2016 TDZF6091
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace PC\FicheBundle\Controller;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;
//use Knp\Snappy\Pdf;
//use PC\FicheBundle\Entity\PIFEClassique;
//use PC\FicheBundle\Form\PIFEClassiqueType;
//use PC\FicheBundle\Form\DemandePIFEClassiqueType;
//use PC\FicheBundle\Entity\Alerte;
//use PC\FicheBundle\Form\AlerteType;
//use PC\FicheBundle\Entity\Avenant;
//use PC\FicheBundle\Entity\Fichier;
//use PC\FicheBundle\Form\FichierType;
//use DateTime;
//use PC\FicheBundle\Form\AvenantType;
//use PC\FicheBundle\Form\FicheMessageType;
//use PC\FicheBundle\Entity\FicheMessage;
//use PC\FicheBundle\Form\ActionType;
//use PC\FicheBundle\Form\EditConventionType;
// reprendre le routage


/**
 * Default controller.
 * Controller par défaut duquel hérite tous les autres controllers
 *
 */
class DefaultController extends Controller{
    
    
    /**
    * Récupere toutes les notifications (messages, alertes)
    *@return array()
    */

    public function getNotifications(){
        
        $em = $this->getDoctrine()->getManager();
        $alertes = $em->getRepository('PCFicheBundle:Alerte')->findBy(
                array(),
                array('dateAlerte' => 'ASC'));
        
        // on definit le chemin vers l'élémenent concerné par l'alerte
        foreach ($alertes as $alerte){
            if ($alerte->getChartePartenariat() != NULL){
                $alerte->setOwnerId($alerte->getChartePartenariat()->getId());
            }elseif ($alerte->getMadEvenementGratuit() != NULL){
                $alerte->setOwnerId($alerte->getMadEvenementGratuit()->getId());
            }elseif ($alerte->getMadSalles() != NULL){
                $alerte->setOwnerId($alerte->getMadSalles()->getId());
            }elseif ($alerte->getPifeClassique() != NULL){
                $alerte->setOwnerId($alerte->getPifeClassique()->getId());
            }elseif ($alerte->getPifeLaboratoire() != NULL){
                $alerte->setOwnerId($alerte->getPifeLaboratoire()->getId());
            }elseif ($alerte->getPsCati() != NULL){
                $alerte->setOwnerId($alerte->getPsCati()->getId());
            }elseif ($alerte->getAutre() != NULL){
                $alerte->setOwnerId($alerte->getAutre()->getId());
            }else {
                $alerte->setOwnerId('1');
            }
            
            // on s'assure qu'il ait un chemin de l'alerte
            if ($alerte->getRoute() === null){
                $alerte->setRoute('error_404');
            }            
        }

        
        $messages = $em->getRepository('PCFicheBundle:Alerte')->findByType('message');
        // on definit le chemin vers l'élémenent concerné par l'alerte de type message
        foreach ($messages as $alerte){
            if ($alerte->getChartePartenariat() != NULL){
                $alerte->setOwnerId($alerte->getChartePartenariat()->getId());
            }elseif ($alerte->getMadEvenementGratuit() != NULL){
                $alerte->setOwnerId($alerte->getMadEvenementGratuit()->getId());
            }elseif ($alerte->getMadSalles() != NULL){
                $alerte->setOwnerId($alerte->getMadSalles()->getId());
            }elseif ($alerte->getPifeClassique() != NULL){
                $alerte->setOwnerId($alerte->getPifeClassique()->getId());
            }elseif ($alerte->getPifeLaboratoire() != NULL){
                $alerte->setOwnerId($alerte->getPifeLaboratoire()->getId());
            }elseif ($alerte->getPsCati() != NULL){
                $alerte->setOwnerId($alerte->getPsCati()->getId());
            }elseif ($alerte->getAutre() != NULL){
                $alerte->setOwnerId($alerte->getAutre()->getId());
            }else {
                $alerte->setOwnerId('1');
            }
        }
        
        usort($alertes, array($this,'alerteDateSortDescending'));
        usort($messages, array($this,'alerteDateSortDescending'));
        
        // on renvoie un array avec les alertes.
        return array($alertes,$messages);
    }
    
    /*
     * permet de récupérer le role de l'utilisateur
     */
    protected function getIdentity(){
        $utilisateur = $this->getUser();
        $roles = $utilisateur->getRoles();
        if (in_array('ROLE_ADMIN',$roles )){ 
            $role = 'ROLE_ADMIN';
        }elseif (in_array('ROLE_DIRECTION',$roles)){ 
            $role = 'ROLE_DIRECTION';
        }elseif (in_array('ROLE_USER',$roles)){ 
            $role = 'ROLE_USER';
        }
        return $role;   
    }


    /**
    * permet de trier un tableau en fonction de la date de création des éléments
    *
    */
    static function dateSortDescending( $a, $b)
    {
        if ( $a->getDateCreation() == $b->getDateCreation() ){
            return 0;}
        else{
            return ( $a->getDateCreation() < $b->getDateCreation() ) ? +1 : -1;
        }
    }

    /**
    * permet de trier un tableau d'alertes en fonction de la date de l'alerte
    *
    */
    static function alerteDateSortDescending( $a, $b)
    {
        if ( $a->getDateAlerte() == $b->getDateAlerte() ){
            return 0;}
        else{
            return ( $a->getDateAlerte() < $b->getDateAlerte() ) ? +1 : -1;
        }
    }

    
//    
//    public function sendFicheMessageAction(Request $request, $id){
//        $entity = new FicheMessage();
//        $form = $this->sendFicheMessageForm($entity,$id);
//        $form->handleRequest($request);
//        
//        if ($form->isValid()) {
//            $emCP = $this->getDoctrine()->getManager();
//            $entityCP = $emCP->getRepository('PCFicheBundle:Commun')->find($id);
//            $entity->setCommun($entityCP);
//            $entity->setDate(new DateTime);
//            $user = $this->container->get('security.context')->getToken()->getUser();
//            $entity->setAuteur($user->getFullname());
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($entity);
//            $em->flush();
//            return $this->redirect($this->getRequest()->headers->get('referer'));
//        }
//
//        return $this->render('PCFicheBundle:FicheMessage:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }
//    
//    public function sendFicheMessageForm(FicheMessage $entity,$id){
//        $form = $this->createForm(new FicheMessageType(), $entity, array(
//        'action' => $this->generateUrl('pifeclassique_sendfichemessage',array("id" => $id)),
//        'method' => 'POST',
//        ));
//        $form->add('submit', 'submit', array('label' => 'Créer'));
//        return $form;
//    }
//    
//    // revoir le nom du sous type
//    public function pdfAction($id)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $entity = $em->getRepository('PCFicheBundle:Commun')->find($id);
//        $type = $em->getRepository('PCFicheBundle:SousType')->findBy(array('nom' => 'PROPOSITION ENTREPRISES'));
//        $template = $em->getRepository('PCFicheBundle:Template')->findBy(array('type'=> $type[0]->getId()));
//        // on cree le contenu
//        $twig = clone $this->get('twig');
//        $twig->setLoader(new \Twig_Loader_String());
//        $content = $twig->render(
//          $template[0]->getTemplate(),
//          array('entity'=>$entity)
//        );
//        $snappy = new Pdf($this->get('kernel')->getRootDir()."/../wkhtmltox/bin/wkhtmltopdf");
//        $name =  'pc-'.$id.Date("YmdHis");  
//        $snappy->generateFromHtml($content, $this->get('kernel')->getRootDir().'/../files/'.$name.'.pdf');
//        
//        return $this->render('PCFicheBundle:Fiche:pdf.html.twig'
//                    ,array('pdf' => $snappy,
//                        'filename' => $name.'.pdf')
//                    );
//    }
//    
//    // tout revoir
//    public function wordAction($id)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $entity = $em->getRepository('PCFicheBundle:Commun')->find($id);
//        $content = $this->renderView('PCFicheBundle:Template:pc.html.twig',array('entity'=>$entity)); 
//        $filename="convention".$id.Date("YmdHis").".doc";
//        $file =$this->get('kernel')->getRootDir()."/../files/convention".$id.Date("YmdHis").".doc";
//		$PHPWord = new \PhpOffice\PhpWord\PhpWord();
//		$section = $PHPWord->createSection();
//		$section->addText($content);
//		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($PHPWord, 'Word2007');
//		$objWriter->save('helloWorld.docx');
//
//        touch($file);
//        if (is_writable($file)) {
//         if (!$handle = fopen($file, 'a')) {
//          echo "Impossible d'ouvrir le fichier ($file)";
//          exit;
//         }
//         if (fwrite($handle, $content) === FALSE) {
//          echo "Impossible d'écrire dans le fichier ($file)";
//          exit;
//         }
//         fclose($handle);
//        } else {
//         echo "Le fichier $file n'est pas accessible en écriture.";
//        }
//        
//        return $this->render('PCFicheBundle:Fiche:pdf.html.twig'
//                    ,array(
//                        'filename' => $filename)
//                    );
//    }
//    
//    /**
//     * Créer une formulaire d'ajout de fichier
//     */
//    public function addFichierForm(Fichier $entity,$id)
//    {
//        $form = $this->createForm(new FichierType(), $entity, array(
//            'action' => $this->generateUrl('pifeclassique_new_fichier',array("id" => $id)),
//            'method' => 'POST',
//        ));
//
//        $form->add('submit', 'submit', array('label' => 'Créer'));
//
//        return $form;
//    }
//    
//    /**
//     * Ajouter un fichier à la fiche
//     */
//    public function addFichierAction(Request $request, $id)
//    {
//        $entity = new Fichier();
//        $form = $this->addFichierForm($entity,$id);
//        $form->handleRequest($request);
//        
//
//        if ($form->isValid()) {
//            $emCP = $this->getDoctrine()->getManager();
//            $entityCP = $emCP->getRepository('PCFicheBundle:Commun')->find($id);
//            $entity->setCommun($entityCP);
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($entity);
//            $em->flush();
//            return $this->redirect($this->generateUrl('pifeclassique_show', array('id' => $entityCP->getId())));
//        }
//
//        return $this->render('PCFicheBundle:Fichier:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }
//    
//    /**
//     * Créer une formulaire d'ajout de formulaire
//     */
//    public function addAvenantForm(Avenant $entity,$id)
//    {
//        $form = $this->createForm(new AvenantType(), $entity, array(
//            'action' => $this->generateUrl('pifeclassique_new_avenant',array("id" => $id)),
//            'method' => 'POST',
//        ));
//
//        $form->add('submit', 'submit', array('label' => 'Créer'));
//
//        return $form;
//    }
//    
//    /**
//     * Creates a new Avenant entity.
//     *
//     */
//    public function addAvenantAction(Request $request, $id)
//    {
//        $entity = new Avenant();
//        $form = $this->addAvenantForm($entity,$id);
//        $form->handleRequest($request);
//        
//
//        if ($form->isValid()) {
//            $emPC = $this->getDoctrine()->getManager();
//            $entityPC = $emPC->getRepository('PCFicheBundle:Commun')->find($id);
//            $entityPC->incrementerNombreNouveauxAvenants();
//            $entity->setCommun($entityPC);
//            $entity->setNumeroFiche($id);
//            $entity->setDateContratInitial($entityPC->getDateSignaturePolytech());
//            $entity->setDateEffetCI($entityPC->getDateEffet());
//            $entity->setDateFinCI($entityPC->getDateEcheance());
//            $ajout = " + ".$entity->getNbMoisProrogation()." month";
//            if ($entity->getObjet() === 'proroger'){
//                $date = $entityPC->getDateEcheance();
//
//                if ($date != null){
//                    echo 'je rentre ';
//                    $date=  $date->format('Y-m-d');
//                    $expirationDate = date("Y-m-d", strtotime($date.$ajout));
//                    $expirationDate = new DateTime($expirationDate);
//                    $entity->setDateExpiration($expirationDate);
//                }else{
//                    $request->getSession()
//                    ->getFlashBag()
//                    ->add('error', "Pas de date d'écheance trouvé. Votre avenant n'a pas été enregistré");
//                    return $this->redirect($this->generateUrl('pifeclassique_show', array('id' => $entityPC->getId())));
//                }
//            
//            }
//            $em = $this->getDoctrine()->getManager();
//            $alerte = new Alerte();
//            $this->avenantCreationNotification($alerte,$entity);
//            $em->persist($entity);
//            $em->flush();
//            $em->persist($alerte);
//            $em->flush();
//            
//
//            return $this->redirect($this->generateUrl('pifeclassique_show', array('id' => $entityPC->getId())));
//        }
//
//        return $this->render('PCFicheBundle:Avenant:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }
//    
// 
//        
//                /**
//     * Creates a Fichier form
//     *
//     */
//    public function addFichierToRequestForm(Fichier $entity,$id)
//    {
//        $form = $this->createForm(new FichierType(), $entity, array(
//            'action' => $this->generateUrl('pifeclassique_new_fichierrequest',array("id" => $id)),
//            'method' => 'POST',
//        ));
//
//        $form->add('submit', 'submit', array('label' => 'Créer'));
//
//        return $form;
//    }
//    
//        /**
//     * Creates a new Fichier entity.
//     *
//     */
//    public function addFichierToRequestAction(Request $request, $id)
//    {
//        $entity = new Fichier();
//        $form = $this->addFichierForm($entity,$id);
//        $form->handleRequest($request);
//        
//
//        if ($form->isValid()) {
//            $emCP = $this->getDoctrine()->getManager();
//            $entityCP = $emCP->getRepository('PCFicheBundle:Commun')->find($id);
//            $entity->setCommun($entityCP);
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($entity);
//            $em->flush();
//            return $this->redirect($this->generateUrl('pifeclassique_showrequest', array('id' => $entityCP->getId())));
//        }
//
//        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }
//    
//    /**
//     * Creates a Avenant form
//     *
//     */
//    public function addAvenantToRequestForm(Avenant $entity,$id)
//    {
//        $form = $this->createForm(new AvenantType(), $entity, array(
//            'action' => $this->generateUrl('pifeclassique_new_avenantrequest',array("id" => $id)),
//            'method' => 'POST',
//        ));
//
//        $form->add('submit', 'submit', array('label' => 'Créer'));
//
//        return $form;
//    }
//    
//    /**
//     * Creates a new Avenant entity.
//     *
//     */
//    public function addAvenantToRequestAction(Request $request, $id)
//    {
//        $entity = new Avenant();
//        $form = $this->addAvenantForm($entity,$id);
//        $form->handleRequest($request);
//        
//
//        if ($form->isValid()) {
//            $emPC = $this->getDoctrine()->getManager();
//            $entityPC = $emPC->getRepository('PCFicheBundle:Commun')->find($id);
//            $entityPC->incrementerNombreNouveauxAvenants();
//            $entity->setCommun($entityPC);
//            $entity->setNumeroFiche($id);
//            $entity->setDateContratInitial($entityPC->getDateSignaturePolytech());
//            $entity->setDateEffetCI($entityPC->getDateEffet());
//            $entity->setDateFinCI($entityPC->getDateEcheance());
//            $ajout = " + ".$entity->getNbMoisProrogation()." month";
//            $date = $entityPC->getDateEcheance();
//            if ($date != null){
//                $date=  $date->format('Y-m-d');
//                $expirationDate = date("Y-m-d", strtotime($date.$ajout));
//                $expirationDate = new DateTime($expirationDate);
//                $entity->setDateExpiration($expirationDate);
//            }
//            $em = $this->getDoctrine()->getManager();
//            $alerte = new Alerte();
//            $this->avenantCreationNotification($alerte,$entity);
//            $em->persist($entity);
//            $em->flush();
//            $em->persist($alerte);
//            $em->flush();
//            
//            return $this->redirect($this->generateUrl('pifeclassique_showrequest', array('id' => $entityPC->getId())));
//        }
//
//        return $this->render('PCFicheBundle:Avenant:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }
//    
//    /**
//     * Creates an Avenant form
//     *
//     */
//    public function addAlertForm(Alerte $entity,$id)
//    {
//        $form = $this->createForm(new AlerteType(), $entity, array(
//            'action' => $this->generateUrl('pifeclassique_new_alert',array("id" => $id)),
//            'method' => 'POST',
//        ));
//
//        $form->add('submit', 'submit', array('label' => 'Créer'));
//
//        return $form;
//    }
//    /**
//     * Creates a new Alerte entity.
//     *
//     */
//    public function addAlertAction(Request $request, $id)
//    {
//        $entity = new Alerte();
//        $form = $this->addAlertForm($entity,$id);
//        $form->handleRequest($request);
//        
//
//        if ($form->isValid()) {
//            $emPC = $this->getDoctrine()->getManager();
//            $entityPC = $emPC->getRepository('PCFicheBundle:Commun')->find($id);
//            $entity->setCommun($entityPC);
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($entity);
//            $em->flush();
//            return $this->redirect($this->generateUrl('pifeclassique_show', array('id' => $entityPC->getId())));
//        }
//
//        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }
//    
//    /**
//     * Creates a new PIFEClassique entity.
//     *
//     */
//    public function createAction(Request $request, $id)
//    {
//        $entity = new PIFEClassique();
//        $form = $this->createCreateForm($entity,$id);
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $entity->setDemandeur( $this->container->get('security.context')->getToken()->getUser());
//            $entitySousType = $em->getRepository('PCFicheBundle:SousType')->find($id);
//            $type = $entitySousType->getType();
//            $entity->setSousType($entitySousType);
//            $entity->setType($type);
//            $entity->setDateCreation(new DateTime());
//            $departement =  $em->getRepository('PCFicheBundle:Departement')->findBy(array('departmentName' => $entity->getDepartementEtudiant()));
//            $responsableDepartement = $departement[0]->getDepartmentLeader();
//            $entity->setResponsableDepartement($responsableDepartement);
//            $em->persist($entity);
//            $em->flush();
//            return $this->redirect($this->generateUrl('pifeclassique_show', array('id' => $entity->getId())));
//        }
//
//        return $this->render('PCFicheBundle:Commun:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }
//
//    /**
//     * Creates a form to create a PIFEClassique entity.
//     *
//     * @param PIFEClassique $entity The entity
//     *
//     * @return \Symfony\Component\Form\Form The form
//     */
//    private function createCreateForm(PIFEClassique $entity,$id)
//    {
//        $form = $this->createForm(new PIFEClassiqueType(), $entity, array(
//            'action' => $this->generateUrl('pifeclassique_create',array('id'=>$id)),
//            'method' => 'POST',
//        ));
//
//        $form->add('submit', 'submit', array('label' => 'Créer'));
//
//        return $form;
//    }
//    
//        /**
//     * set the demande alert parameters
//     *
//     */
//    public function demandeCreation($alerte,$entity)
//    {
//        $alerte->setIntitule('Nouvelle demande');
//        $alerte->setObjet('Une nouvelle demande a été faite');
//        $alerte->setPIFEClassique($entity);
//        $alerte->setRoute('pifeclassique_show');
//        $alerte->setDateAlerte(new DateTime());
//        $alerte->setOwnerId($entity->getId());
//    }
//    
//    public function avenantCreationNotification($alerte,$entity)
//    {
//        $alerte->setIntitule('Nouvel avenant');
//        $alerte->setObjet('Un nouvel avenant a été créé');
//        $alerte->setAvenant($entity);
//        $alerte->setRoute('autre_show');
//        $alerte->setDateAlerte(new DateTime());
//        $alerte->setOwnerId($entity->getId());
//    }
//    
//            /**
//     * Creates a new MADEvenementGratuit entity.
//     *
//     */
//    public function createRequestAction(Request $request,$id)
//    {
//        $entity = new PIFEClassique();
//        $form = $this->createRequestForm($entity,$id);
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            
//            $em = $this->getDoctrine()->getManager();
//            $entity->setDemandeur( $this->container->get('security.context')->getToken()->getUser());
//            $entitySousType = $em->getRepository('PCFicheBundle:SousType')->find($id);
//            $type = $entitySousType->getType();
//            $entity->setSousType($entitySousType);
//            $entity->setType($type);
//            $entity->setDateCreation(new DateTime());
//            $departement =  $em->getRepository('PCFicheBundle:Departement')->findBy(array('departmentName' => $entity->getDepartementEtudiant()));
//            $responsableDepartement = $departement[0]->getDepartmentLeader();
//            $entity->setResponsableDepartement($responsableDepartement);
//            $em->persist($entity);
//            $em->flush();
//            
//            return $this->redirect($this->generateUrl('pifeclassique_showrequest', array('id' => $entity->getId())));
//        }
//
//        return $this->render('PCFicheBundle:Commun:request.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }
//
//    /**
//     * Creates a new PIFEClassique entity.
//     *
//     */
//    public function requestAction(Request $request,$id)
//    {
//        $entity = new PIFEClassique();
//        $form = $this->createRequestForm($entity,$id);
//        return $this->render('PCFicheBundle:Commun:request.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }
//
//    /**
//     * Creates a form to create a PIFEClassique entity.
//     *
//     * @param PIFEClassique $entity The entity
//     *
//     * @return \Symfony\Component\Form\Form The form
//     */
//    private function createRequestForm(PIFEClassique $entity,$id)
//    {
//        $form = $this->createForm(new DemandePIFEClassiqueType(), $entity, array(
//            'action' => $this->generateUrl('pifeclassique_createrequest',array('id'=>$id)),
//            'method' => 'POST',
//        ));
//
//        $form->add('submit', 'submit', array('label' => 'Valider'));
//
//        return $form;
//    }
//    
//    /**
//     * Displays a form to create a new PIFEClassique entity.
//     *
//     */
//    public function newAction($id)
//    {
//        $entity = new PIFEClassique();
//        $form   = $this->createCreateForm($entity,$id);
//
//        return $this->render('PCFicheBundle:Commun:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }
//    
//        /**
//     * Permettre la création d'une action
//     * @param Request $request la requête HTTP
//     * @param String $id 
//     */ 
//    public function createActionAction(Request $request, $id){
//        // création du  message et du formulaire d'envoi d'un message
//        $entity = new \PC\FicheBundle\Entity\Action();
//        $form = $this->createActionForm($entity,$id);
//        $form->handleRequest($request);
//        
//        if ($form->isValid()) {
//            // on recupere la fiche concerné par le message
//            $em = $this->getDoctrine()->getManager();
//            $entityOwner = $em->getRepository('PCFicheBundle:Commun')->find($id);
//            
//            // on paramètre le message en rajoutant sa fiche et son auteur
//            $entity->setPIFEClassique($entityOwner);
//            $entity->setDateDeCreation(new DateTime);
//            $user = $this->container->get('security.context')->getToken()->getUser();
//            $entity->setAuteur($user->getFullname());
//            
//            //on crée une alerte nouveau message
//            $alerte = new Alerte();
//            $this->newActionNotification($alerte,$entityOwner);
//            $em->persist($entity);
//            $em->flush();
//            $em->persist($alerte);
//            $em->flush();
//            return $this->redirect($this->getRequest()->headers->get('referer'));
//        }
//
//        return $this->render('PCFicheBundle:FicheMessage:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }
//    
//    /**
//     * Création du formulaire d'envoi de message
//     * @param string $id
//     */ 
//    public function createActionForm( $entity,$id){
//        $form = $this->createForm(new ActionType(), $entity, array(
//        'action' => $this->generateUrl('pifeclassique_action',array("id" => $id)),
//        'method' => 'POST',
//        ));
//        $form->add('submit', 'submit', array('label' => 'Créer'));
//        return $form;
//    }
//    
//    /**
//     * Créer une alerte 'nouvelle action'
//     */
//    public function newActionNotification($alerte,$entity)
//    {
//        $alerte->setIntitule('Nouvelle action sur '.$entity->getId());
//        $alerte->setObjet('Une nouvelle action');
//        $alerte->setType('action');
//        $alerte->setPIFEClassique($entity);
//        $alerte->setRoute('autre_show');
//        $alerte->setDateAlerte(new DateTime());
//        $alerte->setOwnerId($entity->getId());
//    }
//
//    /**
//     * Finds and displays a PIFEClassique entity.
//     *
//     */
//    public function showAction($id)
//    {
//        $em = $this->getDoctrine()->getManager();
//        
//        $role = $this->getIdentity();
//        $entity = $em->getRepository('PCFicheBundle:Commun')->find($id);
//        if (!$entity) {
//            throw $this->createNotFoundException('Impossible de trouver l\'entité PIFEClassique.');
//        }
//        
//        $alertes = $em->getRepository('PCFicheBundle:Alerte')->findBy(array('pifeClassique' => $id));
//        $avenants = $em->getRepository('PCFicheBundle:Avenant')->findBy(array('pifeClassique' => $id));
//        $fichiers = $em->getRepository('PCFicheBundle:Fichier')->findBy(array('pifeClassique' => $id));
//        $messages = $em->getRepository('PCFicheBundle:FicheMessage')->findBy(array('pifeClassique' => $id));
//        $actions = $em->getRepository('PCFicheBundle:Action')->findBy(array('pifeClassique' => $id));
//        
//        // on récupère le nombre de nouveau avenants et on le réinitialise
//        $avenantsCount = $entity->getNombreNouveauxAvenants();
//        $entity->setNombreNouveauxAvenants(0);
//        $em->flush();
//        
//        $deleteForm = $this->createDeleteForm($id);      
//        $alerte = new Alerte();
//        $alertForm = $this->addAlertForm($alerte,$id);
//        $avenant = new Avenant();
//        $avenantForm = $this->addAvenantForm($avenant,$id);
//        $fichier = new Fichier();
//        $fichierForm = $this->addFichierForm($fichier,$id);
//        $action = new \PC\FicheBundle\Entity\Action();
//        $actionForm = $this->createActionForm($action,$id);        
//        $message = new FicheMessage();
//        $messageForm = $this->sendFicheMessageForm($message,$id);
//
//
//        return $this->render('PCFicheBundle:Commun:show.html.twig', array(
//            'role' => $role,
//            'entity'      => $entity,
//            'delete_form' => $deleteForm->createView(),
//            'alertes' => $alertes,
//            'avenants' => $avenants,
//            'fichiers' => $fichiers,
//            'alert_form' => $alertForm->createView(),
//            'avenant_form' => $avenantForm->createView(),
//            'fichier_form' => $fichierForm->createView(),
//            "avenantsCount" => $avenantsCount,
//            'messages' => $messages,
//            'messageForm' => $messageForm->createView(),
//            'actions' => $actions,
//            'actionForm' => $actionForm->createView()
//        ));
//    }
//    
//        /**
//     * Finds and displays a PIFEClassique entity.
//     *
//     */
//    public function showrequestAction($id)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('PCFicheBundle:Commun')->find($id);
//        $avenants = $em->getRepository('PCFicheBundle:Avenant')->findBy(array('pifeClassique' => $id));
//        $fichiers = $em->getRepository('PCFicheBundle:Fichier')->findBy(array('pifeClassique' => $id));
//        $messages = $em->getRepository('PCFicheBundle:FicheMessage')->findBy(array('pifeClassique' => $id));
//        $actions = $em->getRepository('PCFicheBundle:Action')->findBy(array('pifeClassique' => $id));
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find PIFEClassique entity.');
//        }
//        
//        $avenant = new Avenant();
//        $avenantForm = $this->addAvenantToRequestForm($avenant,$id);
//        $fichier = new Fichier();
//        $fichierForm = $this->addFichierToRequestForm($fichier,$id);
//        $message = new FicheMessage();
//        $messageForm = $this->sendFicheMessageForm($message,$id);
//        $action = new \PC\FicheBundle\Entity\Action();
//        $actionForm = $this->createActionForm($action,$id);   
//
//        return $this->render('PCFicheBundle:Commun:showrequest.html.twig', array(
//            'entity'      => $entity,
//            'avenants' => $avenants,
//            'fichiers' => $fichiers,
//            'avenant_form' => $avenantForm->createView(),
//            'fichier_form' => $fichierForm->createView(),
//            'messages' => $messages,
//            'messageForm' => $messageForm->createView(),
//            'actions' => $actions,
//            'actionForm' => $actionForm->createView()
//        ));
//    }
//
//    /**
//     * Displays a form to edit an existing PIFEClassique entity.
//     *
//     */
//    public function editAction($id)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('PCFicheBundle:Commun')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find PIFEClassique entity.');
//        }
//
//        $editForm = $this->createEditForm($entity);
//        $deleteForm = $this->createDeleteForm($id);
//
//        return $this->render('PCFicheBundle:Commun:edit.html.twig', array(
//            'entity'      => $entity,
//            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
//        ));
//    }
//
//    /**
//    * Creates a form to edit a PIFEClassique entity.
//    *
//    * @param PIFEClassique $entity The entity
//    *
//    * @return \Symfony\Component\Form\Form The form
//    */
//    private function createEditForm(PIFEClassique $entity)
//    {
//        $form = $this->createForm(new PIFEClassiqueType(), $entity, array(
//            'action' => $this->generateUrl('pifeclassique_update', array('id' => $entity->getId())),
//            'method' => 'PUT',
//        ));
//
//        $form->add('submit', 'submit', array('label' => 'Mettre à jour'));
//
//        return $form;
//    }
//    /**
//     * Edits an existing PIFEClassique entity.
//     *
//     */
//    public function updateAction(Request $request, $id)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('PCFicheBundle:Commun')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find PIFEClassique entity.');
//        }
//
//        $deleteForm = $this->createDeleteForm($id);
//        $editForm = $this->createEditForm($entity);
//        $editForm->handleRequest($request);
//
//        if ($editForm->isValid()) {
//            $em->flush();
//
//            return $this->redirect($this->generateUrl('pifeclassique_edit', array('id' => $id)));
//        }
//
//        return $this->render('PCFicheBundle:Commun:edit.html.twig', array(
//            'entity'      => $entity,
//            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
//        ));
//    }
//    /**
//     * Deletes a PIFEClassique entity.
//     *
//     */
//    public function deleteAction(Request $request, $id)
//    {
//        $form = $this->createDeleteForm($id);
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $entity = $em->getRepository('PCFicheBundle:Commun')->find($id);
//
//            if (!$entity) {
//                throw $this->createNotFoundException('Unable to find PIFEClassique entity.');
//            }
//
//            $em->remove($entity);
//            $em->flush();
//        }
//
//        return $this->redirect($this->generateUrl('pifeclassique'));
//    }
//
//    /**
//     * Creates a form to delete a PIFEClassique entity by id.
//     *
//     * @param mixed $id The entity id
//     *
//     * @return \Symfony\Component\Form\Form The form
//     */
//    private function createDeleteForm($id)
//    {
//        return $this->createFormBuilder()
//            ->setAction($this->generateUrl('pifeclassique_delete', array('id' => $id)))
//            ->setMethod('DELETE')
//            ->add('submit', 'submit', array('label' => 'Supprimer'))
//            ->getForm()
//        ;
//    }
//    
//    public function editConventionAction(Request $request,$id){
//        $em = $this->getDoctrine()->getManager();
//        $entity = $em->getRepository('PCFicheBundle:Commun')->find($id);
//        $form = $this->createEditConventionForm($entity,$id);
//        
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $entity = $em->getRepository('PCFicheBundle:Commun')->find($id);
//
//            if (!$entity) {
//                throw $this->createNotFoundException('Unable to find PIFEClassique entity.');
//            }
//
//            $em->remove($entity);
//            $em->flush();
//        }
//        
//        return $this->render('PCFicheBundle:Commun:editconvention.html.twig', array(
//            'entity'      => $entity,
//            'form'   => $form->createView(),
//        ));
//        
//    }
//    
//    private function createEditConventionForm(PIFEClassique $entity,$id){
//        $form = $this->createForm(new EditConventionType(), null, array(
//        'action' => $this->generateUrl('pifeclassique_editconvention',array("id" => $id)),
//        'method' => 'POST',
//        ));
//        $form->add('submit', 'submit', array('label' => 'Modifier'));
//        return $form;
//    }
    
}