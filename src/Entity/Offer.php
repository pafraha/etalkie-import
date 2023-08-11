<?php

namespace App\Entity;

use App\Repository\OfferRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OfferRepository::class)]
class Offer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $compteAffaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $compteEvenementVeh = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $compteDernierEvenementVeh = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numeroFiche = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelleCivilite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proprietaireActuel = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numeroEtNomVoie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $complementAdresse1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $codePostal = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telephoneDomicile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telephonePortable = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telephoneJob = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dateMiseEnCirculation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dateAchat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dateDernierEvenementVeh = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelleMarque = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelleModele = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $version = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $immatriculation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typeProspect = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $kilometrage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelleEnergie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vendeurVN = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vendeurVO = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commentaireFacturation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typeVNVO = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numeroDossierVNVO = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $intermediaireVente = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dateEvenementVeh = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $origineEvenementVeh = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompteAffaire(): ?string
    {
        return $this->compteAffaire;
    }

    public function setCompteAffaire(?string $compteAffaire): static
    {
        $this->compteAffaire = $compteAffaire;

        return $this;
    }

    public function getCompteEvenementVeh(): ?string
    {
        return $this->compteEvenementVeh;
    }

    public function setCompteEvenementVeh(?string $compteEvenementVeh): static
    {
        $this->compteEvenementVeh = $compteEvenementVeh;

        return $this;
    }

    public function getCompteDernierEvenementVeh(): ?string
    {
        return $this->compteDernierEvenementVeh;
    }

    public function setCompteDernierEvenementVeh(?string $compteDernierEvenementVeh): static
    {
        $this->compteDernierEvenementVeh = $compteDernierEvenementVeh;

        return $this;
    }

    public function getNumeroFiche(): ?string
    {
        return $this->numeroFiche;
    }

    public function setNumeroFiche(?string $numeroFiche): static
    {
        $this->numeroFiche = $numeroFiche;

        return $this;
    }

    public function getLibelleCivilite(): ?string
    {
        return $this->libelleCivilite;
    }

    public function setLibelleCivilite(?string $libelleCivilite): static
    {
        $this->libelleCivilite = $libelleCivilite;

        return $this;
    }

    public function getProprietaireActuel(): ?string
    {
        return $this->proprietaireActuel;
    }

    public function setProprietaireActuel(?string $proprietaireActuel): static
    {
        $this->proprietaireActuel = $proprietaireActuel;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumeroEtNomVoie(): ?string
    {
        return $this->numeroEtNomVoie;
    }

    public function setNumeroEtNomVoie(?string $numeroEtNomVoie): static
    {
        $this->numeroEtNomVoie = $numeroEtNomVoie;

        return $this;
    }

    public function getComplementAdresse1(): ?string
    {
        return $this->complementAdresse1;
    }

    public function setComplementAdresse1(?string $complementAdresse1): static
    {
        $this->complementAdresse1 = $complementAdresse1;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): static
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephoneDomicile(): ?string
    {
        return $this->telephoneDomicile;
    }

    public function setTelephoneDomicile(?string $telephoneDomicile): static
    {
        $this->telephoneDomicile = $telephoneDomicile;

        return $this;
    }

    public function getTelephonePortable(): ?string
    {
        return $this->telephonePortable;
    }

    public function setTelephonePortable(?string $telephonePortable): static
    {
        $this->telephonePortable = $telephonePortable;

        return $this;
    }

    public function getTelephoneJob(): ?string
    {
        return $this->telephoneJob;
    }

    public function setTelephoneJob(?string $telephoneJob): static
    {
        $this->telephoneJob = $telephoneJob;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getDateMiseEnCirculation(): ?string
    {
        return $this->dateMiseEnCirculation;
    }

    public function setDateMiseEnCirculation(?string $dateMiseEnCirculation): static
    {
        $this->dateMiseEnCirculation = $dateMiseEnCirculation;

        return $this;
    }

    public function getDateAchat(): ?string
    {
        return $this->dateAchat;
    }

    public function setDateAchat(?string $dateAchat): static
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getDateDernierEvenementVeh(): ?string
    {
        return $this->dateDernierEvenementVeh;
    }

    public function setDateDernierEvenementVeh(?string $dateDernierEvenementVeh): static
    {
        $this->dateDernierEvenementVeh = $dateDernierEvenementVeh;

        return $this;
    }

    public function getLibelleMarque(): ?string
    {
        return $this->libelleMarque;
    }

    public function setLibelleMarque(?string $libelleMarque): static
    {
        $this->libelleMarque = $libelleMarque;

        return $this;
    }

    public function getLibelleModele(): ?string
    {
        return $this->libelleModele;
    }

    public function setLibelleModele(?string $libelleModele): static
    {
        $this->libelleModele = $libelleModele;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): static
    {
        $this->version = $version;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(?string $vin): static
    {
        $this->vin = $vin;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): static
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getTypeProspect(): ?string
    {
        return $this->typeProspect;
    }

    public function setTypeProspect(?string $typeProspect): static
    {
        $this->typeProspect = $typeProspect;

        return $this;
    }

    public function getKilometrage(): ?string
    {
        return $this->kilometrage;
    }

    public function setKilometrage(?string $kilometrage): static
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getLibelleEnergie(): ?string
    {
        return $this->libelleEnergie;
    }

    public function setLibelleEnergie(?string $libelleEnergie): static
    {
        $this->libelleEnergie = $libelleEnergie;

        return $this;
    }

    public function getVendeurVN(): ?string
    {
        return $this->vendeurVN;
    }

    public function setVendeurVN(?string $vendeurVN): static
    {
        $this->vendeurVN = $vendeurVN;

        return $this;
    }

    public function getVendeurVO(): ?string
    {
        return $this->vendeurVO;
    }

    public function setVendeurVO(?string $vendeurVO): static
    {
        $this->vendeurVO = $vendeurVO;

        return $this;
    }

    public function getCommentaireFacturation(): ?string
    {
        return $this->commentaireFacturation;
    }

    public function setCommentaireFacturation(?string $commentaireFacturation): static
    {
        $this->commentaireFacturation = $commentaireFacturation;

        return $this;
    }

    public function getTypeVNVO(): ?string
    {
        return $this->typeVNVO;
    }

    public function setTypeVNVO(?string $typeVNVO): static
    {
        $this->typeVNVO = $typeVNVO;

        return $this;
    }

    public function getNumeroDossierVNVO(): ?string
    {
        return $this->numeroDossierVNVO;
    }

    public function setNumeroDossierVNVO(?string $numeroDossierVNVO): static
    {
        $this->numeroDossierVNVO = $numeroDossierVNVO;

        return $this;
    }

    public function getIntermediaireVente(): ?string
    {
        return $this->intermediaireVente;
    }

    public function setIntermediaireVente(?string $intermediaireVente): static
    {
        $this->intermediaireVente = $intermediaireVente;

        return $this;
    }

    public function getDateEvenementVeh(): ?string
    {
        return $this->dateEvenementVeh;
    }

    public function setDateEvenementVeh(?string $dateEvenementVeh): static
    {
        $this->dateEvenementVeh = $dateEvenementVeh;

        return $this;
    }

    public function getOrigineEvenementVeh(): ?string
    {
        return $this->origineEvenementVeh;
    }

    public function setOrigineEvenementVeh(?string $origineEvenementVeh): static
    {
        $this->origineEvenementVeh = $origineEvenementVeh;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
