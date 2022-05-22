<?php

namespace App\Adapter;

class Provider2Adapter implements ProviderAdapter {

    private $tasks = array();

    public function normalize(array $tasks) {

        foreach($tasks as $task) {

            foreach ($task as $item){
                $this->tasks[] =  [
                    "level" => $item->level,
                    "estimated_duration" => $item->estimated_duration,
                    "name" => key($task)
                ];
            }

        }
    }

    public function getToDoList():array {
        return $this->tasks;
    }
}