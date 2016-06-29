<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\InheritanceType;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;

/**
 * Commun
 * @ORM\Entity
 * @ORM\Table(name="pc_commun")
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="template", type="string")
 * @DiscriminatorMap({"Autre" = "Autre",
 *  "MADEvenementGratuit" = "MADEvenementGratuit",
 * "PSCati" = "PSCati",
 * "MADSalles" = "MADSalles",
 * "PIFELaboratoire" = "PIFELaboratoire",
 * "PIFEClassique" = "PIFEClassique",
 * "ChartePartenariat" = "ChartePartenariat",})
 */
abstract class Commun
{
    
    /**
     * @var string
     * @ORM\Column(name="id", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="PC\FicheBundle\Doctrine\PCIdGenerator")
     */
    private $id;
   
    /**
     * @var string
     *
     * @ORM\Column(name="etat_demande", type="string", length=255, nullable=TRUE)
     */
    private $etatDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;
    
    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="text")
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_convention", type="string", length=255, nullable=TRUE)
     */
    private $etatConvention;
    


    /**
     * @var string
     *
     * @ORM\Column(name="cocontractant", type="string", length=255)
     */
    private $cocontractant;

    /**
     * @var string
     *
     * @ORM\Column(name="forme_juridique_cocontractant", type="string", length=255, nullable=TRUE)
     */
    private $formeJuridiqueCocontractant;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_siege", type="string", length=255)
     */
    private $adresseSiege;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_siret", type="string", length=255, nullable=TRUE)
     */
    private $numeroSiret;
    
    /**
     * @var string
     *
     * @ORM\Column(name="code_ape", type="string", length=255, nullable=TRUE)
     */
    private $codeApe;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_representant", type="string", length=255, nullable=TRUE)
     */
    private $titreRepresentant;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_representant", type="string", length=255, nullable=TRUE)
     */
    private $nomRepresentant;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_representant", type="string", length=255, nullable=TRUE)
     */
    private $prenomRepresentant;
    
    /**
     * @var string
     *
     * @ORM\Column(name="fonction_representant", type="string", length=255, nullable=TRUE)
     */
    private $fonctionRepresentant;

    /**
     * @var string
     *
     * @ORM\Column(name="demandeur_polytech", type="string", length=255, nullable=TRUE)
     */
    private $demandeurPolytech;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_effet", type="date", nullable=TRUE)
     */
    private $dateEffet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_echeance", type="date", nullable=TRUE)
     */
    private $dateEcheance;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="tacite_reconduction", type="boolean", nullable=TRUE)
     */
    private $reconductionTacite;

    /**
     * @var string
     *
     * @ORM\Column(name="validation_juridique", type="string", length=255, nullable=TRUE)
     */
    
    private $validationJuridique;

    /**
     * @var string
     *
     * @ORM\Column(name="validation_direction", type="string", length=255, nullable=TRUE)
     */
    private $validationDirection;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_validation_juridique", type="date", nullable=TRUE)
     */
    
    private $dateValidationJuridique;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_validation_direction", type="date", nullable=TRUE)
     */
    private $dateValidationDirection;

    /**
     * @var string
     *
     * @ORM\Column(name="signature_polytech", type="string", length=255, nullable=TRUE)
     */
    private $signaturePolytech;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_signature_polytech", type="date", nullable=TRUE)
     */
    private $dateSignaturePolytech;

    /**
     * @var string
     *
     * @ORM\Column(name="action_demandee", type="string", length=255, nullable=TRUE)
     */
    private $actionDemandee;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text", nullable=TRUE)
     */
    private $observations;

    /**
     * @var float
     *
     * @ORM\Column(name="flux_financier", type="float")
     */
    private $fluxFinancier;

    /**
     * @var string
     *
     * @ORM\Column(name="reservation_fonds", type="string", length=255 , nullable=TRUE)
     */
    private $reservationFonds;
    
     /**
     * @var \datetime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=TRUE)
     */
    private $dateCreation;
    
    /**
     * @var \datetime
     *
     * @ORM\Column(name="date_maj", type="date", nullable=TRUE)
     */
    private $dateMAJ;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_nouveaux_avenants", type="integer", nullable=TRUE)
     */
    private $nombreNouveauxAvenants = 0;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_nouveaux_fichiers", type="integer", nullable=TRUE)
     */
    private $nombreNouveauxFichier = 0;
    
    /**
     * @var string
     *
     */
    
    private $route;
    
    public function getRoute() {
        return $this->route;
    }
    
    public function setRoute($route) {
        $this->route = $route;
    }
    
    abstract public function getTemplate();

    /**
     * Set etatDemande
     *
     * @param string $etatDemande
     *
     * @return Commun
     */
    public function setEtatDemande($etatDemande)
    {
        $this->etatDemande = $etatDemande;

        return $this;
    }

    /**
     * Get etatDemande
     *
     * @return string
     */
    public function getEtatDemande()
    {
        return $this->etatDemande;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Commun
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Commun
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set etatConvention
     *
     * @param string $etatConvention
     *
     * @return Commun
     */
    public function setEtatConvention($etatConvention)
    {
        $this->etatConvention = $etatConvention;

        return $this;
    }

    /**
     * Get etatConvention
     *
     * @return string
     */
    public function getEtatConvention()
    {
        return $this->etatConvention;
    }

    /**
     * Set cocontractant
     *
     * @param string $cocontractant
     *
     * @return Commun
     */
    public function setCocontractant($cocontractant)
    {
        $this->cocontractant = $cocontractant;

        return $this;
    }

    /**
     * Get cocontractant
     *
     * @return string
     */
    public function getCocontractant()
    {
        return $this->cocontractant;
    }

    /**
     * Set formeJuridiqueCocontractant
     *
     * @param string $formeJuridiqueCocontractant
     *
     * @return Commun
     */
    public function setFormeJuridiqueCocontractant($formeJuridiqueCocontractant)
    {
        $this->formeJuridiqueCocontractant = $formeJuridiqueCocontractant;

        return $this;
    }

    /**
     * Get formeJuridiqueCocontractant
     *
     * @return string
     */
    public function getFormeJuridiqueCocontractant()
    {
        return $this->formeJuridiqueCocontractant;
    }

    /**
     * Set adresseSiege
     *
     * @param string $adresseSiege
     *
     * @return Commun
     */
    public function setAdresseSiege($adresseSiege)
    {
        $this->adresseSiege = $adresseSiege;

        return $this;
    }

    /**
     * Get adresseSiege
     *
     * @return string
     */
    public function getAdresseSiege()
    {
        return $this->adresseSiege;
    }

    /**
     * Set numeroSiret
     *
     * @param string $numeroSiret
     *
     * @return Commun
     */
    public function setNumeroSiret($numeroSiret)
    {
        $this->numeroSiret = $numeroSiret;

        return $this;
    }

    /**
     * Get numeroSiret
     *
     * @return string
     */
    public function getNumeroSiret()
    {
        return $this->numeroSiret;
    }

    /**
     * Set codeApe
     *
     * @param string $codeApe
     *
     * @return Commun
     */
    public function setCodeApe($codeApe)
    {
        $this->codeApe = $codeApe;

        return $this;
    }

    /**
     * Get codeApe
     *
     * @return string
     */
    public function getCodeApe()
    {
        return $this->codeApe;
    }

    /**
     * Set titreRepresentant
     *
     * @param string $titreRepresentant
     *
     * @return Commun
     */
    public function setTitreRepresentant($titreRepresentant)
    {
        $this->titreRepresentant = $titreRepresentant;

        return $this;
    }

    /**
     * Get titreRepresentant
     *
     * @return string
     */
    public function getTitreRepresentant()
    {
        return $this->titreRepresentant;
    }

    /**
     * Set nomRepresentant
     *
     * @param string $nomRepresentant
     *
     * @return Commun
     */
    public function setNomRepresentant($nomRepresentant)
    {
        $this->nomRepresentant = $nomRepresentant;

        return $this;
    }

    /**
     * Get nomRepresentant
     *
     * @return string
     */
    public function getNomRepresentant()
    {
        return $this->nomRepresentant;
    }

    /**
     * Set prenomRepresentant
     *
     * @param string $prenomRepresentant
     *
     * @return Commun
     */
    public function setPrenomRepresentant($prenomRepresentant)
    {
        $this->prenomRepresentant = $prenomRepresentant;

        return $this;
    }

    /**
     * Get prenomRepresentant
     *
     * @return string
     */
    public function getPrenomRepresentant()
    {
        return $this->prenomRepresentant;
    }

    /**
     * Set fonctionRepresentant
     *
     * @param string $fonctionRepresentant
     *
     * @return Commun
     */
    public function setFonctionRepresentant($fonctionRepresentant)
    {
        $this->fonctionRepresentant = $fonctionRepresentant;

        return $this;
    }

    /**
     * Get fonctionRepresentant
     *
     * @return string
     */
    public function getFonctionRepresentant()
    {
        return $this->fonctionRepresentant;
    }

    /**
     * Set demandeurPolytech
     *
     * @param string $demandeurPolytech
     *
     * @return Commun
     */
    public function setDemandeurPolytech($demandeurPolytech)
    {
        $this->demandeurPolytech = $demandeurPolytech;

        return $this;
    }

    /**
     * Get demandeurPolytech
     *
     * @return string
     */
    public function getDemandeurPolytech()
    {
        return $this->demandeurPolytech;
    }

    /**
     * Set dateEffet
     *
     * @param \DateTime $dateEffet
     *
     * @return Commun
     */
    public function setDateEffet($dateEffet)
    {
        $this->dateEffet = $dateEffet;

        return $this;
    }

    /**
     * Get dateEffet
     *
     * @return \DateTime
     */
    public function getDateEffet()
    {
        return $this->dateEffet;
    }

    /**
     * Set dateEcheance
     *
     * @param \DateTime $dateEcheance
     *
     * @return Commun
     */
    public function setDateEcheance($dateEcheance)
    {
        $this->dateEcheance = $dateEcheance;

        return $this;
    }

    /**
     * Get dateEcheance
     *
     * @return \DateTime
     */
    public function getDateEcheance()
    {
        return $this->dateEcheance;
    }

    /**
     * Set reconductionTacite
     *
     * @param boolean $reconductionTacite
     *
     * @return Commun
     */
    public function setReconductionTacite($reconductionTacite)
    {
        $this->reconductionTacite = $reconductionTacite;

        return $this;
    }

    /**
     * Get reconductionTacite
     *
     * @return boolean
     */
    public function getReconductionTacite()
    {
        return $this->reconductionTacite;
    }

    /**
     * Set validationJuridique
     *
     * @param string $validationJuridique
     *
     * @return Commun
     */
    public function setValidationJuridique($validationJuridique)
    {
        $this->validationJuridique = $validationJuridique;

        return $this;
    }

    /**
     * Get validationJuridique
     *
     * @return string
     */
    public function getValidationJuridique()
    {
        return $this->validationJuridique;
    }

    /**
     * Set validationDirection
     *
     * @param string $validationDirection
     *
     * @return Commun
     */
    public function setValidationDirection($validationDirection)
    {
        $this->validationDirection = $validationDirection;

        return $this;
    }

    /**
     * Get validationDirection
     *
     * @return string
     */
    public function getValidationDirection()
    {
        return $this->validationDirection;
    }

    /**
     * Set dateValidationJuridique
     *
     * @param \DateTime $dateValidationJuridique
     *
     * @return Commun
     */
    public function setDateValidationJuridique($dateValidationJuridique)
    {
        $this->dateValidationJuridique = $dateValidationJuridique;

        return $this;
    }

    /**
     * Get dateValidationJuridique
     *
     * @return \DateTime
     */
    public function getDateValidationJuridique()
    {
        return $this->dateValidationJuridique;
    }

    /**
     * Set dateValidationDirection
     *
     * @param \DateTime $dateValidationDirection
     *
     * @return Commun
     */
    public function setDateValidationDirection($dateValidationDirection)
    {
        $this->dateValidationDirection = $dateValidationDirection;

        return $this;
    }

    /**
     * Get dateValidationDirection
     *
     * @return \DateTime
     */
    public function getDateValidationDirection()
    {
        return $this->dateValidationDirection;
    }

    /**
     * Set signaturePolytech
     *
     * @param string $signaturePolytech
     *
     * @return Commun
     */
    public function setSignaturePolytech($signaturePolytech)
    {
        $this->signaturePolytech = $signaturePolytech;

        return $this;
    }

    /**
     * Get signaturePolytech
     *
     * @return string
     */
    public function getSignaturePolytech()
    {
        return $this->signaturePolytech;
    }

    /**
     * Set dateSignaturePolytech
     *
     * @param \DateTime $dateSignaturePolytech
     *
     * @return Commun
     */
    public function setDateSignaturePolytech($dateSignaturePolytech)
    {
        $this->dateSignaturePolytech = $dateSignaturePolytech;

        return $this;
    }

    /**
     * Get dateSignaturePolytech
     *
     * @return \DateTime
     */
    public function getDateSignaturePolytech()
    {
        return $this->dateSignaturePolytech;
    }

    /**
     * Set actionDemandee
     *
     * @param string $actionDemandee
     *
     * @return Commun
     */
    public function setActionDemandee($actionDemandee)
    {
        $this->actionDemandee = $actionDemandee;

        return $this;
    }

    /**
     * Get actionDemandee
     *
     * @return string
     */
    public function getActionDemandee()
    {
        return $this->actionDemandee;
    }

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return Commun
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set fluxFinancier
     *
     * @param float $fluxFinancier
     *
     * @return Commun
     */
    public function setFluxFinancier($fluxFinancier)
    {
        $this->fluxFinancier = $fluxFinancier;

        return $this;
    }

    /**
     * Get fluxFinancier
     *
     * @return float
     */
    public function getFluxFinancier()
    {
        return $this->fluxFinancier;
    }

    /**
     * Set reservationFonds
     *
     * @param string $reservationFonds
     *
     * @return Commun
     */
    public function setReservationFonds($reservationFonds)
    {
        $this->reservationFonds = $reservationFonds;

        return $this;
    }

    /**
     * Get reservationFonds
     *
     * @return string
     */
    public function getReservationFonds()
    {
        return $this->reservationFonds;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Commun
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateMAJ
     *
     * @param \DateTime $dateMAJ
     *
     * @return Commun
     */
    public function setDateMAJ($dateMAJ)
    {
        $this->dateMAJ = $dateMAJ;

        return $this;
    }

    /**
     * Get dateMAJ
     *
     * @return \DateTime
     */
    public function getDateMAJ()
    {
        return $this->dateMAJ;
    }

    /**
     * Set nombreNouveauxAvenants
     *
     * @param integer $nombreNouveauxAvenants
     *
     * @return Commun
     */
    public function setNombreNouveauxAvenants($nombreNouveauxAvenants)
    {
        $this->nombreNouveauxAvenants = $nombreNouveauxAvenants;

        return $this;
    }

    /**
     * Get nombreNouveauxAvenants
     *
     * @return integer
     */
    public function getNombreNouveauxAvenants()
    {
        return $this->nombreNouveauxAvenants;
    }

    /**
     * Set nombreNouveauxFichier
     *
     * @param integer $nombreNouveauxFichier
     *
     * @return Commun
     */
    public function setNombreNouveauxFichier($nombreNouveauxFichier)
    {
        $this->nombreNouveauxFichier = $nombreNouveauxFichier;

        return $this;
    }

    /**
     * Get nombreNouveauxFichier
     *
     * @return integer
     */
    public function getNombreNouveauxFichier()
    {
        return $this->nombreNouveauxFichier;
    }

    
        
    public function getObjectVars () {
        return get_object_vars($this);
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function incrementerNombreNouveauxAvenants(){
        $this->nombreNouveauxAvenants += 1;
    }
}
