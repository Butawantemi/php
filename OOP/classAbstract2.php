<?php
abstract class prentClass{
    abstract protected function PrefixName($name);
}

class ChildClass extends prentClass {
    public function PrefixName($name){
        if($name == "John Doe"){
            $prefix = "Mr.";
        }else{
            $prefix = "Mrs.";
        }
        return "{$prefix} {$name}";
    }
}

$child = new ChildClass();
echo $child->PrefixName("John Doe");
echo "\n";
$child = new ChildClass();
echo $child->PrefixName("Jane Doe");