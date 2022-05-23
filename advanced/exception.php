<?php

    function divide($dividend, $divisor) 
    {
        try {
            if ($divisor == 0) {
                throw new Exception("DivisionByZero");
            }
            return $dividend / $divisor;
        }
        catch(Exception $e) {
            echo "Cannot be divisible by zero. Try other numbers";
        }
        finally {
            echo "Any number divisible by zero will throw error";
        }
    }
    echo divide(23,12);