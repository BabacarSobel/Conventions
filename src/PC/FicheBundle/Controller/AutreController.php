<?php

namespace PC\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use PC\FicheBundle\Entity\Autre;
use PC\FicheBundle\Form\AutreType;
use PC\FicheBundle\Form\DemandeAutreType;
use PC\FicheBundle\Entity\Alerte;
use PC\FicheBundle\Form\AlerteType;
use PC\FicheBundle\Entity\Avenant;
use PC\FicheBundle\Form\AvenantType;
use PC\FicheBundle\Entity\Fichier;
use PC\FicheBundle\Form\FichierType;
use DateTime;
use PC\FicheBundle\Form\FicheMessageType;
use PC\FicheBundle\Entity\FicheMessage;
use PC\FicheBundle\Form\ActionType;

/**
 * Autre controller.
 *
 */
class AutreController extends DefaultController
{

    /**
     * Liste des entités
     *
     */
    public function indexAction()
    {
        // on récupère le manager
        $em = $this->getDoctrine()->getManager();
        
        //on utilise la fonction findall du repository d'Autre
        $entities = $em->getRepository('PCFicheBundle:Autre')->findAll();
        return $this->render('PCFicheBundle:Autre:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
     /**
     * Création d'une convention en pdf
     * @param string $id
     */ 
    public function pdfAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PCFicheBundle:Autre')->find($id);
        $sousType  = $entity->getSousType();
        $template = $em->getRepository('PCFicheBundle:Template')->findBy(array('type'=> $sousType->getId()));
        // on cree le contenu
        $twig = clone $this->get('twig');
        $twig->setLoader(new \Twig_Loader_String());
        $content = $twig->render(
          $template[0]->getTemplate(),
          array('entity'=>$entity)
        );
        $snappy = new Pdf($this->get('kernel')->getRootDir()."/../wkhtmltox/bin/wkhtmltopdf");
        $name =  'pc-'.$id.Date("YmdHis");  
        $snappy->generateFromHtml($content, $this->get('kernel')->getRootDir().'/../files/'.$name.'.pdf');
        return $this->render('PCFicheBundle:Fiche:pdf.html.twig'
                    ,array('pdf' => $snappy,
                        'filename' => $name.'.pdf')
                    );
    }

     /**
     * Permettre l'envoi de message
     * @param string $id
     * @param Request $request la requête HTTP
     */ 
    public function sendFicheMessageAction(Request $request, $id){
        // création du  message et du formulaire d'envoi d'un message
        $entity = new FicheMessage();
        $form = $this->sendFicheMessageForm($entity,$id);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            // on recupere la fiche concerné par le message
            $em = $this->getDoctrine()->getManager();
            $entityOwner = $em->getRepository('PCFicheBundle:Autre')->find($id);
            
            // on paramètre le message en rajoutant sa fiche et son auteur
            $entity->setAutre($entityOwner);
            $entity->setDate(new DateTime);
            $user = $this->container->get('security.context')->getToken()->getUser();
            $entity->setAuteur($user->getFullname());
            
            //on crée une alerte nouveau message
            $alerte = new Alerte();
            $this->newMessage($alerte,$entityOwner);
            $em->persist($entity);
            $em->flush();
            $em->persist($alerte);
            $em->flush();
            return $this->redirect($this->getRequest()->headers->get('referer'));
        }

        return $this->render('PCFicheBundle:FicheMessage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    /**
     * Création du formulaire d'envoi de message
     * @param string $id
     * @param FicheMessage $entity l'entité message
     */ 
    public function sendFicheMessageForm(FicheMessage $entity,$id){
        $form = $this->createForm(new FicheMessageType(), $entity, array(
        'action' => $this->generateUrl('autre_sendfichemessage',array("id" => $id)),
        'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Créer'));
        return $form;
    }
    
    /**
     * Permettre la création d'une action
     * @param Request $request la requête HTTP
     * @param String $id 
     */ 
    public function createActionAction(Request $request, $id){
        // création du  message et du formulaire d'envoi d'un message
        $entity = new \PC\FicheBundle\Entity\Action();
        $form = $this->createActionForm($entity,$id);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            // on recupere la fiche concerné par le message
            $em = $this->getDoctrine()->getManager();
            $entityOwner = $em->getRepository('PCFicheBundle:Autre')->find($id);
            
            // on paramètre le message en rajoutant sa fiche et son auteur
            $entity->setAutre($entityOwner);
            $entity->setDateDeCreation(new DateTime);
            $user = $this->container->get('security.context')->getToken()->getUser();
            $entity->setAuteur($user->getFullname());
            
            //on crée une alerte nouveau message
            $alerte = new Alerte();
            $this->newActionNotification($alerte,$entityOwner);
            $em->persist($entity);
            $em->flush();
            $em->persist($alerte);
            $em->flush();
            return $this->redirect($this->getRequest()->headers->get('referer'));
        }

        return $this->render('PCFicheBundle:FicheMessage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    /**
     * Création du formulaire d'envoi de message
     * @param string $id
     */ 
    public function createActionForm( $entity,$id){
        $form = $this->createForm(new ActionType(), $entity, array(
        'action' => $this->generateUrl('autre_action',array("id" => $id)),
        'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Créer'));
        return $form;
    }
    
    /**
     * Création du formulaire d'ajout de fichier
     * @param Fichier $entity le fichier
     * @param string $id l'id de l'entité Autre
     */
    public function addFichierForm(Fichier $entity,$id)
    {
        $form = $this->createForm(new FichierType(), $entity, array(
            'action' => $this->generateUrl('autre_new_fichier',array("id" => $id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }
    
    /**
     * Ajouter un fichier
     *
     */
    public function addFichierAction(Request $request, $id)
    {
        $entity = new Fichier();
        $form = $this->addFichierForm($entity,$id);
        $form->handleRequest($request);      
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entityOwner = $em->getRepository('PCFicheBundle:Autre')->find($id);
            
            // on associe le fichier à la fiche
            $entity->setAutre($entityOwner);
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('autre_show', array('id' => $entityOwner->getId())));
        }
        return $this->render('PCFicheBundle:Fichier:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    /**
     * Création du formulaire d'ajout d'un avenant
     * @param Avenant $entity
     * @param string $id
     *
     */
    public function addAvenantForm(Avenant $entity,$id)
    {
        $form = $this->createForm(new AvenantType(), $entity, array(
            'action' => $this->generateUrl('autre_new_avenant',array("id" => $id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }
    
    /**
     * Création d'un avenant
     * @param Request $request la requête HTTP
     * @param string $id
     */
    public function addAvenantAction(Request $request, $id)
    {
        $entity = new Avenant();
        $form = $this->addAvenantForm($entity,$id);
        $form->handleRequest($request);
        

        if ($form->isValid()) {
            $emCP = $this->getDoctrine()->getManager();
            $entityOwner = $emCP->getRepository('PCFicheBundle:Autre')->find($id);
            $entityOwner->incrementerNombreNouveauxAvenants();
            $entity->setAutre($entityOwner);
            $entity->setNumeroFiche($id);
            $entity->setDateContratInitial($entityOwner->getDateSignaturePolytech());
            $entity->setDateEffetCI($entityOwner->getDateEffet());
            $entity->setDateFinCI($entityOwner->getDateEcheance());
            $entity->setNumeroFiche($id);
            $ajout = " + ".$entity->getNbMoisProrogation()." month";
            
            if ($entity->getObjet() === 'proroger'){
                $date = $entityOwner->getDateEcheance();
                if ($date != null){
                    $date=  $date->format('Y-m-d');
                    $expirationDate = date("Y-m-d", strtotime($date.$ajout));
                    $expirationDate = new DateTime($expirationDate);
                    $entity->setDateExpiration($expirationDate);
                }else{
                    $request->getSession()
                    ->getFlashBag()
                    ->add('error', "Pas de date d'écheance trouvé. Votre avenant n'a pas été enregistré");
                    return $this->redirect($this->generateUrl('autre_show', array('id' => $entityOwner->getId())));
                }
            }
            $em = $this->getDoctrine()->getManager();
            $alerte = new Alerte();
            $this->avenantCreationNotification($alerte,$entity);
            $em->persist($entity);
            $em->flush();
            $em->persist($alerte);
            $em->flush();
            
            return $this->redirect($this->generateUrl('autre_show', array('id' => $entityOwner->getId())));
        }

        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    

    
    /**
     * Création du formulaire d'ajout de fichier via une demande
     * @param Fichier $entity le fichier
     * @param string $id l'id de l'entité Autre
     */
    public function addFichierToRequestForm(Fichier $entity,$id)
    {
        $form = $this->createForm(new FichierType(), $entity, array(
            'action' => $this->generateUrl('autre_new_fichierrequest',array("id" => $id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }
    
    /**
     * Création d'un fichier via une demande
     * @param Request $request
     * @param string $id
     */
    public function addFichierToRequestAction(Request $request, $id)
    {
        $entity = new Fichier();
        $form = $this->addFichierToRequestForm($entity,$id);
        $form->handleRequest($request);
        

        if ($form->isValid()) {
            $emCP = $this->getDoctrine()->getManager();
            $entityOwner = $emCP->getRepository('PCFicheBundle:Autre')->find($id);
            $entity->setAutre($entityOwner);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('autre_showrequest', array('id' => $entityOwner->getId())));
        }

        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    /**
     * Création du formulaire d'ajout d'un avenant via une demande
     * @param Avenant $entity le fichier
     * @param string $id l'id de l'entité Autre
     */
    public function addAvenantToRequestForm(Avenant $entity,$id)
    {
        $form = $this->createForm(new AvenantType(), $entity, array(
            'action' => $this->generateUrl('autre_new_avenantrequest',array("id" => $id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }
    
    /**
     * Création d'un avenant via une demande
     * @param Request $request
     * @param string $id
     */
    public function addAvenantToRequestAction(Request $request, $id)
    {
        $entity = new Avenant();
        $form = $this->addAvenantToRequestForm($entity,$id);
        $form->handleRequest($request);
        

        if ($form->isValid()) {
            $emCP = $this->getDoctrine()->getManager();
            $entityOwner = $emCP->getRepository('PCFicheBundle:Autre')->find($id);
            $entityOwner->incrementerNombreNouveauxAvenants();
            $entity->setAutre($entityOwner);
            $entity->setNumeroFiche($id);
            $entity->setDateContratInitial($entityOwner->getDateSignaturePolytech());
            $entity->setDateEffetCI($entityOwner->getDateEffet());
            $entity->setDateFinCI($entityOwner->getDateEcheance());
            $ajout = " + ".$entity->getNbMoisProrogation()." month";
            $date = $entityOwner->getDateEcheance();
            if ($entity->getObjet() === 'proroger'){
                if ($date != null){
                    $date=  $date->format('Y-m-d');
                    $expirationDate = date("Y-m-d", strtotime($date.$ajout));
                    $expirationDate = new DateTime($expirationDate);
                    $entity->setDateExpiration($expirationDate);
                }else{
                    $request->getSession()
                    ->getFlashBag()
                    ->add('error', "Pas de date d'écheance trouvé. Votre avenant n'a pas été enregistré");
                    return $this->redirect($this->generateUrl('autre_showrequest', array('id' => $entityOwner->getId())));
                }
            }
            
            $em = $this->getDoctrine()->getManager();
            $alerte = new Alerte();
            $this->avenantCreationNotification($alerte,$entity);
            $em->persist($entity);
            $em->flush();
            $em->persist($alerte);
            $em->flush();
            

            return $this->redirect($this->generateUrl('autre_showrequest', array('id' => $entityOwner->getId())));
        }

        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    

    /**
     * Création du formulaire d'ajout d'une alerte
     * @param Alert $entity le fichier
     * @param string $id l'id de l'entité Autre
     */
    public function addAlertForm($entity,$id)
    {
        $form = $this->createForm(new AlerteType(), $entity, array(
            'action' => $this->generateUrl('autre_new_alert',array("id" => $id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
    
    /**
     * Création d'une alerte
     * @param Request $request
     * @param string $id
     */
    public function addAlertAction(Request $request, $id)
    {
        
        $entity = new Alerte();
        $form = $this->addAlertForm($entity,$id);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $emCP = $this->getDoctrine()->getManager();
            $entityOwner = $emCP->getRepository('PCFicheBundle:Autre')->find($id);
            $entity->setAutre($entityOwner);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('autre_show', array('id' => $entityOwner->getId())));
        }

        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    /**
     * Créer une alerte 'nouvelle demande'
     */
    public function demandeCreation($alerte,$entity)
    {
        $alerte->setIntitule('Nouvelle demande');
        $alerte->setObjet('Une nouvelle demande a été faite');
        $alerte->setAutre($entity);
        $alerte->setRoute('autre_show');
        $alerte->setDateAlerte(new DateTime());
        $alerte->setOwnerId($entity->getId());
    }
    
    /**
     * Créer une alerte 'nouveau message'
     */
    public function newMessage($alerte,$entity)
    {
        $alerte->setIntitule('Nouveau message sur '.$entity->getId());
        $alerte->setObjet('Un nouveau message');
        $alerte->setType('message');
        $alerte->setAutre($entity);
        $alerte->setRoute('autre_show');
        $alerte->setDateAlerte(new DateTime());
        $alerte->setOwnerId($entity->getId());
    }
    
    /**
     * Créer une alerte 'nouvelle action'
     */
    public function newActionNotification($alerte,$entity)
    {
        $alerte->setIntitule('Nouvelle action sur '.$entity->getId());
        $alerte->setObjet('Une nouvelle action');
        $alerte->setType('action');
        $alerte->setAutre($entity);
        $alerte->setRoute('autre_show');
        $alerte->setDateAlerte(new DateTime());
        $alerte->setOwnerId($entity->getId());
    }
    
    /**
     * Créer une alerte 'nouvel avenant'
     */
    public function avenantCreationNotification($alerte,$entity)
    {
        $alerte->setIntitule('Nouvel avenant');
        $alerte->setObjet('Un nouvel avenant a été créé');
        $alerte->setAvenant($entity);
        $alerte->setRoute('autre_show');
        $alerte->setDateAlerte(new DateTime());
        $alerte->setOwnerId($entity->getId());
    }
    
    
    public function createRequestAction(Request $request,$id)
    {
        $entity = new Autre();
        $form = $this->createRequestForm($entity,$id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setDemandeur( $this->container->get('security.context')->getToken()->getUser());
            $entitySousType = $em->getRepository('PCFicheBundle:SousType')->find($id);
            $type = $entitySousType->getType();
            $entity->setSousType($entitySousType);
            $entity->setType($type);
            $entity->setDateCreation(new DateTime());
            $em->persist($entity);
            $metadata = $em->getClassMetaData(get_class($entity));
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
 
            $em->flush();
            
            
            $request->getSession()->getFlashBag()->add('notice', 'Demande bien enregistrée.');
            return $this->redirect($this->generateUrl('autre_showrequest', array('id' => $entity->getId())));
        }

        return $this->render('PCFicheBundle:Autre:request.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    public function requestAction($id)
    {
        $entity = new Autre();
        $form = $this->createRequestForm($entity,$id);
        return $this->render('PCFicheBundle:Autre:request.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ChartePartenariat entity.
     * @param ChartePartenariat $entity The entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createRequestForm(Autre $entity, $id)
    {
        $form = $this->createForm(new DemandeAutreType(), $entity, array(
            'action' => $this->generateUrl('autre_createrequest',array('id'=>$id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }
    
    /**
     * Finds and displays a PIFEClassique entity.
     *
     */
    public function showrequestAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:Autre')->find($id);
        $avenants = $em->getRepository('PCFicheBundle:Avenant')->findBy(array('autre' => $id));
        $fichiers = $em->getRepository('PCFicheBundle:Fichier')->findBy(array('autre' => $id));
        $actions = $em->getRepository('PCFicheBundle:Action')->findBy(array('autre' => $id));
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autre entity.');
        }
        
        $avenant = new Avenant();
        $avenantForm = $this->addAvenantToRequestForm($avenant,$id);
        $fichier = new Fichier();
        $fichierForm = $this->addFichierToRequestForm($fichier,$id);
        
        $messages = $em->getRepository('PCFicheBundle:FicheMessage')->findBy(array('autre' => $id));
        $message = new FicheMessage();
        $messageForm = $this->sendFicheMessageForm($message,$id);
        $action = new \PC\FicheBundle\Entity\Action();
        $actionForm = $this->createActionForm($action,$id);

        return $this->render('PCFicheBundle:Autre:showrequest.html.twig', array(
            'entity'      => $entity,
            'avenants' => $avenants,
            'fichiers' => $fichiers,
            'avenant_form' => $avenantForm->createView(),
            'fichier_form' => $fichierForm->createView(),
            'messages' => $messages,
            'messageForm' => $messageForm->createView(),
            'actions' => $actions,
            'actionForm' => $actionForm->createView()
        ));
    }
    
    /**
     * Création d'une entité Autre
     *
     */
    public function createAction(Request $request, $id)
    {
        $entity = new Autre();
        $form = $this->createCreateForm($entity,$id);
        $form->handleRequest($request);

        if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $entity->setDemandeur( $this->container->get('security.context')->getToken()->getUser());
            $entitySousType = $em->getRepository('PCFicheBundle:SousType')->findById($id);
            $type = $entitySousType[0]->getType();
            $entity->setSousType($entitySousType[0]);
            $entity->setType($type);
            $entity->setDateCreation(new DateTime());
            echo "lid ".$entity->getId();
            $em->persist($entity);
            $em->flush();
            echo "lid ".$entity->getId();
                return $this->redirect($this->generateUrl('autre_show', array('id' => $entity->getId())));
        }

        return $this->render('PCFicheBundle:Autre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Création d'un formulaire de création d'une entité Autre
     *
     * @param Autre $entity
     *
     * @return \Symfony\Component\Form\Form
     */
    private function createCreateForm(Autre $entity,$id)
    {
        $form = $this->createForm(new AutreType(), $entity, array(
            'action' => $this->generateUrl('autre_create',array('id'=>$id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }

    /**
     * Montre le formulaire de création
     *
     */
    public function newAction($id)
    {   
        $entity = new Autre();
        $form   = $this->createCreateForm($entity,$id);
        return $this->render('PCFicheBundle:Autre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
   

    /**
     * Montrer un entité
     * @param string $id
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:Autre')->find($id);
        $alertes = $em->getRepository('PCFicheBundle:Alerte')->findBy(array('autre' => $id));
        $avenants = $em->getRepository('PCFicheBundle:Avenant')->findBy(array('autre' => $id));
        $fichiers = $em->getRepository('PCFicheBundle:Fichier')->findBy(array('autre' => $id));
        $messages = $em->getRepository('PCFicheBundle:FicheMessage')->findBy(array('autre' => $id));
        $actions = $em->getRepository('PCFicheBundle:Action')->findBy(array('autre' => $id));

        

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de trouver l\'entité demandée.');
        }
        
        $avenantsCount = $entity->getNombreNouveauxAvenants();
        $entity->setNombreNouveauxAvenants(0);
        $em->flush();
        
        // créer des formulaires pour les créations d'alerte, d'avenant, de fichier, de messages
        $alerte = new Alerte();
        $alertForm = $this->addAlertForm($alerte,$id);
        $avenant = new Avenant();
        $avenantForm = $this->addAvenantForm($avenant,$id);
        $fichier = new Fichier();
        $fichierForm = $this->addFichierForm($fichier,$id);  
        $message = new FicheMessage();
        $messageForm = $this->sendFicheMessageForm($message,$id);
        $action = new \PC\FicheBundle\Entity\Action();
        $actionForm = $this->createActionForm($action,$id);
        
        // formulaire de suppression de l'entité
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:Autre:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'alertes' => $alertes,
            'avenants' => $avenants,
            'alerte' => $alerte,
            'fichiers' => $fichiers,
            'alert_form' => $alertForm->createView(),
            'avenant_form' => $avenantForm->createView(),
            'fichier_form' => $fichierForm->createView(),
            "avenantsCount" => $avenantsCount,
            'messages' => $messages,
            'messageForm' => $messageForm->createView(),
            'actions' => $actions,
            'actionForm' => $actionForm->createView()
        ));
    }
    

    /**
     * Displays a form to edit an existing Autre entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:Autre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autre entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:Autre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Autre entity.
    *
    * @param Autre $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Autre $entity)
    {
        $form = $this->createForm(new AutreType(), $entity, array(
            'action' => $this->generateUrl('autre_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre à jour'));

        return $form;
    }
    /**
     * Edits an existing Autre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:Autre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('autre_edit', array('id' => $id)));
        }

        return $this->render('PCFicheBundle:Autre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Autre entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PCFicheBundle:Autre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Autre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fiche'));
    }

    /**
     * Creates a form to delete a Autre entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('autre_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
