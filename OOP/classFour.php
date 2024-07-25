<?php
class Goodbye {
    //const variable
    const LEAVING_MESSAGE = "Thank you for visiting W3schools.com!";
    //Aceessing using self keyword
    public function byebye(){
        echo self::LEAVING_MESSAGE;
    }

}
//accessing const variable
//echo Goodbye::LEAVING_MESSAGE;
$goodbye = new Goodbye();
echo $goodbye->byebye();