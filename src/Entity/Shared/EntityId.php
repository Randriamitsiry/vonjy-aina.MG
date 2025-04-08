<?php

/*
 * This file is part of the Vonjy Aina project.
 * (Add your full license header here)
 */
namespace App\Entity\Shared;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Types\UuidType; // Use Symfony's UuidType
use Symfony\Component\Uid\Uuid;

trait EntityId
{
    #[ORM\Id]
    #[ORM\Column(type: UuidType::NAME, unique: true)] // Use UuidType::NAME
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')] // Use built-in generator
    private ?Uuid $uuid = null; // Use Symfony's Uuid object type

    public function getUuid(): ?Uuid
    {
        return $this->uuid;
    }

    // Optional: If you need the string representation frequently
    public function getId(): ?string
    {
        return $this->uuid?->toString();
    }
}