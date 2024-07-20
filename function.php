<?php
//variadic arguments
function nameFamily($lastname, ...$firstname) {
    $name = " ";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
      $name  = $name . "Hello, $firstname[$i] $lastname \n";
    }
    return $name;
    
  }

echo nameFamily("Paul", "Jacqueline", "Jackson", "Japhet", "Josephat", "Josia", "Jovin");


/* // sum of number in array
function sumArray(...$arg){
    $len = count($arg);
    $sum = 0;
    for ($i = 0; $i < $len; $i++){
        $sum += $arg[$i];
    }
    return $sum;
}

echo sumArray(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); */


/* // passing arg by reference
function addNum(&$value) {
    $value += 4;
}

$num = 10;
addNum($num);
echo $num; */


/* function sum($a = 9, $b=3){
    $z = $a + $b;
    return $z;
}

echo sum(2);
 */
/* function Greeting ($name = "Butawantemi"){
    echo "Hello, $name! \n";
}

Greeting("Japhet Paul");
Greeting();
 */