<?php

namespace Acme\OrchestraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="course")
 * @ORM\Entity
 */
class Course
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
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="full_name", type="string", length=256, nullable=true)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2048, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="exam", type="string", length=512, nullable=true)
     */
    private $exam;

    /**
     * @var string
     *
     * @ORM\Column(name="program", type="text", nullable=true)
     */
    private $program;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime", nullable=true)
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="datetime", nullable=true)
     */
    private $end;

    /**
     * @var integer
     *
     * @ORM\Column(name="coefficient", type="integer", nullable=true)
     */
    private $coefficient;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_qualifying", type="boolean", nullable=false)
     */
    private $isQualifying;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_fede", type="boolean", nullable=false)
     */
    private $isFede;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Diploma", inversedBy="course")
     * @ORM\JoinTable(name="course_diploma",
     *   joinColumns={
     *     @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="diploma_id", referencedColumnName="id")
     *   }
     * )
     */
    private $diploma;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="course")
     * @ORM\JoinTable(name="course_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   }
     * )
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Salle", mappedBy="course")
     */
    private $salle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->diploma = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        $this->salle = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
