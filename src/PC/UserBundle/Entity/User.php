<?php

namespace PC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\UserBundle\Entity\BaseUser;


/**
 * User
 *
 * @ORM\Table(name="pc_user")
 * @ORM\Entity(repositoryClass="PC\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected  $id;
    
    
    /**
     * @var string
     * @ORM\Column(name="departement", type="string", length=255, nullable=TRUE)
     */
    private $departement;
    
    /**
     * @ORM\OneToMany(targetEntity="PC\FicheBundle\Entity\Autre", mappedBy="demandeur", cascade={"remove"})
     */
    protected $autres;
    
    /**
     * @ORM\OneToMany(targetEntity="PC\FicheBundle\Entity\PSCati", mappedBy="demandeur", cascade={"remove"})
     */
    protected $pscatis;
    
    /**
     * @ORM\OneToMany(targetEntity="PC\FicheBundle\Entity\ChartePartenariat", mappedBy="demandeur", cascade={"remove"})
     */
    protected $chartepartenariats;
    
    /**
     * @ORM\OneToMany(targetEntity="PC\FicheBundle\Entity\PIFELaboratoire", mappedBy="demandeur", cascade={"remove"})
     */
    protected $pifelaboratoires;
    
    /**
     * @ORM\OneToMany(targetEntity="PC\FicheBundle\Entity\PIFEClassique", mappedBy="demandeur", cascade={"remove"})
     */
    protected $pifeclassiques;
    
    /**
     * @ORM\OneToMany(targetEntity="PC\FicheBundle\Entity\MADSalles", mappedBy="demandeur", cascade={"remove"})
     */
    protected $madsalles;
    
    /**
     * @ORM\OneToMany(targetEntity="PC\FicheBundle\Entity\MADEvenementGratuit", mappedBy="demandeur", cascade={"remove"})
     */
    protected $madevenementgratuits;
    
    
    
    
 
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
     * Set departement
     *
     * @param string $departement
     *
     * @return User
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string
     */
    public function getDepartement()
    {
        return $this->departement;
    }


    /**
     * Add pscati
     *
     * @param \PC\FicheBundle\Entity\PSCati $pscati
     *
     * @return User
     */
    public function addPscati(\PC\FicheBundle\Entity\PSCati $pscati)
    {
        $this->pscatis[] = $pscati;

        return $this;
    }

    /**
     * Remove pscati
     *
     * @param \PC\FicheBundle\Entity\PSCati $pscati
     */
    public function removePscati(\PC\FicheBundle\Entity\PSCati $pscati)
    {
        $this->pscatis->removeElement($pscati);
    }

    /**
     * Get pscatis
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPscatis()
    {
        return $this->pscatis;
    }

    /**
     * Add chartepartenariat
     *
     * @param \PC\FicheBundle\Entity\ChartePartenariat $chartepartenariat
     *
     * @return User
     */
    public function addChartepartenariat(\PC\FicheBundle\Entity\ChartePartenariat $chartepartenariat)
    {
        $this->chartepartenariats[] = $chartepartenariat;

        return $this;
    }

    /**
     * Remove chartepartenariat
     *
     * @param \PC\FicheBundle\Entity\ChartePartenariat $chartepartenariat
     */
    public function removeChartepartenariat(\PC\FicheBundle\Entity\ChartePartenariat $chartepartenariat)
    {
        $this->chartepartenariats->removeElement($chartepartenariat);
    }

    /**
     * Get chartepartenariats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChartepartenariats()
    {
        return $this->chartepartenariats;
    }

    /**
     * Add pifelaboratoire
     *
     * @param \PC\FicheBundle\Entity\PIFELaboratoire $pifelaboratoire
     *
     * @return User
     */
    public function addPifelaboratoire(\PC\FicheBundle\Entity\PIFELaboratoire $pifelaboratoire)
    {
        $this->pifelaboratoires[] = $pifelaboratoire;

        return $this;
    }

    /**
     * Remove pifelaboratoire
     *
     * @param \PC\FicheBundle\Entity\PIFELaboratoire $pifelaboratoire
     */
    public function removePifelaboratoire(\PC\FicheBundle\Entity\PIFELaboratoire $pifelaboratoire)
    {
        $this->pifelaboratoires->removeElement($pifelaboratoire);
    }

    /**
     * Get pifelaboratoires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPifelaboratoires()
    {
        return $this->pifelaboratoires;
    }

    /**
     * Add pifeclassique
     *
     * @param \PC\FicheBundle\Entity\PIFEClassique $pifeclassique
     *
     * @return User
     */
    public function addPifeclassique(\PC\FicheBundle\Entity\PIFEClassique $pifeclassique)
    {
        $this->pifeclassiques[] = $pifeclassique;

        return $this;
    }

    /**
     * Remove pifeclassique
     *
     * @param \PC\FicheBundle\Entity\PIFEClassique $pifeclassique
     */
    public function removePifeclassique(\PC\FicheBundle\Entity\PIFEClassique $pifeclassique)
    {
        $this->pifeclassiques->removeElement($pifeclassique);
    }

    /**
     * Get pifeclassiques
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPifeclassiques()
    {
        return $this->pifeclassiques;
    }

    /**
     * Add madsalle
     *
     * @param \PC\FicheBundle\Entity\MADSalles $madsalle
     *
     * @return User
     */
    public function addMadsalle(\PC\FicheBundle\Entity\MADSalles $madsalle)
    {
        $this->madsalles[] = $madsalle;

        return $this;
    }

    /**
     * Remove madsalle
     *
     * @param \PC\FicheBundle\Entity\MADSalles $madsalle
     */
    public function removeMadsalle(\PC\FicheBundle\Entity\MADSalles $madsalle)
    {
        $this->madsalles->removeElement($madsalle);
    }

    /**
     * Get madsalles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMadsalles()
    {
        return $this->madsalles;
    }

    /**
     * Add madevenementgratuit
     *
     * @param \PC\FicheBundle\Entity\MADEvenementGratuit $madevenementgratuit
     *
     * @return User
     */
    public function addMadevenementgratuit(\PC\FicheBundle\Entity\MADEvenementGratuit $madevenementgratuit)
    {
        $this->madevenementgratuits[] = $madevenementgratuit;

        return $this;
    }

    /**
     * Remove madevenementgratuit
     *
     * @param \PC\FicheBundle\Entity\MADEvenementGratuit $madevenementgratuit
     */
    public function removeMadevenementgratuit(\PC\FicheBundle\Entity\MADEvenementGratuit $madevenementgratuit)
    {
        $this->madevenementgratuits->removeElement($madevenementgratuit);
    }

    /**
     * Get madevenementgratuits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMadevenementgratuits()
    {
        return $this->madevenementgratuits;
    }

    /**
     * Add autre
     *
     * @param \PC\FicheBundle\Entity\Autre $autre
     *
     * @return User
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
