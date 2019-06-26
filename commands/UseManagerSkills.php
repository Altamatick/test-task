<?php
namespace test\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use test\EmploeeFactory;
use test\employees\Manager;

class UseManagerSkills extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(EmploeeFactory::getEmploee(Manager::getName())->showSkills());
    }
}