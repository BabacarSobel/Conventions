<?php

namespace PC\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Knp\Snappy\Pdf;
use PC\FicheBundle\Entity\ChartePartenariat;
use PC\FicheBundle\Form\ChartePartenariatType;
use PC\FicheBundle\Form\DemandeChartePartenariatType;
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
 * ChartePartenariat controller.
 *
 */
class ChartePartenariatController extends DefaultController
{

    /**
     * Lists all ChartePartenariat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('PCFicheBundle:ChartePartenariat')->findAll();
        return $this->render('PCFicheBundle:ChartePartenariat:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    

    
    public function pdfAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:ChartePartenariat')->find($id);
        $snappy = new Pdf($this->get('kernel')->getRootDir()."/../wkhtmltox/bin/wkhtmltopdf");
        $name = 'chartepartenariat-'.$id.Date("YmdHis");
        $type = $em->getRepository('PCFicheBundle:SousType')->findBy(array('nom' => 'CHARTE CLUB DES PARTENAIRES'));
        $template = $em->getRepository('PCFicheBundle:Template')->findBy(array('type'=> $type[0]->getId()));
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
        $entity = $em->getRepository('PCFicheBundle:ChartePartenariat')->find($id);
        $content = $this->renderView('PCFicheBundle:Template:cp.html.twig',array('entity'=>$entity)); 
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
    
    public function sendFicheMessageAction(Request $request, $id){
        $entity = new FicheMessage();
        $form = $this->sendFicheMessageForm($entity,$id);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entityOwner = $em->getRepository('PCFicheBundle:ChartePartenariat')->find($id);
            $entity->setChartePartenariat($entityOwner);
            $entity->setDate(new DateTime);
            $user = $this->container->get('security.context')->getToken()->getUser();
            $entity->setAuteur($user->getFullname());
            $em = $this->getDoctrine()->getManager();
            
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
     * Créer une alerte 'nouveau message'
     */
    public function newMessage($alerte,$entity)
    {
        $alerte->setIntitule('Nouveau message sur '.$entity->getId());
        $alerte->setObjet('Un nouveau message');
        $alerte->setType('message');
        $alerte->setChartePartenariat($entity);
        $alerte->setRoute('chartepartenariat_show');
        $alerte->setDateAlerte(new DateTime());
        $alerte->setOwnerId($entity->getId());
    }
    
    /**
     * Création formulaire envoi de message
     * @param FicheMessage $entity
     * @param type $id
     * @return form
     */
    public function sendFicheMessageForm(FicheMessage $entity,$id){
        $form = $this->createForm(new FicheMessageType(), $entity, array(
        'action' => $this->generateUrl('chartepartenariat_sendfichemessage',array("id" => $id)),
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
            $entityOwner = $em->getRepository('PCFicheBundle:ChartePartenariat')->find($id);
            
            // on paramètre le message en rajoutant sa fiche et son auteur
            $entity->setChartePartenariat($entityOwner);
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
        'action' => $this->generateUrl('chartepartenariat_action',array("id" => $id)),
        'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Créer'));
        return $form;
    }
    
    /**
     * Créer une alerte 'nouvelle action'
     */
    public function newActionNotification($alerte,$entity)
    {
        $alerte->setIntitule('Nouvelle action sur '.$entity->getId());
        $alerte->setObjet('Une nouvelle action');
        $alerte->setType('action');
        $alerte->setChartePartenariat($entity);
        $alerte->setRoute('autre_show');
        $alerte->setDateAlerte(new DateTime());
        $alerte->setOwnerId($entity->getId());
    }
    
