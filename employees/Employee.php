<?php
namespace test\employees;

use test\{
    SkillInterface,
    SkillControlIntarface
};

abstract class Employee implements SkillControlIntarface
{
    private $skills = [];

    public function addSkill(SkillInterface $skill) : SkillControlIntarface
    {
        $this->skills[$skill::getName()] = $skill;
        return $this;
    }

    public function deleteSkill(string $name) : SkillControlIntarface
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

    public function getSkill(string $name) : SkillInterface
    {
        return $this->hasSkill($name) ? $this->skills[$name] : null;
    }

    public function showSkills()
    {
        foreach ($this->skills as $key => $skill) {
            $skill->use();
        }
    }
}

