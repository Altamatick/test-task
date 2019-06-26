<?php
namespace test\skills;

use test\SkillInterface;

class WriteCodeSkill implements SkillInterface
{
    public function use() : void
    {
        echo "code writing\n";
    }

    public static function getName() : string
    {
        return 'writeCode';
    }
}

