<?php

namespace Acme\OrchestraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity
 */
class Company
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
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=256, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=256, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="logo", type="integer", nullable=true)
     */
    private $logo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="issue_date", type="date", nullable=true)
     */
    private $issueDate;

    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=16, nullable=true)
     */
    private $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="siren", type="string", length=16, nullable=true)
     */
    private $siren;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=false)
     */
    private $updated;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Field", inversedBy="company")
     * @ORM\JoinTable(name="company_field",
     *   joinColumns={
     *     @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="field_id", referencedColumnName="id")
     *   }
     * )
     */
    private $field;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Sector", inversedBy="company")
     * @ORM\JoinTable(name="company_sector",
     *   joinColumns={
     *     @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="sector_id", referencedColumnName="id")
     *   }
     * )
     */
    private $sector;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="company")
     * @ORM\JoinTable(name="company_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   }
     * )
     */
    private $user;

    /**
     * @var \Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     * })
     */
    private $address;

    /**
     * @var \Legal
     *
     * @ORM\ManyToOne(targetEntity="Legal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="legal_id", referencedColumnName="id")
     * })
     */
    private $legal;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->field = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sector = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
