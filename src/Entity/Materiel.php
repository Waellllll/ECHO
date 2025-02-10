<?php

namespace App\Entity;

use App\Repository\MaterielRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: MaterielRepository::class)]
class Materiel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "le nom ne peut pas etre vide.")]
    #[Assert\Length( 
        min: 3,
        max: 50,
        minMessage: "le nom doit contenir au moins 3 caractères.",
        maxMessage: "Nom ne doit pas dépasser 50 caracters"
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
   
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $marque = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 0)]
    #[Assert\Positive(message: "Le prix doit être un nombre positif")]
    private ?string $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    /**
     * @var Collection<int, Conseil>
     */
    #[ORM\ManyToMany(targetEntity: Conseil::class, inversedBy: 'materiels')]
    private Collection $conseil;

    public function __construct()
    {
        $this->conseil = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, Conseil>
     */
    public function getConseil(): Collection
    {
        return $this->conseil;
    }

    public function addConseil(Conseil $conseil): static
    {
        if (!$this->conseil->contains($conseil)) {
            $this->conseil->add($conseil);
        }

        return $this;
    }

    public function removeConseil(Conseil $conseil): static
    {
        $this->conseil->removeElement($conseil);

        return $this;
    }
}
