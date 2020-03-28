<?php

declare(strict_types=1);

namespace App\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * The User class demonstrates how to annotate a simple
 * PHP class to act as a Doctrine entity.
 *
 * @ORM\Entity()
 * @ORM\Table(name="users")
 */
class User implements \JsonSerializable
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=false, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=60, nullable=false)
     */
    private $email;

    public function __construct(string $username, string $password)
    {
        $this->name = $username;
        $this->hash = password_hash($password, PASSWORD_BCRYPT);
        $this->registeredAt = new \DateTimeImmutable('now');
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->name;
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function getRegisteredAt(): \DateTimeImmutable
    {
        return $this->registeredAt;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'username' => $this->getUsername()
        ];
    }
}
