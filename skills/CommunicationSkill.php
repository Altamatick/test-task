<?php
namespace test\skills;

use test\SkillInterface;

class CommunicationSkill implements SkillInterface
{
    public function use() : void
    {
        echo "communication with manager\n";
    }

    public static function getName() : string
    {
        return 'communication';
    }
}

