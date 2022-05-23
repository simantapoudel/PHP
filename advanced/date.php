<?php
/*
    date() => is used to access date
        Y => returns year in 4 digits
        y => returns year in 2 digits
        m => returns month in digits (01 to 12)
        M => returns name of month in word form eg: May
        n => numeric representation of month without leading zeros 1-12
        d => returns days in digits  (01 to 31)
        D => returns name of day in short word format eg: Fri
        l => returns the name of day of the week eg: Friday
    echo "Today is " . date("y/M/D") . " " . date('l');

    checkdate(int $month, int $day, int $year): bool 
    It checks the validity of the date format passed to it.
*/
var_dump(checkdate(2,3,32768));
echo date('n');
    
    
?>
