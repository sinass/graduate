<?php

namespace Ensat\GraduateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * POSTE
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ensat\GraduateBundle\Repository\POSTERepository")
 */
class POSTE
{
	/**
     * @ORM\ManyToOne(targetEntity="SECTEUR", inversedBy="postes")
     * @ORM\JoinColumn(name="idSecteur", referencedColumnName="id")
     */
    protected $secteur;
	
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
     * @ORM\Column(name="intutile", type="string", length=60)
     */
    private $intutile;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="date")
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="date")
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="entreprise", type="string", length=60)
     */
    private $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="lieudetravail", type="string", length=80)
     */
    private $lieudetravail;


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
     * Set intutile
     *
     * @param string $intutile
     * @return POSTE
     */
    public function setIntutile($intutile)
    {
        $this->intutile = $intutile;
    
        return $this;
    }

    /**
     * Get intutile
     *
     * @return string 
     */
    public function getIntutile()
    {
        return $this->intutile;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return POSTE
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    
        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return POSTE
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    
        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set entreprise
     *
     * @param string $entreprise
     * @return POSTE
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
    
        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string 
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set lieudetravail
     *
     * @param string $lieudetravail
     * @return POSTE
     */
    public function setLieudetravail($lieudetravail)
    {
        $this->lieudetravail = $lieudetravail;
    
        return $this;
    }

    /**
     * Get lieudetravail
     *
     * @return string 
     */
    public function getLieudetravail()
    {
        return $this->lieudetravail;
    }

    /**
     * Set secteur
     *
     * @param \Ensat\GraduateBundle\Entity\SECTEUR $secteur
     * @return POSTE
     */
    public function setSecteur(\Ensat\GraduateBundle\Entity\SECTEUR $secteur = null)
    {
        $this->secteur = $secteur;
    
        return $this;
    }

    /**
     * Get secteur
     *
     * @return \Ensat\GraduateBundle\Entity\SECTEUR 
     */
    public function getSecteur()
    {
        return $this->secteur;
    }
}