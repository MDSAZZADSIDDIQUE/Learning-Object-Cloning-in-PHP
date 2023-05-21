<?php
class Human
{
}
class Student
{
    private $name;
    private $id;
    private $semester;
    private $human;

    function __construct($name, $id, $semester, $human)
    {
        $this->name = $name;
        $this->id = $id;
        $this->semester = $semester;
        $this->human = new Human();
    }

    function __set($prop, $value)
    {
        $this->$prop = $value;
    }

    function __get($prop)
    {
        return $this->prop;
    }

    function __clone()
    {
        $this->human = clone $this->human;
    }
}

$sazzad = new Student("Sazzad", "20-43747-2", "Spring", new Human());
$likhon = clone $sazzad;
$likhon->name = "Likhon";
print_r($sazzad);
print_r($likhon);
