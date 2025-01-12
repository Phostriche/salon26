<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DetailsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: DetailsRepository::class)]
#[ApiResource]
#[Broadcast]
class Details
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idTicket = null;

    #[ORM\Column(length: 255)]
    private ?string $intitule = null;

    #[ORM\Column(length: 255)]
    private ?string $typeA = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $jour = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column(length: 111)]
    private ?string $modePaim = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $par = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $privilege = null;

    #[ORM\Column(nullable: true)]
    private ?float $deduction = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTicket(): ?int
    {
        return $this->idTicket;
    }

    public function setIdTicket(int $idTicket): static
    {
        $this->idTicket = $idTicket;

        return $this;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): static
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getTypeA(): ?string
    {
        return $this->typeA;
    }

    public function setTypeA(string $typeA): static
    {
        $this->typeA = $typeA;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getJour(): ?\DateTimeInterface
    {
        return $this->jour;
    }

    public function setJour(\DateTimeInterface $jour): static
    {
        $this->jour = $jour;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getModePaim(): ?string
    {
        return $this->modePaim;
    }

    public function setModePaim(string $modePaim): static
    {
        $this->modePaim = $modePaim;

        return $this;
    }

    public function getPar(): ?int
    {
        return $this->par;
    }

    public function setPar(int $par): static
    {
        $this->par = $par;

        return $this;
    }

    public function getPrivilege(): ?int
    {
        return $this->privilege;
    }

    public function setPrivilege(?int $privilege): static
    {
        $this->privilege = $privilege;

        return $this;
    }

    public function getDeduction(): ?float
    {
        return $this->deduction;
    }

    public function setDeduction(?float $deduction): static
    {
        $this->deduction = $deduction;

        return $this;
    }
}
