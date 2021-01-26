<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\MessageRepository;
use App\Entity\Message;
use App\Form\MessageType;

class MessageController extends AbstractController
{
    /**
     * @Route("/message/index", name="message_index")
     */
    public function index(MessageRepository $repo_message)
    {
        $messages = $repo_message->findBy([],['created_at' => 'DESC']);
        return $this->render('message/index.html.twig', [
            'messages' => $messages
        ]);
    }

    /**
     * @Route("/message/create", name="message_create")
     * @Route("/message/update/{id}", name="message_update")
     * @param  [type]        $message [description]
     * @param  Request       $request [description]
     * @param  ObjectManager $manager [description]
     * @return [type]                 [description]
     */
    public function create(Message $message = null, Request $request, ObjectManager $manager)
    {
      if(!$message)
      {
        $message = new Message;
        $message->setCreatedAt(new \DateTime());
      }
      $form = $this->createForm(MessageType::class, $message);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $manager->persist($message);
        $manager->flush($message);
        return $this->RedirectToRoute('message_index');
      }
      return $this->render('message/message_edit.html.twig', [
        'formMessage' => $form->createView(),
        'editMode' => $message->getId() != null
      ]);
    }

    /**
     * @Route("/message/delete/{id}", name="message_delete")
     * @param  Message       $message [description]
     * @param  ObjectManager $manager [description]
     * @return [type]                 [description]
     */
    public function delete(Message $message, ObjectManager $manager)
    {
      $manager->remove($message);
      $manager->flush();
      return $this->RedirectToRoute('message_index');
    }

}
