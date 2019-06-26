<?php
namespace altamatick\test\skills;

use altamatick\test\SkillInterface;

class WriteCodeSkill implements SkillInterface
{
    public function use() : void
    {
        echo "code writing";
    }
}

