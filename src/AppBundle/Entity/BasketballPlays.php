<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity
 *@ORM\Table(name="basketball_defensive_stats")
 */
class BasketballPlays {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $steals_total;

    /**
     * @ORM\Column(type="integer")
     */
    private $blocks_total;

    public function getId()
    {
        return $this->id;
    }

    public function getStealsTotal()
    {
        return $this->steals_total;
    }

    public function getBlocksTotal()
    {
        return $this->blocks_total;
    }
}