<?php
namespace altamatick\test;

interface SkillControlIntarface
{
    public function addSkill(string $name, SkillInterface $skill) : object;

    public function deleteSkill(string $name) : object;

    public function hasSkill(string $name) : bool;

    public function getSkill(string $name) : object;
}

