<?php

namespace App\Entity\Member;
use App\Entity\Shared\EntityId;
use Doctrine\ORM\Mapping as ORM;
class User
{
    use EntityId;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;
    private string $role;
}