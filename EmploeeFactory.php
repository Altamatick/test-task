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

class EmploeeFactory
{
    public static function getEmploee(string $type) : SkillControlIntarface
    {
        switch ($type) {
            case Designer::getName(): 
                $emploee = new Designer();
                $emploee
                    ->addSkill(new DrawSkill())
                    ->addSkill(new CommunicationSkill());
                return $emploee;

            case Developer::getName(): 
                $emploee = new Developer();
                $emploee
                    ->addSkill(new WriteCodeSkill())
                    ->addSkill(new TestCodeSkill())
                    ->addSkill(new CommunicationSkill());
                return $emploee;

            case Manager::getName(): 
                $emploee = new Manager();
                $emploee
                    ->addSkill(new SetTaskSkill());
                return $emploee;

            case Tester::getName(): 
                $emploee = new Tester();
                $emploee
                    ->addSkill(new CommunicationSkill())
                    ->addSkill(new TestCodeSkill())
                    ->addSkill(new SetTaskSkill());
                return $emploee;
        }

        throw new \Exception("Employee type not found");
    }
}

