<?php

namespace Ensat\GraduateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ensat\GraduateBundle\Entity\RESEAUSOCIAL;
use Ensat\GraduateBundle\Form\RESEAUSOCIALType;

/**
 * RESEAUSOCIAL controller.
 *
 * @Route("/reseausocial")
 */
class RESEAUSOCIALController extends Controller
{

    /**
     * Lists all RESEAUSOCIAL entities.
     *
     * @Route("/", name="reseausocial")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EnsatGraduateBundle:RESEAUSOCIAL')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new RESEAUSOCIAL entity.
     *
     * @Route("/", name="reseausocial_create")
     * @Method("POST")
     * @Template("EnsatGraduateBundle:RESEAUSOCIAL:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new RESEAUSOCIAL();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('reseausocial_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a RESEAUSOCIAL entity.
    *
    * @param RESEAUSOCIAL $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(RESEAUSOCIAL $entity)
    {
        $form = $this->createForm(new RESEAUSOCIALType(), $entity, array(
            'action' => $this->generateUrl('reseausocial_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new RESEAUSOCIAL entity.
     *
     * @Route("/new", name="reseausocial_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new RESEAUSOCIAL();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a RESEAUSOCIAL entity.
     *
     * @Route("/{id}", name="reseausocial_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:RESEAUSOCIAL')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RESEAUSOCIAL entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing RESEAUSOCIAL entity.
     *
     * @Route("/{id}/edit", name="reseausocial_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:RESEAUSOCIAL')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RESEAUSOCIAL entity.');
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
    * Creates a form to edit a RESEAUSOCIAL entity.
    *
    * @param RESEAUSOCIAL $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(RESEAUSOCIAL $entity)
    {
        $form = $this->createForm(new RESEAUSOCIALType(), $entity, array(
            'action' => $this->generateUrl('reseausocial_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing RESEAUSOCIAL entity.
     *
     * @Route("/{id}", name="reseausocial_update")
     * @Method("PUT")
     * @Template("EnsatGraduateBundle:RESEAUSOCIAL:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:RESEAUSOCIAL')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RESEAUSOCIAL entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('reseausocial_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a RESEAUSOCIAL entity.
     *
     * @Route("/{id}", name="reseausocial_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EnsatGraduateBundle:RESEAUSOCIAL')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find RESEAUSOCIAL entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('reseausocial'));
    }

    /**
     * Creates a form to delete a RESEAUSOCIAL entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reseausocial_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
