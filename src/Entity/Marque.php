<?php

namespace App\Entity;

use App\Repository\MarqueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarqueRepository::class)]
class Marque
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom_marque;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $apropos;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getnom_marque(): ?string
    {
        return $this->nom_marque;
    }

    public function setnom_marque(string $nom_marque): self
    {
        $this->nom_marque = $nom_marque;

        return $this;
    }

    public function getApropos(): ?string
    {
        return $this->apropos;
    }

    public function setApropos(?string $apropos): self
    {
        $this->apropos = $apropos;

        return $this;
    }
}
