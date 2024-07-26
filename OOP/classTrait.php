<?php
//Trait is mechanism to reuse the code in single inheritance.
trait message {
    public function msg (){
        echo "OOP is fun! \n";
    }
}


trait message2 {
    public function msg2() {
      echo "OOP reduces code duplication!";
    }
  }

//class Welcome is using message trait
class Welcome  {
    use message;
}

//class

//create object of Welcome class
$obj = new Welcome();
$obj->msg();