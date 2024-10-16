<?php

namespace App\Entity;

use App\Repository\FinitionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FinitionRepository::class)]
class Finition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomFinition;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFinition(): ?string
    {
        return $this->nomFinition;
    }

    public function setNomFinition(string $nomFinition): self
    {
        $this->nomFinition = $nomFinition;

        return $this;
    }
}
