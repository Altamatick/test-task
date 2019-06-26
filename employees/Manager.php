<?php
namespace test\employees;

class Manager extends Employee
{
    public static function getName() : string
    {
        return "manager";
    }
}

