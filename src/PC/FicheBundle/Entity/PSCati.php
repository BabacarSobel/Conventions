<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PC\UserBundle\Entity\User;

/**
 * PSCati
 *
 * @ORM\Table("pc_template_pscati")
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\PSCatiRepository")
 */
class PSCati extends Commun
{
    
    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Type", inversedBy="autres")
     */
    private $type;
    
    /**
     * @var string
     *
    * @ORM\ManyToOne(targetEntity="SousType", inversedBy="autres")
     */
    private $sousType;
    /**
     * @var string
     *
     * @ORM\Column(name="domaineFormation", type="string", length=255)
     */
    private $domaineFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="domaineSpecialiteSociete", type="string", length=255)
     */
    private $domaineSpecialiteSociete;

    /**
     * @var string
     *
     * @ORM\Column(name="departementPolytech", type="string", length=255)
     */
    private $departementPolytech;

    /**
     * @var string
     *
     * @ORM\Column(name="responsableDepartement", type="string", length=255)
     */
    private $responsableDepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="titreProjet", type="string", length=255)
     */
    private $titreProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="anneeProjetPIFE", type="string", length=255)
     */
    private $anneeProjetPIFE;

    /**
     * @var string
     *
     * @ORM\Column(name="titreEncadrant", type="string", length=255)
     */
    private $titreEncadrant;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEncadrant", type="string", length=255)
     */
    private $nomEncadrant;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomEncadrant", type="string", length=255)
     */
    private $prenomEncadrant;

    /**
     * @var string
     *
     * @ORM\Column(name="titreReferent", type="string", length=255)
     */
    private $titreReferent;

    /**
     * @var string
     *
     * @ORM\Column(name="nomReferent", type="string", length=255)
     */
    private $nomReferent;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomReferent", type="string", length=255)
     */
    private $prenomReferent;

    /**
     * @var string
     *
     * @ORM\Column(name="montantTVA", type="string", length=255, nullable=TRUE)
     */
    private $montantTVA;

    /**
     * @var float
     *
     * @ORM\Column(name="montantTTC", type="float", nullable=TRUE)
     */
    private $montantTTC;

    /**
     * @var float
     *
     * @ORM\Column(name="premiereEcheance", type="float", nullable=TRUE)
     */
    private $premiereEcheance;

    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float", nullable=TRUE)
     */
    private $solde;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseEnvoiFacture", type="string", length=255)
     */
    private $adresseEnvoiFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="annexeTechnique", type="string", length=255)
     */
    private $annexeTechnique;

    /**
     * @var string
     *
     * @ORM\Column(name="annexeFinanciere", type="string", length=255)
     */
    private $annexeFinanciere;

    /**
     * @var string
     *
     * @ORM\Column(name="titreEtudiant", type="string", length=255)
     */
    private $titreEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEtudiant", type="string", length=255)
     */
    private $nomEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomEtudiant", type="string", length=255)
     */
    private $prenomEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseEtudiant", type="string", length=255)
     */
    private $adresseEtudiant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissanceEtudiant", type="date")
     */
    private $dateNaissanceEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="emailEtudiant", type="string", length=255)
     */
    private $emailEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroConventionPIFE", type="string", length=255, nullable=TRUE)
     */
    private $numeroConventionPIFE;
    
    /**
     * @ORM\OneToMany(targetEntity="Alerte", mappedBy="psCati", cascade={"remove", "persist"})
     */
    protected $alertes;
    
    /**
     * @ORM\OneToMany(targetEntity="Avenant", mappedBy="psCati", cascade={"remove", "persist"})
     */
    protected $avenants;
    
    /**
     * @ORM\OneToMany(targetEntity="Fichier", mappedBy="psCati", cascade={"remove", "persist"})
     */
    protected $fichiers;
    
    /**
     * @ORM\OneToMany(targetEntity="FicheMessage", mappedBy="psCati", cascade={"remove", "persist"})
     */
    protected $messages;
    
    /**
    * @ORM\ManyToOne(targetEntity="PC\UserBundle\Entity\User", inversedBy="psCatis")
    */
    protected $demandeur;
    
    /**
     * @ORM\OneToMany(targetEntity="Action", mappedBy="psCati", cascade={"remove"})
     */
    protected $actions;
    
    /**
    * lier l'entité à sa superclasse
    */
    public function getTemplate()
    {
        return 'PSCati';
    }
    

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->alertes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->avenants = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fichiers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->messages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set domaineFormation
     *
     * @param string $domaineFormation
     *
     * @return PSCati
     */
    public function setDomaineFormation($domaineFormation)
    {
        $this->domaineFormation = $domaineFormation;

        return $this;
    }

    /**
     * Get domaineFormation
     *
     * @return string
     */
    public function getDomaineFormation()
    {
        return $this->domaineFormation;
    }

    /**
     * Set domaineSpecialiteSociete
     *
     * @param string $domaineSpecialiteSociete
     *
     * @return PSCati
     */
    public function setDomaineSpecialiteSociete($domaineSpecialiteSociete)
    {
        $this->domaineSpecialiteSociete = $domaineSpecialiteSociete;

        return $this;
    }

    /**
     * Get domaineSpecialiteSociete
     *
     * @return string
     */
    public function getDomaineSpecialiteSociete()
    {
        return $this->domaineSpecialiteSociete;
    }

    /**
     * Set departementPolytech
     *
     * @param string $departementPolytech
     *
     * @return PSCati
     */
    public function setDepartementPolytech($departementPolytech)
    {
        $this->departementPolytech = $departementPolytech;

        return $this;
    }

    /**
     * Get departementPolytech
     *
     * @return string
     */
    public function getDepartementPolytech()
    {
        return $this->departementPolytech;
    }

    /**
     * Set responsableDepartement
     *
     * @param string $responsableDepartement
     *
     * @return PSCati
     */
    public function setResponsableDepartement($responsableDepartement)
    {
        $this->responsableDepartement = $responsableDepartement;

        return $this;
    }

    /**
     * Get responsableDepartement
     *
     * @return string
     */
    public function getResponsableDepartement()
    {
        return $this->responsableDepartement;
    }

    /**
     * Set titreProjet
     *
     * @param string $titreProjet
     *
     * @return PSCati
     */
    public function setTitreProjet($titreProjet)
    {
        $this->titreProjet = $titreProjet;

        return $this;
    }

    /**
     * Get titreProjet
     *
     * @return string
     */
    public function getTitreProjet()
    {
        return $this->titreProjet;
    }

    /**
     * Set anneeProjetPIFE
     *
     * @param string $anneeProjetPIFE
     *
     * @return PSCati
     */
    public function setAnneeProjetPIFE($anneeProjetPIFE)
    {
        $this->anneeProjetPIFE = $anneeProjetPIFE;

        return $this;
    }

    /**
     * Get anneeProjetPIFE
     *
     * @return string
     */
    public function getAnneeProjetPIFE()
    {
        return $this->anneeProjetPIFE;
    }

    /**
     * Set titreEncadrant
     *
     * @param string $titreEncadrant
     *
     * @return PSCati
     */
    public function setTitreEncadrant($titreEncadrant)
    {
        $this->titreEncadrant = $titreEncadrant;

        return $this;
    }

    /**
     * Get titreEncadrant
     *
     * @return string
     */
    public function getTitreEncadrant()
    {
        return $this->titreEncadrant;
    }

    /**
     * Set nomEncadrant
     *
     * @param string $nomEncadrant
     *
     * @return PSCati
     */
    public function setNomEncadrant($nomEncadrant)
    {
        $this->nomEncadrant = $nomEncadrant;

        return $this;
    }

    /**
     * Get nomEncadrant
     *
     * @return string
     */
    public function getNomEncadrant()
    {
        return $this->nomEncadrant;
    }

    /**
     * Set prenomEncadrant
     *
     * @param string $prenomEncadrant
     *
     * @return PSCati
     */
    public function setPrenomEncadrant($prenomEncadrant)
    {
        $this->prenomEncadrant = $prenomEncadrant;

        return $this;
    }

    /**
     * Get prenomEncadrant
     *
     * @return string
     */
    public function getPrenomEncadrant()
    {
        return $this->prenomEncadrant;
    }

    /**
     * Set titreReferent
     *
     * @param string $titreReferent
     *
     * @return PSCati
     */
    public function setTitreReferent($titreReferent)
    {
        $this->titreReferent = $titreReferent;

        return $this;
    }

    /**
     * Get titreReferent
     *
     * @return string
     */
    public function getTitreReferent()
    {
        return $this->titreReferent;
    }

    /**
     * Set nomReferent
     *
     * @param string $nomReferent
     *
     * @return PSCati
     */
    public function setNomReferent($nomReferent)
    {
        $this->nomReferent = $nomReferent;

        return $this;
    }

    /**
     * Get nomReferent
     *
     * @return string
     */
    public function getNomReferent()
    {
        return $this->nomReferent;
    }

    /**
     * Set prenomReferent
     *
     * @param string $prenomReferent
     *
     * @return PSCati
     */
    public function setPrenomReferent($prenomReferent)
    {
        $this->prenomReferent = $prenomReferent;

        return $this;
    }

    /**
     * Get prenomReferent
     *
     * @return string
     */
    public function getPrenomReferent()
    {
        return $this->prenomReferent;
    }

    /**
     * Set montantTVA
     *
     * @param string $montantTVA
     *
     * @return PSCati
     */
    public function setMontantTVA($montantTVA)
    {
        $this->montantTVA = $montantTVA;

        return $this;
    }

    /**
     * Get montantTVA
     *
     * @return string
     */
    public function getMontantTVA()
    {
        return $this->montantTVA;
    }

    /**
     * Set montantTTC
     *
     * @param float $montantTTC
     *
     * @return PSCati
     */
    public function setMontantTTC($montantTTC)
    {
        $this->montantTTC = $montantTTC;

        return $this;
    }

    /**
     * Get montantTTC
     *
     * @return float
     */
    public function getMontantTTC()
    {
        return $this->montantTTC;
    }

    /**
     * Set premiereEcheance
     *
     * @param float $premiereEcheance
     *
     * @return PSCati
     */
    public function setPremiereEcheance($premiereEcheance)
    {
        $this->premiereEcheance = $premiereEcheance;

        return $this;
    }

    /**
     * Get premiereEcheance
     *
     * @return float
     */
    public function getPremiereEcheance()
    {
        return $this->premiereEcheance;
    }

    /**
     * Set solde
     *
     * @param float $solde
     *
     * @return PSCati
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return float
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set adresseEnvoiFacture
     *
     * @param string $adresseEnvoiFacture
     *
     * @return PSCati
     */
    public function setAdresseEnvoiFacture($adresseEnvoiFacture)
    {
        $this->adresseEnvoiFacture = $adresseEnvoiFacture;

        return $this;
    }

    /**
     * Get adresseEnvoiFacture
     *
     * @return string
     */
    public function getAdresseEnvoiFacture()
    {
        return $this->adresseEnvoiFacture;
    }

    /**
     * Set annexeTechnique
     *
     * @param string $annexeTechnique
     *
     * @return PSCati
     */
    public function setAnnexeTechnique($annexeTechnique)
    {
        $this->annexeTechnique = $annexeTechnique;

        return $this;
    }

    /**
     * Get annexeTechnique
     *
     * @return string
     */
    public function getAnnexeTechnique()
    {
        return $this->annexeTechnique;
    }

    /**
     * Set annexeFinanciere
     *
     * @param string $annexeFinanciere
     *
     * @return PSCati
     */
    public function setAnnexeFinanciere($annexeFinanciere)
    {
        $this->annexeFinanciere = $annexeFinanciere;

        return $this;
    }

    /**
     * Get annexeFinanciere
     *
     * @return string
     */
    public function getAnnexeFinanciere()
    {
        return $this->annexeFinanciere;
    }

    /**
     * Set titreEtudiant
     *
     * @param string $titreEtudiant
     *
     * @return PSCati
     */
    public function setTitreEtudiant($titreEtudiant)
    {
        $this->titreEtudiant = $titreEtudiant;

        return $this;
    }

    /**
     * Get titreEtudiant
     *
     * @return string
     */
    public function getTitreEtudiant()
    {
        return $this->titreEtudiant;
    }

    /**
     * Set nomEtudiant
     *
     * @param string $nomEtudiant
     *
     * @return PSCati
     */
    public function setNomEtudiant($nomEtudiant)
    {
        $this->nomEtudiant = $nomEtudiant;

        return $this;
    }

    /**
     * Get nomEtudiant
     *
     * @return string
     */
    public function getNomEtudiant()
    {
        return $this->nomEtudiant;
    }

    /**
     * Set prenomEtudiant
     *
     * @param string $prenomEtudiant
     *
     * @return PSCati
     */
    public function setPrenomEtudiant($prenomEtudiant)
    {
        $this->prenomEtudiant = $prenomEtudiant;

        return $this;
    }

    /**
     * Get prenomEtudiant
     *
     * @return string
     */
    public function getPrenomEtudiant()
    {
        return $this->prenomEtudiant;
    }

    /**
     * Set adresseEtudiant
     *
     * @param string $adresseEtudiant
     *
     * @return PSCati
     */
    public function setAdresseEtudiant($adresseEtudiant)
    {
        $this->adresseEtudiant = $adresseEtudiant;

        return $this;
    }

    /**
     * Get adresseEtudiant
     *
     * @return string
     */
    public function getAdresseEtudiant()
    {
        return $this->adresseEtudiant;
    }

    /**
     * Set dateNaissanceEtudiant
     *
     * @param \DateTime $dateNaissanceEtudiant
     *
     * @return PSCati
     */
    public function setDateNaissanceEtudiant($dateNaissanceEtudiant)
    {
        $this->dateNaissanceEtudiant = $dateNaissanceEtudiant;

        return $this;
    }

    /**
     * Get dateNaissanceEtudiant
     *
     * @return \DateTime
     */
    public function getDateNaissanceEtudiant()
    {
        return $this->dateNaissanceEtudiant;
    }

    /**
     * Set emailEtudiant
     *
     * @param string $emailEtudiant
     *
     * @return PSCati
     */
    public function setEmailEtudiant($emailEtudiant)
    {
        $this->emailEtudiant = $emailEtudiant;

        return $this;
    }

    /**
     * Get emailEtudiant
     *
     * @return string
     */
    public function getEmailEtudiant()
    {
        return $this->emailEtudiant;
    }

    /**
     * Set numeroConventionPIFE
     *
     * @param string $numeroConventionPIFE
     *
     * @return PSCati
     */
    public function setNumeroConventionPIFE($numeroConventionPIFE)
    {
        $this->numeroConventionPIFE = $numeroConventionPIFE;

        return $this;
    }

    /**
     * Get numeroConventionPIFE
     *
     * @return string
     */
    public function getNumeroConventionPIFE()
    {
        return $this->numeroConventionPIFE;
    }

    /**
     * Add alerte
     *
     * @param \PC\FicheBundle\Entity\Alerte $alerte
     *
     * @return PSCati
     */
    public function addAlerte(\PC\FicheBundle\Entity\Alerte $alerte)
    {
        $this->alertes[] = $alerte;

        return $this;
    }

    /**
     * Remove alerte
     *
     * @param \PC\FicheBundle\Entity\Alerte $alerte
     */
    public function removeAlerte(\PC\FicheBundle\Entity\Alerte $alerte)
    {
        $this->alertes->removeElement($alerte);
    }

    /**
     * Get alertes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlertes()
    {
        return $this->alertes;
    }

    /**
     * Add avenant
     *
     * @param \PC\FicheBundle\Entity\Avenant $avenant
     *
     * @return PSCati
     */
    public function addAvenant(\PC\FicheBundle\Entity\Avenant $avenant)
    {
        $this->avenants[] = $avenant;

        return $this;
    }

    /**
     * Remove avenant
     *
     * @param \PC\FicheBundle\Entity\Avenant $avenant
     */
    public function removeAvenant(\PC\FicheBundle\Entity\Avenant $avenant)
    {
        $this->avenants->removeElement($avenant);
    }

    /**
     * Get avenants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAvenants()
    {
        return $this->avenants;
    }

    /**
     * Add fichier
     *
     * @param \PC\FicheBundle\Entity\Fichier $fichier
     *
     * @return PSCati
     */
    public function addFichier(\PC\FicheBundle\Entity\Fichier $fichier)
    {
        $this->fichiers[] = $fichier;

        return $this;
    }

    /**
     * Remove fichier
     *
     * @param \PC\FicheBundle\Entity\Fichier $fichier
     */
    public function removeFichier(\PC\FicheBundle\Entity\Fichier $fichier)
    {
        $this->fichiers->removeElement($fichier);
    }

    /**
     * Get fichiers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFichiers()
    {
        return $this->fichiers;
    }

    /**
     * Add message
     *
     * @param \PC\FicheBundle\Entity\FicheMessage $message
     *
     * @return PSCati
     */
    public function addMessage(\PC\FicheBundle\Entity\FicheMessage $message)
    {
        $this->messages[] = $message;

        return $this;
    }

    /**
     * Remove message
     *
     * @param \PC\FicheBundle\Entity\FicheMessage $message
     */
    public function removeMessage(\PC\FicheBundle\Entity\FicheMessage $message)
    {
        $this->messages->removeElement($message);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set demandeur
     *
     * @param \PC\UserBundle\Entity\User $demandeur
     *
     * @return PSCati
     */
    public function setDemandeur(\PC\UserBundle\Entity\User $demandeur = null)
    {
        $this->demandeur = $demandeur;

        return $this;
    }

    /**
     * Get demandeur
     *
     * @return \PC\UserBundle\Entity\User
     */
    public function getDemandeur()
    {
        return $this->demandeur;
    }

    /**
     * Set type
     *
     * @param \PC\FicheBundle\Entity\Type $type
     *
     * @return PSCati
     */
    public function setType(\PC\FicheBundle\Entity\Type $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \PC\FicheBundle\Entity\Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set sousType
     *
     * @param \PC\FicheBundle\Entity\SousType $sousType
     *
     * @return PSCati
     */
    public function setSousType(\PC\FicheBundle\Entity\SousType $sousType = null)
    {
        $this->sousType = $sousType;

        return $this;
    }

    /**
     * Get sousType
     *
     * @return \PC\FicheBundle\Entity\SousType
     */
    public function getSousType()
    {
        return $this->sousType;
    }
    


    /**
     * Add action
     *
     * @param \PC\FicheBundle\Entity\Action $action
     *
     * @return PSCati
     */
    public function addAction(\PC\FicheBundle\Entity\Action $action)
    {
        $this->actions[] = $action;

        return $this;
    }

    /**
     * Remove action
     *
     * @param \PC\FicheBundle\Entity\Action $action
     */
    public function removeAction(\PC\FicheBundle\Entity\Action $action)
    {
        $this->actions->removeElement($action);
    }

    /**
     * Get actions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Add location
     *
     * @param \PC\FicheBundle\Entity\Location $location
     *
     * @return PSCati
     */
    public function addLocation(\PC\FicheBundle\Entity\Location $location)
    {
        $this->locations[] = $location;

        return $this;
    }

    /**
     * Remove location
     *
     * @param \PC\FicheBundle\Entity\Location $location
     */
    public function removeLocation(\PC\FicheBundle\Entity\Location $location)
    {
        $this->locations->removeElement($location);
    }

    /**
     * Get locations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocations()
    {
        return $this->locations;
    }
}
