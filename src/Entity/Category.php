<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "category")]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Elearning::class, mappedBy: "categories")]
    private Collection $elearnings;

    public function __construct()
    {
        $this->elearnings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Collection<int, Elearning>
     */
    public function getElearnings(): Collection
    {
        return $this->elearnings;
    }

    public function addElearning(Elearning $elearning): static
    {
        if (!$this->elearnings->contains($elearning)) {
            $this->elearnings->add($elearning);
            $elearning->addCategory($this);
        }
        return $this;
    }

    public function removeElearning(Elearning $elearning): static
    {
        if ($this->elearnings->removeElement($elearning)) {
            $elearning->removeCategory($this);
        }
        return $this;
    }
}
