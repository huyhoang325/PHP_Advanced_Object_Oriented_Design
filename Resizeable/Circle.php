<?php
include_once ('Shape.php');
include_once ('Resizeable.php');
class Circle extends Shape implements Resizeable 
{
    private $radius;
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
    public function resize($percent){
        return (pi() * pow($this->radius, 2)) * $percent;
    }
}