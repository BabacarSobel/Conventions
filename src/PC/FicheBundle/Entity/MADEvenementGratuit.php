<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PC\UserBundle\Entity\User;

/**
 * MADEvenementGratuit
 *
 * @ORM\Table("pc_template_madevenementgratuit")
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\MADEvenementGratuitRepository")
 */
class MADEvenementGratuit extends Commun
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
     * @ORM\Column(name="activite", type="text")
     */
    private $activite;

    /**
     * @var integer
     *
     * @ORM\Column(name="capaciteMaxSalles", type="integer")
     */
    private $capaciteMaxSalles;

    /**
     * @var string
     *
     * @ORM\Column(name="titreReferent", type="string", length=255)
     */
    private $titreReferent;

    /**
     * @var string
     *
     * @ORM\Column(name="NomReferent", type="string", length=255)
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
     * @ORM\Column(name="planificationEvenement", type="string", length=255)
     */
    private $planificationEvenement;
    
    /**
     * @ORM\OneToMany(targetEntity="Alerte", mappedBy="madEvenementGratuit", cascade={"remove"})
     */
    protected $alertes;
    
    /**
     * @ORM\OneToMany(targetEntity="Avenant", mappedBy="madEvenementGratuit", cascade={"remove"})
     */
    protected $avenants;
    
    /**
     * @ORM\OneToMany(targetEntity="Fichier", mappedBy="madEvenementGratuit", cascade={"remove"})
     */
    protected $fichier;
    
    /**
     * @ORM\OneToMany(targetEntity="FicheMessage", mappedBy="madEvenementGratuit", cascade={"remove"})
     */
    protected $messages;
    
    /**
     * @ORM\OneToMany(targetEntity="Location", mappedBy="madEvenementGratuit", cascade={"remove"})
     */
    protected $locations;
    
    /**
    * @ORM\ManyToOne(targetEntity="PC\UserBundle\Entity\User", inversedBy="madEvenementGratuits")
    */
    protected $demandeur;
    
    /**
     * @ORM\OneToMany(targetEntity="Action", mappedBy="madEvenementGratuit", cascade={"remove"})
     */
    protected $actions;
    
    /**
    * lier l'entité à sa superclasse
    */
    public function getTemplate()
    {
        return 'MADEvenementGratuit';
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->alertes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->avenants = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fichier = new \Doctrine\Common\Collections\ArrayCollection();
        $this->messages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->locations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set activite
     *
     * @param string $activite
     *
     * @return MADEvenementGratuit
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return string
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set capaciteMaxSalles
     *
     * @param integer $capaciteMaxSalles
     *
     * @return MADEvenementGratuit
     */
    public function setCapaciteMaxSalles($capaciteMaxSalles)
    {
        $this->capaciteMaxSalles = $capaciteMaxSalles;

        return $this;
    }

    /**
     * Get capaciteMaxSalles
     *
     * @return integer
     */
    public function getCapaciteMaxSalles()
    {
        return $this->capaciteMaxSalles;
    }

    /**
     * Set titreReferent
     *
     * @param string $titreReferent
     *
     * @return MADEvenementGratuit
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
     * @return MADEvenementGratuit
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
     * @return MADEvenementGratuit
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
     * Set planificationEvenement
     *
     * @param string $planificationEvenement
     *
     * @return MADEvenementGratuit
     */
    public function setPlanificationEvenement($planificationEvenement)
    {
        $this->planificationEvenement = $planificationEvenement;

        return $this;
    }

    /**
     * Get planificationEvenement
     *
     * @return string
     */
    public function getPlanificationEvenement()
    {
        return $this->planificationEvenement;
    }

    /**
     * Add alerte
     *
     * @param \PC\FicheBundle\Entity\Alerte $alerte
     *
     * @return MADEvenementGratuit
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
     * @return MADEvenementGratuit
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
     * @return MADEvenementGratuit
     */
    public function addFichier(\PC\FicheBundle\Entity\Fichier $fichier)
    {
        $this->fichier[] = $fichier;

        return $this;
    }

    /**
     * Remove fichier
     *
     * @param \PC\FicheBundle\Entity\Fichier $fichier
     */
    public function removeFichier(\PC\FicheBundle\Entity\Fichier $fichier)
    {
        $this->fichier->removeElement($fichier);
    }

    /**
     * Get fichier
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Add message
     *
     * @param \PC\FicheBundle\Entity\FicheMessage $message
     *
     * @return MADEvenementGratuit
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
     * Add location
     *
     * @param \PC\FicheBundle\Entity\Location $location
     *
     * @return MADEvenementGratuit
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

    /**
     * Set demandeur
     *
     * @param \PC\UserBundle\Entity\User $demandeur
     *
     * @return MADEvenementGratuit
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
     * @return MADEvenementGratuit
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
     * @return MADEvenementGratuit
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
     * @return MADEvenementGratuit
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
     * Get fichiers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFichiers()
    {
        return $this->fichiers;
    }
}
