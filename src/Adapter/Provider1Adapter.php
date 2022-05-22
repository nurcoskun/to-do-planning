<?php

namespace App\Adapter;

class Provider1Adapter implements ProviderAdapter {

    private $tasks = array();

    public function normalize(array $tasks) {

        foreach($tasks as $task) {
            $this->tasks[] =  [
                "level" => $task->zorluk,
                "estimated_duration" => $task->sure,
                "name" =>$task->id
            ];
        }
    }

    public function getToDoList():array {
        return $this->tasks;
    }
}