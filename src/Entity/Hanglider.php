<?php

namespace App\Entity;

use App\Repository\HangliderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HangliderRepository::class)]
class Hanglider
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $image;

    #[ORM\OneToMany(mappedBy: 'hanglider', targetEntity: Build::class)]
    private $builds;

    public function __construct()
    {
        $this->builds = new ArrayCollection();
    }

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Build>
     */
    public function getBuilds(): Collection
    {
        return $this->builds;
    }

    public function addBuild(Build $build): self
    {
        if (!$this->builds->contains($build)) {
            $this->builds[] = $build;
            $build->setHanglider($this);
        }

        return $this;
    }

    public function removeBuild(Build $build): self
    {
        if ($this->builds->removeElement($build)) {
            // set the owning side to null (unless already changed)
            if ($build->getHanglider() === $this) {
                $build->setHanglider(null);
            }
        }

        return $this;
    }
}
