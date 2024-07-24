<?php
class fruit {
    public $name;
    public $color;

    //methods
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}

$apple = new fruit('Apple', 'Red');
$banana = new fruit('Banana', 'Yellow');

echo $apple->get_name()."\n";
echo $apple->get_color()."\n";
echo $banana->get_name()."\n";
echo $banana->get_color()."\n";