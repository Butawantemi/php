<?php
//Trait is mechanism to reuse the code in single inheritance.
trait message {
    public function msg (){
        echo "OOP is fun! \n";
    }
}


trait message1 {
    public function msg1() {
      echo "OOP reduces code duplication!";
    }
  }

//class Welcome is using message trait
class Welcome {
    use message;
}

//class Welcome2 is using message and message2 trait
class Welcome2 {
    use message, message1;
  }

//create object of Welcome class
$obj = new Welcome();
$obj->msg();

$obj2 = new Welcome2();
$obj2->msg();
$obj2->msg1();