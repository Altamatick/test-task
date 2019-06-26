<?php
namespace altamatick\test\skills;

use altamatick\test\SkillInterface;

class DrawSkill implements SkillInterface
{
    public function use() : void
    {
        echo "drawing";
    }
}

