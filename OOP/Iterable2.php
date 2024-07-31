<?php
//function which returns an array
function getIterable():iterable {
  return ["a", "b", "c"];
}

//use of iterable
$myIterable = getIterable();
//looping
foreach($myIterable as $item) {
  echo $item;
}
