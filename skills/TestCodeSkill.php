<?php
namespace test\skills;

use test\SkillInterface;

class TestCodeSkill implements SkillInterface
{
    public function use() : void
    {
        echo "code testing";
    }
}

