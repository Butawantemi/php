<?php
//function for iterate array
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}
//Initilize array
$arr = ["a", "b", "c"];
printIterable($arr);