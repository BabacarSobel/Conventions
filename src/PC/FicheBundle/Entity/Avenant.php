<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avenant
 *
 * @ORM\Table("pc_avenant")
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\AvenantRepository")
 */
class Avenant
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
     * @ORM\Column(name="numeroFiche", type="string", length=255)
     */
    private $numeroFiche;
    
    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateContratInitial", type="date",nullable=TRUE)
     */
    private $dateContratInitial;

    /**
     * @var string
     *
     * @ORM\Column(name="typePartenaire", type="string", length=255)
     */
    private $typePartenaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEffetCI", type="date",nullable=TRUE)
     */
    private $dateEffetCI;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinCI", type="date",nullable=TRUE)
     */
    private $dateFinCI;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="string", length=255)
     */
    private $motif;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroParagrapheModifie", type="string", length=255,nullable=TRUE)
     */
    private $numeroParagrapheModifie;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroArticleModifie", type="string", length=255,nullable=TRUE)
     */
    private $numeroArticleModifie;
    
        /**
     * @var string
     *
     * @ORM\Column(name="intituleArticleModifie", type="string", length=255,nullable=TRUE)
     */
    private $intituleArticleModifie;

    /**
     * @var string
     *
     * @ORM\Column(name="nouveauTexte", type="string", length=255,nullable=TRUE)
     */
    private $nouveauTexte;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroArticleDuree", type="string", length=255,nullable=TRUE)
     */
    private $numeroArticleDuree;
    
        /**
     * @var string
     *
     * @ORM\Column(name="intituleArticleDuree", type="string", length=255,nullable=TRUE)
     */
    private $intituleArticleDuree;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbMoisProrogation", type="integer",nullable=TRUE)
     */
    private $nbMoisProrogation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateExpiration", type="date",nullable=TRUE)
     */
    private $dateExpiration;
    
    /**
    * @ORM\ManyToOne(targetEntity="ChartePartenariat", inversedBy="avenants")
    */
    protected $chartePartenariat;
    
    /**
    * @ORM\ManyToOne(targetEntity="MADSalles", inversedBy="avenants")
    */
    protected $madSalles;
    
    /**
    * @ORM\ManyToOne(targetEntity="MADEvenementGratuit", inversedBy="avenants")
    */
    protected $madEvenementGratuit;
    
    /**
    * @ORM\ManyToOne(targetEntity="PIFEClassique", inversedBy="avenants")
    */
    protected $pifeClassique;
    
    /**
    * @ORM\ManyToOne(targetEntity="PIFELaboratoire", inversedBy="avenants")
    */
    protected $pifeLaboratoire;
    
    /**
    * @ORM\ManyToOne(targetEntity="PSCati", inversedBy="avenants")
    */
    protected $psCati;
    
    /**
    * @ORM\ManyToOne(targetEntity="Autre", inversedBy="avenants")
    */
    protected $autre;
    
    /**
    * @ORM\ManyToOne(targetEntity="Commun", inversedBy="avenants")
    */
    protected $commun;
    
    /**
     * @ORM\OneToMany(targetEntity="Alerte", mappedBy="avenant", cascade={"remove"})
     */
    protected $alertes;
    
    


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
     * Set numeroFiche
     *
     * @param string $numeroFiche
     *
     * @return Avenant
     */
    public function setNumeroFiche($numeroFiche)
    {
        $this->numeroFiche = $numeroFiche;

        return $this;
    }

    /**
     * Get numeroFiche
     *
     * @return string
     */
    public function getNumeroFiche()
    {
        return $this->numeroFiche;
    }

    /**
     * Set dateContratInitial
     *
     * @param \DateTime $dateContratInitial
     *
     * @return Avenant
     */
    public function setDateContratInitial($dateContratInitial)
    {
        $this->dateContratInitial = $dateContratInitial;

        return $this;
    }

    /**
     * Get dateContratInitial
     *
     * @return \DateTime
     */
    public function getDateContratInitial()
    {
        return $this->dateContratInitial;
    }

    /**
     * Set typePartenaire
     *
     * @param string $typePartenaire
     *
     * @return Avenant
     */
    public function setTypePartenaire($typePartenaire)
    {
        $this->typePartenaire = $typePartenaire;

        return $this;
    }

    /**
     * Get typePartenaire
     *
     * @return string
     */
    public function getTypePartenaire()
    {
        return $this->typePartenaire;
    }

    /**
     * Set dateEffetCI
     *
     * @param \DateTime $dateEffetCI
     *
     * @return Avenant
     */
    public function setDateEffetCI($dateEffetCI)
    {
        $this->dateEffetCI = $dateEffetCI;

        return $this;
    }

    /**
     * Get dateEffetCI
     *
     * @return \DateTime
     */
    public function getDateEffetCI()
    {
        return $this->dateEffetCI;
    }

    /**
     * Set dateFinCI
     *
     * @param \DateTime $dateFinCI
     *
     * @return Avenant
     */
    public function setDateFinCI($dateFinCI)
    {
        $this->dateFinCI = $dateFinCI;

        return $this;
    }

    /**
     * Get dateFinCI
     *
     * @return \DateTime
     */
    public function getDateFinCI()
    {
        return $this->dateFinCI;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Avenant
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
     * Set motif
     *
     * @param string $motif
     *
     * @return Avenant
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set numeroParagrapheModifie
     *
     * @param string $numeroParagrapheModifie
     *
     * @return Avenant
     */
    public function setNumeroParagrapheModifie($numeroParagrapheModifie)
    {
        $this->numeroParagrapheModifie = $numeroParagrapheModifie;

        return $this;
    }

    /**
     * Get numeroParagrapheModifie
     *
     * @return string
     */
    public function getNumeroParagrapheModifie()
    {
        return $this->numeroParagrapheModifie;
    }

    /**
     * Set numeroArticleModifie
     *
     * @param string $numeroArticleModifie
     *
     * @return Avenant
     */
    public function setNumeroArticleModifie($numeroArticleModifie)
    {
        $this->numeroArticleModifie = $numeroArticleModifie;

        return $this;
    }

    /**
     * Get numeroArticleModifie
     *
     * @return string
     */
    public function getNumeroArticleModifie()
    {
        return $this->numeroArticleModifie;
    }

    /**
     * Set nouveauTexte
     *
     * @param string $nouveauTexte
     *
     * @return Avenant
     */
    public function setNouveauTexte($nouveauTexte)
    {
        $this->nouveauTexte = $nouveauTexte;

        return $this;
    }

    /**
     * Get nouveauTexte
     *
     * @return string
     */
    public function getNouveauTexte()
    {
        return $this->nouveauTexte;
    }

    /**
     * Set numeroArticleDuree
     *
     * @param string $numeroArticleDuree
     *
     * @return Avenant
     */
    public function setNumeroArticleDuree($numeroArticleDuree)
    {
        $this->numeroArticleDuree = $numeroArticleDuree;

        return $this;
    }

    /**
     * Get numeroArticleDuree
     *
     * @return string
     */
    public function getNumeroArticleDuree()
    {
        return $this->numeroArticleDuree;
    }

    /**
     * Set nbMoisProrogation
     *
     * @param integer $nbMoisProrogation
     *
     * @return Avenant
     */
    public function setNbMoisProrogation($nbMoisProrogation)
    {
        $this->nbMoisProrogation = $nbMoisProrogation;

        return $this;
    }

    /**
     * Get nbMoisProrogation
     *
     * @return integer
     */
    public function getNbMoisProrogation()
    {
        return $this->nbMoisProrogation;
    }

    /**
     * Set dateExpiration
     *
     * @param \DateTime $dateExpiration
     *
     * @return Avenant
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    /**
     * Get dateExpiration
     *
     * @return \DateTime
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * Set chartePartenariat
     *
     * @param \PC\FicheBundle\Entity\ChartePartenariat $chartePartenariat
     *
     * @return Avenant
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
     * @return Avenant
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
     * @return Avenant
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
     * @return Avenant
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
     * @return Avenant
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
     * @return Avenant
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
     * Set intituleArticleModifie
     *
     * @param string $intituleArticleModifie
     *
     * @return Avenant
     */
    public function setIntituleArticleModifie($intituleArticleModifie)
    {
        $this->intituleArticleModifie = $intituleArticleModifie;

        return $this;
    }

    /**
     * Get intituleArticleModifie
     *
     * @return string
     */
    public function getIntituleArticleModifie()
    {
        return $this->intituleArticleModifie;
    }

    /**
     * Set intituleArticleDuree
     *
     * @param string $intituleArticleDuree
     *
     * @return Avenant
     */
    public function setIntituleArticleDuree($intituleArticleDuree)
    {
        $this->intituleArticleDuree = $intituleArticleDuree;

        return $this;
    }

    /**
     * Get intituleArticleDuree
     *
     * @return string
     */
    public function getIntituleArticleDuree()
    {
        return $this->intituleArticleDuree;
    }

    /**
     * Set autre
     *
     * @param \PC\FicheBundle\Entity\Autre $autre
     *
     * @return Avenant
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
     * Constructor
     */
    public function __construct()
    {
        $this->alertes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add alerte
     *
     * @param \PC\FicheBundle\Entity\Alerte $alerte
     *
     * @return Avenant
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
     * Set commun
     *
     * @param \PC\FicheBundle\Entity\Commun $commun
     *
     * @return Avenant
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
