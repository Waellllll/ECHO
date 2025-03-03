<?php

namespace App\Entity;

use App\Repository\ElearningRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ElearningRepository::class)]
class Elearning
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Title cannot be blank.")]
    #[Assert\Length(max: 255, maxMessage: "Title cannot exceed {{ limit }} characters.")]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "Description cannot be blank.")]
    private ?string $description = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Content type cannot be blank.")]
    private ?string $content_type = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Content URL cannot be blank.")]
    private ?string $content_url = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Duration cannot be blank.")]
    #[Assert\Positive(message: "Duration must be a positive number.")]
    private ?int $duration = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Difficulty level cannot be blank.")]
    private ?string $difficulty_level = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $created_at = null;
    
    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\Column(type: Types::STRING, nullable: true)]
    private ?string $file_path = null;

    #[ORM\OneToMany(targetEntity: Reclamation::class, mappedBy: 'article')]
    private Collection $reclamations;

    #[ORM\ManyToMany(targetEntity: Category::class, inversedBy: 'elearnings', cascade: ['persist'])]
    #[ORM\JoinTable(name: 'elearning_category')]
    private Collection $categories;

    public function __construct()
    {
        $this->created_at = new \DateTimeImmutable();
        $this->updated_at = new \DateTimeImmutable();
        $this->reclamations = new ArrayCollection();
        $this->categories = new ArrayCollection();
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
        $this->updated_at = new \DateTimeImmutable();
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        $this->updated_at = new \DateTimeImmutable();
        return $this;
    }

    public function getContentType(): ?string
    {
        return $this->content_type;
    }

    public function setContentType(string $content_type): static
    {
        $this->content_type = $content_type;
        $this->updated_at = new \DateTimeImmutable();
        return $this;
    }

    public function getContentUrl(): ?string
    {
        return $this->content_url;
    }

    public function setContentUrl(string $content_url): static
    {
        $this->content_url = $content_url;
        $this->updated_at = new \DateTimeImmutable();
        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): static
    {
        $this->duration = $duration;
        $this->updated_at = new \DateTimeImmutable();
        return $this;
    }

    public function getDifficultyLevel(): ?string
    {
        return $this->difficulty_level;
    }

    public function setDifficultyLevel(string $difficulty_level): static
    {
        $this->difficulty_level = $difficulty_level;
        $this->updated_at = new \DateTimeImmutable();
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }   

    public function setUpdatedAt(\DateTimeInterface $updated_at): static
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function getFilePath(): ?string
    {
        return $this->file_path;
    }

    public function setFilePath(?string $file_path): static
    {
        $this->file_path = $file_path;
        $this->updated_at = new \DateTimeImmutable();
        return $this;
    }

    public function getReclamations(): Collection
    {
        return $this->reclamations;
    }

    public function addReclamation(Reclamation $reclamation): static
    {
        if (!$this->reclamations->contains($reclamation)) {
            $this->reclamations->add($reclamation);
            $reclamation->setArticle($this);
        }
        return $this;
    }

    public function removeReclamation(Reclamation $reclamation): static
    {
        if ($this->reclamations->removeElement($reclamation)) {
            if ($reclamation->getArticle() === $this) {
                $reclamation->setArticle(null);
            }
        }
        return $this;
    }

    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function setCategories(Collection $categories): static
    {
        $this->categories = $categories;
        return $this;
    }

    public function addCategory(Category $category): static
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
            $category->addElearning($this);
        }
        return $this;
    }

    public function removeCategory(Category $category): static
    {
        if ($this->categories->removeElement($category)) {
            $category->removeElearning($this);
        }
        return $this;
    }

    public function clearCategories(): void
    {
        foreach ($this->categories as $category) {
            $category->removeElearning($this);
        }
        $this->categories->clear();
    }
}
