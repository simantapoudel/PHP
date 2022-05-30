<?php 
    /*
        Creating a constant
        define() is used to create a constant in php
        first param is constant name and second is value.

        Example: 
        define("COMPANY", "FAZESOFT");
        echo COMPANY;
        Outputs FAZESOFT

        define("company", "FAZESOFT");
        echo company;
        Outputs FAZESOFT

        Creating an array constant
        define() creates an array constant
        first param is name of an array, second is the contents of an array
        Example: 
        define("numbers", [
        12,32,43,54
        ]);
        echo numbers[2];
        Output: 43

        Constants are global once created and can be accessed from anywhere

        define("ACCLN", "9.8"); // in the global scope
        function gravity() {
            echo ACCLN; // accessed in the function scope
        }

        gravity();
    */
    
    define("company", "FAZESOFT");
    echo company;
?>