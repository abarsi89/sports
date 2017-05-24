<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity
 *@ORM\Table(name="ice_hockey_action_plays")
 */
class IceHockeyPlays {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ice_hockey_event_state_id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $play_type;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $score_attempt_type;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $play_result;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $comment;

    public function getId()
    {
        return $this->id;
    }

    public function getIceHockeyEventStateId()
    {
        return $this->ice_hockey_event_state_id;
    }

    public function getPlayType()
    {
        return $this->play_type;
    }

    public function getScoreAttemptType()
    {
        return $this->score_attempt_type;
    }

    public function getPlayResult()
    {
        return $this->play_result;
    }

    public function getComment()
    {
        return $this->comment;
    }
}