<?php

namespace Ensat\GraduateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RESEAUSOCIAL
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ensat\GraduateBundle\Entity\RESEAUSOCIALRepository")
 */
class RESEAUSOCIAL
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
     * @ORM\Column(name="designation", type="string", length=45)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant", type="string", length=45)
     */
    private $identifiant;


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
     * Set designation
     *
     * @param string $designation
     * @return RESEAUSOCIAL
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    
        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set identifiant
     *
     * @param string $identifiant
     * @return RESEAUSOCIAL
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
    
        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string 
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }
}