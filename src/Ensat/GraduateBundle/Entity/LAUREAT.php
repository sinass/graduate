<?php

namespace Ensat\GraduateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection; 

/**
 * LAUREAT
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ensat\GraduateBundle\Repository\LAUREATRepository")
 */
class LAUREAT
{
	/**
     * @ORM\ManyToOne(targetEntity="FILIERE", inversedBy="laureats")
     * @ORM\JoinColumn(name="idFILIERE", referencedColumnName="id")
     */
    protected $filiere;
	
	/**
     * @ORM\ManyToMany(targetEntity="POSTE")
     * @ORM\JoinTable(name="poste_occuper",
     *      joinColumns={@ORM\JoinColumn(name="id_laureat", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_poste", referencedColumnName="id", unique=true)}
     *      )
     **/    
     protected $postes;
	 
	 /**
     * @ORM\ManyToMany(targetEntity="RESEAUSOCIAL")
     * @ORM\JoinTable(name="reseau_laureat",
     *      joinColumns={@ORM\JoinColumn(name="id_laureat", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_reseau", referencedColumnName="id", unique=true)}
     *      )
     **/    
     protected $reseaux;
	 
	 /**
     * @ORM\ManyToMany(targetEntity="EVENEMENT", inversedBy="laureats")
     * @ORM\JoinTable(name="inviter")
     **/
    protected $invitations;
	
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
     * @ORM\Column(name="sexe", type="string", length=1)
     */
    private $sexe;
	
	/**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=20)
     */
    private $nationalite;
	
	/**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=20)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissance", type="date")
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="fixe", type="string", length=45)
     */
    private $fixe;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=45)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="residence", type="string", length=80)
     */
    private $residence;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="blob")
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45)
     */
    private $password;
	
	public function __construct()
    {
        $this->postes = new ArrayCollection();
        $this->reseaux = new ArrayCollection();
		$this->invitations = new ArrayCollection();
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
     * Set cin
     *
     * @param string $cin
     * @return LAUREAT
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    
        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return LAUREAT
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
     * Set prenom
     *
     * @param string $prenom
     * @return LAUREAT
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     * @return LAUREAT
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
    
        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set fixe
     *
     * @param string $fixe
     * @return LAUREAT
     */
    public function setFixe($fixe)
    {
        $this->fixe = $fixe;
    
        return $this;
    }

    /**
     * Get fixe
     *
     * @return string 
     */
    public function getFixe()
    {
        return $this->fixe;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return LAUREAT
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    
        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set residence
     *
     * @param string $residence
     * @return LAUREAT
     */
    public function setResidence($residence)
    {
        $this->residence = $residence;
    
        return $this;
    }

    /**
     * Get residence
     *
     * @return string 
     */
    public function getResidence()
    {
        return $this->residence;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return LAUREAT
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return LAUREAT
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return LAUREAT
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return LAUREAT
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set filiere
     *
     * @param \Ensat\GraduateBundle\Entity\FILIERE $filiere
     * @return LAUREAT
     */
    public function setFiliere(\Ensat\GraduateBundle\Entity\FILIERE $filiere = null)
    {
        $this->filiere = $filiere;
    
        return $this;
    }

    /**
     * Get filiere
     *
     * @return \Ensat\GraduateBundle\Entity\FILIERE 
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Add postes
     *
     * @param \Ensat\GraduateBundle\Entity\POSTE $postes
     * @return LAUREAT
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

    /**
     * Add reseaux
     *
     * @param \Ensat\GraduateBundle\Entity\RESEAUSOCIAL $reseaux
     * @return LAUREAT
     */
    public function addReseaux(\Ensat\GraduateBundle\Entity\RESEAUSOCIAL $reseaux)
    {
        $this->reseaux[] = $reseaux;
    
        return $this;
    }

    /**
     * Remove reseaux
     *
     * @param \Ensat\GraduateBundle\Entity\RESEAUSOCIAL $reseaux
     */
    public function removeReseaux(\Ensat\GraduateBundle\Entity\RESEAUSOCIAL $reseaux)
    {
        $this->reseaux->removeElement($reseaux);
    }

    /**
     * Get reseaux
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReseaux()
    {
        return $this->reseaux;
    }

    /**
     * Add invitations
     *
     * @param \Ensat\GraduateBundle\Entity\EVENEMENT $invitations
     * @return LAUREAT
     */
    public function addInvitation(\Ensat\GraduateBundle\Entity\EVENEMENT $invitations)
    {
        $this->invitations[] = $invitations;
    
        return $this;
    }

    /**
     * Remove invitations
     *
     * @param \Ensat\GraduateBundle\Entity\EVENEMENT $invitations
     */
    public function removeInvitation(\Ensat\GraduateBundle\Entity\EVENEMENT $invitations)
    {
        $this->invitations->removeElement($invitations);
    }

    /**
     * Get invitations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInvitations()
    {
        return $this->invitations;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return LAUREAT
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    
        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     * @return LAUREAT
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;
    
        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string 
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }
}