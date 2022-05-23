<?php
    /* 
        is_int() checks whether variable is an integer or not and returns a bool value
        Example: 
        output is bool(false) as 12.34 is not an integer
        $x = 12.34;
        var_dump(is_int($x));

        is_float() checks whether variable is a float or not and returns a bool value
        Example: 
        output is bool(true) as 12.34 is a float.
        $x = 12.34;
        var_dump(is_float($x));

        is_numeric() checks whether variable is a numeric or not and returns a bool value
        Example: 
        output is bool(true) as 12.34 is numeric.
        $x = 12.34;
        var_dump(is_numeric($x));
        output is bool(false) as "Hello" is not numeric
        $x = "Hello";
        var_dump(is_numeric($x));

        (int), (integer), intval() converts string or float to integer
        Example: 
         output is 12234
         $x = 12234.9892389;
         $int_cast = (int)$x;
         echo $int_cast;
         echo "<br>";
    
         output is 12321
         $y = "12321.123";
         $int_casting = intval($y);
         echo $int_casting;
    */

    
?>