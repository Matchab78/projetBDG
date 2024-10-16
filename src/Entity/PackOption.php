<?php

namespace App\Entity;

use App\Repository\PackOptionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PackOptionRepository::class)]
class PackOption
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Finition;

    #[ORM\Column(type: 'string', length: 255)]
    private $carplay;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFinition(): ?string
    {
        return $this->Finition;
    }

    public function setFinition(string $Finition): self
    {
        $this->Finition = $Finition;

        return $this;
    }

    public function getCarplay(): ?string
    {
        return $this->carplay;
    }

    public function setCarplay(string $carplay): self
    {
        $this->carplay = $carplay;

        return $this;
    }
}
