<?php

/** Abstract classes -> have at least one abstract method
 * abstract keyword is used before class keyword to declare abstract class
 * abstract method is declared but not implemented in code
 * when a class inherits abstract class, it must define same method signature
 * as the abstract method with same or less restricted access modifier.
 * The number of reqrd arguments must be same but child can have additional
 * arguments as well
 * 
 */

 abstract class Animal 
 {
     public $name;
     public function __construct($name)
     {
         $this->name = $name;
     }
     abstract public function sound();
 }

 class Dog extends Animal
 {
    public function sound()
    {
        return "Dog $this->name";
    }
    
 }

 $shepherd = new Dog("Barks");
echo $shepherd->sound();