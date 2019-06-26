<?php
namespace test\skills;

use test\SkillInterface;

class SetTaskSkill implements SkillInterface
{
    public function use() : void
    {
        echo "task setting\n";
    }

    public static function getName() : string
    {
        return 'setTask';
    }
}

