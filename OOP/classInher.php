<?php
class fruit {
    public $name;
    public $color;
    public $weight;

    function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function intro(){
        echo "The fruit is {$this->name}, the color is {$this->color}. \n";
    }
}

class apple extends fruit {
    public function message (){
        echo "Am I a fruit or a vegetable? \n";
    }
}

$apple = new apple('Apple', 'Red', 150);
$apple->intro();
$apple->message();