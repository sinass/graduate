<?php

namespace Ensat\GraduateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ensat\GraduateBundle\Entity\EVENEMENT;
use Ensat\GraduateBundle\Form\EVENEMENTType;

/**
 * EVENEMENT controller.
 *
 * @Route("/evenement")
 */
class EVENEMENTController extends Controller
{

    /**
     * Lists all EVENEMENT entities.
     *
     * @Route("/", name="evenement")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EnsatGraduateBundle:EVENEMENT')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new EVENEMENT entity.
     *
     * @Route("/", name="evenement_create")
     * @Method("POST")
     * @Template("EnsatGraduateBundle:EVENEMENT:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new EVENEMENT();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('evenement_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a EVENEMENT entity.
    *
    * @param EVENEMENT $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(EVENEMENT $entity)
    {
        $form = $this->createForm(new EVENEMENTType(), $entity, array(
            'action' => $this->generateUrl('evenement_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new EVENEMENT entity.
     *
     * @Route("/new", name="evenement_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new EVENEMENT();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a EVENEMENT entity.
     *
     * @Route("/{id}", name="evenement_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:EVENEMENT')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EVENEMENT entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing EVENEMENT entity.
     *
     * @Route("/{id}/edit", name="evenement_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:EVENEMENT')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EVENEMENT entity.');
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
    * Creates a form to edit a EVENEMENT entity.
    *
    * @param EVENEMENT $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(EVENEMENT $entity)
    {
        $form = $this->createForm(new EVENEMENTType(), $entity, array(
            'action' => $this->generateUrl('evenement_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing EVENEMENT entity.
     *
     * @Route("/{id}", name="evenement_update")
     * @Method("PUT")
     * @Template("EnsatGraduateBundle:EVENEMENT:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:EVENEMENT')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EVENEMENT entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('evenement_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a EVENEMENT entity.
     *
     * @Route("/{id}", name="evenement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EnsatGraduateBundle:EVENEMENT')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EVENEMENT entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('evenement'));
    }

    /**
     * Creates a form to delete a EVENEMENT entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evenement_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
