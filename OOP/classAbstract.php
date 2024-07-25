<?php
//Parent class
abstract class Car {
    public $name;
    function __construct($name){
        $this->name = $name;
    }
    abstract public function intro() : string; 
}
//child class
class Audi extends Car {
    public function intro() : string {
        return "Choose German quality! I'm an $this->name!";
    }
}

//child class
class Volvo extends Car {
    public function intro() : string {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

//child class
class Citrion extends Car {
    public function intro() : string {
        return "French extravagance! I'm a $this->name!";
    }
}

//Create objects from the child classes
$audi = new Audi("Audi");
echo $audi->intro();