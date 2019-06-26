<?php
namespace test\employees;

use test\{
    SkillInterface,
    SkillControlIntarface
};

abstract class Emploee implements SkillControlIntarface
{
    private $skills = [];

    public function addSkill(string $name, SkillInterface $skill) : object
    {
        $this->skills[$name] = $skill;
        return $this;
    }

    public function deleteSkill(string $name) : object
    {
        if (array_key_exists($name, $this->skills)) {
            unset($this->skills[$name]);
        }
        return $this;
    }

    public function hasSkill(string $name) : bool
    {
        return array_key_exists($name, $this->skills);
    }

    public function getSkill(string $name) : object
    {
        return $this->hasSkill($name) ? $this->skills[$name] : null;
    }
}

