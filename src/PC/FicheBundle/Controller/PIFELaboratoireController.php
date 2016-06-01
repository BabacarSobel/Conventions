<?php

namespace PC\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Knp\Snappy\Pdf;
use PC\FicheBundle\Entity\PIFELaboratoire;
use PC\FicheBundle\Form\PIFELaboratoireType;
use PC\FicheBundle\Form\DemandePIFELaboratoireType;
use PC\FicheBundle\Entity\Avenant;
use PC\FicheBundle\Form\AvenantType;
use PC\FicheBundle\Entity\Alerte;
use PC\FicheBundle\Form\AlerteType;
use PC\FicheBundle\Entity\Fichier;
use PC\FicheBundle\Form\FichierType;
use DateTime;
use PC\FicheBundle\Form\FicheMessageType;
use PC\FicheBundle\Entity\FicheMessage;
use PC\FicheBundle\Form\ActionType;
/**
 * PIFELaboratoire controller.
 *
 */
class PIFELaboratoireController extends Controller
{

    /**
     * Lists all PIFELaboratoire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PCFicheBundle:PIFELaboratoire')->findAll();

        return $this->render('PCFicheBundle:PIFELaboratoire:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    
        public function pdfAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PCFicheBundle:PIFELaboratoire')->find($id);
        $snappy = new Pdf($this->get('kernel')->getRootDir()."/../wkhtmltox/bin/wkhtmltopdf");
        $name ='pl-'.$id.Date("YmdHis");    
        $snappy->generateFromHtml($this->renderView('PCFicheBundle:Template:pl.html.twig',array('entity'=>$entity)), $this->get('kernel')->getRootDir().'/../files/'.$name.'.pdf');
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
    
    public function sendFicheMessageAction(Request $request, $id){
        $entity = new FicheMessage();
        $form = $this->sendFicheMessageForm($entity,$id);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $emCP = $this->getDoctrine()->getManager();
            $entityCP = $emCP->getRepository('PCFicheBundle:PIFELaboratoire')->find($id);
            $entity->setPIFELaboratoire($entityCP);
            $entity->setDate(new DateTime);
            $user = $this->container->get('security.context')->getToken()->getUser();
            $entity->setAuteur($user->getFullname());
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->getRequest()->headers->get('referer'));
        }

        return $this->render('PCFicheBundle:FicheMessage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    public function sendFicheMessageForm(FicheMessage $entity,$id){
        $form = $this->createForm(new FicheMessageType(), $entity, array(
        'action' => $this->generateUrl('pifelaboratoire_sendfichemessage',array("id" => $id)),
        'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Créer'));
        return $form;
    }
    
                /**
     * Creates a Fichier form
     *
     */
    public function addFichierForm(Fichier $entity,$id)
    {
        $form = $this->createForm(new FichierType(), $entity, array(
            'action' => $this->generateUrl('pifelaboratoire_new_fichier',array("id" => $id)),
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
            $emPL = $this->getDoctrine()->getManager();
            $entityPL = $emPL->getRepository('PCFicheBundle:PIFELaboratoire')->find($id);
            $entity->setPIFELaboratoire($entityPL);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('pifelaboratoire_show', array('id' => $entityPL->getId())));
        }

        return $this->render('PCFicheBundle:Fichier:new.html.twig', array(
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
            'action' => $this->generateUrl('pifelaboratoire_new_avenant',array("id" => $id)),
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
            $emPL = $this->getDoctrine()->getManager();
            $entityPL = $emPL->getRepository('PCFicheBundle:PIFELaboratoire')->find($id);
            $entityPL->incrementerNombreNouveauxAvenants();
            $entity->setPIFELaboratoire($entityPL);
            $entity->setNumeroFiche($id);
            $entity->setDateContratInitial($entityPL->getDateSignaturePolytech());
            $entity->setDateEffetCI($entityPL->getDateEffet());
            $entity->setDateFinCI($entityPL->getDateEcheance());
            $ajout = " + ".$entity->getNbMoisProrogation()." month";
            if ($entity->getObjet() === 'proroger'){
                $date = $entityCP->getDateEcheance();
                if ($date != null){
                    $date=  $date->format('Y-m-d');
                    $expirationDate = date("Y-m-d", strtotime($date.$ajout));
                    $expirationDate = new DateTime($expirationDate);
                    $entity->setDateExpiration($expirationDate);
                }else{
                    $request->getSession()
                    ->getFlashBag()
                    ->add('error', "Pas de date d'écheance trouvé. Votre avenant n'a pas été enregistré");
                    return $this->redirect($this->generateUrl('pifelaboratoire_show', array('id' => $entityPL->getId())));
                }
            }
            $em = $this->getDoctrine()->getManager();
            $alerte = new Alerte();
            $this->avenantCreationNotification($alerte,$entity);
            $em->persist($entity);
            $em->flush();
            $em->persist($alerte);
            $em->flush();
            
            return $this->redirect($this->generateUrl('pifelaboratoire_show', array('id' => $entityPL->getId())));
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
            'action' => $this->generateUrl('pifelaboratoire_new_fichierrequest',array("id" => $id)),
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
        $form = $this->addFichierToRequestForm($entity,$id);
        $form->handleRequest($request);
        

        if ($form->isValid()) {
            $emPL = $this->getDoctrine()->getManager();
            $entityPL = $emPL->getRepository('PCFicheBundle:ChartePartenariat')->find($id);
            $entity->setPIFELaboratoire($entityPL);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('pifelaboratoire_showrequest', array('id' => $entityPL->getId())));
        }

        return $this->render('PCFicheBundle:Fichier:new.html.twig', array(
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
            'action' => $this->generateUrl('pifelaboratoire_new_avenantrequest',array("id" => $id)),
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
        $form = $this->addAvenantToRequestForm($entity,$id);
        $form->handleRequest($request);
        

        if ($form->isValid()) {
            $emPL = $this->getDoctrine()->getManager();
            $entityPL = $emPL->getRepository('PCFicheBundle:PIFELaboratoire')->find($id);
            $entityPL->incrementerNombreNouveauxAvenants();
            $entity->setPIFELaboratoire($entityPL);
            $entity->setNumeroFiche($id);
            $entity->setDateContratInitial($entityPL->getDateSignaturePolytech());
            $entity->setDateEffetCI($entityPL->getDateEffet());
            $entity->setDateFinCI($entityPL->getDateEcheance());
            $ajout = " + ".$entity->getNbMoisProrogation()." month";
            if ($entity->getObjet() === 'proroger'){
                $date = $entityCP->getDateEcheance();
                if ($date != null){
                    $date=  $date->format('Y-m-d');
                    $expirationDate = date("Y-m-d", strtotime($date.$ajout));
                    $expirationDate = new DateTime($expirationDate);
                    $entity->setDateExpiration($expirationDate);
                }else{
                    $request->getSession()
                    ->getFlashBag()
                    ->add('error', "Pas de date d'écheance trouvé. Votre avenant n'a pas été enregistré");
                    return $this->redirect($this->generateUrl('pifelaboratoire_showrequest', array('id' => $entityPL->getId())));
                }
            }
            $em = $this->getDoctrine()->getManager();
            $alerte = new Alerte();
            $this->avenantCreationNotification($alerte,$entity);
            $em->persist($entity);
            $em->flush();
            $em->persist($alerte);
            $em->flush();
            
            return $this->redirect($this->generateUrl('pifelaboratoire_showrequest', array('id' => $entityPL->getId())));
        }

        return $this->render('PCFicheBundle:Avenant:new.html.twig', array(
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
            'action' => $this->generateUrl('pifelaboratoire_new_alert',array("id" => $id)),
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
            $emPL = $this->getDoctrine()->getManager();
            $entityPL = $emPL->getRepository('PCFicheBundle:PIFELaboratoire')->find($id);
            $entity->setPIFELaboratoire($entityPL);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('pifelaboratoire_show', array('id' => $entityPL->getId())));
        }

        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    /**
     * Creates a new PIFELaboratoire entity.
     *
     */
    public function createAction(Request $request, $id)
    {
        $entity = new PIFELaboratoire();
        $form = $this->createCreateForm($entity,$id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setDemandeur( $this->container->get('security.context')->getToken()->getUser());
            $entitySousType = $em->getRepository('PCFicheBundle:SousType')->find($id);
            $departement =  $em->getRepository('PCFicheBundle:Departement')->findBy(array('departmentName' => $entity->getDepartementEtudiant()));
            $responsableDepartement = $departement[0]->getDepartmentLeader();
            $entity->setResponsableDepartement($responsableDepartement);
            $type = $entitySousType->getType();
            $entity->setSousType($entitySousType);
            $entity->setType($type);
            $entity->setDateCreation(new DateTime());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pifelaboratoire_show', array('id' => $entity->getId())));
        }

        return $this->render('PCFicheBundle:PIFELaboratoire:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a PIFELaboratoire entity.
     *
     * @param PIFELaboratoire $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PIFELaboratoire $entity,$id)
    {
        $form = $this->createForm(new PIFELaboratoireType(), $entity, array(
            'action' => $this->generateUrl('pifelaboratoire_create',array('id'=>$id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

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
        $alerte->setPIFELaboratoire($entity);
        $alerte->setRoute('pifelaboratoire_show');
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
        $entity = new PIFELaboratoire();
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
            $departement =  $em->getRepository('PCFicheBundle:Departement')->findBy(array('departmentName' => $entity->getDepartementEtudiant()));
            $responsableDepartement = $departement[0]->getDepartmentLeader();
            $entity->setResponsableDepartement($responsableDepartement);
            $em->persist($entity);
            $em->flush();
            
            $alerte = new Alerte();
            $this->demandeCreation($alerte,$entity);
            $em->persist($alerte);
            $em->flush();
            return $this->redirect($this->generateUrl('pifelaboratoire_showrequest', array('id' => $entity->getId())));
        }

        return $this->render('PCFicheBundle:PIFELaboratoire:request.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
        /**
     * Creates a new PIFELaboratoire entity.
     *
     */
    public function requestAction(Request $request,$id)
    {
        $entity = new PIFELaboratoire();
        $form = $this->createRequestForm($entity,$id);
        return $this->render('PCFicheBundle:PIFELaboratoire:request.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a PIFELaboratoire entity.
     *
     * @param PIFELaboratoire $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createRequestForm(PIFELaboratoire $entity,$id)
    {
        $form = $this->createForm(new DemandePIFELaboratoireType(), $entity, array(
            'action' => $this->generateUrl('pifelaboratoire_createrequest',array('id'=>$id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }

    /**
     * Displays a form to create a new PIFELaboratoire entity.
     *
     */
    public function newAction($id)
    {
        $entity = new PIFELaboratoire();
        $form   = $this->createCreateForm($entity,$id);

        return $this->render('PCFicheBundle:PIFELaboratoire:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
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
            $entityOwner = $em->getRepository('PCFicheBundle:PIFELaboratoire')->find($id);
            
            // on paramètre le message en rajoutant sa fiche et son auteur
            $entity->setPIFELaboratoire($entityOwner);
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
        'action' => $this->generateUrl('pifelaboratoire_action',array("id" => $id)),
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
        $alerte->setPIFELaboratoire($entity);
        $alerte->setRoute('autre_show');
        $alerte->setDateAlerte(new DateTime());
        $alerte->setOwnerId($entity->getId());
    }

    /**
     * Finds and displays a PIFELaboratoire entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:PIFELaboratoire')->find($id);
        $alertes = $em->getRepository('PCFicheBundle:Alerte')->findBy(array('pifeLaboratoire' => $id));
        $avenants = $em->getRepository('PCFicheBundle:Avenant')->findBy(array('pifeLaboratoire' => $id));
        $fichiers = $em->getRepository('PCFicheBundle:Fichier')->findBy(array('pifeLaboratoire' => $id));
        $actions = $em->getRepository('PCFicheBundle:Action')->findBy(array('pifeLaboratoire' => $id));
        $messages = $em->getRepository('PCFicheBundle:FicheMessage')->findBy(array('pifeLaboratoire' => $id));
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PIFELaboratoire entity.');
        }
        
        $avenantsCount = $entity->getNombreNouveauxAvenants();
        $entity->setNombreNouveauxAvenants(0);
        $em->flush();

        $deleteForm = $this->createDeleteForm($id);
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

        return $this->render('PCFicheBundle:PIFELaboratoire:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'alertes' => $alertes,
            'avenants' => $avenants,
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

        $entity = $em->getRepository('PCFicheBundle:PIFELaboratoire')->find($id);
        $avenants = $em->getRepository('PCFicheBundle:Avenant')->findBy(array('pifeLaboratoire' => $id));
        $fichiers = $em->getRepository('PCFicheBundle:Fichier')->findBy(array('pifeLaboratoire' => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PIFELaboratoire entity.');
        }
        $avenant = new Avenant();
        $avenantForm = $this->addAvenantToRequestForm($avenant,$id);
        $fichier = new Fichier();
        $fichierForm = $this->addFichierToRequestForm($fichier,$id);
        
        $messages = $em->getRepository('PCFicheBundle:FicheMessage')->findBy(array('pifeLaboratoire' => $id));
        $message = new FicheMessage();
        $messageForm = $this->sendFicheMessageForm($message,$id);

        return $this->render('PCFicheBundle:PIFELaboratoire:showrequest.html.twig', array(
            'entity'      => $entity,
            'avenants' => $avenants,
            'fichiers' => $fichiers,
            'avenant_form' => $avenantForm->createView(),
            'fichier_form' => $fichierForm->createView(),
            'messages' => $messages,
            'messageForm' => $messageForm->createView()
        ));
    }

    /**
     * Displays a form to edit an existing PIFELaboratoire entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:PIFELaboratoire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PIFELaboratoire entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:PIFELaboratoire:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PIFELaboratoire entity.
    *
    * @param PIFELaboratoire $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PIFELaboratoire $entity)
    {
        $form = $this->createForm(new PIFELaboratoireType(), $entity, array(
            'action' => $this->generateUrl('pifelaboratoire_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre à jour'));

        return $form;
    }
    /**
     * Edits an existing PIFELaboratoire entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:PIFELaboratoire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PIFELaboratoire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('pifelaboratoire_edit', array('id' => $id)));
        }

        return $this->render('PCFicheBundle:PIFELaboratoire:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PIFELaboratoire entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PCFicheBundle:PIFELaboratoire')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PIFELaboratoire entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pifelaboratoire'));
    }

    /**
     * Creates a form to delete a PIFELaboratoire entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pifelaboratoire_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}
