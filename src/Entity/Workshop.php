<?php

namespace App\Entity;

use App\Repository\WorkshopRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: WorkshopRepository::class)]
class Workshop
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $title = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThanOrEqual("today", message: "The date must be today or in the future.")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Range(min: 1)]
    private ?int $duration = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    private ?string $location = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    private ?string $instractor = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    private ?string $targetAudience = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $topicsCovered = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $materialsProvided = null;

    /**
     * @var Collection<int, Reservation>
     */
    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'workshopTitle')]
    private Collection $reservations;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]  
    private ?User $creatorName = null;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): static
    {
        $this->duration = $duration;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getInstractor(): ?string
    {
        return $this->instractor;
    }

    public function setInstractor(string $instractor): static
    {
        $this->instractor = $instractor;

        return $this;
    }

    public function getTargetAudience(): ?string
    {
        return $this->targetAudience;
    }

    public function setTargetAudience(string $targetAudience): static
    {
        $this->targetAudience = $targetAudience;

        return $this;
    }

    public function getTopicsCovered(): ?string
    {
        return $this->topicsCovered;
    }

    public function setTopicsCovered(string $topicsCovered): static
    {
        $this->topicsCovered = $topicsCovered;

        return $this;
    }

    public function getMaterialsProvided(): ?string
    {
        return $this->materialsProvided;
    }

    public function setMaterialsProvided(string $materialsProvided): static
    {
        $this->materialsProvided = $materialsProvided;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): static
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setWorkshopTitle($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getWorkshopTitle() === $this) {
                $reservation->setWorkshopTitle(null);
            }
        }

        return $this;
    }

    public function getCreatorName(): ?User
    {
        return $this->creatorName;
    }

    public function setCreatorName(?User $creatorName): static
    {
        $this->creatorName = $creatorName;

        return $this;
    }
}
