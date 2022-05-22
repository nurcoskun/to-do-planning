<?php

namespace App\Adapter;

interface ProviderAdapter {
    public function normalize(array $tasks);
    public function getToDoList():array;
}