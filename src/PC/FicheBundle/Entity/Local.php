<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Local
 *
 * @ORM\Table("pc_local")
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\LocalRepository")
 */
class Local
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
     * @ORM\Column(name="description", type="string", length=255, nullable=TRUE)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible = true;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite", type="integer")
     */
    private $capacite = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="batiment", type="string", length=255)
     */
    private $batiment;


    
   /**
    * @ORM\OneToOne(targetEntity="Location")
    */
    protected $location;
    


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
     * @return Local
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
     * Set disponible
     *
     * @param boolean $disponible
     *
     * @return Local
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return boolean
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set capacite
     *
     * @param float $capacite
     *
     * @return Local
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return float
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set batiment
     *
     * @param string $batiment
     *
     * @return Local
     */
    public function setBatiment($batiment)
    {
        $this->batiment = $batiment;

        return $this;
    }

    /**
     * Get batiment
     *
     * @return string
     */
    public function getBatiment()
    {
        return $this->batiment;
    }


    /**
     * Set description
     *
     * @param string $description
     *
     * @return Local
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
     * Set location
     *
     * @param \PC\FicheBundle\Entity\Location $location
     *
     * @return Local
     */
    public function setLocation(\PC\FicheBundle\Entity\Location $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \PC\FicheBundle\Entity\Location
     */
    public function getLocation()
    {
        return $this->location;
    }
}
