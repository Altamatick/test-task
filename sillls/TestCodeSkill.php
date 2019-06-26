<?php
namespace altamatick\test\skills;

use altamatick\test\SkillInterface;

class TestCodeSkill implements SkillInterface
{
    public function use() : void
    {
        echo "code testing";
    }
}

