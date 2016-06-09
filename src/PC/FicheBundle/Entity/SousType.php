<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousType
 *
 * @ORM\Table("pc_sous_type")
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\TypeRepository")
 */
class SousType
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
     * @ORM\Column(name="db", type="string", length=255)
     */
    private $db;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
    * @ORM\ManyToOne(targetEntity="Type", inversedBy="soustypes", cascade={"remove"})
    */
    protected $type;
    
        /**
     * @ORM\OneToMany(targetEntity="ChartePartenariat", mappedBy="ficheSousType", cascade={"remove", "persist"})
     */
    protected $chartePartenariats;
    
        /**
     * @ORM\OneToMany(targetEntity="MADEvenementGratuit", mappedBy="ficheSousType", cascade={"remove", "persist"})
     */
    protected $madEvenementGratuits;
    
        /**
     * @ORM\OneToMany(targetEntity="MADSalles", mappedBy="ficheSousType", cascade={"remove", "persist"})
     */
    protected $madSalles;
    
        /**
     * @ORM\OneToMany(targetEntity="PIFEClassique", mappedBy="ficheSousType", cascade={"remove", "persist"})
     */
    protected $pifeClassiques;
    
        /**
     * @ORM\OneToMany(targetEntity="PIFELaboratoire", mappedBy="ficheSousType", cascade={"remove", "persist"})
     */
    protected $pifeLaboratoires;
    
        /**
     * @ORM\OneToMany(targetEntity="PSCati", mappedBy="ficheSousType", cascade={"remove", "persist"})
     */
    protected $psCatis;
    
    /**
     * @ORM\OneToMany(targetEntity="Autre", mappedBy="ficheSousType", cascade={"remove", "persist"})
     */
    protected $autres;
    
    /**
     * @ORM\OneToMany(targetEntity="template", mappedBy="type", cascade={"remove", "persist"})
     */
    protected $templates;

    
    /**
     * Constructor
     */
    public function __construct()
    {
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
     * @return SousType
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
     * @return SousType
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
     * Set db
     *
     * @param string $db
     *
     * @return SousType
     */
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    /**
     * Get db
     *
     * @return string
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return SousType
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
     * Set type
     *
     * @param \PC\FicheBundle\Entity\Type $type
     *
     * @return SousType
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
     * Add chartePartenariat
     *
     * @param \PC\FicheBundle\Entity\ChartePartenariat $chartePartenariat
     *
     * @return SousType
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
     * @return SousType
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
     * @return SousType
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
     * @return SousType
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
     * @return SousType
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
     * @return SousType
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
     * @return SousType
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

    /**
     * Add template
     *
     * @param \PC\FicheBundle\Entity\template $template
     *
     * @return SousType
     */
    public function addTemplate(\PC\FicheBundle\Entity\template $template)
    {
        $this->templates[] = $template;

        return $this;
    }

    /**
     * Remove template
     *
     * @param \PC\FicheBundle\Entity\template $template
     */
    public function removeTemplate(\PC\FicheBundle\Entity\template $template)
    {
        $this->templates->removeElement($template);
    }

    /**
     * Get templates
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTemplates()
    {
        return $this->templates;
    }
}
