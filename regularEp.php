<?php
//preg_replace for replace all matches of the pattern
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);


/* //preg_match_all
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); */


/* //preg_match for check the pattern
$str = "Visit W3Schools";
$pattern ="/w3schools/i";
echo preg_match($pattern, $str); */