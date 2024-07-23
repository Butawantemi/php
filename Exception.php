<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}
//try and catch block
try {
    echo divide(5, 0); 
}catch(Exception $ex){
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Unable to divide. \n";
}finally {
    Echo "Process complete";
}