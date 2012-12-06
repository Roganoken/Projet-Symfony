<?php

namespace Acme\OrchestraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity
 */
class Salle
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
     * @ORM\Column(name="numero", type="string", length=45, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="capacite", type="string", length=45, nullable=true)
     */
    private $capacite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Course", inversedBy="salle")
     * @ORM\JoinTable(name="salle_course",
     *   joinColumns={
     *     @ORM\JoinColumn(name="salle_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     *   }
     * )
     */
    private $course;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->course = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
