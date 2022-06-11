<?php

/** Static methods => can be directly used without creating an instance of the class
 * declared using the static keyword
 * static keyword must be placed after the access modifier
 * 
 * 
 */

 class Animal
 {
     public static $name = "Human Beings";
     public static function conscious()
     {
         echo "Consciousness differs from one animal to another animal.";
     }
 }

 class Dog extends Animal
 {
    public function displayName()
    {
        echo Animal::$name;
        echo "<br>";
        echo parent::conscious(); //child class Dog accessing static method from parent class Animal using parent keyword
    }
 }
// Dog::displayName(); //way to access the static method using directly ClassName
$obj = new Dog();
$obj->displayName(); //way to access non-static method using instance of class
// echo $obj->name; // accessing non-static property
// echo Dog::$name; //accessing static property
// Animal::conscious(); 
// echo "<br>";
// echo Animal::$name; 
// $human = new Animal(); 
// $human->conscious();
