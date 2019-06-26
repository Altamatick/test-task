<?php
namespace test;

interface SkillControlIntarface
{
    public function addSkill(SkillInterface $skill) : self;

    public function deleteSkill(string $name) : self;

    public function hasSkill(string $name) : bool;

    public function getSkill(string $name) : SkillInterface;

    public function showSkills();

    public static function getName() : string;
}

