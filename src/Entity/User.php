<?php

namespace App\Entity;
use App\Enum\UserType;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @var Collection<int, Terrain>
     */
    #[ORM\OneToMany(targetEntity: Terrain::class, mappedBy: 'iduser', orphanRemoval: true)]
    private Collection $terrains;

    /**
     * @var Collection<int, Intervention>
     */
    #[ORM\OneToMany(targetEntity: Intervention::class, mappedBy: 'user')]
    private Collection $interventions;

    /**
     * @var Collection<int, Reservation>
     */
    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'participantName')]
    private Collection $reservations;

    /**
     * @var Collection<int, Workshop>
     */
    #[ORM\OneToMany(targetEntity: Workshop::class, mappedBy: 'creatorName')]
    private Collection $workshops;

    /**
     * @var Collection<int, Elearning>
     */
    #[ORM\OneToMany(targetEntity: Elearning::class, mappedBy: 'user_e')]
    private Collection $elearnings;

    public function __construct()
    {
        $this->terrains = new ArrayCollection();
        $this->interventions = new ArrayCollection();
        $this->reservations = new ArrayCollection();
        $this->workshops = new ArrayCollection();
        $this->elearnings = new ArrayCollection();
    }

   

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

    /**
     * @return Collection<int, Terrain>
     */
    public function getTerrains(): Collection
    {
        return $this->terrains;
    }

    public function addTerrain(Terrain $terrain): static
    {
        if (!$this->terrains->contains($terrain)) {
            $this->terrains->add($terrain);
            $terrain->setIduser($this);
        }

        return $this;
    }

    public function removeTerrain(Terrain $terrain): static
    {
        if ($this->terrains->removeElement($terrain)) {
            // set the owning side to null (unless already changed)
            if ($terrain->getIduser() === $this) {
                $terrain->setIduser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Intervention>
     */
    public function getInterventions(): Collection
    {
        return $this->interventions;
    }

    public function addIntervention(Intervention $intervention): static
    {
        if (!$this->interventions->contains($intervention)) {
            $this->interventions->add($intervention);
            $intervention->setUser($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): static
    {
        if ($this->interventions->removeElement($intervention)) {
            // set the owning side to null (unless already changed)
            if ($intervention->getUser() === $this) {
                $intervention->setUser(null);
            }
        }

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
            $reservation->setParticipantName($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getParticipantName() === $this) {
                $reservation->setParticipantName(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Workshop>
     */
    public function getWorkshops(): Collection
    {
        return $this->workshops;
    }

    public function addWorkshop(Workshop $workshop): static
    {
        if (!$this->workshops->contains($workshop)) {
            $this->workshops->add($workshop);
            $workshop->setCreatorName($this);
        }

        return $this;
    }

    public function removeWorkshop(Workshop $workshop): static
    {
        if ($this->workshops->removeElement($workshop)) {
            // set the owning side to null (unless already changed)
            if ($workshop->getCreatorName() === $this) {
                $workshop->setCreatorName(null);
            }
        }

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
            $elearning->setUserE($this);
        }

        return $this;
    }

    public function removeElearning(Elearning $elearning): static
    {
        if ($this->elearnings->removeElement($elearning)) {
            // set the owning side to null (unless already changed)
            if ($elearning->getUserE() === $this) {
                $elearning->setUserE(null);
            }
        }

        return $this;
    }

}
