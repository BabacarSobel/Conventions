<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PC\UserBundle\Entity\User;

/**
 * MADSalles
 *
 * @ORM\Table("pc_template_madsalles")
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\MADSallesRepository")
 */
class MADSalles extends Commun
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
     * @var integer
     *
     * @ORM\Column(name="dureeTotale", type="integer")
     */
    private $dureeTotale;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="text")
     */
    private $activite;

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
     * @var boolean
     *
     * @ORM\Column(name="planificationEvenement", type="boolean")
     */
    private $planificationEvenement;
    
    /**
     * @ORM\OneToMany(targetEntity="Alerte", mappedBy="madSalles", cascade={"remove"})
     */
    protected $alertes;
    
    /**
     * @ORM\OneToMany(targetEntity="Avenant", mappedBy="madSalles", cascade={"remove"})
     */
    protected $avenants;
    
    /**
     * @ORM\OneToMany(targetEntity="Fichier", mappedBy="madSalles", cascade={"remove"})
     */
    protected $fichiers;
    
    /**
     * @ORM\OneToMany(targetEntity="FicheMessage", mappedBy="madSalles", cascade={"remove"})
     */
    protected $messages;

    /**
     * @ORM\OneToMany(targetEntity="Location", mappedBy="madSalles", cascade={"remove"})
     */
    protected $locations;
   
    
    /**
    * @ORM\ManyToOne(targetEntity="PC\UserBundle\Entity\User", inversedBy="madSalless")
    */
    protected $demandeur;
    
    /**
     * @ORM\OneToMany(targetEntity="Action", mappedBy="madSalles", cascade={"remove"})
     */
    protected $actions;
    
    /**
    * lier l'entité à sa superclasse
    */
    public function getTemplate()
    {
        return 'MADSalles';
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
        $this->locations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set dureeTotale
     *
     * @param integer $dureeTotale
     *
     * @return MADSalles
     */
    public function setDureeTotale($dureeTotale)
    {
        $this->dureeTotale = $dureeTotale;

        return $this;
    }

    /**
     * Get dureeTotale
     *
     * @return integer
     */
    public function getDureeTotale()
    {
        return $this->dureeTotale;
    }

    /**
     * Set activite
     *
     * @param string $activite
     *
     * @return MADSalles
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
     * Set titreReferent
     *
     * @param string $titreReferent
     *
     * @return MADSalles
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
     * @return MADSalles
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
     * @return MADSalles
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
     * @param boolean $planificationEvenement
     *
     * @return MADSalles
     */
    public function setPlanificationEvenement($planificationEvenement)
    {
        $this->planificationEvenement = $planificationEvenement;

        return $this;
    }

    /**
     * Get planificationEvenement
     *
     * @return boolean
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
     * @return MADSalles
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
     * @return MADSalles
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
     * @return MADSalles
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
     * @return MADSalles
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
     * @return MADSalles
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
     * @return MADSalles
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
     * @return MADSalles
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
     * @return MADSalles
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
     * @return MADSalles
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
