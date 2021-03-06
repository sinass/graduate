<?php

namespace Ensat\GraduateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ensat\GraduateBundle\Entity\ADMINISTRATEUR;
use Ensat\GraduateBundle\Form\ADMINISTRATEURType;

/**
 * ADMINISTRATEUR controller.
 *
 * @Route("/administrateur")
 */
class ADMINISTRATEURController extends Controller
{

    /**
     * Lists all ADMINISTRATEUR entities.
     *
     * @Route("/", name="administrateur")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EnsatGraduateBundle:ADMINISTRATEUR')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ADMINISTRATEUR entity.
     *
     * @Route("/", name="administrateur_create")
     * @Method("POST")
     * @Template("EnsatGraduateBundle:ADMINISTRATEUR:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ADMINISTRATEUR();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('administrateur_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a ADMINISTRATEUR entity.
    *
    * @param ADMINISTRATEUR $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ADMINISTRATEUR $entity)
    {
        $form = $this->createForm(new ADMINISTRATEURType(), $entity, array(
            'action' => $this->generateUrl('administrateur_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ADMINISTRATEUR entity.
     *
     * @Route("/new", name="administrateur_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ADMINISTRATEUR();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }


    /**
     * Displays a form to edit an existing ADMINISTRATEUR entity.
     *
     * @Route("/{id}/edit", name="administrateur_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:ADMINISTRATEUR')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ADMINISTRATEUR entity.');
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
    * Creates a form to edit a ADMINISTRATEUR entity.
    *
    * @param ADMINISTRATEUR $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ADMINISTRATEUR $entity)
    {
        $form = $this->createForm(new ADMINISTRATEURType(), $entity, array(
            'action' => $this->generateUrl('administrateur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ADMINISTRATEUR entity.
     *
     * @Route("/{id}", name="administrateur_update")
     * @Method("PUT")
     * @Template("EnsatGraduateBundle:ADMINISTRATEUR:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsatGraduateBundle:ADMINISTRATEUR')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ADMINISTRATEUR entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('administrateur_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ADMINISTRATEUR entity.
     *
     * @Route("/{id}", name="administrateur_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id)
    {
        
        
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EnsatGraduateBundle:ADMINISTRATEUR')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ADMINISTRATEUR entity.');
            }

            $em->remove($entity);
            $em->flush();

        return $this->redirect($this->generateUrl('administrateur'));
    }

    /**
     * Creates a form to delete a ADMINISTRATEUR entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('administrateur_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
