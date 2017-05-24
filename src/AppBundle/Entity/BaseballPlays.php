<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 *@ORM\Entity
 *@ORM\Table(name="baseball_action_plays")
 */
class BaseballPlays {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="integer")
     */
    private $baseball_event_state_id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $play_type;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $notation;
    public function getId()
    {
        return $this->id;
    }
    public function getPlaytype()
    {
        return $this->play_type;
    }
    public function getBaseballEventStateId()
    {
        return $this->baseball_event_state_id;
    }
    public function getNotation()
    {
        return $this->notation;
    }
}