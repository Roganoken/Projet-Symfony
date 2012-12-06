<?php

namespace Acme\OrchestraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livre
 *
 * @ORM\Table(name="livre")
 * @ORM\Entity
 */
class Livre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=45, nullable=true)
     */
    public   $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=45, nullable=true)
     */
    public $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=45, nullable=true)
     */
    public $resume;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annee", type="date", nullable=true)
     */
    public $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="illustration", type="string", length=45, nullable=true)
     */
    public $illustration;

    /**
     * @var string
     *
     * @ORM\Column(name="date_reservation", type="string", length=45, nullable=true)
     */
    public $dateReservation;

    /**
     * @var string
     *
     * @ORM\Column(name="date_emprunt", type="string", length=45, nullable=true)
     */
    public $dateEmprunt;

    /**
     * @var string
     *
     * @ORM\Column(name="date_retour", type="string", length=45, nullable=true)
     */
    public $dateRetour;

    /**
     * @var string
     *
     * @ORM\Column(name="code_barre", type="string", length=45, nullable=true)
     */
    public $codeBarre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    public $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    public $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=false)
     */
    public $updated;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Commentaire", inversedBy="livre")
     * @ORM\JoinTable(name="livre_commentaire",
     *   joinColumns={
     *     @ORM\JoinColumn(name="livre_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="commentaire_id", referencedColumnName="id")
     *   }
     * )
     */
    public $commentaire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="livre")
     */
    public $user;

    /**
     * @var \Auteur
     *
     * @ORM\ManyToOne(targetEntity="Auteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auteur_id", referencedColumnName="id")
     * })
     */
    public $auteur;

    /**
     * @var \Genre
     *
     * @ORM\ManyToOne(targetEntity="Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="genre_id", referencedColumnName="id")
     * })
     */
    public $genre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaire = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
