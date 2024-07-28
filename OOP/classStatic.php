<?php
//Static method

class A {
    public static function foo(){
        echo "I am foo from";
    }
}

class B {
    public function bar () {
        A::foo();
        echo "\n";
    }
}

$obj = new B();
$obj->bar();










/* class greeting {
    public static function welcome (){
        echo "Hello World! \n";
    }
    function __construct(){
        self::welcome();
    }
}

new greeting(); */