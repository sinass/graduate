<?php

namespace Ensat\GraduateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection; 

/**
 * EVENEMENT
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ensat\GraduateBundle\Entity\EVENEMENTRepository")
 */
class EVENEMENT
{
	/**
     * @ORM\ManyToMany(targetEntity="LAUREAT", mappedBy="invitations")
     **/
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
     * @ORM\Column(name="intitule", type="string", length=60)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=80)
     */
    private $localisation;


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
     * Set intitule
     *
     * @param string $intitule
     * @return EVENEMENT
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    
        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return EVENEMENT
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return EVENEMENT
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
     * Set localisation
     *
     * @param string $localisation
     * @return EVENEMENT
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;
    
        return $this;
    }

    /**
     * Get localisation
     *
     * @return string 
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->laureats = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add laureats
     *
     * @param \Ensat\GraduateBundle\Entity\LAUREAT $laureats
     * @return EVENEMENT
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