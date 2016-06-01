<?php

namespace PC\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Knp\Snappy\Pdf;
use PC\FicheBundle\Entity\MADEvenementGratuit;
use PC\FicheBundle\Form\MADEvenementGratuitType;
use PC\FicheBundle\Form\DemandeMADEvenementGratuitType;
use PC\FicheBundle\Entity\Avenant;
use PC\FicheBundle\Form\AvenantType;
use PC\FicheBundle\Entity\Alerte;
use PC\FicheBundle\Form\AlerteType;
use PC\FicheBundle\Entity\Fichier;
use PC\FicheBundle\Form\FichierType;
use DateTime;
use PC\FicheBundle\Form\FicheMessageType;
use PC\FicheBundle\Entity\FicheMessage;
use PC\FicheBundle\Entity\Location;
use PC\FicheBundle\Form\ActionType;

/**
 * MADEvenementGratuit controller.
 *
 */
class MADEvenementGratuitController extends DefaultController
{

    /**
     * Lists all MADEvenementGratuit entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PCFicheBundle:MADEvenementGratuit')->findAll();

        return $this->render('PCFicheBundle:MADEvenementGratuit:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    
        public function pdfAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $snappy = new Pdf($this->get('kernel')->getRootDir()."/../wkhtmltox/bin/wkhtmltopdf");
        $entity = $em->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);
        $name = 'madeg-'.$id.Date("YmdHis");
        $snappy->generateFromHtml($this->renderView('PCFicheBundle:Template:madeg.html.twig',array('entity'=>$entity)), $this->get('kernel')->getRootDir().'/../files/'.$name.'.pdf');
            return $this->render('PCFicheBundle:Fiche:pdf.html.twig'
                    ,array('pdf' => $snappy,
                        'filename' => $name.'.pdf')
                    );
    }
	
	public function wordAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);
        $content = $this->renderView('PCFicheBundle:Template:me.html.twig',array('entity'=>$entity)); 
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
            $entityCP = $emCP->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);
            $entity->setMADEvenementGratuit($entityCP);
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
        'action' => $this->generateUrl('madevenementgratuit_sendfichemessage',array("id" => $id)),
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
            $entityOwner = $em->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);
            
            // on paramètre le message en rajoutant sa fiche et son auteur
            $entity->setMADEvenementGratuit($entityOwner);
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
        'action' => $this->generateUrl('madevenementgratuit_action',array("id" => $id)),
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
        $alerte->setMADEvenementGratuit($entity);
        $alerte->setRoute('autre_show');
        $alerte->setDateAlerte(new DateTime());
        $alerte->setOwnerId($entity->getId());
    }

                    /**
     * Creates a Fichier form
     *
     */
    public function addLocalForm($id)
    {
        
        $builder = $this->createFormBuilder();
        $builder->setAction($this->generateUrl('madevenementgratuit_add_local',array('id'=> $id)));
        $builder->setMethod('POST');
        $em = $this->getDoctrine()->getManager();
        $locauxDisponibles = $em->getRepository('PCFicheBundle:Local')->findByDisponible(true);
        foreach ($locauxDisponibles as $cle => $local) {
            $builder->add($local->getNom(),'checkbox', array('label'=> '','required' => false, 'attr' => array('class' => 'row align-right col-xs-5')));
            $builder->add($local->getNom().'HD','time',array('label'=> 'horaire de début','required' => false, 'attr' => array('class' => 'align-left col-xs-5')));
            $builder->add($local->getNom().'HE','time',array('label'=> 'horaire d\'écheance','required' => false, 'attr' => array('class' => 'align-left col-xs-5')));
            $builder->add($local->getNom().'DD','date',array('years'=> range(date('Y') - 10, date('Y') + 25),'label'=> 'date début','required' => false, 'attr' => array('class' => 'align-left col-xs-5')));
            $builder->add($local->getNom().'DE','date',array('years'=> range(date('Y') - 10, date('Y') + 25),'label'=> 'date d\'écheance','required' => false, 'attr' => array('class' => 'align-left col-xs-5','style' => ' border-bottom : 2px solid')));
        };
        
        $builder->add('valider','submit', array('attr' => array('class' => 'btn pc_skyblue_btn')));

        $form = $builder->getForm();
        return $form;
    }
    
