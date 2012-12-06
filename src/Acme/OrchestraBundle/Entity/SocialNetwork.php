<?php

namespace Acme\OrchestraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocialNetwork
 *
 * @ORM\Table(name="social_network")
 * @ORM\Entity
 */
class SocialNetwork
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
     * @ORM\Column(name="url", type="string", length=256, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="base_url", type="string", length=256, nullable=false)
     */
    private $baseUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="share_url", type="string", length=256, nullable=true)
     */
    private $shareUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=45, nullable=true)
     */
    private $logo;


}
