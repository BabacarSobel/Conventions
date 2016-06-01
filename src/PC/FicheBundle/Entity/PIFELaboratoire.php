<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PC\UserBundle\Entity\User;

/**
 * PIFELaboratoire
 *
 * @ORM\Table("pc_template_pifelaboratoire")
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\PIFELaboratoireRepository")
 */
class PIFELaboratoire extends Commun
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
     * @ORM\Column(name="departementEtudiant", type="string", length=255)
     */
    private $departementEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="responsableDepartement", type="string", length=255)
     */
    private $responsableDepartement;
    
    /**
     * @var string
     *
     * @ORM\Column(name="typeUnite", type="string", length=255, nullable=TRUE)
     */
    private $typeUnite;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroUnite", type="string", length=255, nullable=TRUE)
     */
    private $numeroUnite;

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
     * @ORM\Column(name="titreProjet", type="string", length=255)
     */
    private $titreProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroConventionCati", type="string", length=255, nullable=TRUE)
     */
    private $numeroConventionCati;
    
    /**
     * @ORM\OneToMany(targetEntity="Alerte", mappedBy="pifeLaboratoire", cascade={"remove", "persist"})
     */
    protected $alertes;
    
    /**
     * @ORM\OneToMany(targetEntity="Avenant", mappedBy="pifeLaboratoire", cascade={"remove", "persist"})
     */
    protected $avenants;
    
    /**
     * @ORM\OneToMany(targetEntity="Fichier", mappedBy="pifeLaboratoire", cascade={"remove", "persist"})
     */
    protected $fichiers;
    
    /**
     * @ORM\OneToMany(targetEntity="FicheMessage", mappedBy="pifeLaboratoire", cascade={"remove", "persist"})
     */
    protected $messages;
    
    /**
    * @ORM\ManyToOne(targetEntity="PC\UserBundle\Entity\User", inversedBy="pifeLaboratoires")
    */
    protected $demandeur;
    
    /**
     * @ORM\OneToMany(targetEntity="Action", mappedBy="pifeLaboratoire", cascade={"remove"})
     */
    protected $actions;
    
    /**
    * lier l'entité à sa superclasse
    */
    public function getTemplate()
    {
        return 'PIFELaboratoire';
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
     * Set titreEtudiant
     *
     * @param string $titreEtudiant
     *
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * Set departementEtudiant
     *
     * @param string $departementEtudiant
     *
     * @return PIFELaboratoire
     */
    public function setDepartementEtudiant($departementEtudiant)
    {
        $this->departementEtudiant = $departementEtudiant;

        return $this;
    }

    /**
     * Get departementEtudiant
     *
     * @return string
     */
    public function getDepartementEtudiant()
    {
        return $this->departementEtudiant;
    }

    /**
     * Set responsableDepartement
     *
     * @param string $responsableDepartement
     *
     * @return PIFELaboratoire
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
     * Set typeUnite
     *
     * @param string $typeUnite
     *
     * @return PIFELaboratoire
     */
    public function setTypeUnite($typeUnite)
    {
        $this->typeUnite = $typeUnite;

        return $this;
    }

    /**
     * Get typeUnite
     *
     * @return string
     */
    public function getTypeUnite()
    {
        return $this->typeUnite;
    }

    /**
     * Set numeroUnite
     *
     * @param string $numeroUnite
     *
     * @return PIFELaboratoire
     */
    public function setNumeroUnite($numeroUnite)
    {
        $this->numeroUnite = $numeroUnite;

        return $this;
    }

    /**
     * Get numeroUnite
     *
     * @return string
     */
    public function getNumeroUnite()
    {
        return $this->numeroUnite;
    }

    /**
     * Set titreEncadrant
     *
     * @param string $titreEncadrant
     *
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * Set titreProjet
     *
     * @param string $titreProjet
     *
     * @return PIFELaboratoire
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
     * Set numeroConventionCati
     *
     * @param string $numeroConventionCati
     *
     * @return PIFELaboratoire
     */
    public function setNumeroConventionCati($numeroConventionCati)
    {
        $this->numeroConventionCati = $numeroConventionCati;

        return $this;
    }

    /**
     * Get numeroConventionCati
     *
     * @return string
     */
    public function getNumeroConventionCati()
    {
        return $this->numeroConventionCati;
    }

    /**
     * Add alerte
     *
     * @param \PC\FicheBundle\Entity\Alerte $alerte
     *
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
     * @return PIFELaboratoire
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
}
