<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table("pc_type")
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\TypeRepository")
 */
class Type
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="route", type="string", length=255)
     */
    private $route;
    
        /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    
    /**
     * @ORM\OneToMany(targetEntity="SousType", mappedBy="type", cascade={"remove", "persist"})
     */
    protected $soustypes;
    
    /**
     * @ORM\OneToMany(targetEntity="ChartePartenariat", mappedBy="ficheType", cascade={"remove", "persist"})
     */
    protected $chartePartenariats;
    
        /**
     * @ORM\OneToMany(targetEntity="MADEvenementGratuit", mappedBy="ficheType", cascade={"remove", "persist"})
     */
    protected $madEvenementGratuits;
    
        /**
     * @ORM\OneToMany(targetEntity="MADSalles", mappedBy="ficheType", cascade={"remove", "persist"})
     */
    protected $madSalles;
    
        /**
     * @ORM\OneToMany(targetEntity="PIFEClassique", mappedBy="ficheType", cascade={"remove", "persist"})
     */
    protected $pifeClassiques;
    
        /**
     * @ORM\OneToMany(targetEntity="PIFELaboratoire", mappedBy="ficheType", cascade={"remove", "persist"})
     */
    protected $pifeLaboratoires;
    
    /**
     * @ORM\OneToMany(targetEntity="PSCati", mappedBy="ficheType", cascade={"remove", "persist"})
     */
    protected $psCatis;
    
    /**
     * @ORM\OneToMany(targetEntity="Autre", mappedBy="ficheType", cascade={"remove", "persist"})
     */
    protected $autres;

   
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->soustypes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->chartePartenariats = new \Doctrine\Common\Collections\ArrayCollection();
        $this->madEvenementGratuits = new \Doctrine\Common\Collections\ArrayCollection();
        $this->madSalles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pifeClassiques = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pifeLaboratoires = new \Doctrine\Common\Collections\ArrayCollection();
        $this->psCatis = new \Doctrine\Common\Collections\ArrayCollection();
        $this->autres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Type
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set route
     *
     * @param string $route
     *
     * @return Type
     */
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Type
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add soustype
     *
     * @param \PC\FicheBundle\Entity\SousType $soustype
     *
     * @return Type
     */
    public function addSoustype(\PC\FicheBundle\Entity\SousType $soustype)
    {
        $this->soustypes[] = $soustype;

        return $this;
    }

    /**
     * Remove soustype
     *
     * @param \PC\FicheBundle\Entity\SousType $soustype
     */
    public function removeSoustype(\PC\FicheBundle\Entity\SousType $soustype)
    {
        $this->soustypes->removeElement($soustype);
    }

    /**
     * Get soustypes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSoustypes()
    {
        return $this->soustypes;
    }

    /**
     * Add chartePartenariat
     *
     * @param \PC\FicheBundle\Entity\ChartePartenariat $chartePartenariat
     *
     * @return Type
     */
    public function addChartePartenariat(\PC\FicheBundle\Entity\ChartePartenariat $chartePartenariat)
    {
        $this->chartePartenariats[] = $chartePartenariat;

        return $this;
    }

    /**
     * Remove chartePartenariat
     *
     * @param \PC\FicheBundle\Entity\ChartePartenariat $chartePartenariat
     */
    public function removeChartePartenariat(\PC\FicheBundle\Entity\ChartePartenariat $chartePartenariat)
    {
        $this->chartePartenariats->removeElement($chartePartenariat);
    }

    /**
     * Get chartePartenariats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChartePartenariats()
    {
        return $this->chartePartenariats;
    }

    /**
     * Add madEvenementGratuit
     *
     * @param \PC\FicheBundle\Entity\MADEvenementGratuit $madEvenementGratuit
     *
     * @return Type
     */
    public function addMadEvenementGratuit(\PC\FicheBundle\Entity\MADEvenementGratuit $madEvenementGratuit)
    {
        $this->madEvenementGratuits[] = $madEvenementGratuit;

        return $this;
    }

    /**
     * Remove madEvenementGratuit
     *
     * @param \PC\FicheBundle\Entity\MADEvenementGratuit $madEvenementGratuit
     */
    public function removeMadEvenementGratuit(\PC\FicheBundle\Entity\MADEvenementGratuit $madEvenementGratuit)
    {
        $this->madEvenementGratuits->removeElement($madEvenementGratuit);
    }

    /**
     * Get madEvenementGratuits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMadEvenementGratuits()
    {
        return $this->madEvenementGratuits;
    }

    /**
     * Add madSalle
     *
     * @param \PC\FicheBundle\Entity\MADSalles $madSalle
     *
     * @return Type
     */
    public function addMadSalle(\PC\FicheBundle\Entity\MADSalles $madSalle)
    {
        $this->madSalles[] = $madSalle;

        return $this;
    }

    /**
     * Remove madSalle
     *
     * @param \PC\FicheBundle\Entity\MADSalles $madSalle
     */
    public function removeMadSalle(\PC\FicheBundle\Entity\MADSalles $madSalle)
    {
        $this->madSalles->removeElement($madSalle);
    }

    /**
     * Get madSalles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMadSalles()
    {
        return $this->madSalles;
    }

    /**
     * Add pifeClassique
     *
     * @param \PC\FicheBundle\Entity\PIFEClassique $pifeClassique
     *
     * @return Type
     */
    public function addPifeClassique(\PC\FicheBundle\Entity\PIFEClassique $pifeClassique)
    {
        $this->pifeClassiques[] = $pifeClassique;

        return $this;
    }

    /**
     * Remove pifeClassique
     *
     * @param \PC\FicheBundle\Entity\PIFEClassique $pifeClassique
     */
    public function removePifeClassique(\PC\FicheBundle\Entity\PIFEClassique $pifeClassique)
    {
        $this->pifeClassiques->removeElement($pifeClassique);
    }

    /**
     * Get pifeClassiques
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPifeClassiques()
    {
        return $this->pifeClassiques;
    }

    /**
     * Add pifeLaboratoire
     *
     * @param \PC\FicheBundle\Entity\PIFELaboratoire $pifeLaboratoire
     *
     * @return Type
     */
    public function addPifeLaboratoire(\PC\FicheBundle\Entity\PIFELaboratoire $pifeLaboratoire)
    {
        $this->pifeLaboratoires[] = $pifeLaboratoire;

        return $this;
    }

    /**
     * Remove pifeLaboratoire
     *
     * @param \PC\FicheBundle\Entity\PIFELaboratoire $pifeLaboratoire
     */
    public function removePifeLaboratoire(\PC\FicheBundle\Entity\PIFELaboratoire $pifeLaboratoire)
    {
        $this->pifeLaboratoires->removeElement($pifeLaboratoire);
    }

    /**
     * Get pifeLaboratoires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPifeLaboratoires()
    {
        return $this->pifeLaboratoires;
    }

    /**
     * Add psCati
     *
     * @param \PC\FicheBundle\Entity\PSCati $psCati
     *
     * @return Type
     */
    public function addPsCati(\PC\FicheBundle\Entity\PSCati $psCati)
    {
        $this->psCatis[] = $psCati;

        return $this;
    }

    /**
     * Remove psCati
     *
     * @param \PC\FicheBundle\Entity\PSCati $psCati
     */
    public function removePsCati(\PC\FicheBundle\Entity\PSCati $psCati)
    {
        $this->psCatis->removeElement($psCati);
    }

    /**
     * Get psCatis
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPsCatis()
    {
        return $this->psCatis;
    }

    /**
     * Add autre
     *
     * @param \PC\FicheBundle\Entity\Autre $autre
     *
     * @return Type
     */
    public function addAutre(\PC\FicheBundle\Entity\Autre $autre)
    {
        $this->autres[] = $autre;

        return $this;
    }

    /**
     * Remove autre
     *
     * @param \PC\FicheBundle\Entity\Autre $autre
     */
    public function removeAutre(\PC\FicheBundle\Entity\Autre $autre)
    {
        $this->autres->removeElement($autre);
    }

    /**
     * Get autres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAutres()
    {
        return $this->autres;
    }
}
