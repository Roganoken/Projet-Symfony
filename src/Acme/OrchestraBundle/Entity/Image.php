<?php

namespace Acme\OrchestraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity
 */
class Image
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
     * @ORM\Column(name="titre", type="string", length=45, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", nullable=true)
     */
    private $descriptif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=45, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=45, nullable=true)
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="poids", type="string", length=45, nullable=true)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="logiciel", type="string", length=45, nullable=true)
     */
    private $logiciel;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_cle", type="string", length=45, nullable=true)
     */
    private $motCle;

    /**
     * @var string
     *
     * @ORM\Column(name="created", type="string", length=45, nullable=false)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="updated", type="string", length=45, nullable=false)
     */
    private $updated;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_portfolio", type="boolean", nullable=true)
     */
    private $isPortfolio;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Commentaire", inversedBy="image")
     * @ORM\JoinTable(name="image_commentaire",
     *   joinColumns={
     *     @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="commentaire_id", referencedColumnName="id")
     *   }
     * )
     */
    private $commentaire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="image")
     */
    private $user;

    /**
     * @var \Media
     *
     * @ORM\ManyToOne(targetEntity="Media")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="media_id", referencedColumnName="id")
     * })
     */
    private $media;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaire = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
