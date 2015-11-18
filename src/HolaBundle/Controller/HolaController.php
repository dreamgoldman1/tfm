<?php

namespace HolaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HolaBundle\Entity\Hola;
use HolaBundle\Form\HolaType;

/**
 * Hola controller.
 *
 */
class HolaController extends Controller
{

    /**
     * Lists all Hola entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HolaBundle:Hola')->findAll();

        return $this->render('HolaBundle:Hola:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Hola entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Hola();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hola_show', array('id' => $entity->getId())));
        }

        return $this->render('HolaBundle:Hola:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Hola entity.
     *
     * @param Hola $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Hola $entity)
    {
        $form = $this->createForm(new HolaType(), $entity, array(
            'action' => $this->generateUrl('hola_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hola entity.
     *
     */
    public function newAction()
    {
        $entity = new Hola();
        $form   = $this->createCreateForm($entity);

        return $this->render('HolaBundle:Hola:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hola entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HolaBundle:Hola')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hola entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HolaBundle:Hola:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hola entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HolaBundle:Hola')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hola entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HolaBundle:Hola:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Hola entity.
    *
    * @param Hola $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hola $entity)
    {
        $form = $this->createForm(new HolaType(), $entity, array(
            'action' => $this->generateUrl('hola_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hola entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HolaBundle:Hola')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hola entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hola_edit', array('id' => $id)));
        }

        return $this->render('HolaBundle:Hola:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Hola entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HolaBundle:Hola')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hola entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hola'));
    }

    /**
     * Creates a form to delete a Hola entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hola_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
