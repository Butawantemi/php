<?php
//Trait is mechanism to reuse the code in single inheritance.
trait message {
    public function msg (){
        echo "OOP is fun! \n";
    }
}

//class Welcome is using message trait
class Welcome {
    use message;
}

//create object of Welcome class
$obj = new Welcome();
$obj->msg();