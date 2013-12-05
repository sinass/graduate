<?php

namespace Proxies\__CG__\Ensat\GraduateBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class LAUREAT extends \Ensat\GraduateBundle\Entity\LAUREAT implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setCin($cin)
    {
        $this->__load();
        return parent::setCin($cin);
    }

    public function getCin()
    {
        $this->__load();
        return parent::getCin();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setPrenom($prenom)
    {
        $this->__load();
        return parent::setPrenom($prenom);
    }

    public function getPrenom()
    {
        $this->__load();
        return parent::getPrenom();
    }

    public function setDatenaissance($datenaissance)
    {
        $this->__load();
        return parent::setDatenaissance($datenaissance);
    }

    public function getDatenaissance()
    {
        $this->__load();
        return parent::getDatenaissance();
    }

    public function setFixe($fixe)
    {
        $this->__load();
        return parent::setFixe($fixe);
    }

    public function getFixe()
    {
        $this->__load();
        return parent::getFixe();
    }

    public function setMobile($mobile)
    {
        $this->__load();
        return parent::setMobile($mobile);
    }

    public function getMobile()
    {
        $this->__load();
        return parent::getMobile();
    }

    public function setResidence($residence)
    {
        $this->__load();
        return parent::setResidence($residence);
    }

    public function getResidence()
    {
        $this->__load();
        return parent::getResidence();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setPhoto($photo)
    {
        $this->__load();
        return parent::setPhoto($photo);
    }

    public function getPhoto()
    {
        $this->__load();
        return parent::getPhoto();
    }

    public function setLogin($login)
    {
        $this->__load();
        return parent::setLogin($login);
    }

    public function getLogin()
    {
        $this->__load();
        return parent::getLogin();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setFiliere(\Ensat\GraduateBundle\Entity\FILIERE $filiere = NULL)
    {
        $this->__load();
        return parent::setFiliere($filiere);
    }

    public function getFiliere()
    {
        $this->__load();
        return parent::getFiliere();
    }

    public function addPoste(\Ensat\GraduateBundle\Entity\POSTE $postes)
    {
        $this->__load();
        return parent::addPoste($postes);
    }

    public function removePoste(\Ensat\GraduateBundle\Entity\POSTE $postes)
    {
        $this->__load();
        return parent::removePoste($postes);
    }

    public function getPostes()
    {
        $this->__load();
        return parent::getPostes();
    }

    public function addReseaux(\Ensat\GraduateBundle\Entity\RESEAUSOCIAL $reseaux)
    {
        $this->__load();
        return parent::addReseaux($reseaux);
    }

    public function removeReseaux(\Ensat\GraduateBundle\Entity\RESEAUSOCIAL $reseaux)
    {
        $this->__load();
        return parent::removeReseaux($reseaux);
    }

    public function getReseaux()
    {
        $this->__load();
        return parent::getReseaux();
    }

    public function addInvitation(\Ensat\GraduateBundle\Entity\EVENEMENT $invitations)
    {
        $this->__load();
        return parent::addInvitation($invitations);
    }

    public function removeInvitation(\Ensat\GraduateBundle\Entity\EVENEMENT $invitations)
    {
        $this->__load();
        return parent::removeInvitation($invitations);
    }

    public function getInvitations()
    {
        $this->__load();
        return parent::getInvitations();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'cin', 'nom', 'prenom', 'datenaissance', 'fixe', 'mobile', 'residence', 'email', 'photo', 'login', 'password', 'filiere', 'postes', 'reseaux', 'invitations');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}