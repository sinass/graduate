<?php

namespace Ensat\GraduateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ensat\GraduateBundle\Entity\LAUREAT;
use Ensat\GraduateBundle\Form\LAUREATType;

/**
 * LAUREAT controller.
 *
 * @Route("/laureat")
 */
class LAUREATController extends Controller
{

    /**
     * Lists all LAUREAT entities.
     *
     * @Route("/", name="laureat")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EnsatGraduateBundle:LAUREAT')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new LAUREAT entity.
     *
     * @Route("/", name="laureat_create")
     * @Method("POST")
     * @Template("EnsatGraduateBundle:LAUREAT:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new LAUREAT();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('laureat_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a LAUREAT entity.
    *
    * @param LAUREAT $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(LAUREAT $entity)
    {
        $form = $this->createForm(new LAUREATType(), $entity, array(
            'action' => $this->generateUrl('laureat_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new LAUREAT entity.
     *
     * @Route("/new", name="laureat_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new LAUREAT();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a LAUREAT entity.
     *
     * @Route("/{id}", name="laureat_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:LAUREAT')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LAUREAT entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing LAUREAT entity.
     *
     * @Route("/{id}/edit", name="laureat_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:LAUREAT')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LAUREAT entity.');
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
    * Creates a form to edit a LAUREAT entity.
    *
    * @param LAUREAT $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(LAUREAT $entity)
    {
        $form = $this->createForm(new LAUREATType(), $entity, array(
            'action' => $this->generateUrl('laureat_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing LAUREAT entity.
     *
     * @Route("/{id}", name="laureat_update")
     * @Method("PUT")
     * @Template("EnsatGraduateBundle:LAUREAT:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:LAUREAT')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LAUREAT entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('laureat_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a LAUREAT entity.
     *
     * @Route("/{id}", name="laureat_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EnsatGraduateBundle:LAUREAT')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LAUREAT entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('laureat'));
    }

    /**
     * Creates a form to delete a LAUREAT entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('laureat_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
