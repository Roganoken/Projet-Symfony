<?php

namespace Acme\LibraryBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="livre")
 */

class livre {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=13)
     */
    protected $isbn;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $titre;

    /**
     * @ORM\Column(type="text")
     */
    protected $resume;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $annee;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $illustration;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $datereservation;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $dateemprunt;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $dateretour;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $codebarre;


    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;


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
     * Set isbn
     *
     * @param string $isbn
     * @return livre
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    
        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return livre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return livre
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
    
        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set annee
     *
     * @param \DateTime $annee
     * @return livre
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    
        return $this;
    }

    /**
     * Get annee
     *
     * @return \DateTime 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set illustration
     *
     * @param string $illustration
     * @return livre
     */
    public function setIllustration($illustration)
    {
        $this->illustration = $illustration;
    
        return $this;
    }

    /**
     * Get illustration
     *
     * @return string 
     */
    public function getIllustration()
    {
        return $this->illustration;
    }

    /**
     * Set date_reservation
     *
     * @param \DateTime $dateReservation
     * @return livre
     */
    public function setDateReservation($dateReservation)
    {
        $this->datereservation = $dateReservation;
    
        return $this;
    }

    /**
     * Get date_reservation
     *
     * @return \DateTime 
     */
    public function getDateReservation()
    {
        return $this->datereservation;
    }

    /**
     * Set date_emprunt
     *
     * @param \DateTime $dateEmprunt
     * @return livre
     */
    public function setDateEmprunt($dateEmprunt)
    {
        $this->dateemprunt = $dateEmprunt;
    
        return $this;
    }

    /**
     * Get date_emprunt
     *
     * @return \DateTime 
     */
    public function getDateEmprunt()
    {
        return $this->dateemprunt;
    }

    /**
     * Set date_retour
     *
     * @param \DateTime $dateRetour
     * @return livre
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateretour = $dateRetour;
    
        return $this;
    }

    /**
     * Get date_retour
     *
     * @return \DateTime 
     */
    public function getDateRetour()
    {
        return $this->dateretour;
    }

    /**
     * Set code_barre
     *
     * @param string $codeBarre
     * @return livre
     */
    public function setCodeBarre($codeBarre)
    {
        $this->codebarre = $codeBarre;
    
        return $this;
    }

    /**
     * Get code_barre
     *
     * @return string 
     */
    public function getCodeBarre()
    {
        return $this->codebarre;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return livre
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
}