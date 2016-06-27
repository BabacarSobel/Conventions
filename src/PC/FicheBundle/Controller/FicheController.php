<?php

namespace PC\FicheBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use PC\FicheBundle\Entity\Fiche;
use PC\FicheBundle\Form\FicheType;
use DateTime;
use PC\FicheBundle\Entity\Alerte;

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

        $entitiesFromCP = $em->getRepository('PCFicheBundle:ChartePartenariat')->findAll();
        foreach ($entitiesFromCP as $entity) {            
            $entity->setRoute("chartepartenariat");
            if ($entity->getDateEcheance() != null){
                $dateAlerte = $entity->getDateEcheance()->diff($aujourdhui);
                if (( $dateAlerte->format('%a') < 13 && $dateAlerte->format('%R') === '-') ||($dateAlerte->format('%a') == 0 )){
                    $alerte = new Alerte();
                    $alerte->setIntitule('Expiration de la convention '.$entity->getId().' proche');
                    $alerte->setDateAlerte($entity->getDateEcheance());
                    $alerte->setObjet('Expiration de la convention');
                    $alerte->setRoute($entity->getRoute().'_show');
                    $alerte->setChartePartenariat($entity);
                    $alerte->setOwnerId($entity->getId());
                    $alertesExp[] = $alerte;
                }
            }
        }
       
        $entitiesFromME = $em->getRepository('PCFicheBundle:MADEvenementGratuit')->findAll();
        foreach ($entitiesFromME as $entity) {
            $entity->setRoute("madevenementgratuit");
            if ($entity->getDateEcheance() != null){
                $dateAlerte = $entity->getDateEcheance()->diff($aujourdhui);
                if (($dateAlerte->format('%a') < 13 && $dateAlerte->format('%R') === '-') || ($dateAlerte->format('%a') == 0 )){
                    $alerte = new Alerte();
                    $alerte->setIntitule('Expiration de la convention '.$entity->getId().' proche');
                    $alerte->setDateAlerte($entity->getDateEcheance());
                    $alerte->setObjet('Expiration de la convention');
                    $alerte->setRoute($entity->getRoute().'_show');
                    $alerte->setMadEvenementGratuit($entity);
                    $alerte->setOwnerId($entity->getId());
                    $alertesExp[] = $alerte;
                }
            
            }
        }
        $entitiesFromMS = $em->getRepository('PCFicheBundle:MADSalles')->findAll();
        foreach ($entitiesFromMS as $entity) {          
            $entity->setRoute("madsalles");
            if ($entity->getDateEcheance() != null){
                $dateAlerte = $entity->getDateEcheance()->diff($aujourdhui);
                if (($dateAlerte->format('%a') < 13 && $dateAlerte->format('%R') === '-') || ($dateAlerte->format('%a') == 0 )){
                    $alerte = new Alerte();
                    $alerte->setIntitule('Expiration de la convention '.$entity->getId().' proche');
                    $alerte->setDateAlerte($entity->getDateEcheance());
                    $alerte->setObjet('Expiration de la convention');
                    $alerte->setRoute($entity->getRoute().'_show');
                    $alerte->setMadSalles($entity);
                    $alerte->setOwnerId($entity->getId());
                    $alertesExp[] = $alerte;
                }        
            }
        }
        $entitiesFromPC = $em->getRepository('PCFicheBundle:PIFEClassique')->findAll();
        foreach ($entitiesFromPC as $entity) {            
            $entity->setRoute("pifeclassique");
            if ($entity->getDateEcheance() != null){
                $dateAlerte = $entity->getDateEcheance()->diff($aujourdhui);
                if (($dateAlerte->format('%a') < 13 && $dateAlerte->format('%R') === '-') || ($dateAlerte->format('%a') == 0 )){
                    $alerte = new Alerte();
                    $alerte->setIntitule('Expiration de la convention '.$entity->getId().' proche');
                    $alerte->setDateAlerte($entity->getDateEcheance());
                    $alerte->setObjet('Expiration de la convention');
                    $alerte->setRoute($entity->getRoute().'_show');
                    $alerte->setPifeClassique($entity);
                    $alerte->setOwnerId($entity->getId());
                    $alertesExp[] = $alerte;
                }
            }
        }
        $entitiesFromPL = $em->getRepository('PCFicheBundle:PIFELaboratoire')->findAll();
        foreach ($entitiesFromPL as $entity) {           
            $entity->setRoute("pifelaboratoire");
            if ($entity->getDateEcheance() != null){
                $dateAlerte = $entity->getDateEcheance()->diff($aujourdhui);
                if (($dateAlerte->format('%a') < 13 && $dateAlerte->format('%R') === '-') || ($dateAlerte->format('%a') == 0 )){
                    $alerte = new Alerte();
                    $alerte->setIntitule('Expiration de la convention '.$entity->getId().' proche');
                    $alerte->setDateAlerte($entity->getDateEcheance());
                    $alerte->setObjet('Expiration de la convention');
                    $alerte->setRoute($entity->getRoute().'_show');
                    $alerte->setPifeLaboratoire($entity);
                    $alerte->setOwnerId($entity->getId());
                    $alertesExp[] = $alerte;
                
                }
            }
        }
        $entitiesFromPS = $em->getRepository('PCFicheBundle:PSCati')->findAll();
        foreach ($entitiesFromPS as $entity) {          
            $entity->setRoute("pscati");
            if ($entity->getDateEcheance() != null){
                $dateAlerte = $entity->getDateEcheance()->diff($aujourdhui);
                if (($dateAlerte->format('%a') < 13 && $dateAlerte->format('%R') === '-') || ($dateAlerte->format('%a') == 0 )){
                    $alerte = new Alerte();
                    $alerte->setIntitule('Expiration de la convention '.$entity->getId().' proche');
                    $alerte->setDateAlerte($entity->getDateEcheance());
                    $alerte->setObjet('Expiration de la convention');
                    $alerte->setRoute($entity->getRoute().'_show');
                    $alerte->setPsCati($entity);
                    $alerte->setOwnerId($entity->getId());
                    $alertesExp[] = $alerte;
                
                }
            }
        }
        $entitiesFromA = $em->getRepository('PCFicheBundle:Autre')->findAll();
        foreach ($entitiesFromA as $entity) {
            $entity->setRoute("autre");
            if ($entity->getDateEcheance() != null){
                $dateAlerte = $entity->getDateEcheance()->diff($aujourdhui);
                if (($dateAlerte->format('%a') < 13 && $dateAlerte->format('%R') === '-') || ($dateAlerte->format('%a') == 0 )){
                    $alerte = new Alerte();
                    $alerte->setIntitule('Expiration de la convention '.$entity->getId().' proche');
                    $alerte->setDateAlerte($entity->getDateEcheance());
                    $alerte->setObjet('Expiration de la convention');
                    $alerte->setRoute($entity->getRoute().'_show');
                    $alerte->setAutre($entity);
                    $alerte->setOwnerId($entity->getId());
                    $alertesExp[] = $alerte;
                
                }
            }
        }
        $entities = array_merge($entitiesFromCP, $entitiesFromME, $entitiesFromMS,$entitiesFromPC,$entitiesFromPL,$entitiesFromPS,$entitiesFromA);
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
        usort($entitiesEnCours, array($this,'dateSortDescending'));
        usort($entitiesEnVigueur, array($this,'dateSortDescending')); 
        usort($entitiesNonAssignees, array($this,'dateSortDescending'));
        
        // les alertes sont récupérées
        
        $alertes += $em->getRepository('PCFicheBundle:Alerte')->findBy(
                array(),
                array('dateAlerte' => 'ASC'));
        
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
    public function newAction()
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
    
}
