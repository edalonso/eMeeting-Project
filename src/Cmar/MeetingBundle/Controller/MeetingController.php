<?php

namespace Cmar\MeetingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Form\MeetingType;

/**
 * Meeting controller.
 *
 * @Route("/meeting")
 */
class MeetingController extends Controller
{
    /**
     * Lists all Meeting entities.
     *
     * @Route("/", name="meeting")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('CmarMeetingBundle:Meeting')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Meeting entity.
     *
     * @Route("/{id}/show", name="meeting_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CmarMeetingBundle:Meeting')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Meeting entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        
	);
    }

    /**
     * Displays a form to create a new Meeting entity.
     *
     * @Route("/new", name="meeting_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Meeting();
        $form   = $this->createForm(new MeetingType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Meeting entity.
     *
     * @Route("/create", name="meeting_create")
     * @Method("post")
     * @Template("CmarMeetingBundle:Meeting:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Meeting();
        $request = $this->getRequest();
        $form    = $this->createForm(new MeetingType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('meeting_show', array('id' => $entity->getId())));            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Meeting entity.
     *
     * @Route("/{id}/edit", name="meeting_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CmarMeetingBundle:Meeting')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Meeting entity.');
        }

        $editForm = $this->createForm(new MeetingType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Meeting entity.
     *
     * @Route("/{id}/update", name="meeting_update")
     * @Method("post")
     * @Template("CmarMeetingBundle:Meeting:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('CmarMeetingBundle:Meeting');
        $meetingService = $this->get('cmar_meeting');

        $entity = $em->getRepository('CmarMeetingBundle:Meeting')->find($id);
        $entityOld = clone $entity;

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Meeting entity.');
        }

        $editForm   = $this->createForm(new MeetingType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        $num_magic_rooms = count($repo->findByStatesAndMagicRoom(array(Meeting::STATE_NOW, Meeting::STATE_LOCKED), true));
        $numRooms = $meetingService->getNumRooms();
        $numRoomsForNonMagic = $meetingService->getNumRoomsForNonMagic();
        if ($entity->getMagic() AND !$entityOld->getMagic()) {
            if ($num_magic_rooms == ($numRooms-$numRoomsForNonMagic)) {
                $this->get('session')->setFlash('error', 'Number of Magic Rooms complete');
                return $this->redirect($this->generateUrl('meeting_edit', array('id' => $id)));
            }
        }
        
        
        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('meeting_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Meeting entity.
     *
     * @Route("/{id}/delete", name="meeting_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('CmarMeetingBundle:Meeting')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Meeting entity.');
            }

            

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('meeting'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
