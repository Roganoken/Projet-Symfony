<?php

namespace Acme\OrchestraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sex
 *
 * @ORM\Table(name="sex")
 * @ORM\Entity
 */
class Sex
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
     * @ORM\Column(name="gender", type="string", length=16, nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=16, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="title_abbrev", type="string", length=16, nullable=false)
     */
    private $titleAbbrev;


}
