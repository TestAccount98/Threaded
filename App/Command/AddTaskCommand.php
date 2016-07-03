<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddTaskCommand extends Command
{
    public function configure()
    {
        $this->setName('task:add')
                ->setAliases('t:a')
                ->setDescription('Add task in pool')
                ->addOption('name', 'n', InputOption::VALUE_REQUIRED, 'Tasks name')
                ->addOption('weight', 'w', InputOption::VALUE_OPTIONAL, 'Tasks weight');
    }
    
    public function execute(InputInterface $input, OutputInterface $output)
    {
        // Add task in pool
    }
}