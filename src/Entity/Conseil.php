<?php

namespace App\Entity;

use App\Repository\ConseilRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: ConseilRepository::class)]
class Conseil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "le titre ne peut pas etre vide.")]
    #[Assert\Length( 
        min: 3,
        max: 50,
        minMessage: "le titre doit contenir au moins 3 caractères.",
        maxMessage: "titre ne doit pas dépasser 50 caracters"
    )]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "le contenue ne peut pas etre vide.")]
    #[Assert\Length( 
        min: 10,
        max: 255,
        minMessage: "le contenue doit contenir au moins 10 caractères.",
        maxMessage: "contenue ne doit pas dépasser 50 caracters"
    )]
    private ?string $contenu = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datePublication = null;

    #[ORM\Column]
    private ?int $note = null;

    /**
     * @var Collection<int, Materiel>
     */
    #[ORM\ManyToMany(targetEntity: Materiel::class, mappedBy: 'conseil')]
    #[Assert\Count(
        min:1,
        minMessage:"Vous devez selectionner au moins un materiel."
    )]
    private Collection $materiels;

    public function __construct()
    {
        $this->note=0;
        $this->datePublication= new \DateTime();   
        $this->materiels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->datePublication;
    }

    public function setDatePublication(\DateTimeInterface $datePublication): static
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return Collection<int, Materiel>
     */
    public function getMateriels(): Collection
    {
        return $this->materiels;
    }

    public function addMateriel(Materiel $materiel): static
    {
        if (!$this->materiels->contains($materiel)) {
            $this->materiels->add($materiel);
            $materiel->addConseil($this);
        }

        return $this;
    }

    public function removeMateriel(Materiel $materiel): static
    {
        if ($this->materiels->removeElement($materiel)) {
            $materiel->removeConseil($this);
        }

        return $this;
    }
}
