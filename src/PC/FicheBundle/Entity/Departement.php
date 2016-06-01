<?php

namespace PC\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table("pc_departement")
 * @ORM\Entity(repositoryClass="PC\FicheBundle\Entity\DepartementRepository")
 */
class Departement
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
     * @ORM\Column(name="departmentName", type="string", length=255)
     */
    private $departmentName;

    /**
     * @var string
     *
     * @ORM\Column(name="departmentLeader", type="string", length=255)
     */
    private $departmentLeader;


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
     * Set departmentName
     *
     * @param string $departmentName
     *
     * @return Departement
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;

        return $this;
    }

    /**
     * Get departmentName
     *
     * @return string
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    /**
     * Set departmentLeader
     *
     * @param string $departmentLeader
     *
     * @return Departement
     */
    public function setDepartmentLeader($departmentLeader)
    {
        $this->departmentLeader = $departmentLeader;

        return $this;
    }

    /**
     * Get departmentLeader
     *
     * @return string
     */
    public function getDepartmentLeader()
    {
        return $this->departmentLeader;
    }
}
