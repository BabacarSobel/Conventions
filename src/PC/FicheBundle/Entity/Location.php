<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table("pc_location")
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\LocationRepository")
 */
class Location
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEcheance", type="date")
     */
    private $dateEcheance;
    
    /**
     * @var int
     *
     * @ORM\Column(name="$nombreDemiJournees", type="integer")
     */
    private $nombreDemiJournees;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaireDebut", type="date",nullable=true)
     */
    private $horaireDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaireEcheance", type="date",nullable=true)
     */
    private $horaireEcheance;
    
    /**
    * @ORM\OneToOne(targetEntity="Local")
    */
    protected $local;
    
    /**
    * @ORM\ManyToOne(targetEntity="MADSalles", inversedBy="locaux")
    */
    protected $madSalles;
    
    /**
    * @ORM\ManyToOne(targetEntity="MADEvenementGratuit", inversedBy="locaux")
    */
    protected $madEvenementGratuit;


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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Location
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateEcheance
     *
     * @param \DateTime $dateEcheance
     *
     * @return Location
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
     * Set local
     *
     * @param \PC\FicheBundle\Entity\Local $local
     *
     * @return Location
     */
    public function setLocal(\PC\FicheBundle\Entity\Local $local = null)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return \PC\FicheBundle\Entity\Local
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set madSalles
     *
     * @param \PC\FicheBundle\Entity\MADSalles $madSalles
     *
     * @return Location
     */
    public function setMadSalles(\PC\FicheBundle\Entity\MADSalles $madSalles = null)
    {
        $this->madSalles = $madSalles;

        return $this;
    }

    /**
     * Get madSalles
     *
     * @return \PC\FicheBundle\Entity\MADSalles
     */
    public function getMadSalles()
    {
        return $this->madSalles;
    }

    /**
     * Set madEvenementGratuit
     *
     * @param \PC\FicheBundle\Entity\MADEvenementGratuit $madEvenementGratuit
     *
     * @return Location
     */
    public function setMadEvenementGratuit(\PC\FicheBundle\Entity\MADEvenementGratuit $madEvenementGratuit = null)
    {
        $this->madEvenementGratuit = $madEvenementGratuit;

        return $this;
    }

    /**
     * Get madEvenementGratuit
     *
     * @return \PC\FicheBundle\Entity\MADEvenementGratuit
     */
    public function getMadEvenementGratuit()
    {
        return $this->madEvenementGratuit;
    }

    /**
     * Set horaireDebut
     *
     * @param \DateTime $horaireDebut
     *
     * @return Location
     */
    public function setHoraireDebut($horaireDebut)
    {
        $this->horaireDebut = $horaireDebut;

        return $this;
    }

    /**
     * Get horaireDebut
     *
     * @return \DateTime
     */
    public function getHoraireDebut()
    {
        return $this->horaireDebut;
    }

    /**
     * Set horaireEcheance
     *
     * @param \DateTime $horaireEcheance
     *
     * @return Location
     */
    public function setHoraireEcheance($horaireEcheance)
    {
        $this->horaireEcheance = $horaireEcheance;

        return $this;
    }

    /**
     * Get horaireEcheance
     *
     * @return \DateTime
     */
    public function getHoraireEcheance()
    {
        return $this->horaireEcheance;
    }

    /**
     * Set nombreDemiJournees
     *
     * @param integer $nombreDemiJournees
     *
     * @return Location
     */
    public function setNombreDemiJournees($nombreDemiJournees)
    {
        $this->nombreDemiJournees = $nombreDemiJournees;

        return $this;
    }

    /**
     * Get nombreDemiJournees
     *
     * @return integer
     */
    public function getNombreDemiJournees()
    {
        return $this->nombreDemiJournees;
    }
}
