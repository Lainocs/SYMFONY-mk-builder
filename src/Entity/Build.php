<?php

namespace App\Entity;

use App\Repository\BuildRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BuildRepository::class)]
class Build
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'builds')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[ORM\ManyToOne(targetEntity: Character::class, inversedBy: 'builds')]
    #[ORM\JoinColumn(nullable: false)]
    private $chara;

    #[ORM\ManyToOne(targetEntity: Kart::class, inversedBy: 'builds')]
    #[ORM\JoinColumn(nullable: false)]
    private $kart;

    #[ORM\ManyToOne(targetEntity: Wheel::class, inversedBy: 'builds')]
    #[ORM\JoinColumn(nullable: false)]
    private $wheel;

    #[ORM\ManyToOne(targetEntity: Hanglider::class, inversedBy: 'builds')]
    #[ORM\JoinColumn(nullable: false)]
    private $hanglider;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getChara(): ?Character
    {
        return $this->chara;
    }

    public function setChara(?Character $chara): self
    {
        $this->chara = $chara;

        return $this;
    }

    public function getKart(): ?Kart
    {
        return $this->kart;
    }

    public function setKart(?Kart $kart): self
    {
        $this->kart = $kart;

        return $this;
    }

    public function getWheel(): ?Wheel
    {
        return $this->wheel;
    }

    public function setWheel(?Wheel $wheel): self
    {
        $this->wheel = $wheel;

        return $this;
    }

    public function getHanglider(): ?Hanglider
    {
        return $this->hanglider;
    }

    public function setHanglider(?Hanglider $hanglider): self
    {
        $this->hanglider = $hanglider;

        return $this;
    }
}
