<?php
    /* 
        array_chunk(array, size) => splits an array in different chunks as per size given
        Example: 
        $numbers  = [12, 23, 45, "Simanta", "Poudel"];
        $chunkedarray = array_chunk($numbers, 3);
        print_r($chunkedarray);

        Output: array([0] => array([0] = 12, [1] = 23, [2] = 45), 
                      [1] => array([0] = "Simanta", [1] = "Poudel"))

        array_change_key_case(array, case) => change case of  key of assoc array if it is an array,
                                              otherwise return false
        Example: 
        print_r(array_change_key_case($desc, CASE_UPPER));

        is_array(variable) => finds whether a variable is an array or not, if yes, returns 1 else nothing
        Example: 
        echo is_array($desc);

        in_array(value, array) => checks if a value exists in an array, if yes, returns 1 else nothing
        Example: 
        echo in_array("Simanta", $desc); 

        array_merge() => merges two or more than two arrays into single one 
        Example:
        $desc = array("name" => "Simanta", "location" => "Lokanthali");
        $desc1 = array("role" => "Developer", "interest" => "Computers");
        $mergedarray = array_merge($desc, $desc1);
        foreach ($mergedarray as $item) {
            echo $item . "<br>";
        }

        array_keys(array, value) => returns the keys of an array and if value is also
                                    given, then it returns the corresponding keys
        Example:
        print_r(array_keys($desc));

        OUTPUT:
        array([0] => name, [1] => location)

        array_key_exists() => returns 1(true) if key exists in an array otherwise nothing
        Example: 
        echo array_key_exists("name", $desc);

        array_shift() => removes the first element and returns value of removed element
                         if array is empty, then it returns null
                         if keys are numeric, then all elements will get new keys, starting
                         from 0 and then increments by 1
        Example: 
            $desc = array(1, 2, 3, 4);
            print_r(array_shift($desc));
            print_r($desc);
        
        array_push() => pushes elements to the end of the array
                        returns the number of elements in the array
        Example: 
        $desc = array(32,45,65);
        array_push($desc, 12,32,34);
        print_r($desc);

        array_pop => removes the last element from an array and returns the 
                     value of the removed element
        
        array_values() => returns all the values from the array and indexes the array numerically.
        array_map(callback fn, array, array1) => runs the callback fn through each element in an array.
        */
    
    // $desc = array("name" => "simanta", "country" => "nepal", "place" => "bhaktapur");

    // function square($n)
    // {
    //     return $n * $n;
    // }

    // $numbers  = [12, 25, 15];
    // $squarednumbers = array_map('square', $numbers);
    // print_r($squarednumbers);

    function salestax($price)
    {
        return ($price * 0.13) + $price;
    }

    $productsprice = [240, 456, 124, 458];
    $finalprice = array_map('salestax', $productsprice);
    print_r($finalprice);
    

    
    

    