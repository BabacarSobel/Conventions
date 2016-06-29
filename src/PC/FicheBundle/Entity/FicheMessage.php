<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheMessage
 *
 * @ORM\Table("pc_message")
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\FicheMessageRepository")
 */
class FicheMessage
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
     * @ORM\Column(name="message", type="text")
     */
    private $message;
    
    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string")
     */
    private $auteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    
    /**
    * @ORM\ManyToOne(targetEntity="ChartePartenariat", inversedBy="messages")
    */
    protected $chartePartenariat;
    
    /**
    * @ORM\ManyToOne(targetEntity="MADSalles", inversedBy="messages")
    */
    protected $madSalles;
    
    /**
    * @ORM\ManyToOne(targetEntity="MADEvenementGratuit", inversedBy="messages")
    */
    protected $madEvenementGratuit;
    
    /**
    * @ORM\ManyToOne(targetEntity="PIFEClassique", inversedBy="messages")
    */
    protected $pifeClassique;
    
    /**
    * @ORM\ManyToOne(targetEntity="PIFELaboratoire", inversedBy="messages")
    */
    protected $pifeLaboratoire;
    
    /**
    * @ORM\ManyToOne(targetEntity="PSCati", inversedBy="messages")
    */
    protected $psCati;
    
    /**
    * @ORM\ManyToOne(targetEntity="Autre", inversedBy="messages")
    */
    protected $autre;
    
    /**
    * @ORM\ManyToOne(targetEntity="Commun", inversedBy="messages")
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
     * Set message
     *
     * @param string $message
     *
     * @return FicheMessage
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return FicheMessage
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set chartePartenariat
     *
     * @param \PC\FicheBundle\Entity\ChartePartenariat $chartePartenariat
     *
     * @return FicheMessage
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
     * @return FicheMessage
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
     * @return FicheMessage
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
     * @return FicheMessage
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
     * @return FicheMessage
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
     * @return FicheMessage
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
     * @return FicheMessage
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
     * Set auteur
     *
     * @param string $auteur
     *
     * @return FicheMessage
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
     * Set commun
     *
     * @param \PC\FicheBundle\Entity\Commun $commun
     *
     * @return FicheMessage
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
