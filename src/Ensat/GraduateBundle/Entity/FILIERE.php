<?php

namespace Ensat\GraduateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection; 

/**
 * FILIERE
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ensat\GraduateBundle\Repository\FILIERERepository")
 */
class FILIERE
{
	/**
     * @ORM\OneToMany(targetEntity="LAUREAT", mappedBy="filiere")
     */
    protected $laureats;
	
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
     * @var \DateTime
     *
     * @ORM\Column(name="promotion", type="integer")
     */
    private $promotion;
	
	public function __construct()
    {
        $this->laureats = new ArrayCollection();
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
     * Set designation
     *
     * @param string $designation
     * @return FILIERE
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
     * Set promotion
     *
     * @param integer  $promotion
     * @return FILIERE
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;
    
        return $this;
    }

    /**
     * Get promotion
     *
     * @return integer  
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Add laureats
     *
     * @param \Ensat\GraduateBundle\Entity\LAUREAT $laureats
     * @return FILIERE
     */
    public function addLaureat(\Ensat\GraduateBundle\Entity\LAUREAT $laureats)
    {
        $this->laureats[] = $laureats;
    
        return $this;
    }

    /**
     * Remove laureats
     *
     * @param \Ensat\GraduateBundle\Entity\LAUREAT $laureats
     */
    public function removeLaureat(\Ensat\GraduateBundle\Entity\LAUREAT $laureats)
    {
        $this->laureats->removeElement($laureats);
    }

    /**
     * Get laureats
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLaureats()
    {
        return $this->laureats;
    }
}