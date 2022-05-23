<?php
    /*
        Looping statements:
        for loop example: 
        syntax:
        for(initialization; condition; increment/decrement) {
            statement;
        }

        for($x = 0;$x <= 10; $x++) {
        echo $x;
        }
        
        while loop example: 
        $x = 0;
        while($x < 10) {
            echo $x;
            $x++;
        }
        do..while loop example:
            $x = 0;
            do {
                echo $x;
                $x++;
            } while($x < 11);
        foreach loop example:
            $letters = ['A','B','C','D','E'];
            foreach($letters as $letter) {
                echo "<h1>$letter</h1><br>";
            }
            $person = ['name' => 'ram', 'address' => 'ayodhya'];
            foreach($person as $x => $val) {
                echo "$x = $val";
            }

        break/continue example:
            break stops the execution when a particular condition occurs
            in example: when it encountered 4, execution stops and only 
            returns value upto 3
            for($x = 0;$x < 10;$x++) {
            if($x === 4) {
                break;
            }
            echo "The number is $x<br>";

            continue continues the execution after skipping that particular
            condition
            in example: when it encountered 4, execution stopped for that 
            condition and then resumed again and returned all other values
            except 4
            for($x = 0;$x < 10;$x++) {
            if($x === 4) {
                continue;
            }
            echo "The number is $x<br>";
    }
    }
    */
    
    
?>