<?php

namespace Acme\OrchestraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\OrchestraBundle\Entity\Livre;
use Acme\OrchestraBundle\Form\LivreType;

/**
 * Livre controller.
 *
 */
class LivreController extends Controller
{
    /**
     * Lists all Livre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeOrchestraBundle:Livre')->findAll();

        return $this->render('AcmeOrchestraBundle:Livre:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Livre entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeOrchestraBundle:Livre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Livre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeOrchestraBundle:Livre:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Livre entity.
     *
     */
    public function newAction()
    {
        $entity = new Livre();
        $form   = $this->createForm(new LivreType(), $entity);

        return $this->render('AcmeOrchestraBundle:Livre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Livre entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Livre();
        $form = $this->createForm(new LivreType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('livre_show', array('id' => $entity->getId())));
        }

        return $this->render('AcmeOrchestraBundle:Livre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Livre entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeOrchestraBundle:Livre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Livre entity.');
        }

        $editForm = $this->createForm(new LivreType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeOrchestraBundle:Livre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Livre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeOrchestraBundle:Livre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Livre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new LivreType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('livre_edit', array('id' => $id)));
        }

        return $this->render('AcmeOrchestraBundle:Livre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Livre entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeOrchestraBundle:Livre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Livre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('livre'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
