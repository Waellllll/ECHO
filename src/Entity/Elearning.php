<?php

namespace App\Entity;

use App\Repository\ElearningRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ElearningRepository::class)]
class Elearning
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: 'string', enumType: ContentTypeEnum::class)]
    private ?ContentTypeEnum $content_type = null;

    #[ORM\Column(length: 255)]
    private ?string $content_url = null;

    #[ORM\Column]
    private ?int $duration = null;

    #[ORM\Column(length: 255)]
    private ?string $difficulty_level = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updated_at = null;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getContentType(): ?ContentTypeEnum
    {
        return $this->content_type;
    }

    public function setContentType(ContentTypeEnum $content_type): self
    {
        $this->content_type = $content_type;

        return $this;
    }

    public function getContentUrl(): ?string
    {
        return $this->content_url;
    }

    public function setContentUrl(string $content_url): static
    {
        $this->content_url = $content_url;

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

    public function getDifficultyLevel(): ?string
    {
        return $this->difficulty_level;
    }

    public function setDifficultyLevel(string $difficulty_level): static
    {
        $this->difficulty_level = $difficulty_level;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
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
}