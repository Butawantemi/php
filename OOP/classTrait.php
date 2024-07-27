<?php
//Trait is mechanism to reuse the code in single inheritance.
trait message1 {
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
class Welcome1 hgjj {
    use message1;
}

//class Welcome2 is using message and message2 trait
class Welcome2 {
    use message1, message2;
  }

//create object of Welcome class
$obj = new Welcome1();
$obj->msg();