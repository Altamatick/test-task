<?php
namespace test\skills;

use test\SkillInterface;

class TestCodeSkill implements SkillInterface
{
    public function use() : void
    {
        echo "code testing\n";
    }

    public static function getName() : string
    {
        return 'testCode';
    }
}

