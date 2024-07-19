<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
  echo "$x: $y \n";
}



//foreach loop
/* $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y \n";
} */

/* $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value){
   echo "$value \n";
}
 */

//for loop
/* for ($x = 0; $x <= 10; $x++) {
  echo $x;
}
 */

//Do while loop
/* $i = 1;

do {
  echo $i;
  $i++;
} while ($i < 10); */
//while loop
/* $i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}
 */



/* //break statement
$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
} */





/* $i = 2;

while($i <= 10){
    echo $i."</br>";
    $i++;
} */