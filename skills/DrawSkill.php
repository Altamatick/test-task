<?php
namespace test\skills;

use test\SkillInterface;

class DrawSkill implements SkillInterface
{
    public function use() : void
    {
        echo "drawing\n";
    }

    public static function getName() : string
    {
        return 'draw';
    }
}

