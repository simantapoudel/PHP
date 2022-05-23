<?php 
    /* 
        Arrays in php:
            Indexed Array => Array with numeric index
            Example: 
            $users = array('Simanta', 'Sandesh', 'Jeevan');
            foreach($users as $user) {
                echo "$user<br>";
            }
            $arrlength = count($users);
            for($x = 0; $x < $arrlength; $x++) {
                echo "$users[$x] <br>";
            }

            Associative Array => Array with key value pair
            Example:
            $userdesc = array('name' => 'simanta', 'role' => 'developer');
            $arrlength = count($userdesc);
            foreach($userdesc as $x => $val) {
                echo 'value is ' . $val . '<br>';
            }

            Multidimensional Array => Array containing other arrays

            count() => returns the number of elements in an array
            count() example: 
            $users = array('Simanta', 'Sandesh', 'Jeevan');
            echo count($users);
    */


    
    // Multidimensional Array

    $new_array =[];
    $numbers = [1,2,3,[4,5,6,7]];
    $arrlength = count($numbers);
    for($x = 0; $x < $arrlength; $x++) {
        if(is_array($numbers[$x])) {
            for($y = 0; $y < count($numbers[$x]); $y++) {
                $new_array[] = $numbers[$x][$y];
            } 
        }
        else{
            $new_array[] = $numbers[$x];
        }
    }

    foreach($new_array as $val) {
        echo "$val";
    }

    // Sorting Arrays => Arrays can be sorted alphabetically
    // numerically ascending or descending 
    // sorting functions: sort(), rsort(), asort(), ksort(),arsort(),krsort()
    // $numbers = [1,2,5,4,7,3];
    // rsort($numbers);
    // foreach($numbers as $number) {
    //     echo $number;
    // }
    
    // $users = ['name'=> 'simanta', 'role' => 'developer'];
    // krsort($users);
    // foreach($users as $key => $val) {
    //     echo "$key " . " = " . "$val" . " ";
    // }
    
    
?>