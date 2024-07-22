<?php
/* $GLOBALS, $_SERVER, $_REQUEST, $_POST, $_GET, $_FILES, $_ENV, $_COOKIE
$_SESSION */
//$_SERVER
echo $_SERVER['PHP_SELF']."\n";
#echo $_SERVER['SERVER_NAME'];
echo $_SERVER['SERVER_ADDR']."\n";
#echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME']."\n";
echo $_SERVER['SCRIPT_FILENAME']."\n";

/* //$GLOBALS
$x  = 20;

function myFunction(){
    echo $GLOBALS["x"];
}
myFunction(); */