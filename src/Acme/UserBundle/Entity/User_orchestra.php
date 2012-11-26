<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User_orchestra
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User_orchestra extend 
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
     * @ORM\Column(name="firstname", type="string", length=32)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=32)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=256)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=16)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date")
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=150)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=16)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_phone", type="string", length=16)
     */
    private $mobile_phone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="connected", type="datetime")
     */
    private $connected;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="updated", type="string")
     */
    private $updated;

    /**
     * @var string
     *
     * @ORM\Column(name="datetime", type="string")
     */
    private $datetime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_professeur", type="boolean")
     */
    private $is_professeur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_eleve", type="boolean")
     */
    private $is_eleve;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_contact", type="boolean")
     */
    private $is_contact;


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
     * Set firstname
     *
     * @param string $firstname
     * @return User_orchestra
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User_orchestra
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User_orchestra
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User_orchestra
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
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return User_orchestra
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    
        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return User_orchestra
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
     * Set email
     *
     * @param string $email
     * @return User_orchestra
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
     * Set phone
     *
     * @param string $phone
     * @return User_orchestra
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mobile_phone
     *
     * @param string $mobilePhone
     * @return User_orchestra
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobile_phone = $mobilePhone;
    
        return $this;
    }

    /**
     * Get mobile_phone
     *
     * @return string 
     */
    public function getMobilePhone()
    {
        return $this->mobile_phone;
    }

    /**
     * Set connected
     *
     * @param \DateTime $connected
     * @return User_orchestra
     */
    public function setConnected($connected)
    {
        $this->connected = $connected;
    
        return $this;
    }

    /**
     * Get connected
     *
     * @return \DateTime 
     */
    public function getConnected()
    {
        return $this->connected;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return User_orchestra
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param string $updated
     * @return User_orchestra
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return string 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set datetime
     *
     * @param string $datetime
     * @return User_orchestra
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    
        return $this;
    }

    /**
     * Get datetime
     *
     * @return string 
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set is_professeur
     *
     * @param boolean $isProfesseur
     * @return User_orchestra
     */
    public function setIsProfesseur($isProfesseur)
    {
        $this->is_professeur = $isProfesseur;
    
        return $this;
    }

    /**
     * Get is_professeur
     *
     * @return boolean 
     */
    public function getIsProfesseur()
    {
        return $this->is_professeur;
    }

    /**
     * Set is_eleve
     *
     * @param boolean $isEleve
     * @return User_orchestra
     */
    public function setIsEleve($isEleve)
    {
        $this->is_eleve = $isEleve;
    
        return $this;
    }

    /**
     * Get is_eleve
     *
     * @return boolean 
     */
    public function getIsEleve()
    {
        return $this->is_eleve;
    }

    /**
     * Set is_contact
     *
     * @param boolean $isContact
     * @return User_orchestra
     */
    public function setIsContact($isContact)
    {
        $this->is_contact = $isContact;
    
        return $this;
    }

    /**
     * Get is_contact
     *
     * @return boolean 
     */
    public function getIsContact()
    {
        return $this->is_contact;
    }
}