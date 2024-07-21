<?php
/* $GLOBALS, $_SERVER, $_REQUEST, $_POST, $_GET, $_FILES, $_ENV, $_COOKIE
$_SESSION */

$x  = 20;

function myFunction(){
    echo $GLOBALS["x"];
}
myFunction();