    /**
     * rajoute les locaux selectionnés à l'événement
     *
     */
    public function addLocalAction(Request $request, $id)
    {
        
        $form = $this->addLocalForm($id);
        $form->handleRequest($request);
        

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);
            $data = $form->getData();
            $choix = array();
            $donnees = array();
            foreach ($data as $key => $value){
                if (is_bool($value)){
                    if ($value = 1){ 
                        $choix[] = $key;
                        $donnees[$key]['cle'] = $key;
                    } 
                }
                elseif (is_object($value) && get_class($value) == 'DateTime'){
                    $pos = substr($key,-2);
                    $key = substr($key, 0,-2);
                    
                    if($pos === 'HD'){
                        $donnees[$key]['HD'] = $value;
                    }elseif($pos === 'HE'){
                        $donnees[$key]['HE'] = $value;
                    }elseif($pos === 'DD'){
                        $donnees[$key]['DD'] = $value;
                    }elseif($pos === 'DE'){
                        $donnees[$key]['DE'] = $value;
                    }
                  
                }
                
            }
            $flash = $request->getSession()->getFlashBag();
            
            foreach ($donnees as $key => $donnee){
                if (isset($donnees[$key]['DD']) && isset($donnee['DE']) && isset($donnee['HE']) && isset($donnee['HD'])){
                    $local = $em->getRepository('PCFicheBundle:Local')->findByNom($key);

                    $location = new Location();
                    $location->setDateDebut($donnees[$key]['DD']);
                    $location->setDateEcheance($donnee['DE']);
                    $location->setHoraireDebut($donnee['HD']);
                    $location->setHoraireEcheance($donnee['HE']);
                    $location->setMadEvenementGratuit($entity);
                    $location->setLocal($local[0]);
                    $em->persist($location);
                    $em->flush();
                    $local[0]->setDisponible(false);
                    $em->persist($local[0]);
                    $em->flush();
                    $flash->add('success', "Le local ".$key.' vous a été allouée. ');
                }
            }

            
                
                
            return $this->redirect($this->getRequest()->headers->get('referer'));
        }

        return $this->render('PCFicheBundle:Local:new.html.twig', array(
            'form'   => $form->createView(),
        ));
    }
    
                /**
     * Creates a Fichier form
     *
     */
    public function addFichierForm(Fichier $entity,$id)
    {
        $form = $this->createForm(new FichierType(), $entity, array(
            'action' => $this->generateUrl('madevenementgratuit_new_fichier',array("id" => $id)),
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
            $emME = $this->getDoctrine()->getManager();
            $entityME = $emME->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);
            $entity->setMADEvenementGratuit($entityME);
            $entity->setNumeroFiche($id);
            $entity->setDateContratInitial($entityME->getDateSignaturePolytech());
            $entity->setDateEffetCI($entityME->getDateEffet());
            $entity->setDateFinCI($entityME->getDateEcheance());
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('madevenementgratuit_show', array('id' => $entityME->getId())));
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
            'action' => $this->generateUrl('madevenementgratuit_new_avenant',array("id" => $id)),
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
            $emME = $this->getDoctrine()->getManager();
            $entityME = $emME->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);
            $entityME->incrementerNombreNouveauxAvenants();
            $entity->setMADEvenementGratuit($entityME);
            $entity->setNumeroFiche($id);
            $entity->setDateContratInitial($entityME->getDateSignaturePolytech());
            $entity->setDateEffetCI($entityME->getDateEffet());
            $entity->setDateFinCI($entityME->getDateEcheance());
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
                    return $this->redirect($this->generateUrl('madevenementgratuit_show', array('id' => $entityME->getId())));
                }
            }
            $em = $this->getDoctrine()->getManager();
            $alerte = new Alerte();
            $this->avenantCreationNotification($alerte,$entity);
            $em->persist($entity);
            $em->flush();
            $em->persist($alerte);
            $em->flush();
            
            return $this->redirect($this->generateUrl('madevenementgratuit_show', array('id' => $entityME->getId())));
        }

        return $this->render('PCFicheBundle:Avenant:new.html.twig', array(
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
            'action' => $this->generateUrl('madevenementgratuit_new_fichierrequest',array("id" => $id)),
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
            $emME = $this->getDoctrine()->getManager();
            $entityME = $emME->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);
            $entity->setMADEvenementGratuit($entityME);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('madevenementgratuit_showrequest', array('id' => $entityME->getId())));
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
            'action' => $this->generateUrl('madevenementgratuit_new_avenantrequest',array("id" => $id)),
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
            $emME = $this->getDoctrine()->getManager();
            $entityME = $emME->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);
            $entityME->incrementerNombreNouveauxAvenants();
            $entity->setMADEvenementGratuit($entityME);
            $entity->setNumeroFiche($id);
            $entity->setDateContratInitial($entityME->getDateSignaturePolytech());
            $entity->setDateEffetCI($entityME->getDateEffet());
            $entity->setDateFinCI($entityME->getDateEcheance());
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
                    return $this->redirect($this->generateUrl('madevenementgratuit_showrequest', array('id' => $entityME->getId())));
                }
            }
            $em = $this->getDoctrine()->getManager();
            $alerte = new Alerte();
            $this->avenantCreationNotification($alerte,$entity);
            $em->persist($entity);
            $em->flush();
            $em->persist($alerte);
            $em->flush();
            

            return $this->redirect($this->generateUrl('madevenementgratuit_showrequest', array('id' => $entityME->getId())));
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
            'action' => $this->generateUrl('madevenementgratuit_new_alert',array("id" => $id)),
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
            $entityME = $emME->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);
            $entity->setMADEvenementGratuit($entityME);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('madevenementgratuit_show', array('id' => $entityME->getId())));
        }

        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    /**
     * Creates a new MADEvenementGratuit entity.
     *
     */
    public function createAction(Request $request, $id)
    {
        $entity = new MADEvenementGratuit();
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
            return $this->redirect($this->generateUrl('madevenementgratuit_show', array('id' => $entity->getId())));
        }

        return $this->render('PCFicheBundle:MADEvenementGratuit:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a MADEvenementGratuit entity.
     *
     * @param MADEvenementGratuit $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(MADEvenementGratuit $entity,$id)
    {
        $form = $this->createForm(new MADEvenementGratuitType(), $entity, array(
            'action' => $this->generateUrl('madevenementgratuit_create',array('id'=>$id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }

    /**
     * Creates a new MADEvenementGratuit entity.
     *
     */
    public function requestAction(Request $request,$id)
    {
        $entity = new MADEvenementGratuit();
        $form = $this->createRequestForm($entity,$id);
        return $this->render('PCFicheBundle:MADEvenementGratuit:request.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
        /**
     * set the demande alert parameters
     *
     */
    public function demandeCreation($alerte,$entity)
    {
        $alerte->setIntitule('Nouvelle demande');
        $alerte->setObjet('Une nouvelle demande a été faite');
        $alerte->setMADEvenementGratuit($entity);
        $alerte->setRoute('madevenementgratuit_show');
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
        $entity = new MADEvenementGratuit();
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
            
            $alerte = new Alerte();
            $this->demandeCreation($alerte,$entity);
            $em->persist($alerte);
            $em->flush();
            return $this->redirect($this->generateUrl('madevenementgratuit_showrequest', array('id' => $entity->getId())));
        }

        return $this->render('PCFicheBundle:MADEvenementGratuit:request.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a MADEvenementGratuit entity.
     *
     * @param MADEvenementGratuit $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createRequestForm(MADEvenementGratuit $entity,$id)
    {
        $form = $this->createForm(new DemandeMADEvenementGratuitType(), $entity, array(
            'action' => $this->generateUrl('madevenementgratuit_createrequest',array('id'=>$id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }    
    /**
     * Displays a form to create a new MADEvenementGratuit entity.
     *
     */
    public function newAction($id)
    {
        $entity = new MADEvenementGratuit();
        $form   = $this->createCreateForm($entity,$id);

        return $this->render('PCFicheBundle:MADEvenementGratuit:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a MADEvenementGratuit entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);
        $alertes = $em->getRepository('PCFicheBundle:Alerte')->findBy(array('madEvenementGratuit' => $id));
        $avenants = $em->getRepository('PCFicheBundle:Avenant')->findBy(array('madEvenementGratuit' => $id));
        $fichiers = $em->getRepository('PCFicheBundle:Fichier')->findBy(array('madEvenementGratuit' => $id));
        $locaux = $em->getRepository('PCFicheBundle:Location')->findBy(array('madEvenementGratuit' => $id));
        $actions = $em->getRepository('PCFicheBundle:Action')->findBy(array('madEvenementGratuit' => $id));
        $messages = $em->getRepository('PCFicheBundle:FicheMessage')->findBy(array('madEvenementGratuit' => $id));
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MADEvenementGratuit entity.');
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
        $message = new FicheMessage();
        $messageForm = $this->sendFicheMessageForm($message,$id);
        $action = new \PC\FicheBundle\Entity\Action();
        $actionForm = $this->createActionForm($action,$id);

        $locauxDisponibles = $this->addLocalForm($id);
        
        return $this->render('PCFicheBundle:MADEvenementGratuit:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'alertes' => $alertes,
            'avenants' => $avenants,
            'fichiers' => $fichiers,
            'locaux' => $locaux,
            'alert_form' => $alertForm->createView(),
            'avenant_form' => $avenantForm->createView(),
            'fichier_form' => $fichierForm->createView(),
            "avenantsCount" => $avenantsCount,
            'messages' => $messages,
            'messageForm' => $messageForm->createView(),
            'locauxDisponibles' => $locauxDisponibles->createView(),
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

        $entity = $em->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);
        $avenants = $em->getRepository('PCFicheBundle:Avenant')->findBy(array('madEvenementGratuit' => $id));
        $fichiers = $em->getRepository('PCFicheBundle:Fichier')->findBy(array('madEvenementGratuit' => $id));
        $messages = $em->getRepository('PCFicheBundle:FicheMessage')->findBy(array('madEvenementGratuit' => $id));
        $locaux = $em->getRepository('PCFicheBundle:Location')->findBy(array('madEvenementGratuit' => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MADEvenementGratuit entity.');
        }
        
        $avenant = new Avenant();
        $avenantForm = $this->addAvenantToRequestForm($avenant,$id);
        $fichier = new Fichier();
        $fichierForm = $this->addFichierToRequestForm($fichier,$id);
        $message = new FicheMessage();
        $messageForm = $this->sendFicheMessageForm($message,$id);

        $locauxDisponibles = $this->addLocalForm($id);


        return $this->render('PCFicheBundle:MADEvenementGratuit:showrequest.html.twig', array(
            'entity'      => $entity,
            'avenants' => $avenants,
            'fichiers' => $fichiers,
            'locaux' => $locaux,
            'avenant_form' => $avenantForm->createView(),
            'fichier_form' => $fichierForm->createView(),
            'messages' => $messages,
            'messageForm' => $messageForm->createView(),
            'locauxDisponibles' => $locauxDisponibles->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing MADEvenementGratuit entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MADEvenementGratuit entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:MADEvenementGratuit:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a MADEvenementGratuit entity.
    *
    * @param MADEvenementGratuit $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(MADEvenementGratuit $entity)
    {
        $form = $this->createForm(new MADEvenementGratuitType(), $entity, array(
            'action' => $this->generateUrl('madevenementgratuit_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre à jour'));

        return $form;
    }
    /**
     * Edits an existing MADEvenementGratuit entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MADEvenementGratuit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('madevenementgratuit_edit', array('id' => $id)));
        }

        return $this->render('PCFicheBundle:MADEvenementGratuit:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a MADEvenementGratuit entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PCFicheBundle:MADEvenementGratuit')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find MADEvenementGratuit entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('madevenementgratuit'));
    }

    /**
     * Creates a form to delete a MADEvenementGratuit entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('madevenementgratuit_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
