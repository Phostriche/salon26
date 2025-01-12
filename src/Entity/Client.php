<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DetailsRepository;


use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: DetailsRepository::class)]
#[ApiResource]
#[Broadcast]

class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $civilite = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $date_de_naissance = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $tranche_age = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $id_collaborateur_prefere = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $localite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pays = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mail = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $langue = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $profession = null;

    #[ORM\Column(nullable: true)]
    private ?int $marraine = null;

    #[ORM\Column(nullable: true)]
    private ?int $filleule = null;

    #[ORM\Column(nullable: true)]
    private ?int $pointsFidelite = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $privilege = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $infoTechniques = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $remarques = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $visite1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $origineContact = null;

    #[ORM\Column(length: 124, nullable: true)]
    private ?string $typeCheveux = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $base = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $texture = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cuirChevelu = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $longueur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $specificites = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $cheveuxBlancs = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(?string $civilite): static
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeImmutable
    {
        return $this->date_de_naissance;
    }

    public function setDateDeNaissance(?\DateTimeImmutable $date_de_naissance): static
    {
        $this->date_de_naissance = $date_de_naissance;

        return $this;
    }

    public function getTrancheAge(): ?int
    {
        return $this->tranche_age;
    }

    public function setTrancheAge(?int $tranche_age): static
    {
        $this->tranche_age = $tranche_age;

        return $this;
    }

    public function getIdCollaborateurPrefere(): ?int
    {
        return $this->id_collaborateur_prefere;
    }

    public function setIdCollaborateurPrefere(?int $id_collaborateur_prefere): static
    {
        $this->id_collaborateur_prefere = $id_collaborateur_prefere;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getLocalite(): ?string
    {
        return $this->localite;
    }

    public function setLocalite(?string $localite): static
    {
        $this->localite = $localite;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): static
    {
        $this->pays = $pays;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getLangue(): ?string
    {
        return $this->langue;
    }

    public function setLangue(?string $langue): static
    {
        $this->langue = $langue;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(?string $profession): static
    {
        $this->profession = $profession;

        return $this;
    }

    public function getMarraine(): ?int
    {
        return $this->marraine;
    }

    public function setMarraine(?int $marraine): static
    {
        $this->marraine = $marraine;

        return $this;
    }

    public function getFilleule(): ?int
    {
        return $this->filleule;
    }

    public function setFilleule(?int $filleule): static
    {
        $this->filleule = $filleule;

        return $this;
    }

    public function getPointsFidelite(): ?int
    {
        return $this->pointsFidelite;
    }

    public function setPointsFidelite(?int $pointsFidelite): static
    {
        $this->pointsFidelite = $pointsFidelite;

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

    public function getInfoTechniques(): ?string
    {
        return $this->infoTechniques;
    }

    public function setInfoTechniques(?string $infoTechniques): static
    {
        $this->infoTechniques = $infoTechniques;

        return $this;
    }

    public function getRemarques(): ?string
    {
        return $this->remarques;
    }

    public function setRemarques(?string $remarques): static
    {
        $this->remarques = $remarques;

        return $this;
    }

    public function getVisite1(): ?\DateTimeImmutable
    {
        return $this->visite1;
    }

    public function setVisite1(?\DateTimeImmutable $visite1): static
    {
        $this->visite1 = $visite1;

        return $this;
    }

    public function getOrigineContact(): ?string
    {
        return $this->origineContact;
    }

    public function setOrigineContact(?string $origineContact): static
    {
        $this->origineContact = $origineContact;

        return $this;
    }

    public function getTypeCheveux(): ?string
    {
        return $this->typeCheveux;
    }

    public function setTypeCheveux(?string $typeCheveux): static
    {
        $this->typeCheveux = $typeCheveux;

        return $this;
    }

    public function getBase(): ?string
    {
        return $this->base;
    }

    public function setBase(?string $base): static
    {
        $this->base = $base;

        return $this;
    }

    public function getTexture(): ?string
    {
        return $this->texture;
    }

    public function setTexture(?string $texture): static
    {
        $this->texture = $texture;

        return $this;
    }

    public function getCuirChevelu(): ?string
    {
        return $this->cuirChevelu;
    }

    public function setCuirChevelu(?string $cuirChevelu): static
    {
        $this->cuirChevelu = $cuirChevelu;

        return $this;
    }

    public function getLongueur(): ?string
    {
        return $this->longueur;
    }

    public function setLongueur(?string $longueur): static
    {
        $this->longueur = $longueur;

        return $this;
    }

    public function getSpecificites(): ?string
    {
        return $this->specificites;
    }

    public function setSpecificites(?string $specificites): static
    {
        $this->specificites = $specificites;

        return $this;
    }

    public function getCheveuxBlancs(): ?int
    {
        return $this->cheveuxBlancs;
    }

    public function setCheveuxBlancs(?int $cheveuxBlancs): static
    {
        $this->cheveuxBlancs = $cheveuxBlancs;

        return $this;
    }
}
