<?php
    /*
        JSON => JS Object Notation
        JSON is a text-based format used for storing and exchanging data.
        Built-in functions to handle JSON
            json_encode() => used to encode a value to json format  
            json_decode() => used to decode json obj to php obj or assoc array
            if second param set to true, it turns into an array
            Example: 
            $desc = array(
                'name' => 'HazeSoft',
                'location' => 'Shankhamul',
                'type' => 'Software Company'
            );
            echo json_encode($desc);

            $jsonobj = '{
                "company": "HazeSoft",
                "location": "Sankhamul",
                "type": "Software Company"
            }';

            $obj = json_decode($jsonobj); // if 2nd arg not set to true, $obj is an obj
            var_dump($obj);
            echo $obj->company . "<br>";
            echo $obj->location;
            echo $obj->type;

            $obj = json_decode($jsonobj, true); //if 2nd arg set to true, $obj is an array
            var_dump($obj);
            echo $obj['company'] . '<br>';
            echo $obj['location'] . '<br>';
            foreach ($obj as $key => $value) {
                echo $key . " = " . $value . "<br>";
            }
    */    