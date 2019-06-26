<?php
namespace test\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use test\EmployeeFactory;
use test\employees\Designer;

class UseDesignerSkills extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(EmployeeFactory::getEmployee(Designer::getName())->showSkills());
    }
}