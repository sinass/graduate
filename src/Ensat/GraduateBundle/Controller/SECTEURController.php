<?php

namespace Ensat\GraduateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ensat\GraduateBundle\Entity\SECTEUR;
use Ensat\GraduateBundle\Form\SECTEURType;

/**
 * SECTEUR controller.
 *
 * @Route("/secteur")
 */
class SECTEURController extends Controller
{

    /**
     * Lists all SECTEUR entities.
     *
     * @Route("/", name="secteur")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EnsatGraduateBundle:SECTEUR')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new SECTEUR entity.
     *
     * @Route("/", name="secteur_create")
     * @Method("POST")
     * @Template("EnsatGraduateBundle:SECTEUR:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new SECTEUR();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('secteur_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a SECTEUR entity.
    *
    * @param SECTEUR $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(SECTEUR $entity)
    {
        $form = $this->createForm(new SECTEURType(), $entity, array(
            'action' => $this->generateUrl('secteur_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new SECTEUR entity.
     *
     * @Route("/new", name="secteur_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new SECTEUR();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }


    /**
     * Displays a form to edit an existing SECTEUR entity.
     *
     * @Route("/{id}/edit", name="secteur_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:SECTEUR')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SECTEUR entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a SECTEUR entity.
    *
    * @param SECTEUR $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SECTEUR $entity)
    {
        $form = $this->createForm(new SECTEURType(), $entity, array(
            'action' => $this->generateUrl('secteur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing SECTEUR entity.
     *
     * @Route("/{id}", name="secteur_update")
     * @Method("PUT")
     * @Template("EnsatGraduateBundle:SECTEUR:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:SECTEUR')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SECTEUR entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('secteur_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a SECTEUR entity.
     *
     * @Route("/{id}", name="secteur_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id)
    {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EnsatGraduateBundle:SECTEUR')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find SECTEUR entity.');
            }

            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('secteur'));
    }

    /**
     * Creates a form to delete a SECTEUR entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('secteur_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
