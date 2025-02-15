<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_user = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(
        max: 50,
        maxMessage: "Votre description ne peut pas dépasser 50 caractères."
    )]
    #[Assert\NotBlank(message: "Description cannot be empty.")]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    private ?File $imageFile = null;

    #[Assert\File(
        mimeTypes: ["image/jpeg", "image/png", "image/gif"],
        mimeTypesMessage: "Please upload a valid image (JPEG, PNG, or GIF).",
        maxSize: '5M',
        maxSizeMessage: "The image cannot be larger than 5MB."
    )]

    // OneToMany relationship mapping to Comment entity
    // #[ORM\OneToMany(mappedBy: 'id_article', targetEntity: Comment::class)]
    // private $comments = [];

    // public function __construct()
    // {
    //     // Initialize comments as an empty array, no need for ArrayCollection
    //     $this->comments = [];
    // }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): static
    {
        $this->id_user = $id_user;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageFile(?File $imageFile): void
    {
        $this->imageFile = $imageFile;
        if ($imageFile) {
            $this->image = uniqid() . '.' . $imageFile->guessExtension();
        }
    }

    // Getter and setter for the comments
    // public function getComments()
    // {
    //     return $this->comments;
    // }

    // public function setComments(array $comments): void
    // {
    //     $this->comments = $comments;
    // }
    public function __toString(): string
    {
        return sprintf(
            "Article ID: %d\nDescription: %s\nImage: %s",
            $this->getId(),
            $this->getDescription(),
            $this->getImage()
        );
    }
}
