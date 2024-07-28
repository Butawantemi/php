<?php
//Static method
class domain {
    protected static function getWebsiteName(){
        return "W3Schools.com";
    }
}

class domainW3 extends domain {
    public $websiteName;
    public function __construct(){
        $this->websiteName = parent::getWebsiteName();
    }
}

/* class A {
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
 */









/* class greeting {
    public static function welcome (){
        echo "Hello World! \n";
    }
    function __construct(){
        self::welcome();
    }
}

new greeting(); */