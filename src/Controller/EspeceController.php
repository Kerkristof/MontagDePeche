<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Espece;
use App\Repository\EspeceRepository;
use App\Form\EspeceType;

class EspeceController extends AbstractController
{
    /**
     * @Route("/espece/index", name="espece_index")
     */
    public function index(EspeceRepository $repo_espece)
    {
        $especes = $repo_espece->findBy([], ['nom' => 'ASC']);
        return $this->render('espece/index.html.twig', [
            'especes' => $especes
        ]);
    }

    /**
     * @Route("/espece/create", name="espece_create")
     * @Route("/espece/update/{id}", name="espece_update")
     * @param  [type]           $espece      [description]
     * @param  ObjectManager    $manager     [description]
     * @param  EspeceRepository $repo_espece [description]
     * @return [type]                        [description]
     */
    public function create(Espece $espece = null, ObjectManager $manager, Request $request)
    {
      if (! $espece)
      {
          $espece = new Espece;
      }
      $form = $this->createForm(EspeceType::class, $espece);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form-> isValid())
      {
        $manager->persist($espece);
        $manager->flush($espece);
        return $this->RedirectToRoute('espece_index');
      }

      return $this->render('espece/espece_edit.html.twig', [
        'formEspece' => $form->createView(),
        'editMode' => $espece-> getId() != null
      ]);
    }

    /**
     * @Route("/espece/delete/{id}", name="espece_delete")
     * @param  Espece        $espece  [description]
     * @param  ObjectManager $manager [description]
     * @return [type]                 [description]
     */
    public function delete(Espece $espece, ObjectManager $manager)
    {
      $manager->remove($espece);
      $manager->flush();
      return $this->RedirectToRoute('espece_index');
    }
}
