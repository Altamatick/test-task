<?php
namespace test\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use test\EmployeeFactory;
use test\employees\Tester;

class HasTesterSkill extends Command
{
    protected function configure()
    {
        $this->addArgument('skill', InputArgument::REQUIRED, 'Skill is required!');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $hasSkill = EmployeeFactory::getEmployee(Tester::getName())->hasSkill($input->getArgument('skill'));
        $output->writeln($hasSkill ? "true" : "false");
    }
}