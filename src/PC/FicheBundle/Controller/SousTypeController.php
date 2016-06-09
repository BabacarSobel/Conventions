<?php

namespace PC\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PC\FicheBundle\Entity\SousType;
use PC\FicheBundle\Form\SousTypeType;

/**
 * SousType controller.
 *
 */
class SousTypeController extends DefaultController
{

    /**
     * Lists all SousType entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PCFicheBundle:SousType')->findAll();

        return $this->render('PCFicheBundle:SousType:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new SousType entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new SousType();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('soustype_show', array('id' => $entity->getId())));
        }

        return $this->render('PCFicheBundle:SousType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a SousType entity.
     *
     * @param SousType $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(SousType $entity)
    {
        $form = $this->createForm(new SousTypeType(), $entity, array(
            'action' => $this->generateUrl('soustype_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new SousType entity.
     *
     */
    public function newAction()
    {
        $entity = new SousType();
        $form   = $this->createCreateForm($entity);

        return $this->render('PCFicheBundle:SousType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a SousType entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:SousType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SousType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:SousType:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing SousType entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:SousType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SousType entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:SousType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a SousType entity.
    *
    * @param SousType $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SousType $entity)
    {
        $form = $this->createForm(new SousTypeType(), $entity, array(
            'action' => $this->generateUrl('soustype_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing SousType entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:SousType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SousType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('soustype_edit', array('id' => $id)));
        }

        return $this->render('PCFicheBundle:SousType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a SousType entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PCFicheBundle:SousType')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find SousType entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('soustype'));
    }

    /**
     * Creates a form to delete a SousType entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('soustype_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
