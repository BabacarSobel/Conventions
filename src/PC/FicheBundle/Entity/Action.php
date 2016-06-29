<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Action
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\ActionRepository")
 */
class Action
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
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeCreation", type="date")
     */
    private $dateDeCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeMaj", type="date", nullable = TRUE)
     */
    private $dateDeMaj;
    
    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string")
     */
    private $auteur;
    
    /**
    * @ORM\ManyToOne(targetEntity="ChartePartenariat", inversedBy="actions")
    */
    protected $chartePartenariat;
    
    /**
    * @ORM\ManyToOne(targetEntity="MADSalles", inversedBy="actions")
    */
    protected $madSalles;
    
    /**
    * @ORM\ManyToOne(targetEntity="MADEvenementGratuit", inversedBy="actions")
    */
    protected $madEvenementGratuit;
    
    /**
    * @ORM\ManyToOne(targetEntity="PIFEClassique", inversedBy="actions")
    */
    protected $pifeClassique;
    
    /**
    * @ORM\ManyToOne(targetEntity="PIFELaboratoire", inversedBy="actions")
    */
    protected $pifeLaboratoire;
    
    /**
    * @ORM\ManyToOne(targetEntity="PSCati", inversedBy="actions")
    */
    protected $psCati;
    
    /**
    * @ORM\ManyToOne(targetEntity="Autre", inversedBy="actions")
    */
    protected $autre;

    /**
    * @ORM\ManyToOne(targetEntity="Commun", inversedBy="actions")
    */
    protected $commun;


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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Action
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateDeCreation
     *
     * @param \DateTime $dateDeCreation
     *
     * @return Action
     */
    public function setDateDeCreation($dateDeCreation)
    {
        $this->dateDeCreation = $dateDeCreation;

        return $this;
    }

    /**
     * Get dateDeCreation
     *
     * @return \DateTime
     */
    public function getDateDeCreation()
    {
        return $this->dateDeCreation;
    }

    /**
     * Set dateDeMaj
     *
     * @param \DateTime $dateDeMaj
     *
     * @return Action
     */
    public function setDateDeMaj($dateDeMaj)
    {
        $this->dateDeMaj = $dateDeMaj;

        return $this;
    }

    /**
     * Get dateDeMaj
     *
     * @return \DateTime
     */
    public function getDateDeMaj()
    {
        return $this->dateDeMaj;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Action
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set chartePartenariat
     *
     * @param \PC\FicheBundle\Entity\ChartePartenariat $chartePartenariat
     *
     * @return Action
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
     * @return Action
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
     * @return Action
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
     * @return Action
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
     * @return Action
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
     * @return Action
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
     * @return Action
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
     * Set commun
     *
     * @param \PC\FicheBundle\Entity\Commun $commun
     *
     * @return Action
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
