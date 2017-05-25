<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity
 *@ORM\Table(name="american_football_action_plays")
 */
class AmericanFootballPlays {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $american_football_event_state_id;

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
    private $drive_result;

    /**
     * @ORM\Column(type="integer")
     */
    private $points;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $comment;

    public function getId()
    {
        return $this->id;
    }

    public function getAmericanFootballEventStateId()
    {
        return $this->american_football_event_state_id;
    }

    public function getPlayType()
    {
        return $this->play_type;
    }

    public function getScoreAttemptType()
    {
        return $this->score_attempt_type;
    }

    public function getDriveResult()
    {
        return $this->drive_result;
    }

    public function getPoints()
    {
        return $this->points;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setId($val)
    {
        $this->id = $val;
    }

    public function setAmericanFootballEventStateId($val)
    {
        $this->american_football_event_state_id = $val;
    }

    public function setPlayType($val)
    {
        $this->play_type = $val;
    }

    public function setScoreAttemptType($val)
    {
        $this->score_attempt_type = $val;
    }

    public function setDriveResult($val)
    {
        $this->drive_result = $val;
    }

    public function setPoints($val)
    {
        $this->points = $val;
    }

    public function setComment($val)
    {
        $this->comment = $val;
    }
}