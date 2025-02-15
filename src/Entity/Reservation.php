<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Participant name cannot be blank.")]
    private ?string $participantName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Contact email cannot be blank.")]
    #[Assert\Email(message: "Please enter a valid email address.")]
    private ?string $contactEmail = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Contact phone cannot be blank.")]
    #[Assert\Length(min: 10, max: 15, minMessage: "Phone number must be at least {{ limit }} characters long.", maxMessage: "Phone number cannot exceed {{ limit }} characters.")]
    private ?string $contactphone = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThanOrEqual("today", message: "The reservation date must be today or in the future.")]
    private ?\DateTimeInterface $reservationDate = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Number of attendees cannot be blank.")]
    #[Assert\Range(min: 1, minMessage: "At least one attendee is required.")]
    private ?int $numberOfAttends = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Payment status cannot be blank.")]
    private ?string $paymentStatus = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[Assert\NotNull(message: "A workshop must be selected.")]
    private ?Workshop $workshopTitle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParticipantName(): ?string
    {
        return $this->participantName;
    }

    public function setParticipantName(string $participantName): static
    {
        $this->participantName = $participantName;

        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(string $contactEmail): static
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    public function getContactphone(): ?string
    {
        return $this->contactphone;
    }

    public function setContactphone(string $contactphone): static
    {
        $this->contactphone = $contactphone;

        return $this;
    }

    public function getReservationDate(): ?\DateTimeInterface
    {
        return $this->reservationDate;
    }

    public function setReservationDate(\DateTimeInterface $reservationDate): static
    {
        $this->reservationDate = $reservationDate;

        return $this;
    }

    public function getNumberOfAttends(): ?int
    {
        return $this->numberOfAttends;
    }

    public function setNumberOfAttends(int $numberOfAttends): static
    {
        $this->numberOfAttends = $numberOfAttends;

        return $this;
    }

    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus(string $paymentStatus): static
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    public function getWorkshopTitle(): ?Workshop
    {
        return $this->workshopTitle;
    }

    public function setWorkshopTitle(?Workshop $workshopTitle): static
    {
        $this->workshopTitle = $workshopTitle;

        return $this;
    }
}
