<?php
//preg_match_all
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);


/* //preg_match for check the pattern
$str = "Visit W3Schools";
$pattern ="/w3schools/i";
echo preg_match($pattern, $str); */