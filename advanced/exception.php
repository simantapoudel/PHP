<?php
    /* 
        Exception is an obj that describes the unexpected behavior of a program
        thrown by many PHP classes and functions and also user-defined functions.
        try catch finally is used to throw an exception and to catch and display
        an error message of why the exception occured.
        Syntax: new Exception(message, code, previous)
                try { stmt; } catch(Exception $e) { stmt; } finally { stmt; }
        try consists of the code that can throw exceptions
        catch catches the exception if occured and displays the message of the
        reason of that exception occurence.
    */
    function divide($dividend, $divisor) 
    {
            if ($divisor == 0) {
                throw new Exception("Cannot divide");
            }
            return $dividend / $divisor;
    }

    try {
        echo divide(12,0);
    }
    catch(Exception $e) {
        echo $e->getMessage() . "<br>"; //gets the exception message
        echo $e->getFile() . "<br>"; //gets the path of the exception occuring file
        echo $e->getLine() . "<br>"; //gets the line number where exception occured.
    }
    finally {
        echo "Process finally completed";
    }