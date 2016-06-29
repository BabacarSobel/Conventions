<?php

namespace PC\FicheBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


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
        $entities = $em->getRepository('PCFicheBundle:Commun')->findBy(array('demandeur' => $user));
        foreach ($entities as $entity) {
            
            $entity->setRoute(strtolower($entity->getTemplate()));
        }

        return $this->render('PCFicheBundle:Demande:index.html.twig',array(
            'entities' => $entities,
                ));
    }
    
    /**
     * Montre les sous types en fonction du type choisi.
     * @param int $id l'id du type
     *
     */
    public function choisirSousTypeAction($id)
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
    public function choisirTypeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('PCFicheBundle:Type')->findAll();

        return $this->render('PCFicheBundle:Demande:new.html.twig', array(
            'entities' => $entities
        ));
    }
  
}
