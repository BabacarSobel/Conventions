<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PC\UserBundle\Entity\User as User;

/**
 * ChartePartenariat
 *
 * @ORM\Table("pc_template_chartepartenariat")
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\ChartePartenariatRepository")
 */
class ChartePartenariat extends Commun
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateVersementTaxe", type="date", nullable=TRUE)
     */
    private $dateVersementTaxe;

    /**
     * @var string
     *
     * @ORM\Column(name="versementTaxe", type="string", length=255, nullable=TRUE)
     */
    private $versementTaxe;

    /**
     * @var string
     *
     * @ORM\Column(name="titreReferentEntreprise", type="string", length=255)
     */
    private $titreReferentEntreprise;

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
     * @ORM\Column(name="emailReferent", type="string", length=255)
     */
    private $emailReferent;

    /**
     * @var string
     *
     * @ORM\Column(name="telephoneReferent", type="string", length=255)
     */
    private $telephoneReferent;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Alerte", mappedBy="chartePartenariat", cascade={"remove", "persist"})
     */
    protected $alertes;
    
    /**
     * @ORM\OneToMany(targetEntity="Avenant", mappedBy="chartePartenariat", cascade={"remove", "persist"})
     */
    protected $avenants;
    
    /**
     * @ORM\OneToMany(targetEntity="Fichier", mappedBy="chartePartenariat", cascade={"remove", "persist"})
     */
    protected $fichiers;
    
    /**
     * @ORM\OneToMany(targetEntity="FicheMessage", mappedBy="chartePartenariat", cascade={"remove", "persist"})
     */
    protected $messages;
  
    
    /**
    * @ORM\ManyToOne(targetEntity="PC\UserBundle\Entity\User", inversedBy="chartePartenariats")
    */
    protected $demandeur;
    
    /**
     * @ORM\OneToMany(targetEntity="Action", mappedBy="chartePartenariat", cascade={"remove"})
     */
    protected $actions;
    
    /**
    * lier l'entité à sa superclasse
    */
    public function getTemplate()
    {
        return 'ChartePartenariat';
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
     * Set dateVersementTaxe
     *
     * @param \DateTime $dateVersementTaxe
     *
     * @return ChartePartenariat
     */
    public function setDateVersementTaxe($dateVersementTaxe)
    {
        $this->dateVersementTaxe = $dateVersementTaxe;

        return $this;
    }

    /**
     * Get dateVersementTaxe
     *
     * @return \DateTime
     */
    public function getDateVersementTaxe()
    {
        return $this->dateVersementTaxe;
    }

    /**
     * Set versementTaxe
     *
     * @param string $versementTaxe
     *
     * @return ChartePartenariat
     */
    public function setVersementTaxe($versementTaxe)
    {
        $this->versementTaxe = $versementTaxe;

        return $this;
    }

    /**
     * Get versementTaxe
     *
     * @return string
     */
    public function getVersementTaxe()
    {
        return $this->versementTaxe;
    }

    /**
     * Set titreReferentEntreprise
     *
     * @param string $titreReferentEntreprise
     *
     * @return ChartePartenariat
     */
    public function setTitreReferentEntreprise($titreReferentEntreprise)
    {
        $this->titreReferentEntreprise = $titreReferentEntreprise;

        return $this;
    }

    /**
     * Get titreReferentEntreprise
     *
     * @return string
     */
    public function getTitreReferentEntreprise()
    {
        return $this->titreReferentEntreprise;
    }

    /**
     * Set nomReferent
     *
     * @param string $nomReferent
     *
     * @return ChartePartenariat
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
     * @return ChartePartenariat
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
     * Set emailReferent
     *
     * @param string $emailReferent
     *
     * @return ChartePartenariat
     */
    public function setEmailReferent($emailReferent)
    {
        $this->emailReferent = $emailReferent;

        return $this;
    }

    /**
     * Get emailReferent
     *
     * @return string
     */
    public function getEmailReferent()
    {
        return $this->emailReferent;
    }

    /**
     * Set telephoneReferent
     *
     * @param string $telephoneReferent
     *
     * @return ChartePartenariat
     */
    public function setTelephoneReferent($telephoneReferent)
    {
        $this->telephoneReferent = $telephoneReferent;

        return $this;
    }

    /**
     * Get telephoneReferent
     *
     * @return string
     */
    public function getTelephoneReferent()
    {
        return $this->telephoneReferent;
    }

    /**
     * Add alerte
     *
     * @param \PC\FicheBundle\Entity\Alerte $alerte
     *
     * @return ChartePartenariat
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
     * @return ChartePartenariat
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
     * @return ChartePartenariat
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
     * @return ChartePartenariat
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
     * @return ChartePartenariat
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
     * @return ChartePartenariat
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
     * @return ChartePartenariat
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
     * @return ChartePartenariat
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
