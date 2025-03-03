<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
<<<<<<< Updated upstream

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
=======
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
#[ORM\HasLifecycleCallbacks] // Ensures lifecycle methods work
#[Vich\Uploadable]
>>>>>>> Stashed changes
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
<<<<<<< Updated upstream
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: 'string', enumType: StatusEnum::class)]
    private ?StatusEnum $status = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

=======
    #[Assert\NotBlank(message: "Title cannot be blank.")]
    #[Assert\Length(min: 5, max: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "Description cannot be blank.")]
    #[Assert\Length(min: 10)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull]
    private ?Elearning $article = null;

    // VichUploader File Handling
    #[Vich\UploadableField(mapping: "reclamation_evidence", fileNameProperty: "evidence")]
    #[Assert\File(
        maxSize: "5M",
        mimeTypes: ["image/jpeg", "image/png", "application/pdf"]
    )]
    private ?File $evidenceFile = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $evidence = null;

    public function __construct()
    {
        $this->created_at = new \DateTimeImmutable();
        $this->updated_at = new \DateTimeImmutable();
    }

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->created_at = new \DateTimeImmutable();
        $this->updated_at = new \DateTimeImmutable();
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updated_at = new \DateTimeImmutable();
    }

>>>>>>> Stashed changes
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
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
<<<<<<< Updated upstream

        return $this;
    }

    public function getStatus(): ?StatusEnum
    {
        return $this->status;
    }

    public function setStatus(StatusEnum $status): static
    {
        $this->status = $status;

=======
>>>>>>> Stashed changes
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

<<<<<<< Updated upstream
    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

=======
>>>>>>> Stashed changes
    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

<<<<<<< Updated upstream
    public function setUpdatedAt(\DateTimeImmutable $updated_at): static
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
=======
    public function getArticle(): ?Elearning
    {
        return $this->article;
    }

    public function setArticle(?Elearning $article): static
    {
        $this->article = $article;
        return $this;
    }

    // VichUploader Methods
    public function getEvidenceFile(): ?File
    {
        return $this->evidenceFile;
    }

    public function setEvidenceFile(?File $evidenceFile = null): void
    {
        $this->evidenceFile = $evidenceFile;

        if ($evidenceFile) {
            $this->updated_at = new \DateTimeImmutable();
        }
    }

    public function getEvidence(): ?string
    {
        return $this->evidence;
    }

    public function setEvidence(?string $evidence): void
    {
        $this->evidence = $evidence;
    }
}
>>>>>>> Stashed changes
