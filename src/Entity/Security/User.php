<?php

/*
 * This file is part of the Vonjy Aina project.
 * (Add your full license header here)
 */

namespace App\Entity\Security;

use App\Entity\Shared\EntityId;
use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
#[ORM\Table(name: '`user`')] // Explicitly name the table (good practice)
class User
{
    use EntityId;

    #[ORM\Column]
    private string $firstName;

    #[ORM\Column]
    private string $lastName;

    #[ORM\Column(unique: true)]
    private string $email;

    #[ORM\Column(nullable: true)]
    private ?string $password = null;

    #[ORM\Column]
    private string $role = 'ROLE_USER';

    // --- Getters and Setters ---

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }
}