<?php

namespace Acme\OrchestraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diploma
 *
 * @ORM\Table(name="diploma")
 * @ORM\Entity
 */
class Diploma
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
     * @ORM\Column(name="full_name", type="string", length=64, nullable=false)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="certification_name", type="string", length=64, nullable=true)
     */
    private $certificationName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="certification_date", type="date", nullable=true)
     */
    private $certificationDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="final", type="boolean", nullable=false)
     */
    private $final;

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
     * @ORM\ManyToMany(targetEntity="Course", mappedBy="diploma")
     */
    private $course;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="JobOffer", inversedBy="diploma")
     * @ORM\JoinTable(name="diploma_job_offer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="diploma_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="job_offers_id", referencedColumnName="id")
     *   }
     * )
     */
    private $jobOffers;

    /**
     * @var \Degree
     *
     * @ORM\ManyToOne(targetEntity="Degree")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="degree_id", referencedColumnName="id")
     * })
     */
    private $degree;

    /**
     * @var \Field
     *
     * @ORM\ManyToOne(targetEntity="Field")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="field_id", referencedColumnName="id")
     * })
     */
    private $field;

    /**
     * @var \Speciality
     *
     * @ORM\ManyToOne(targetEntity="Speciality")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="speciality_id", referencedColumnName="id")
     * })
     */
    private $speciality;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->course = new \Doctrine\Common\Collections\ArrayCollection();
        $this->jobOffers = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
