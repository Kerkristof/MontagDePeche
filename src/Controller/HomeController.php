<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Message;
use App\Repository\MessageRepository;

class HomeController extends AbstractController
{
  /**
  * @Route("/", name="home")
  */
  public function index(MessageRepository $repo_message)
  {
    $messages = $repo_message->findBy(['statut' => true], ['created_at' => 'DESC']);
    return $this->render('home/index.html.twig', [
      'messages' => $messages
    ]);
  }
}
