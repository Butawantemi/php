<?php
//Access modifiers(public, private, protected)
class fruit {
    //variable can be accessed from anywhere
    public $name;
    //variable can only be acceassed from within the class
    private $color;
    //variable can only be accessed from within the class and any class that inherits from it
    protected $weight;

    //methods
    function __construct($name, $color, $weight){
        $this->name = $name;

    }
}
