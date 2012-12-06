<?php

namespace Acme\OrchestraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiplomaUser
 *
 * @ORM\Table(name="diploma_user")
 * @ORM\Entity
 */
class DiplomaUser
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
     * @var \DateTime
     *
     * @ORM\Column(name="issue_date", type="date", nullable=true)
     */
    private $issueDate;

    /**
     * @var \Diploma
     *
     * @ORM\ManyToOne(targetEntity="Diploma")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="diploma_id", referencedColumnName="id")
     * })
     */
    private $diploma;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
