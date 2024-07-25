<?php
abstract class prentClass{
    abstract protected function PrefixName($name);
}

class ChildClass extends prentClass {
    public function PrefixName($name, $separator = ".", $greet = "Dear"){
        if($name == "John Doe"){
            $prefix = "Mr";
        }else{
            $prefix = "Mrs";
        }
        return "{$greet} {$prefix}{$separator} {$name}";
    }
}

$child = new ChildClass();
echo $child->PrefixName("John Doe");
echo "\n";
$child = new ChildClass();
echo $child->PrefixName("Jane Doe");