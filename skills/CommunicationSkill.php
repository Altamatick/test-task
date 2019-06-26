<?php
namespace altamatick\test\skills;

use altamatick\test\SkillInterface;

class CommunicationSkill implements SkillInterface
{
    public function use() : void
    {
        echo "communication with manager";
    }
}

