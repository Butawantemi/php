<?php
/* An array is a special variable that can 
hold many values under a single name, 
and you can access the values by referring to an index numb er or name. */
//removing multiple items from an array using array_splice and unset
$cars = array("Volvo", "BMW", "Toyota", "Ford");
array_splice($cars, 1, 2);
unset($cars[0], $cars[1]);
var_dump($cars);



/* //removing item from an array using splice and unset
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
unset($cars[0]);
var_dump($cars); */



/* //Add items to an array ung associative array (-=)
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];
var_dump($cars);
 */

/* //Add items to an array(using push)
$nationals = ["Tanzania", "Kenya"];
array_push($nationals, "Uganda", "Rwanda");
var_dump($nationals); */

//Add items to an array(with index)
/* $car = array("brand" => "Toyota", "model" => "Corolla", "year" => 2018);
$car["color"] = "Red";
var_dump($car) */;


/* //update array element
$array = [23, 45, 67, 26, 89];
foreach ($array as &$x){
    $x = "bird";
}
unset($x);
var_dump($array);
 */

//array function 
//Execute function by referring to the key name:

/* function myFunction() {
  echo "I come from a function!";
}

$myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction());

$myArr["message"]; */


/* function Greet() {
   echo "Hello, World!";
}
//passing function to an array
$myArray = array("Jay", Greet(), 23);
//accessing array elements
echo $myArray[1];
 */

/* //create an array using array() and []
$name = array("Jackson", "Josephat", "Josia", "Jovin", "Jacqueline");
$age = [23, 24, 35, 56, 20];

//accessing array elements
echo $name[0]; */


/* //loop through associative array
$car = array("brand" => "Toyota", "model" => "Corolla", "year" => 2018);
foreach ($car as $key => $value){
    echo "$key : $value \n";
} */

/* $car = array("brand" => "Toyota", "model" => "Corolla", "year" => 2018);
$car["year"] = 2024;
var_dump($car);
echo $car['year']; */

/* $colors = array("Red", "Green", "Blue", "Yellow", "Black");
array_push($colors, "White", "Purple");
foreach ($colors as $x){
    echo "$x \n";
} */