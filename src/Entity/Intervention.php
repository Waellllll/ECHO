<?php

namespace App\Entity;

use App\Repository\InterventionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InterventionRepository::class)]
class Intervention
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $decr = null;

    #[ORM\ManyToOne(inversedBy: 'interventions')]
    private ?Terrain $terrain = null;

    #[ORM\ManyToOne(inversedBy: 'interventions')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDecr(): ?string
    {
        return $this->decr;
    }

    public function setDecr(?string $decr): static
    {
        $this->decr = $decr;

        return $this;
    }

    public function getTerrain(): ?Terrain
    {
        return $this->terrain;
    }

    public function setTerrain(?Terrain $terrain): static
    {
        $this->terrain = $terrain;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
