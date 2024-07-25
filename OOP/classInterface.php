<?php
//interface class
interface Animal {
    public function makeSound();
}

//child classes
class Cat implements Animal {
    public function makeSound(){
        echo "Meow \n";
    }
}

class Dog implements Animal {
    public function makeSound(){
        echo "Bark \n";
    }
}

class Mouse implements Animal {
    public function makeSound(){
        echo "Squeak \n";
    }
}

//Create objects from the child classes
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

//loop through the objects and call the makeSound method
foreach($animals as $animal){
    $animal->makeSound();
}

/* //Call the makeSound method from the cat class
$cat->makeSound();
$dog->makeSound();
$mouse->makeSound(); */