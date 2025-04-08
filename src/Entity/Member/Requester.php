<?php

namespace App\Entity\Member;

use App\Entity\Security\User;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Requester extends User
{
    #[ORM\Column(length: 20)]
    private ?string $phoneNumber = null;

    #[ORM\Column(type: 'text')]
    private ?string $address = null;

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
}