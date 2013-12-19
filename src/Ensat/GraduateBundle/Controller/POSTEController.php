<?php

namespace Ensat\GraduateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ensat\GraduateBundle\Entity\POSTE;
use Ensat\GraduateBundle\Form\POSTEType;

/**
 * POSTE controller.
 *
 * @Route("/poste")
 */
class POSTEController extends Controller
{

    /**
     * Lists all POSTE entities.
     *
     * @Route("/", name="poste")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EnsatGraduateBundle:POSTE')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new POSTE entity.
     *
     * @Route("/", name="poste_create")
     * @Method("POST")
     * @Template("EnsatGraduateBundle:POSTE:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new POSTE();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('poste_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a POSTE entity.
    *
    * @param POSTE $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(POSTE $entity)
    {
        $form = $this->createForm(new POSTEType(), $entity, array(
            'action' => $this->generateUrl('poste_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new POSTE entity.
     *
     * @Route("/new", name="poste_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new POSTE();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a POSTE entity.
     *
     * @Route("/{id}", name="poste_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:POSTE')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find POSTE entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing POSTE entity.
     *
     * @Route("/{id}/edit", name="poste_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:POSTE')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find POSTE entity.');
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
    * Creates a form to edit a POSTE entity.
    *
    * @param POSTE $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(POSTE $entity)
    {
        $form = $this->createForm(new POSTEType(), $entity, array(
            'action' => $this->generateUrl('poste_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing POSTE entity.
     *
     * @Route("/{id}", name="poste_update")
     * @Method("PUT")
     * @Template("EnsatGraduateBundle:POSTE:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:POSTE')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find POSTE entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('poste_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a POSTE entity.
     *
     * @Route("/{id}", name="poste_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EnsatGraduateBundle:POSTE')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find POSTE entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('poste'));
    }

    /**
     * Creates a form to delete a POSTE entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('poste_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
