<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Montage;
use App\Repository\MontageRepository;
use App\Form\MontageType;
use App\Entity\Espece;
use App\Repository\EspeceRepository;


class MontageController extends AbstractController
{
    /**
     * @Route("/montage/index/{espece_id}", name="montage_index")
     */
    public function index($espece_id = null, MontageRepository $repo_montage, EspeceRepository $repo_espece)
    {
        if (! $espece_id) {
          $montages = $repo_montage->findAll();
        }
        else {
          $espece = $repo_espece->find($espece_id);
          $montages = $espece->getMontages();
        }
        return $this->render('montage/index.html.twig', [
            'montages' => $montages
        ]);
    }

    /**
     * @Route("/montage/create", name="montage_create")
     * @Route("/montage/update/{id}", name="montage_update")
     * @param  [type]        $montage [description]
     * @param  ObjectManager $manager [description]
     * @param  Request       $request [description]
     * @return [type]                 [description]
     */
    public function create(Montage $montage = null, ObjectManager $manager, Request $request)
    {
      if (! $montage)
      {
        $montage = new Montage;
      }
      $form = $this->createForm(MontageType::class, $montage);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form-> isValid())
      {
        $manager->persist($montage);
        $manager->flush($montage);
        return $this->RedirectToRoute('montage_index');
      }

      return $this->render('montage/montage_edit.html.twig', [
        'formMontage' => $form->createView(),
        'editMode' => $montage-> getId() != null
      ]);
    }

    /**
     * @Route("/montage/delete/{id}", name="montage_delete")
     * @param  Montage       $montage [description]
     * @param  ObjectManager $manager [description]
     * @return [type]                 [description]
     */
    public function delete(Montage $montage, ObjectManager $manager)
    {
      $manager->remove($montage);
      $manager->flush();
      return $this->RedirectToRoute('montage_index');
    }

    /**
     * @Route("/montage/link/{id}/{espece_id}", name = "link_espece")
     * @param  Montage          $montage     [description]
     * @param  [type]           $espece_id   [description]
     * @param  EspeceRepository $repo_espece [description]
     * @param  ObjectManager    $manager     [description]
     * @return [type]                        [description]
     */
    public function linkEspece(Montage $montage, $espece_id = null, EspeceRepository $repo_espece, ObjectManager $manager)
    {
      if (! $espece_id)
      {
        $especes = $repo_espece->findBy([],['nom'=>'ASC']);
        $link_especes = $montage->getEspeces()->toArray();
        // $unlink_especes = array_diff($especes, $link_especes);
        return $this->Render('montage/link_espece.html.twig', [
          'montage' => $montage,
          'link_especes' => $link_especes,
          'unlink_especes' => $especes
        ]);
      }
      $espece = $repo_espece->find($espece_id);
      $montage->addEspece($espece);
      $espece->addMontage($montage);
      $manager->persist($montage);
      $manager->persist($espece);
      $manager->flush();
      return $this->RedirectToRoute('link_espece', [
        'id' => $montage->getId()
      ]);
    }


    /**
     * @Route("/montage/unlink/{id}/{espece_id}", name = "unlink_espece")
     * [unlinkEspece description]
     * @param  Montage          $montage     [description]
     * @param  [type]           $espece_id   [description]
     * @param  EspeceRepository $repo_espece [description]
     * @param  ObjectManager    $manager     [description]
     * @return [type]                        [description]
     */
    public function unlinkEspece(Montage $montage, $espece_id, EspeceRepository $repo_espece, ObjectManager $manager)
    {
      $espece = $repo_espece->find($espece_id);
      $montage->removeEspece($espece);
      $espece->removeMontage($montage);
      $manager->persist($montage);
      $manager->persist($espece);
      $manager->flush();
      return $this->RedirectToRoute('link_espece', [
        'id' => $montage->getId()
      ]);
    }
}
