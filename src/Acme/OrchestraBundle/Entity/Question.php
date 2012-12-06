<?php

namespace Acme\OrchestraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity
 */
class Question
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
     * @ORM\Column(name="question", type="string", length=45, nullable=true)
     */
    private $question;

    /**
     * @var \Sondage
     *
     * @ORM\ManyToOne(targetEntity="Sondage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sondage_id", referencedColumnName="id")
     * })
     */
    private $sondage;


}
