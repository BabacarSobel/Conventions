<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Fichier
 *
 * @ORM\Table("pc_fichier")
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\FichierRepository")
 * @Vich\UploaderBundle\Mapping\Annotation\Uploadable
 */
class Fichier
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
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * @Vich\UploaderBundle\Mapping\Annotation\UploadableField(mapping="fichier", fileNameProperty="nom")
     * @var File
     */
    private $fichier;
    
        /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeCreation", type="date")
     */
    private $dateDeCreation;
    
    /**
    * @ORM\ManyToOne(targetEntity="ChartePartenariat", inversedBy="fichiers", cascade={"remove"})
    */
    protected $chartePartenariat;
    
    /**
    * @ORM\ManyToOne(targetEntity="MADSalles", inversedBy="fichiers", cascade={"remove"})
    */
    protected $madSalles;
    
    /**
    * @ORM\ManyToOne(targetEntity="MADEvenementGratuit", inversedBy="fichiers", cascade={"remove"})
    */
    protected $madEvenementGratuit;
    
    /**
    * @ORM\ManyToOne(targetEntity="PIFEClassique", inversedBy="fichiers", cascade={"remove"})
    */
    protected $pifeClassique;
    
    /**
    * @ORM\ManyToOne(targetEntity="PIFELaboratoire", inversedBy="fichiers", cascade={"remove"})
    */
    protected $pifeLaboratoire;
    
    /**
    * @ORM\ManyToOne(targetEntity="PSCati", inversedBy="fichiers", cascade={"remove"})
    */
    protected $psCati;
    
    /**
    * @ORM\ManyToOne(targetEntity="Autre", inversedBy="fichiers", cascade={"remove"})
    */
    protected $autre;


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
     * @return File
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
     * Set fichier
     *
     * @param string $fichier
     *
     * @return File
     */
    public function setFichier(File $fichier)
    {
        $this->fichier = $fichier;

        if ($fichier) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->dateDeCreation = new \DateTime('now');
        }
        return $this;
    }

    /**
     * Get fichier
     *
     * @return string
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Set dateDeCreation
     *
     * @param \DateTime $dateDeCreation
     *
     * @return File
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
     * Set chartePartenariat
     *
     * @param \PC\FicheBundle\Entity\ChartePartenariat $chartePartenariat
     *
     * @return Fichier
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
     * @return Fichier
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
     * @return Fichier
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
     * @return Fichier
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
     * @return Fichier
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
     * @return Fichier
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
     * @return Fichier
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
}
