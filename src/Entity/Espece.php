<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EspeceRepository")
 * @Vich\Uploadable
 */
class Espece
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * @Vich\UploadableField(mapping="espece_image", fileNameProperty="imageName")
     * @var File|null
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string|null
     */
    private $imageName;


    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $maille;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contenu;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Montage", inversedBy="especes")
     */
    private $montages;

    public function __construct()
    {
        $this->montages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getMaille(): ?int
    {
        return $this->maille;
    }

    public function setMaille(?int $maille): self
    {
        $this->maille = $maille;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getImageName(): ?string
    {
      return $this->imageName;
    }

    /**
     * @param ?null|string $imageName
     */
    public function setImageName(?string $imageName): void
    {
      $this->imageName = $imageName;
    }

    /**
     * @return null|File
     */
    public function getImageFile(): ?File
    {
      return $this->imageFile;
    }


    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;
        if(null !== $imageFile)
        {
          $this->updatedAt = new \DateTimeImmutable();
        }

    }

    /**
     * @return Collection|Montage[]
     */
    public function getMontages(): Collection
    {
        return $this->montages;
    }

    public function addMontage(Montage $montage): self
    {
        if (!$this->montages->contains($montage)) {
            $this->montages[] = $montage;
        }

        return $this;
    }

    public function removeMontage(Montage $montage): self
    {
        if ($this->montages->contains($montage)) {
            $this->montages->removeElement($montage);
        }

        return $this;
    }

}
