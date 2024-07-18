<?php
define("Cars", ["Toyota", "Volvo", "BMW"]);

function myFunction(){
    echo "I like " . Cars[0] . ", " . Cars[1] . " and " . Cars[2] . ".";
}

myFunction();