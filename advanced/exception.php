<?php
    /* 
        Exception is an obj that describes the unexpected behavior of a program
        thrown by many PHP classes and functions and also user-defined functions.

        Exceptions are caught so it doesn't interrupt the normal flow or execution
        of the program. Exceptions are runtime errors such as IOException, SQLException,
        ClassNotFoundException, Arithmetic Exceptions and more. 

        try catch finally is used to throw an exception and to catch and display
        an error message of why the exception occured.
        Syntax: new Exception(message, code, previous)
                try { stmt; } catch(Exception $e) { stmt; } finally { stmt; }
        try consists of the code that can throw exceptions
        catch catches the exception if occured and displays the message of the
        reason of that exception occurence.
    */
    // function divide($dividend, $divisor) 
    // {
    //         if ($divisor == 0) {
    //             throw new Exception("Cannot divide");
    //         }
    //         return $dividend / $divisor;
    // }

    // try {
    //     echo divide(12,0);
    //     //if exception is thrown, below code will not be executed.
    //     echo "The passed number is not zero";
    // }
    // catch(Exception $e) {
    //     echo $e->getMessage() . "<br>"; //gets the exception message
    //     echo $e->getFile() . "<br>"; //gets the path of the exception occuring file
    //     echo $e->getLine() . "<br>"; //gets the line number where exception occured.
    // }
    // finally {
    //     echo "Process finally completed";
    // }
    // function checkSum($n) 
    // {
    //     if ($n >= 1) {
    //         throw new Exception('Value should be less than 1');
    //     }
    //     return true;
    // }

    // try {
    //     checkSum(4);
    //     echo "The value is less than 1";
    // } catch (Exception $e) {
    //     echo $e->getMessage();
    // }

    //Creating a custom exception
    class DivideByZeroException extends Exception {}
    class DivideByNegativeNumberException extends Exception {}
    function divide($dividend, $divisor) 
    {
        try {
            if ($divisor == 0) {
                throw new DivideByZeroException;
            } elseif ($divisor < 0) {
                throw new DivideByNegativeNumberException;
            } else {
                $result = $dividend / $divisor;
                echo "The result is " . $result . "<br>";
            }
        } catch (DivideByZeroException $dze) {
            echo "Cannot divide by zero" . "<br>";
        } catch (DivideByNegativeNumberException $nne) {
            echo "Cannot divide by negative number" . "<br>";
        } 
    }

    divide(13,0);
    divide(12,6);
    divide(12,-4);