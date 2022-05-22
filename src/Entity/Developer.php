<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DeveloperRepository")
 * @ORM\Table(name="e_developer")
 */
class Developer
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer",nullable=true)
     */
    private $estimated_duration;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer",nullable=true)
     */
    private $level;

    /**
     * @var float
     *
     * @ORM\Column(type="float",nullable=true)
     */
    private $totalHours;

    /**
     * @var float
     *
     * @ORM\Column(type="float",nullable=true)
     */
    private $totalWeek;

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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getEstimatedDuration(): int
    {
        return $this->estimated_duration;
    }

    /**
     * @param int $estimated_duration
     */
    public function setEstimatedDuration(int $estimated_duration): void
    {
        $this->estimated_duration = $estimated_duration;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    /**
     * @return float
     */
    public function getTotalHours(): ?float
    {
        return $this->totalHours;
    }

    /**
     * @param float $totalHours
     */
    public function setTotalHours(float $totalHours): void
    {
        $this->totalHours = $totalHours;
    }

    /**
     * @return float
     */
    public function getTotalWeek(): ?float
    {
        return $this->totalWeek;
    }

    /**
     * @param float $totalWeek
     */
    public function setTotalWeek(float $totalWeek): void
    {
        $this->totalWeek = $totalWeek;
    }





}
