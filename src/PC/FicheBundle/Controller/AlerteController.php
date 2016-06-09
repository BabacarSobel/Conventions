<?php

namespace PC\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PC\FicheBundle\Entity\Alerte;
use PC\FicheBundle\Form\AlerteType;

/**
 * Alerte controller.
 *
 */

class AlerteController extends DefaultController
{

    /**
     * liste des alertes
     *
     */
    public function indexAction()
    {
        // on récupère le manager
        $em = $this->getDoctrine()->getManager();
        
        //on utilise la fonction findall du repository d'Alerte
        $entities = $em->getRepository('PCFicheBundle:Alerte')->findAll();
        return $this->render('PCFicheBundle:Alerte:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    /**
     * Créer une nouvelle alerte
     */
    public function createAction(Request $request)
    {
        $entity = new Alerte();
        // ajout du formulaire de création
        $form = $this->createCreateForm($entity);
        // si un requête http est posté, on en récupère le contenu que l'on stoke dans l'entité créée
        $form->handleRequest($request);

        if ($form->isValid()) {
            // on appelle le manager et on sauvegarde l'entité
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            // on affiche l'alerte créée
            return $this->redirect($this->generateUrl('alerte_show', array('id' => $entity->getId())));
        }

        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     *Créer un formulaire pour la création d'un alerte
     * @param Alerte $entity The entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Alerte $entity)
    {
        // création d'un formulaire de type AlerteType
        $form = $this->createForm(new AlerteType(), $entity, array(
            'action' => $this->generateUrl('alerte_create'),
            'method' => 'POST',
        ));

        // on rajoute le bouton submit
        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Montre le formulaire de création
     */
    public function newAction()
    {
        $entity = new Alerte();
        $form   = $this->createCreateForm($entity);

        return $this->render('PCFicheBundle:Alerte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Montre une alerte
     * @param string id
     *
     */
    public function showAction($id)
    {
        // on appelle le manager et on utilise la fonction find d'un repository d'Alerte pour trouver la bonne entité
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PCFicheBundle:Alerte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Alerte entity.');
        }
        // on crée un formulaire de suppression
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:Alerte:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Permet d'éditer une alerte
     * @param string $id
     *
     */
    public function editAction($id)
    {
        // on appelle le manager et on utilise la fonction find d'un repository d'Alerte pour trouver la bonne entité
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PCFicheBundle:Alerte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Alerte entity.');
        }
        
        // on crée un formulaire d'édition
        $editForm = $this->createEditForm($entity);
        // on crée un formulaire de suppression
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:Alerte:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Créer le formulaire d'édition
    * @param Alerte $entity The entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Alerte $entity)
    {
        // création d'un formulaire de type AlerteType
        $form = $this->createForm(new AlerteType(), $entity, array(
            'action' => $this->generateUrl('alerte_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Montrer le formulaire d'édition
     *
     */
    public function updateAction(Request $request, $id)
    {
        // on appelle le manager et on utilise la fonction find d'un repository d'Alerte pour trouver la bonne entité
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:Alerte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Alerte entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            // on appelle l'action edit
            return $this->redirect($this->generateUrl('alerte_edit', array('id' => $id)));
        }

        return $this->render('PCFicheBundle:Alerte:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Supprime l'entité
     * @param Request $request la requête HTTP
     * @param string $id
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PCFicheBundle:Alerte')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Alerte entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pc_home'));
    }

    /**
     * Créer le formulaire de suppression
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('alerte_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
