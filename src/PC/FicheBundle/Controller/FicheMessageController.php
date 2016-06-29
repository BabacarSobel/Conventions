<?php

namespace PC\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PC\FicheBundle\Entity\FicheMessage;
use PC\FicheBundle\Form\FicheMessageType;

/**
 * FicheMessage controller.
 *
 */
class FicheMessageController extends Controller
{

    /**
     * Lists all FicheMessage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PCFicheBundle:FicheMessage')->findAll();

        return $this->render('PCFicheBundle:FicheMessage:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new FicheMessage entity.
     *
     */
    public function createAction(Request $request,$ownerId)
    {
        $entity = new FicheMessage();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $emCP = $this->getDoctrine()->getManager();
            $entityCP = $emCP->getRepository('PCFicheBundle:Commun')->find($ownerId);
            $entity->setCommun($entityCP);
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

    /**
     * Creates a form to create a FicheMessage entity.
     *
     * @param FicheMessage $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FicheMessage $entity, $id)
    {
        $form = $this->createForm(new FicheMessageType(), $entity, array(
            'action' => $this->generateUrl('fichemessage_create',$id),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new FicheMessage entity.
     *
     */
    public function newAction($id)
    {
        $entity = new FicheMessage();
        $form   = $this->createCreateForm($entity);

        return $this->render('PCFicheBundle:FicheMessage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'id'     => $id
        ));
    }

    /**
     * Finds and displays a FicheMessage entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:FicheMessage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FicheMessage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:FicheMessage:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FicheMessage entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:FicheMessage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FicheMessage entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:FicheMessage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a FicheMessage entity.
    *
    * @param FicheMessage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FicheMessage $entity)
    {
        $form = $this->createForm(new FicheMessageType(), $entity, array(
            'action' => $this->generateUrl('fichemessage_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing FicheMessage entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:FicheMessage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FicheMessage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fichemessage_edit', array('id' => $id)));
        }

        return $this->render('PCFicheBundle:FicheMessage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a FicheMessage entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PCFicheBundle:FicheMessage')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FicheMessage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fichemessage'));
    }

    /**
     * Creates a form to delete a FicheMessage entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fichemessage_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
