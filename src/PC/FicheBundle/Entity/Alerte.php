<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alerte
 *
 * @ORM\Table("pc_alerte")
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\AlerteRepository")
 */
class Alerte
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
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;
    
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255,nullable=TRUE)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAlerte", type="date")
     */
    private $dateAlerte;
    
    /**
    * @ORM\ManyToOne(targetEntity="ChartePartenariat", inversedBy="alertes")
    */
    protected $chartePartenariat;
    
    /**
    * @ORM\ManyToOne(targetEntity="MADSalles", inversedBy="alertes")
    */
    protected $madSalles;
    
    /**
    * @ORM\ManyToOne(targetEntity="MADEvenementGratuit", inversedBy="alertes")
    */
    protected $madEvenementGratuit;
    
    /**
    * @ORM\ManyToOne(targetEntity="PIFEClassique", inversedBy="alertes")
    */
    protected $pifeClassique;
    
    /**
    * @ORM\ManyToOne(targetEntity="PIFELaboratoire", inversedBy="alertes")
    */
    protected $pifeLaboratoire;
    
    /**
    * @ORM\ManyToOne(targetEntity="PSCati", inversedBy="alertes")
    */
    protected $psCati;
    
    /**
    * @ORM\ManyToOne(targetEntity="Autre", inversedBy="alertes")
    */
    protected $autre;
    
    /**
    * @ORM\ManyToOne(targetEntity="Avenant", inversedBy="alertes")
    */
    protected $avenant;
    
    /**
    * @ORM\ManyToOne(targetEntity="Commun", inversedBy="alertes")
    */
    protected $commun;
    
    /**
     * @var string
     *
     * @ORM\Column(name="route", type="string", length=255,nullable=TRUE)
     *
     */
    
    private $route;
    
     /**
      * 
     * @var string
     * @ORM\Column(name="owner", type="string", length=255,nullable=TRUE)
     *
     */
    
    private $ownerId;
    
    /**
     * Get ownerId
     *
     * @return string
     */
    
    public function getOwnerId() {
        return $this->ownerId;
    }
    
    /**
     * Set path
     *
     * @param \String $ownerId
     *
     * @return Alerte
     */
    
    public function setOwnerId($ownerId) {
         $this->ownerId = $ownerId;
         return $this;
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
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Alerte
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
     * @return Alerte
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
     * Set dateAlerte
     *
     * @param \DateTime $dateAlerte
     *
     * @return Alerte
     */
    public function setDateAlerte($dateAlerte)
    {
        $this->dateAlerte = $dateAlerte;

        return $this;
    }

    /**
     * Get dateAlerte
     *
     * @return \DateTime
     */
    public function getDateAlerte()
    {
        return $this->dateAlerte;
    }


    /**
     * Set chartePartenariat
     *
     * @param \PC\FicheBundle\Entity\ChartePartenariat $chartePartenariat
     *
     * @return Alerte
     */
    public function setChartePartenariat(\PC\FicheBundle\Entity\ChartePartenariat $chartePartenariat = null)
    {
        $this->chartePartenariat = $chartePartenariat;

        return $this;
    }

    /**
     * Get chartePartenariat
     *
     * @return \PC\FicheBundle\Entity\ChartePartenariat
     */
    public function getChartePartenariat()
    {
        return $this->chartePartenariat;
    }

    /**
     * Set madSalles
     *
     * @param \PC\FicheBundle\Entity\MADSalles $madSalles
     *
     * @return Alerte
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
     * @return Alerte
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
     * Set pifeClassique
     *
     * @param \PC\FicheBundle\Entity\PIFEClassique $pifeClassique
     *
     * @return Alerte
     */
    public function setPifeClassique(\PC\FicheBundle\Entity\PIFEClassique $pifeClassique = null)
    {
        $this->pifeClassique = $pifeClassique;

        return $this;
    }

    /**
     * Get pifeClassique
     *
     * @return \PC\FicheBundle\Entity\PIFEClassique
     */
    public function getPifeClassique()
    {
        return $this->pifeClassique;
    }

    /**
     * Set pifeLaboratoire
     *
     * @param \PC\FicheBundle\Entity\PIFELaboratoire $pifeLaboratoire
     *
     * @return Alerte
     */
    public function setPifeLaboratoire(\PC\FicheBundle\Entity\PIFELaboratoire $pifeLaboratoire = null)
    {
        $this->pifeLaboratoire = $pifeLaboratoire;

        return $this;
    }

    /**
     * Get pifeLaboratoire
     *
     * @return \PC\FicheBundle\Entity\PIFELaboratoire
     */
    public function getPifeLaboratoire()
    {
        return $this->pifeLaboratoire;
    }

    /**
     * Set psCati
     *
     * @param \PC\FicheBundle\Entity\PSCati $psCati
     *
     * @return Alerte
     */
    public function setPsCati(\PC\FicheBundle\Entity\PSCati $psCati = null)
    {
        $this->psCati = $psCati;

        return $this;
    }

    /**
     * Get psCati
     *
     * @return \PC\FicheBundle\Entity\PSCati
     */
    public function getPsCati()
    {
        return $this->psCati;
    }

    /**
     * Set autre
     *
     * @param \PC\FicheBundle\Entity\Autre $autre
     *
     * @return Alerte
     */
    public function setAutre(\PC\FicheBundle\Entity\Autre $autre = null)
    {
        $this->autre = $autre;

        return $this;
    }

    /**
     * Get autre
     *
     * @return \PC\FicheBundle\Entity\Autre
     */
    public function getAutre()
    {
        return $this->autre;
    }

    


    /**
     * Set avenant
     *
     * @param \PC\FicheBundle\Entity\Avenant $avenant
     *
     * @return Alerte
     */
    public function setAvenant(\PC\FicheBundle\Entity\Avenant $avenant = null)
    {
        $this->avenant = $avenant;

        return $this;
    }

    /**
     * Get avenant
     *
     * @return \PC\FicheBundle\Entity\Avenant
     */
    public function getAvenant()
    {
        return $this->avenant;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Alerte
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set route
     *
     * @param string $route
     *
     * @return Alerte
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
     * Set commun
     *
     * @param \PC\FicheBundle\Entity\Commun $commun
     *
     * @return Alerte
     */
    public function setCommun(\PC\FicheBundle\Entity\Commun $commun = null)
    {
        $this->commun = $commun;

        return $this;
    }

    /**
     * Get commun
     *
     * @return \PC\FicheBundle\Entity\Commun
     */
    public function getCommun()
    {
        return $this->commun;
    }
}
