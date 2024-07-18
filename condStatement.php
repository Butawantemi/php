<?php
$number = 5;

function myFunction(){
    global $number;
    if($number == 10){
        echo "You have a perfect score!";
    }


}
//short hand if
echo ($number == 10) ? "You have a perfect score!" : "You don't have aperfect score!";


/* 
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
} */




//myFunction();

/* $t = date("H");
if($t < 20) {
    echo "Have a good day!";
}else{
    echo "Have a good night!";
} */