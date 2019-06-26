<?php
namespace altamatick\test\skills;

use altamatick\test\SkillInterface;

class SetTaskSkill implements SkillInterface
{
    public function use() : void
    {
        echo "task setting";
    }
}

