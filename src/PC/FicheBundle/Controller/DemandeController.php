<?php

namespace PC\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PC\FicheBundle\Entity\Demande;
use PC\FicheBundle\Form\DemandeType;
use PC\FicheBundle\Entity\Fiche;

/**
 * Demande controller.
 *
 */
class DemandeController extends Controller
{

    /**
     * Liste de toutes les demandes d'un utilisateur
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser()->getId();
        $entitiesFromCP = $em->getRepository('PCFicheBundle:ChartePartenariat')->findBy(array('demandeur' => $user));
        foreach ($entitiesFromCP as $entity) {
            
            $entity->setRoute("chartepartenariat");
        }
        $entitiesFromME = $em->getRepository('PCFicheBundle:MADEvenementGratuit')->findBy(array('demandeur' => $user));
        foreach ($entitiesFromME as $entity) {
            
            $entity->setRoute("madevenementgratuit");
        }
        $entitiesFromMS = $em->getRepository('PCFicheBundle:MADSalles')->findBy(array('demandeur' => $user));
        foreach ($entitiesFromMS as $entity) {
            
            $entity->setRoute("madsalles");
        }
        $entitiesFromPC = $em->getRepository('PCFicheBundle:PIFEClassique')->findBy(array('demandeur' => $user));
        foreach ($entitiesFromPC as $entity) {
            
            $entity->setRoute("pifeclassique");
        }
        $entitiesFromPL = $em->getRepository('PCFicheBundle:PIFELaboratoire')->findBy(array('demandeur' => $user));
        foreach ($entitiesFromPL as $entity) {
            
            $entity->setRoute("pifelaboratoire");
        }
        $entitiesFromPS = $em->getRepository('PCFicheBundle:PSCati')->findBy(array('demandeur' => $user));
        foreach ($entitiesFromPS as $entity) {
            
            $entity->setRoute("pscati");
        }
        $entitiesFromA = $em->getRepository('PCFicheBundle:Autre')->findBy(array('demandeur' => $user));
        foreach ($entitiesFromA as $entity) {
            $entity->setRoute("autre");
        }
        $alertes = $em->getRepository('PCFicheBundle:Alerte')->findAll();
        $entities = array_merge($entitiesFromCP,$entitiesFromME,$entitiesFromMS,$entitiesFromPC,$entitiesFromPL,$entitiesFromPS,$entitiesFromA);

        return $this->render('PCFicheBundle:Demande:index.html.twig',array(
            'entities' => $entities,
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
        $entities = $em->getRepository('PCFicheBundle:SousType')->findBy(array('type' => $id));

        return $this->render('PCFicheBundle:Demande:chooseSubType.html.twig', array(
            'entities' => $entities
        ));
    }
    

    /**
     * Permet de realiser une nouvelle demande
     * On repère tous les types de fiche
     * A cet étape on selectionne le type de fiche souhaité
     */
    public function newAction()
    {

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('PCFicheBundle:Type')->findAll();

        return $this->render('PCFicheBundle:Demande:new.html.twig', array(
            'entities' => $entities
        ));
    }

}
