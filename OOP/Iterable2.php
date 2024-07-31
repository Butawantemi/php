<?php
class myIterable implements Iterator {
  private $items = [];
  private $pointer = 0;

  public function __construct($items){
    $this->items = array_values($items);
  }
}

//function to return the current element
 public function current(){
  return $this->items[$this->pointer];
}







/* //function which returns an array
function getIterable():iterable {
  return ["a", "b", "c"];
}

//use of iterable
$myIterable = getIterable();
//looping through the iterable
foreach($myIterable as $item) {
  echo $item;
} */
