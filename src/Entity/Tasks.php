<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TasksRepository")
 * @ORM\Table(name="e_tasks")
 */
class Tasks
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Developer")
     * @ORM\JoinColumn(name="developer_id", referencedColumnName="id")
     */
    private $developer;

    /**
     * @ORM\ManyToOne(targetEntity="ToDoList")
     * @ORM\JoinColumn(name="to_do_list_id", referencedColumnName="id")
     */
    private $toDoList;

    /**
     * @var float
     *
     * @ORM\Column(type="float",nullable=true)
     */
    private $estimated_duration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDeveloper()
    {
        return $this->developer;
    }

    /**
     * @param mixed $developer
     */
    public function setDeveloper($developer): void
    {
        $this->developer = $developer;
    }

    /**
     * @return mixed
     */
    public function getToDoList()
    {
        return $this->toDoList;
    }

    /**
     * @param mixed $toDoList
     */
    public function setToDoList($toDoList): void
    {
        $this->toDoList = $toDoList;
    }

    /**
     * @return float
     */
    public function getEstimatedDuration(): ?float
    {
        return $this->estimated_duration;
    }

    /**
     * @param float $estimated_duration
     */
    public function setEstimatedDuration(float $estimated_duration): void
    {
        $this->estimated_duration = $estimated_duration;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }



}
