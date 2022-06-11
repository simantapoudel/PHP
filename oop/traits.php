<?php

/** Traits => When class need to inherit multiple behaviors, use trait.
 * Trait is declared using the trait keyword
 * and class inheriting the trait should use the 'use' keyword.
 * can have any access modifiers unlike interface which only have public methods
 * traits can have both methods and abstract methods.
 * abstract method is declared using the abstract keyword
 * and whichever class uses the trait, must implement that
 * abstract method.
 */

 trait Politeness
 {
     public function polite()
     {
         echo "So polite";
     }
     abstract private function humble();
 }

 trait Respectful
 {
     public function respect()
     {
         echo "So respectful";
     }
 }

 class Behaviors
 {
     use Politeness;
     use Respectful;
     
     public function humble()
     {
         echo "So humble";
     }
 }

 $obj = new Behaviors();
 $obj->polite();
 echo "<br>";
 $obj->respect();
 echo "<br>";
$obj->humble();