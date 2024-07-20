<?php
/* An array is a special variable that can 
hold many values under a single name, 
and you can access the values by referring to an index numb er or name. */
//Multidimensional array
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
for ($row = 0; $row < 4; $row++){
    echo "Row Number".$row."\n";
    for ($col = 0; $col < 3; $col++) {
        echo "=>".$cars[$row][$col]."\n";
    }
}  

//sort array sort() rsort() asort() ksort() arsort() krsort() 
/* //sort()- sort array in ascending order using values
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
print_r($age) */;


/* //sort()- sort array in descending order
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
var_dump($cars) */

/* //sort()- sort array in ascending order
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
var_dump($cars) */

/* //remove the first item from an array
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars); */

/* //remove last item from an array
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars) */;


/* //removing item from an array using array_diff
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_export($newarray); */

/* // removing item from an array using associative array
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
var_dump($cars); */

/* //removing multiple items from an array using array_splice and unset
$cars = array("Volvo", "BMW", "Toyota", "Ford");
array_splice($cars, 1, 2);
unset($cars[0], $cars[1]);
var_dump($cars); */

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