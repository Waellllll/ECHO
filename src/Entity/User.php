<?php

namespace App\Entity;
use App\Enum\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(length: 100)]
#[Assert\NotBlank(message: "Le nom ne peut pas être vide.")]
#[Assert\Length(
    min: 2,
    max: 100,
    minMessage: "Le nom doit comporter au moins {{ limit }} caractères.",
    maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères."
)]
private ?string $nom = null;

#[ORM\Column(length: 100)]
#[Assert\NotBlank(message: "Le prénom ne peut pas être vide.")]
#[Assert\Length(
    min: 2,
    max: 100,
    minMessage: "Le prénom doit comporter au moins {{ limit }} caractères.",
    maxMessage: "Le prénom ne peut pas dépasser {{ limit }} caractères."
)]
private ?string $prenom = null;

// Getters et Setters
public function getNom(): ?string
{
    return $this->nom;
}

public function setNom(string $nom): self
{
    $this->nom = $nom;
    return $this;
}

public function getPrenom(): ?string
{
    return $this->prenom;
}

public function setPrenom(string $prenom): self
{
    $this->prenom = $prenom;
    return $this;
}
    #[ORM\Column(length: 180)]
    
    #[Assert\NotBlank(message: "L'email ne peut pas être vide.")]
    #[Assert\Email(message: "L'email n'est pas valide.")]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
     
    #[Assert\NotBlank(message: "Le mot de passe ne peut pas être vide.")]
    #[Assert\Length(
        min: 8,
        minMessage: "Votre mot de passe doit comporter au moins {{ limit }} caractères.",
        max: 255
    )]
    #[Assert\Regex(
        pattern: "/[A-Z]/",
        message: "Le mot de passe doit contenir au moins une lettre majuscule."
    )]
    #[Assert\Regex(
        pattern: "/[!@#$%^&*(),.?\":{}|<>]/",
        message: "Le mot de passe doit contenir au moins un caractère spécial."
    )]
     
    private ?string $password = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
 



    
}
