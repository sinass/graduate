<?php

namespace Ensat\GraduateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SECTEUR
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ensat\GraduateBundle\Entity\SECTEURRepository")
 */
class SECTEUR
{
	/**
     * @ORM\OneToMany(targetEntity="POSTE", mappedBy="secteur")
     */
    protected $postes;
	
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
     * @ORM\Column(name="designation", type="string", length=10)
     */
    private $designation;


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
     * @return SECTEUR
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
     * Constructor
     */
    public function __construct()
    {
        $this->postes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add postes
     *
     * @param \Ensat\GraduateBundle\Entity\POSTE $postes
     * @return SECTEUR
     */
    public function addPoste(\Ensat\GraduateBundle\Entity\POSTE $postes)
    {
        $this->postes[] = $postes;
    
        return $this;
    }

    /**
     * Remove postes
     *
     * @param \Ensat\GraduateBundle\Entity\POSTE $postes
     */
    public function removePoste(\Ensat\GraduateBundle\Entity\POSTE $postes)
    {
        $this->postes->removeElement($postes);
    }

    /**
     * Get postes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPostes()
    {
        return $this->postes;
    }
}