<?php

namespace PC\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Knp\Snappy\Pdf;
use PC\FicheBundle\Entity\MADSalles;
use PC\FicheBundle\Form\MADSallesType;
use PC\FicheBundle\Form\DemandeMADSallesType;
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
 * MADSalles controller.
 *
 */
class MADSallesController extends DefaultController
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PCFicheBundle:MADSalles')->findAll();

        return $this->render('PCFicheBundle:MADSalles:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    
    public function pdfAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PCFicheBundle:MADSalles')->find($id);
        $locations = $em->getRepository('PCFicheBundle:Location')->findByMadSalles($id);
        $snappy = new Pdf($this->get('kernel')->getRootDir()."/../wkhtmltox/bin/wkhtmltopdf");
        $name =  'mads-'.$id.Date("YmdHis");
        $type = $em->getRepository('PCFicheBundle:SousType')->findBy(array('nom' => 'SALLE GRATUITE'));
        $template = $em->getRepository('PCFicheBundle:Template')->findBy(array('type'=> $type[0]->getId()));
        // on cree le contenu
        $twig = clone $this->get('twig');
        $twig->setLoader(new \Twig_Loader_String());
        $content = $twig->render(
          $template[0]->getTemplate(),
          array('entity'=>$entity, 'locations' => $locations)
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
        $entity = $em->getRepository('PCFicheBundle:MADSalles')->find($id);
        $content = $this->renderView('PCFicheBundle:Template:ms.html.twig',array('entity'=>$entity)); 
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
            $entityCP = $emCP->getRepository('PCFicheBundle:MADSalles')->find($id);
            $entity->setMADSalles($entityCP);
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
        'action' => $this->generateUrl('madsalles_sendfichemessage',array("id" => $id)),
        'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Créer'));
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
            $entity = $em->getRepository('PCFicheBundle:MADSalles')->find($id);
            $data = $form->getData();
            $choix = array();
            $donnees = array();
