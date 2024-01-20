<?php

namespace App\Services;

class TaskService
{
    protected $repo;

    public function __construct(YourInterface $repo){
        $this->repo = $repo;
    }
}
