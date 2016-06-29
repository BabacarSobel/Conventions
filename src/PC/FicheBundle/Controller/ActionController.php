<?php

namespace PC\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PC\FicheBundle\Entity\Action;
use PC\FicheBundle\Form\ActionType;

/**
 * Action controller.
 *
 */
class ActionController extends Controller
{

    /**
     * Lists all Action entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PCFicheBundle:Action')->findAll();

        return $this->render('PCFicheBundle:Action:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Action entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Action();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            // on recupere la fiche concerné par le message
            $em = $this->getDoctrine()->getManager();
            $entityOwner = $em->getRepository('PCFicheBundle:Commun')->find($id);
            
            // on paramètre le message en rajoutant sa fiche et son auteur
            $entity->setCommun($entityOwner);
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

        return $this->render('PCFicheBundle:Action:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Action entity.
     *
     * @param Action $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Action $entity)
    {
        $form = $this->createForm(new ActionType(), $entity, array(
            'action' => $this->generateUrl('action_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Action entity.
     *
     */
    public function newAction()
    {
        $entity = new Action();
        $form   = $this->createCreateForm($entity);

        return $this->render('PCFicheBundle:Action:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Action entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:Action')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Action entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:Action:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Action entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:Action')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Action entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:Action:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Action entity.
    *
    * @param Action $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Action $entity)
    {
        $form = $this->createForm(new ActionType(), $entity, array(
            'action' => $this->generateUrl('action_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Action entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:Action')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Action entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('action_edit', array('id' => $id)));
        }

        return $this->render('PCFicheBundle:Action:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Action entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PCFicheBundle:Action')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Action entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('action'));
    }

    /**
     * Creates a form to delete a Action entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('action_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
