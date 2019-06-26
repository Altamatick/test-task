<?php
namespace test;

use test\skills\{
    CommunicationSkill,
    DrawSkill,
    SetTaskSkill,
    TestCodeSkill,
    WriteCodeSkill
};
use test\employees\{
    Designer,
    Developer,
    Manager,
    Tester
};

class EmployeeFactory
{
    public static function getEmployee(string $type) : SkillControlIntarface
    {
        switch ($type) {
            case Designer::getName(): 
                $employee = new Designer();
                $employee
                    ->addSkill(new DrawSkill())
                    ->addSkill(new CommunicationSkill());
                return $employee;

            case Developer::getName(): 
                $employee = new Developer();
                $employee
                    ->addSkill(new WriteCodeSkill())
                    ->addSkill(new TestCodeSkill())
                    ->addSkill(new CommunicationSkill());
                return $employee;

            case Manager::getName(): 
                $employee = new Manager();
                $employee
                    ->addSkill(new SetTaskSkill());
                return $employee;

            case Tester::getName(): 
                $employee = new Tester();
                $employee
                    ->addSkill(new CommunicationSkill())
                    ->addSkill(new TestCodeSkill())
                    ->addSkill(new SetTaskSkill());
                return $employee;
        }

        throw new \Exception("Employee type not found");
    }
}

