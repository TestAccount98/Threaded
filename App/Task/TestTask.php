<?php

namespace App\Task;

use App\Task\TaskInterface;

class TestTask implements TaskInterface
{
    public function run()
    {
        echo 'TestTask run';
    }
}