    /**
     * Creates a Fichier form
     *
     */
    public function addFichierForm(Fichier $entity,$id)
    {
        $form = $this->createForm(new FichierType(), $entity, array(
            'action' => $this->generateUrl('chartepartenariat_new_fichier',array("id" => $id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }
    
        /**
     * Creates a new Fichier entity.
     *
     */
    public function addFichierAction(Request $request, $id)
    {
        $entity = new Fichier();
        $form = $this->addFichierForm($entity,$id);
        $form->handleRequest($request);
        

        if ($form->isValid()) {
            $emCP = $this->getDoctrine()->getManager();
            $entityOwner = $emCP->getRepository('PCFicheBundle:ChartePartenariat')->find($id);
            $entity->setChartePartenariat($entityOwner);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('chartepartenariat_show', array('id' => $entityOwner->getId())));
        }

        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
                /**
     * Creates a Fichier form
     *
     */
    public function addFichierToRequestForm(Fichier $entity,$id)
    {
        $form = $this->createForm(new FichierType(), $entity, array(
            'action' => $this->generateUrl('chartepartenariat_new_fichierrequest',array("id" => $id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }
    
        /**
     * Creates a new Fichier entity.
     *
     */
    public function addFichierToRequestAction(Request $request, $id)
    {
        $entity = new Fichier();
        $form = $this->addFichierForm($entity,$id);
        $form->handleRequest($request);
        

        if ($form->isValid()) {
            $emCP = $this->getDoctrine()->getManager();
            $entityOwner = $emCP->getRepository('PCFicheBundle:ChartePartenariat')->find($id);
            $entity->setChartePartenariat($entityOwner);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('chartepartenariat_showrequest', array('id' => $entityOwner->getId())));
        }

        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
        /**
     * Creates a Avenant form
     *
     */
    public function addAvenantForm(Avenant $entity,$id)
    {
        $form = $this->createForm(new AvenantType(), $entity, array(
            'action' => $this->generateUrl('chartepartenariat_new_avenant',array("id" => $id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }
    
            /**
     * Creates a Avenant form
     *
     */
    public function showAvenantForm(Avenant $entity,$id)
    {
        $form = $this->createForm(new AvenantType(), $entity, array(
            'action' => $this->generateUrl('chartepartenariat_new_avenant',array("id" => $id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }
    
    /**
     * Creates a new Avenant entity.
     *
     */
    public function addAvenantAction(Request $request, $id)
    {
        $entity = new Avenant();
        $form = $this->addAvenantForm($entity,$id);
        $form->handleRequest($request);
        

        if ($form->isValid()) {
            $emCP = $this->getDoctrine()->getManager();
            $entityOwner = $emCP->getRepository('PCFicheBundle:ChartePartenariat')->find($id);
            $entityOwner->incrementerNombreNouveauxAvenants();
            $entity->setChartePartenariat($entityOwner);
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
                    return $this->redirect($this->generateUrl('chartepartenariat_show', array('id' => $entityOwner->getId())));
                }
            }

            $em = $this->getDoctrine()->getManager();
            $alerte = new Alerte();
            $this->avenantCreationNotification($alerte,$entity);
            $em->persist($entity);
            $em->flush();
            $em->persist($alerte);
            $em->flush();
            
            return $this->redirect($this->generateUrl('chartepartenariat_show', array('id' => $entityOwner->getId())));
        }

        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    
            /**
     * Creates a Avenant form
     *
     */
    public function addAvenantToRequestForm(Avenant $entity,$id)
    {
        $form = $this->createForm(new AvenantType(), $entity, array(
            'action' => $this->generateUrl('chartepartenariat_new_avenantrequest',array("id" => $id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }
    
        /**
     * Creates a new Avenant entity.
     *
     */
    public function addAvenantToRequestAction(Request $request, $id)
    {
        $entity = new Avenant();
        $form = $this->addAvenantForm($entity,$id);
        $form->handleRequest($request);
        

        if ($form->isValid()) {
            $emCP = $this->getDoctrine()->getManager();
            $entityOwner = $emCP->getRepository('PCFicheBundle:ChartePartenariat')->find($id);
            $entityOwner->incrementerNombreNouveauxAvenants();
            $entity->setChartePartenariat($entityOwner);
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
                    return $this->redirect($this->generateUrl('chartepartenariat_showrequest', array('id' => $entityOwner->getId())));
                }
            }
            
            $em = $this->getDoctrine()->getManager();
            $alerte = new Alerte();
            $this->avenantCreationNotification($alerte,$entity);
            $em->persist($entity);
            $em->flush();
            $em->persist($alerte);
            $em->flush();
            
            return $this->redirect($this->generateUrl('chartepartenariat_showrequest', array('id' => $entityOwner->getId())));
        }

        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    

    /**
     * Creates a Alert form
     *
     */
    public function addAlertForm($entity,$id)
    {
        $form = $this->createForm(new AlerteType(), $entity, array(
            'action' => $this->generateUrl('chartepartenariat_new_alert',array("id" => $id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
    /**
     * Creates a new Alerte entity.
     *
     */
    public function addAlertAction(Request $request, $id)
    {
        $entity = new Alerte();
        $form = $this->addAlertForm($entity,$id);
        $form->handleRequest($request);
        

        if ($form->isValid()) {
            $emME = $this->getDoctrine()->getManager();
            $entityME = $emME->getRepository('PCFicheBundle:ChartePartenariat')->find($id);
            $entity->setChartePartenariat($entityME);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('chartepartenariat_show', array('id' => $entityME->getId())));
        }

        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    /**
     * Creates a new ChartePartenariat entity.
     *
     */
    public function createAction(Request $request, $id)
    {
        $entity = new ChartePartenariat();
        $form = $this->createCreateForm($entity,$id);
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
            $em->flush();
            return $this->redirect($this->generateUrl('chartepartenariat_show', array('id' => $entity->getId())));
        }

        return $this->render('PCFicheBundle:ChartePartenariat:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ChartePartenariat entity.
     *
     * @param ChartePartenariat $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ChartePartenariat $entity,$id)
    {
        $form = $this->createForm(new ChartePartenariatType(), $entity, array(
            'action' => $this->generateUrl('chartepartenariat_create',array('id'=>$id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }
    
        /**
     * set the demande alert parameters
     *
     */
    public function demandeCreation($alerte,$entity)
    {
        $alerte->setIntitule('Nouvelle demande');
        $alerte->setObjet('Une nouvelle demande a été faite');
        $alerte->setChartePartenariat($entity);
        $alerte->setRoute('chartepartenariat_show');
        $alerte->setDateAlerte(new DateTime());
        $alerte->setOwnerId($entity->getId());
    }
    
    
    public function avenantCreationNotification($alerte,$entity)
    {
        $alerte->setIntitule('Nouvel avenant');
        $alerte->setObjet('Un nouvel avenant a été créé');
        $alerte->setAvenant($entity);
        $alerte->setRoute('autre_show');
        $alerte->setDateAlerte(new DateTime());
        $alerte->setOwnerId($entity->getId());
    }
    
            /**
     * Creates a new MADEvenementGratuit entity.
     *
     */
    public function createRequestAction(Request $request,$id)
    {
        $entity = new ChartePartenariat();
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
            $em->flush();
            
            return $this->redirect($this->generateUrl('chartepartenariat_showrequest', array('id' => $entity->getId())));
        }

        return $this->render('PCFicheBundle:ChartePartenariat:request.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    /**
     * Creates a new ChartePartenariat entity.
     *
     */
    public function requestAction(Request $request,$id)
    {
        $entity = new ChartePartenariat();
        $form = $this->createRequestForm($entity,$id);
        return $this->render('PCFicheBundle:ChartePartenariat:request.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ChartePartenariat entity.
     *
     * @param ChartePartenariat $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createRequestForm(ChartePartenariat $entity,$id)
    {
        $form = $this->createForm(new DemandeChartePartenariatType(), $entity, array(
            'action' => $this->generateUrl('chartepartenariat_createrequest',array('id'=>$id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new ChartePartenariat entity.
     *
     */
    public function newAction($id)
    {
        $entity = new ChartePartenariat();
        $form   = $this->createCreateForm($entity,$id);

        return $this->render('PCFicheBundle:ChartePartenariat:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    public function uploadAction($id)
    {
        $entity = new Fichier();
        return $this->render('PCFicheBundle:ChartePartenariat:show.html.twig', array(
            'entity' => $entity,
            'id'=> $id
        ));
    }


    /**
     * Finds and displays a ChartePartenariat entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:ChartePartenariat')->find($id);
        $alertes = $em->getRepository('PCFicheBundle:Alerte')->findBy(array('chartePartenariat' => $id));
        $avenants = $em->getRepository('PCFicheBundle:Avenant')->findBy(array('chartePartenariat' => $id));
        $fichiers = $em->getRepository('PCFicheBundle:Fichier')->findBy(array('chartePartenariat' => $id));
        $messages = $em->getRepository('PCFicheBundle:FicheMessage')->findBy(array('chartePartenariat' => $id));
        $actions = $em->getRepository('PCFicheBundle:Action')->findBy(array('chartePartenariat' => $id));
        

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChartePartenariat entity.');
        }
        $avenantsCount = $entity->getNombreNouveauxAvenants();
        $entity->setNombreNouveauxAvenants(0);
        $em->flush();
        
        $alerte = new Alerte();
        $alertForm = $this->addAlertForm($alerte,$id);
        $avenant = new Avenant();
        $avenantForm = $this->addAvenantForm($avenant,$id);
        $fichier = new Fichier();
        $fichierForm = $this->addFichierForm($fichier,$id);
        $action = new \PC\FicheBundle\Entity\Action();
        $actionForm = $this->createActionForm($action,$id);
        
        $message = new FicheMessage();
        $messageForm = $this->sendFicheMessageForm($message,$id);
        

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:ChartePartenariat:show.html.twig', array(
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
     * Finds and displays a PIFEClassique entity.
     *
     */
    public function showrequestAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:ChartePartenariat')->find($id);
        $avenants = $em->getRepository('PCFicheBundle:Avenant')->findBy(array('chartePartenariat' => $id));
        $fichiers = $em->getRepository('PCFicheBundle:Fichier')->findBy(array('chartePartenariat' => $id));
        $messages = $em->getRepository('PCFicheBundle:FicheMessage')->findBy(array('chartePartenariat' => $id));
        $actions = $em->getRepository('PCFicheBundle:Action')->findBy(array('chartePartenariat' => $id));
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChartePartenariat entity.');
        }
        
        $avenant = new Avenant();
        $avenantForm = $this->addAvenantToRequestForm($avenant,$id);
        $fichier = new Fichier();
        $fichierForm = $this->addFichierToRequestForm($fichier,$id);
        
        
        $message = new FicheMessage();
        $messageForm = $this->sendFicheMessageForm($message,$id);
        
        $action = new \PC\FicheBundle\Entity\Action();
        $actionForm = $this->createActionForm($action,$id);

        return $this->render('PCFicheBundle:ChartePartenariat:showrequest.html.twig', array(
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
     * Displays a form to edit an existing ChartePartenariat entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:ChartePartenariat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChartePartenariat entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:ChartePartenariat:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ChartePartenariat entity.
    *
    * @param ChartePartenariat $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ChartePartenariat $entity)
    {
        $form = $this->createForm(new ChartePartenariatType(), $entity, array(
            'action' => $this->generateUrl('chartepartenariat_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre à jour'));

        return $form;
    }
    /**
     * Edits an existing ChartePartenariat entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:ChartePartenariat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChartePartenariat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('chartepartenariat_edit', array('id' => $id)));
        }

        return $this->render('PCFicheBundle:ChartePartenariat:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ChartePartenariat entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PCFicheBundle:ChartePartenariat')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ChartePartenariat entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fiche'));
    }

    /**
     * Creates a form to delete a ChartePartenariat entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chartepartenariat_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}
