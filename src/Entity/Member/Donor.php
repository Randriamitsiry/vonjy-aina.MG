<?php

/*
 * This file is part of the Vonjy Aina project.
 * (Add your full license header here)
 */

namespace App\Entity\Member;

use App\Entity\Security\User;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Donor extends User
{
    #[ORM\Column]
    private ?string $bloodGroup = null;

    #[ORM\Column(length: 20)]
    private ?string $phoneNumber = null;

    #[ORM\Column(type: 'text')]
    private ?string $address = null;

    #[ORM\Column]
    private ?string $city = null;

    #[ORM\Column(type: 'float')]
    private ?float $latitude = null;

    #[ORM\Column(type: 'float')] // Removed nullable: true
    private ?float $longitude = null;

    // --- Getters and Setters ---

    public function getBloodGroup(): ?string
    {
        return $this->bloodGroup;
    }

    public function setBloodGroup(?string $bloodGroup): void
    {
        $this->bloodGroup = $bloodGroup;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): void
    {
        $this->longitude = $longitude;
    }
}