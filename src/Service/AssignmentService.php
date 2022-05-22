<?php

namespace App\Service;

use App\Entity\Developer;
use App\Entity\Tasks;
use App\Repository\DeveloperRepository;
use Doctrine\ORM\EntityManagerInterface;

class AssignmentService
{
    /** @var EntityManagerInterface */
    private $em;

    /** @var DeveloperRepository */
    private $developerRepository;

    public function __construct(
        EntityManagerInterface $em,
        DeveloperRepository $developerRepository
    )
    {
        $this->em = $em;
        $this->developerRepository = $developerRepository;
    }


    public function assignmentTask($toDoList){

        $weeklyWorkingTime = 45;

        foreach ($toDoList as $list){

            $developers = $this->em->getRepository(Developer::class)->findBy(array(), array('totalHours'=>'ASC'));

            $task = $this->em->getRepository(Tasks::class)->findBy(array('toDoList'=>$list[0]));

            if (!$task){
                $task = new Tasks();
                $task->setDeveloper($developers[0]);
                $task->setToDoList($list[0]);
                $task->setEstimatedDuration($list[0]->getEstimatedDuration() * $list[0]->getLevel());
                $task->setCreatedAt(new \DateTime());
                $this->em->persist($task);
                $this->em->flush();

                $developers[0]->setTotalHours($developers[0]->getTotalHours() + ($task->getEstimatedDuration() / $developers[0]->getLevel()));
                $developers[0]->setTotalWeek($developers[0]->getTotalHours() / $weeklyWorkingTime);
                $this->em->persist($developers[0]);
                $this->em->flush();
            }

        }

    }


}