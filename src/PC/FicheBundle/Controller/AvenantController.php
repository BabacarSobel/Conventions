<?php

namespace PC\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Knp\Snappy\Pdf;
use PC\FicheBundle\Entity\Avenant;
use PC\FicheBundle\Form\AvenantType;
use PC\FicheBundle\Form\EditAvenantType;

/**
 * Avenant controller.
 *
 */
class AvenantController extends DefaultController
{

    /**
     * Lists all Avenant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PCFicheBundle:Avenant')->findAll();

        return $this->render('PCFicheBundle:Avenant:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    public function findOwner($entity){
        $path ='';
        if ($entity->getChartePartenariat()!= null){
            $path = 'ChartePartenariat';
        }
        if ($entity->getMadSalles()!= null){
            $path = 'MadSalles';
        }
        if ($entity->getMadEvenementGratuit()!= null){
            $path = 'MadEvenementGratuit';
        }
        if ($entity->getPifeClassique()!= null){
            $path = 'PifeClassique';
        }
        if ($entity->getPifeLaboratoire()!= null){
            $path = 'PifeLaboratoire';
        }
        if ($entity->getPsCati()!= null){
            $path = 'PsCati';
        }
        if ($entity->getAutre()!= null){
            $path = 'Autre';
        }
        return $path;
    }
    
    public function pdfAction($id,  Request $request)
    {
        $ownerId = $request->query->get('ownerId');
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PCFicheBundle:Avenant')->find($id);
        $path = $this->findOwner($entity);
        $owner = $em->getRepository('PCFicheBundle:'.$path)->find($ownerId);
        $snappy = new Pdf($this->get('kernel')->getRootDir()."/../wkhtmltox/bin/wkhtmltopdf");
        $name =  'avenant-'.$id.Date("YmdHis");
        if ($entity->getObjet() === 'proroger'){
            $template = 'PCFicheBundle:Template:avenantProrogation.html.twig';
        }elseif ($entity->getObjet() === 'modifier'){
            $template = 'PCFicheBundle:Template:avenantModification.html.twig';
        }elseif ($entity->getObjet() === 'proroger et modifier') {
            $template = 'PCFicheBundle:Template:avenantProrogationModification.html.twig';
        }
        $snappy->generateFromHtml($this->renderView($template,array('entity'=>$entity, 'owner' =>$owner)), $this->get('kernel')->getRootDir().'/../files/'.$name.'.pdf');
            return $this->render('PCFicheBundle:Fiche:pdf.html.twig'
                    ,array('pdf' => $snappy,
                        'filename' => $name.'.pdf')
                    );
    }
    
    /**
     * Creates a new Avenant entity.
     *
     */
    public function createAction(Request $request, $id)
    {
        $entity = new Avenant();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $fiche = $em->getRepository('PCFicheBundle:Commun')->find($id);
            $fiche->incrementerNombreNouveauxAvenants();
            $entity->setCommun($fiche);
            $entity->setNumeroFiche($id);
            $entity->setDateContratInitial($fiche->getDateSignaturePolytech());
            $entity->setDateEffetCI($fiche->getDateEffet());
            $entity->setDateFinCI($fiche->getDateEcheance());
            $ajout = " + ".$entity->getNbMoisProrogation()." month";
            if ($entity->getObjet() === 'proroger'){
                $date = $fiche->getDateEcheance();

                if ($date != null){
                    echo 'je rentre ';
                    $date=  $date->format('Y-m-d');
                    $expirationDate = date("Y-m-d", strtotime($date.$ajout));
                    $expirationDate = new DateTime($expirationDate);
                    $entity->setDateExpiration($expirationDate);
                }else{
                    $request->getSession()
                    ->getFlashBag()
                    ->add('error', "Pas de date d'écheance trouvé. Votre avenant n'a pas été enregistré");
                    return $this->redirect($this->generateUrl('fiche_show', array('id' => $fiche->getId())));
                }
            
            }
            $alerte = new Alerte();
            $this->notifierCreationAvenant($alerte,$entity);
            $em->persist($entity);
            $em->flush();
            $em->persist($alerte);
            $em->flush();

            return $this->redirect($this->generateUrl('avenant_show', array('id' => $entity->getId())));
        }

        return $this->render('PCFicheBundle:Avenant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Avenant entity.
     *
     * @param Avenant $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Avenant $entity)
    {
        $form = $this->createForm(new AvenantType(), $entity, array(
            'action' => $this->generateUrl('avenant_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }
    
        public function notifierCreationAvenant($alerte,$entity)
    {
        $alerte->setIntitule('Nouvel avenant');
        $alerte->setObjet('Un nouvel avenant a été créé');
        $alerte->setAvenant($entity);
        $alerte->setRoute('autre_show');
        $alerte->setDateAlerte(new DateTime());
        $alerte->setOwnerId($entity->getId());
    }

    /**
     * Displays a form to create a new Avenant entity.
     *
     */
    public function newAction()
    {
        $entity = new Avenant();
        $form   = $this->createCreateForm($entity);

        return $this->render('PCFicheBundle:Avenant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Avenant entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:Avenant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avenant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $cheminRetour = $this->getRequest()->headers->get('referer');

        return $this->render('PCFicheBundle:Avenant:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'cheminRetour' => $cheminRetour
        ));
    }
    
        /**
     * Finds and displays a Avenant entity.
     *
     */
    public function showrequestAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PCFicheBundle:Avenant')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avenant entity.');
        }


        return $this->render('PCFicheBundle:Avenant:showrequest.html.twig', array(
            'entity'      => $entity,
        ));
    }

    /**
     * Displays a form to edit an existing Avenant entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:Avenant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avenant entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PCFicheBundle:Avenant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Avenant entity.
    *
    * @param Avenant $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Avenant $entity)
    {
        $form = $this->createForm(new EditAvenantType(), $entity, array(
            'action' => $this->generateUrl('avenant_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre à jour'));

        return $form;
    }
    /**
     * Edits an existing Avenant entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PCFicheBundle:Avenant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avenant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('avenant_edit', array('id' => $id)));
        }

        return $this->render('PCFicheBundle:Avenant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Avenant entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PCFicheBundle:Avenant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Avenant entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pc_home'));
    }

    /**
     * Creates a form to delete a Avenant entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('avenant_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer','attr'=>array( 'class'=> 'pc_sidebar_element')))
            ->getForm()
        ;
    }
}
