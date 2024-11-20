<?php

namespace App\Entity;

use App\Repository\VoituresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VoituresRepository::class)]
class Voitures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $prixV;

    #[ORM\Column(type: 'integer')]
    private $stock;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $description;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $vitesse;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $acceleration;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $image;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $annee;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $chevaux;

    #[ORM\Column(type: 'string', length: 255)]
    private $moteur;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $carburant;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $boiteAuto;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $conso;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Co2;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $image2;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $image3;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $image4;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixV(): ?int
    {
        return $this->prixV;
    }

    public function setPrixV(?int $prixV): self
    {
        $this->prixV = $prixV;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getVitesse(): ?int
    {
        return $this->vitesse;
    }

    public function setVitesse(?int $vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    public function getAcceleration(): ?int
    {
        return $this->acceleration;
    }

    public function setAcceleration(?int $acceleration): self
    {
        $this->acceleration = $acceleration;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(?int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getChevaux(): ?string
    {
        return $this->chevaux;
    }

    public function setChevaux(?string $chevaux): self
    {
        $this->chevaux = $chevaux;

        return $this;
    }

    public function getMoteur(): ?string
    {
        return $this->moteur;
    }

    public function setMoteur(string $moteur): self
    {
        $this->moteur = $moteur;

        return $this;
    }

    public function getCarburant(): ?string
    {
        return $this->carburant;
    }

    public function setCarburant(?string $carburant): self
    {
        $this->carburant = $carburant;

        return $this;
    }

    public function getBoiteAuto(): ?string
    {
        return $this->boiteAuto;
    }

    public function setBoiteAuto(?string $boiteAuto): self
    {
        $this->boiteAuto = $boiteAuto;

        return $this;
    }

    public function getConso(): ?string
    {
        return $this->conso;
    }

    public function setConso(?string $conso): self
    {
        $this->conso = $conso;

        return $this;
    }

    public function getCo2(): ?string
    {
        return $this->Co2;
    }

    public function setCo2(?string $Co2): self
    {
        $this->Co2 = $Co2;

        return $this;
    }

    public function getImage2()
    {
        return $this->image2;
    }

    public function setImage2($image2): self
    {
        $this->image2 = $image2;

        return $this;
    }

    public function getImage3()
    {
        return $this->image3;
    }

    public function setImage3($image3): self
    {
        $this->image3 = $image3;

        return $this;
    }

    public function getImage4()
    {
        return $this->image4;
    }

    public function setImage4($image4): self
    {
        $this->image4 = $image4;

        return $this;
    }
}
