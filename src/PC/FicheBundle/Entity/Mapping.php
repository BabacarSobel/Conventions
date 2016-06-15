<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapping
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\MappingRepository")
 */
class Mapping
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
     * @ORM\Column(name="typeprincipal", type="string", length=255)
     */
    private $typeprincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="typesecondaire1", type="string", length=255, nullable=TRUE)
     */
    private $typesecondaire1;

    /**
     * @var string
     *
     * @ORM\Column(name="typesecondaire2", type="string", length=255, nullable=TRUE)
     */
    private $typesecondaire2;

    /**
     * @var string
     *
     * @ORM\Column(name="typesecondaire3", type="string", length=255, nullable=TRUE)
     */
    private $typesecondaire3;

    /**
     * @var string
     *
     * @ORM\Column(name="m1", type="string", length=255, nullable=TRUE)
     */
    private $m1;

    /**
     * @var string
     *
     * @ORM\Column(name="m2", type="string", length=255, nullable=TRUE)
     */
    private $m2;

    /**
     * @var string
     *
     * @ORM\Column(name="m3", type="string", length=255, nullable=TRUE)
     */
    private $m3;

    /**
     * @var string
     *
     * @ORM\Column(name="m4", type="string", length=255, nullable=TRUE)
     */
    private $m4;

    /**
     * @var string
     *
     * @ORM\Column(name="m5", type="string", length=255, nullable=TRUE)
     */
    private $m5;

    /**
     * @var string
     *
     * @ORM\Column(name="m6", type="string", length=255, nullable=TRUE)
     */
    private $m6;

    /**
     * @var string
     *
     * @ORM\Column(name="m7", type="string", length=255, nullable=TRUE)
     */
    private $m7;

    /**
     * @var string
     *
     * @ORM\Column(name="m8", type="string", length=255, nullable=TRUE)
     */
    private $m8;

    /**
     * @var string
     *
     * @ORM\Column(name="m9", type="string", length=255, nullable=TRUE)
     */
    private $m9;

    /**
     * @var string
     *
     * @ORM\Column(name="m10", type="string", length=255, nullable=TRUE)
     */
    private $m10;

    /**
     * @var string
     *
     * @ORM\Column(name="m11", type="string", length=255, nullable=TRUE)
     */
    private $m11;

    /**
     * @var string
     *
     * @ORM\Column(name="m12", type="string", length=255, nullable=TRUE)
     */
    private $m12;

    /**
     * @var string
     *
     * @ORM\Column(name="m13", type="string", length=255, nullable=TRUE)
     */
    private $m13;

    /**
     * @var string
     *
     * @ORM\Column(name="m14", type="string", length=255, nullable=TRUE)
     */
    private $m14;

    /**
     * @var string
     *
     * @ORM\Column(name="m15", type="string", length=255, nullable=TRUE)
     */
    private $m15;

    /**
     * @var string
     *
     * @ORM\Column(name="m16", type="string", length=255, nullable=TRUE)
     */
    private $m16;

    /**
     * @var string
     *
     * @ORM\Column(name="m17", type="string", length=255, nullable=TRUE)
     */
    private $m17;

    /**
     * @var string
     *
     * @ORM\Column(name="m18", type="string", length=255, nullable=TRUE)
     */
    private $m18;

    /**
     * @var string
     *
     * @ORM\Column(name="m19", type="string", length=255, nullable=TRUE)
     */
    private $m19;

    /**
     * @var string
     *
     * @ORM\Column(name="m20", type="string", length=255, nullable=TRUE)
     */
    private $m20;


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
     * Set typeprincipal
     *
     * @param string $typeprincipal
     *
     * @return Mapping
     */
    public function setTypeprincipal($typeprincipal)
    {
        $this->typeprincipal = $typeprincipal;

        return $this;
    }

    /**
     * Get typeprincipal
     *
     * @return string
     */
    public function getTypeprincipal()
    {
        return $this->typeprincipal;
    }

    /**
     * Set typesecondaire1
     *
     * @param string $typesecondaire1
     *
     * @return Mapping
     */
    public function setTypesecondaire1($typesecondaire1)
    {
        $this->typesecondaire1 = $typesecondaire1;

        return $this;
    }

    /**
     * Get typesecondaire1
     *
     * @return string
     */
    public function getTypesecondaire1()
    {
        return $this->typesecondaire1;
    }

    /**
     * Set typesecondaire2
     *
     * @param string $typesecondaire2
     *
     * @return Mapping
     */
    public function setTypesecondaire2($typesecondaire2)
    {
        $this->typesecondaire2 = $typesecondaire2;

        return $this;
    }

    /**
     * Get typesecondaire2
     *
     * @return string
     */
    public function getTypesecondaire2()
    {
        return $this->typesecondaire2;
    }

    /**
     * Set typesecondaire3
     *
     * @param string $typesecondaire3
     *
     * @return Mapping
     */
    public function setTypesecondaire3($typesecondaire3)
    {
        $this->typesecondaire3 = $typesecondaire3;

        return $this;
    }

    /**
     * Get typesecondaire3
     *
     * @return string
     */
    public function getTypesecondaire3()
    {
        return $this->typesecondaire3;
    }

    /**
     * Set m1
     *
     * @param string $m1
     *
     * @return Mapping
     */
    public function setM1($m1)
    {
        $this->m1 = $m1;

        return $this;
    }

    /**
     * Get m1
     *
     * @return string
     */
    public function getM1()
    {
        return $this->m1;
    }

    /**
     * Set m2
     *
     * @param string $m2
     *
     * @return Mapping
     */
    public function setM2($m2)
    {
        $this->m2 = $m2;

        return $this;
    }

    /**
     * Get m2
     *
     * @return string
     */
    public function getM2()
    {
        return $this->m2;
    }

    /**
     * Set m3
     *
     * @param string $m3
     *
     * @return Mapping
     */
    public function setM3($m3)
    {
        $this->m3 = $m3;

        return $this;
    }

    /**
     * Get m3
     *
     * @return string
     */
    public function getM3()
    {
        return $this->m3;
    }

    /**
     * Set m4
     *
     * @param string $m4
     *
     * @return Mapping
     */
    public function setM4($m4)
    {
        $this->m4 = $m4;

        return $this;
    }

    /**
     * Get m4
     *
     * @return string
     */
    public function getM4()
    {
        return $this->m4;
    }

    /**
     * Set m5
     *
     * @param string $m5
     *
     * @return Mapping
     */
    public function setM5($m5)
    {
        $this->m5 = $m5;

        return $this;
    }

    /**
     * Get m5
     *
     * @return string
     */
    public function getM5()
    {
        return $this->m5;
    }

    /**
     * Set m6
     *
     * @param string $m6
     *
     * @return Mapping
     */
    public function setM6($m6)
    {
        $this->m6 = $m6;

        return $this;
    }

    /**
     * Get m6
     *
     * @return string
     */
    public function getM6()
    {
        return $this->m6;
    }

    /**
     * Set m7
     *
     * @param string $m7
     *
     * @return Mapping
     */
    public function setM7($m7)
    {
        $this->m7 = $m7;

        return $this;
    }

    /**
     * Get m7
     *
     * @return string
     */
    public function getM7()
    {
        return $this->m7;
    }

    /**
     * Set m8
     *
     * @param string $m8
     *
     * @return Mapping
     */
    public function setM8($m8)
    {
        $this->m8 = $m8;

        return $this;
    }

    /**
     * Get m8
     *
     * @return string
     */
    public function getM8()
    {
        return $this->m8;
    }

    /**
     * Set m9
     *
     * @param string $m9
     *
     * @return Mapping
     */
    public function setM9($m9)
    {
        $this->m9 = $m9;

        return $this;
    }

    /**
     * Get m9
     *
     * @return string
     */
    public function getM9()
    {
        return $this->m9;
    }

    /**
     * Set m10
     *
     * @param string $m10
     *
     * @return Mapping
     */
    public function setM10($m10)
    {
        $this->m10 = $m10;

        return $this;
    }

    /**
     * Get m10
     *
     * @return string
     */
    public function getM10()
    {
        return $this->m10;
    }

    /**
     * Set m11
     *
     * @param string $m11
     *
     * @return Mapping
     */
    public function setM11($m11)
    {
        $this->m11 = $m11;

        return $this;
    }

    /**
     * Get m11
     *
     * @return string
     */
    public function getM11()
    {
        return $this->m11;
    }

    /**
     * Set m12
     *
     * @param string $m12
     *
     * @return Mapping
     */
    public function setM12($m12)
    {
        $this->m12 = $m12;

        return $this;
    }

    /**
     * Get m12
     *
     * @return string
     */
    public function getM12()
    {
        return $this->m12;
    }

    /**
     * Set m13
     *
     * @param string $m13
     *
     * @return Mapping
     */
    public function setM13($m13)
    {
        $this->m13 = $m13;

        return $this;
    }

    /**
     * Get m13
     *
     * @return string
     */
    public function getM13()
    {
        return $this->m13;
    }

    /**
     * Set m14
     *
     * @param string $m14
     *
     * @return Mapping
     */
    public function setM14($m14)
    {
        $this->m14 = $m14;

        return $this;
    }

    /**
     * Get m14
     *
     * @return string
     */
    public function getM14()
    {
        return $this->m14;
    }

    /**
     * Set m15
     *
     * @param string $m15
     *
     * @return Mapping
     */
    public function setM15($m15)
    {
        $this->m15 = $m15;

        return $this;
    }

    /**
     * Get m15
     *
     * @return string
     */
    public function getM15()
    {
        return $this->m15;
    }

    /**
     * Set m16
     *
     * @param string $m16
     *
     * @return Mapping
     */
    public function setM16($m16)
    {
        $this->m16 = $m16;

        return $this;
    }

    /**
     * Get m16
     *
     * @return string
     */
    public function getM16()
    {
        return $this->m16;
    }

    /**
     * Set m17
     *
     * @param string $m17
     *
     * @return Mapping
     */
    public function setM17($m17)
    {
        $this->m17 = $m17;

        return $this;
    }

    /**
     * Get m17
     *
     * @return string
     */
    public function getM17()
    {
        return $this->m17;
    }

    /**
     * Set m18
     *
     * @param string $m18
     *
     * @return Mapping
     */
    public function setM18($m18)
    {
        $this->m18 = $m18;

        return $this;
    }

    /**
     * Get m18
     *
     * @return string
     */
    public function getM18()
    {
        return $this->m18;
    }

    /**
     * Set m19
     *
     * @param string $m19
     *
     * @return Mapping
     */
    public function setM19($m19)
    {
        $this->m19 = $m19;

        return $this;
    }

    /**
     * Get m19
     *
     * @return string
     */
    public function getM19()
    {
        return $this->m19;
    }

    /**
     * Set m20
     *
     * @param string $m20
     *
     * @return Mapping
     */
    public function setM20($m20)
    {
        $this->m20 = $m20;

        return $this;
    }

    /**
     * Get m20
     *
     * @return string
     */
    public function getM20()
    {
        return $this->m20;
    }
}
