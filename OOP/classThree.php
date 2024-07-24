<?php
class fruit {
    public $name;
    public $color;
    public $weight;
//function can be accessed from anywhere
 function set_name($name){
    $this->name = $name;
 }
 //function can only be accessed from within the class
 private function set_color($color){
    $this->color = $color;
 }
 //function can only be accessed from within tha class and any class that inherits from it
 protected function set_weight($weight){
    $this->weight = $weight;
 }
}
$apple = new fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
$weight->set_weight(150);