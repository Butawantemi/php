<?php
//class in php
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model= $model;
    }
    public function message(){
        return "My car is a ".$this->color." ".$this->model."!";
    }
}

//insert data in php class
$myCar = new Car("red", "Volvo");
//check data type
var_dump($myCar);




//$car = array("volve", "toyota", "japhet");

/* //initing variable
$name = 'Japhet';

//print 
print ("Welcome $name!"); */

