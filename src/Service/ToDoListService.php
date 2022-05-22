<?php

namespace App\Service;

use App\Entity\ToDoList;
use Doctrine\ORM\EntityManagerInterface;

class ToDoListService
{
    /** @var EntityManagerInterface */
    private $em;

    public function __construct(
        EntityManagerInterface $em
    )
    {
        $this->em = $em;
    }

    public function createToDoList(array $list)
    {
        foreach ($list as $item){

            $toDo = $this->em->getRepository(ToDoList::class)->findBy(array('name'=>$item["name"]));
            if (!$toDo){
                $toDo = new ToDoList();
                $toDo->setName($item["name"]);
                $toDo->setEstimatedDuration($item["estimated_duration"]);
                $toDo->setLevel($item["level"]);

                $this->em->persist($toDo);
                $this->em->flush();
            }

        }

    }



}