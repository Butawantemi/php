<?php
//Static method
class greeting {
    public static function welcome (){
        echo "Hello World! \n";
    }
    function __construct(){
        self::welcome();
    }
}

new greeting();