//            var_dump($data);die();
            foreach ($data as $key => $value){

                if (is_bool($value)){
                    if ($value = TRUE){ 
                        $choix[] = $key;
                        $donnees[$key]['cle'] = $key;
                    } 
                }elseif (is_int($value)){
                    $key = substr($key, 0,-4);
                    $donnees[$key]['NBDJ'] = $value; 
                }elseif (is_object($value) && get_class($value) == 'DateTime'){
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
                if (isset($donnees[$key]['DD']) && isset($donnee['DE'])){
                    $local = $em->getRepository('PCFicheBundle:Local')->findByNom($key);

                    $location = new Location();
                    $location->setDateDebut($donnees[$key]['DD']);
                    $location->setDateEcheance($donnee['DE']);
                    $location->setNombreDemiJournees($donnee['NBDJ']);
//                    $location->setHoraireDebut($donnee['HD']);
//                    $location->setHoraireEcheance($donnee['HE']);
                    $location->setMADSalles($entity);
                    $location->setLocal($local[0]);
                    $em->persist($location);
                    $em->flush();
                    $local[0]->setDisponible(false);
                    $em->persist($local[0]);
                    $em->flush();
                    $flash->add('success', "Le local ".$key." vous a été allouée. ");
                }
            }
               
            return $this->redirect($this->getRequest()->headers->get('referer'));
        }

        return $this->render('PCFicheBundle:Local:new.html.twig', array(
            'form'   => $form->createView(),
        ));
    }
    
    public function addLocalForm($id)
    {
        
        $builder = $this->createFormBuilder();
        $builder->setAction($this->generateUrl('madsalles_add_local',array('id'=> $id)));
        $builder->setMethod('POST');
        $em = $this->getDoctrine()->getManager();
        $locauxDisponibles = $em->getRepository('PCFicheBundle:Local')->findByDisponible(true);
        foreach ($locauxDisponibles as $cle => $local) {
             $builder->add($local->getNom(),'checkbox', array('label'=> '','required' => false, 'attr' => array('class' => 'row align-right col-xs-5')));
//            $builder->add($local->getNom().'HD','time',array('label'=> 'horaire de début','required' => false, 'attr' => array('class' => 'align-left col-xs-5')));
//            $builder->add($local->getNom().'HE','time',array('label'=> 'horaire d\'écheance','required' => false, 'attr' => array('class' => 'align-left col-xs-5')));
            $builder->add($local->getNom().'DD','date',array('years'=> range(date('Y') - 10, date('Y') + 25),'label'=> 'date début','required' => false, 'attr' => array('class' => 'align-left col-xs-5')));
            $builder->add($local->getNom().'DE','date',array('years'=> range(date('Y') - 10, date('Y') + 25),'label'=> 'date d\'écheance','required' => false, 'attr' => array('class' => 'align-left col-xs-5')));
            $builder->add($local->getNom().'NBDJ','number',array('label'=> 'nombre de demi-journées','required' => false, 'attr' => array('class' => '','style' => ' border-bottom : 2px solid')));
        };
        
        $builder->add('valider','submit', array('attr' => array('class' => 'btn pc_skyblue_btn')));

        $form = $builder->getForm();
        $view = $form->createView();
        
        return $form;
    }
    
    
                /**
     * Creates a Fichier form
     *
     */
    public function addFichierForm(Fichier $entity,$id)
    {
        $form = $this->createForm(new FichierType(), $entity, array(
            'action' => $this->generateUrl('madsalles_new_fichier',array("id" => $id)),
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
            $emMS = $this->getDoctrine()->getManager();
            $entityMS = $emMS->getRepository('PCFicheBundle:MADSalles')->find($id);
            $entity->setMADSalles($entityMS);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('madsalles_show', array('id' => $entityMS->getId())));
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
            'action' => $this->generateUrl('madsalles_new_avenant',array("id" => $id)),
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
            $emPC = $this->getDoctrine()->getManager();
            $entityA = $emPC->getRepository('PCFicheBundle:MADSalles')->find($id);
            $entityA->incrementerNombreNouveauxAvenants();
            $entity->setMADSalles($entityA);
            $entity->setNumeroFiche($id);
            $entity->setDateContratInitial($entityA->getDateSignaturePolytech());
            $entity->setDateEffetCI($entityA->getDateEffet());
            $entity->setDateFinCI($entityA->getDateEcheance());
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
                    return $this->redirect($this->generateUrl('madsalles_show', array('id' => $entityA->getId())));
                }
            }
            $em = $this->getDoctrine()->getManager();
            $alerte = new Alerte();
            $this->avenantCreationNotification($alerte,$entity);
            $em->persist($entity);
            $em->flush();
            $em->persist($alerte);
            $em->flush();
            
            return $this->redirect($this->generateUrl('madsalles_show', array('id' => $entityA->getId())));
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
            'action' => $this->generateUrl('madsalles_new_fichierrequest',array("id" => $id)),
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
            $emMS = $this->getDoctrine()->getManager();
            $entityMS = $emMS->getRepository('PCFicheBundle:MADSalles')->find($id);
            $entity->setMADSalles($entityMS);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('madsalles_showrequest', array('id' => $entityMS->getId())));
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
            'action' => $this->generateUrl('madsalles_new_avenantrequest',array("id" => $id)),
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
            $entityOwner = $em->getRepository('PCFicheBundle:MADSalles')->find($id);
            
            // on paramètre le message en rajoutant sa fiche et son auteur
            $entity->setMADSalles($entityOwner);
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
        'action' => $this->generateUrl('madsalles_action',array("id" => $id)),
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
        $alerte->setMADSalles($entity);
        $alerte->setRoute('autre_show');
        $alerte->setDateAlerte(new DateTime());
        $alerte->setOwnerId($entity->getId());
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
            $emPC = $this->getDoctrine()->getManager();
            $entityA = $emPC->getRepository('PCFicheBundle:MADSalles')->find($id);
            $entityA->incrementerNombreNouveauxAvenants();
            $entity->setMADSalles($entityA);
            $entity->setNumeroFiche($id);
            $entity->setDateContratInitial($entityA->getDateSignaturePolytech());
            $entity->setDateEffetCI($entityA->getDateEffet());
            $entity->setDateFinCI($entityA->getDateEcheance());
            $ajout = " + ".$entity->getNbMoisProrogation()." month";
            $date = $entityA->getDateEcheance();
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
                    return $this->redirect($this->generateUrl('madsalles_show', array('id' => $entityA->getId())));
                }
            }
            $em = $this->getDoctrine()->getManager();
            $alerte = new Alerte();
            $this->avenantCreationNotification($alerte,$entity);
            $em->persist($entity);
            $em->flush();
            $em->persist($alerte);
            $em->flush();
            

            return $this->redirect($this->generateUrl('madsalles_showrequest', array('id' => $entityA->getId())));
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
            'action' => $this->generateUrl('madsalles_new_alert',array("id" => $id)),
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
            $emPC = $this->getDoctrine()->getManager();
            $entityA = $emPC->getRepository('PCFicheBundle:MADSalles')->find($id);
            $entity->setMADSalles($entityA);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('madsalles_show', array('id' => $entityA->getId())));
        }

        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    /**
     * Creates a new MADSalles entity.
     *
     */
    public function createAction(Request $request, $id)
    {
        $entity = new MADSalles();
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
            return $this->redirect($this->generateUrl('madsalles_show', array('id' => $entity->getId())));
        }

        return $this->render('PCFicheBundle:MADSalles:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a MADSalles entity.
     *
     * @param MADSalles $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(MADSalles $entity,$id)
    {
        $form = $this->createForm(new MADSallesType(), $entity, array(
            'action' => $this->generateUrl('madsalles_create',array('id'=>$id)),
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
        $alerte->setMADSalles($entity);
        $alerte->setRoute('madsalles_show');
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
        $entity = new MADSalles();
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
            return $this->redirect($this->generateUrl('madsalles_showrequest', array('id' => $entity->getId())));
        }

        return $this->render('PCFicheBundle:MADSalles:request.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    /**
     * Creates a new MADSalles entity.
     *
     */
    public function requestAction(Request $request,$id)
    {
        $entity = new MADSalles();
        $form = $this->createRequestForm($entity,$id);
        return $this->render('PCFicheBundle:MADSalles:request.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a MADSalles entity.
     *
     * @param MADSalles $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createRequestForm(MADSalles $entity,$id)
    {
        $form = $this->createForm(new DemandeMADSallesType(), $entity, array(
            'action' => $this->generateUrl('madsalles_createrequest',array('id'=>$id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new MADSalles entity.
     *
     */
    public function newAction($id)
    {
        $entity = new MADSalles();
        $form   = $this->createCreateForm($entity,$id);

        return $this->render('PCFicheBundle:MADSalles:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a MADSalles entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:MADSalles')->find($id);
        $alertes = $em->getRepository('PCFicheBundle:Alerte')->findBy(array('madSalles' => $id));
        $avenants = $em->getRepository('PCFicheBundle:Avenant')->findBy(array('madSalles' => $id));
        $fichiers = $em->getRepository('PCFicheBundle:Fichier')->findBy(array('madSalles' => $id));
        $locaux = $em->getRepository('PCFicheBundle:Location')->findBy(array('madSalles' => $id));
        $messages = $em->getRepository('PCFicheBundle:FicheMessage')->findBy(array('madSalles' => $id));
        $actions = $em->getRepository('PCFicheBundle:Action')->findBy(array('madSalles' => $id));
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MADSalles entity.');
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
        
        $locauxDisponibles = $this->addLocalForm($id);

        return $this->render('PCFicheBundle:MADSalles:show.html.twig', array(
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

        $entity = $em->getRepository('PCFicheBundle:MADSalles')->find($id);
        $avenants = $em->getRepository('PCFicheBundle:Avenant')->findBy(array('madSalles' => $id));
        $fichiers = $em->getRepository('PCFicheBundle:Fichier')->findBy(array('madSalles' => $id));
        $locaux = $em->getRepository('PCFicheBundle:Location')->findBy(array('madSalles' => $id));
        $actions = $em->getRepository('PCFicheBundle:Action')->findBy(array('madSalles' => $id));
        $messages = $em->getRepository('PCFicheBundle:FicheMessage')->findBy(array('madSalles' => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MADSalles entity.');
        }
        
        $avenant = new Avenant();
        $avenantForm = $this->addAvenantToRequestForm($avenant,$id);
        $fichier = new Fichier();
        $fichierForm = $this->addFichierToRequestForm($fichier,$id);
        $message = new FicheMessage();
        $messageForm = $this->sendFicheMessageForm($message,$id);
        $action = new \PC\FicheBundle\Entity\Action();
        $actionForm = $this->createActionForm($action,$id);
        $locauxDisponibles = $this->addLocalForm($id);

        return $this->render('PCFicheBundle:MADSalles:showrequest.html.twig', array(
            'entity'      => $entity,
            'avenants' => $avenants,
            'fichiers' => $fichiers,
            'locaux' => $locaux,
            'avenant_form' => $avenantForm->createView(),
            'fichier_form' => $fichierForm->createView(),
            'messages' => $messages,
            'messageForm' => $messageForm->createView(),
            'actions' => $actions,
            'actionForm' => $actionForm->createView(),
            'locauxDisponibles' => $locauxDisponibles->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing MADSalles entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:MADSalles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MADSalles entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:MADSalles:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a MADSalles entity.
    *
    * @param MADSalles $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(MADSalles $entity)
    {
        $form = $this->createForm(new MADSallesType(), $entity, array(
            'action' => $this->generateUrl('madsalles_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre à jour'));

        return $form;
    }
    /**
     * Edits an existing MADSalles entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:MADSalles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MADSalles entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('madsalles_edit', array('id' => $id)));
        }

        return $this->render('PCFicheBundle:MADSalles:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a MADSalles entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PCFicheBundle:MADSalles')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find MADSalles entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('madsalles'));
    }

    /**
     * Creates a form to delete a MADSalles entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('madsalles_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
