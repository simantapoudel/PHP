<?php
    /* 
        Getting the time
        H - 24 hour format of an hour (00 - 23)
        h - 12 hour format of an hour (01-12)
        i - Minutes with leading zeros (00 to 59)
        s - Seconds with leading zeros (00 to 59)
        a - lowercase am or pm
        Example: echo date("Y-m-d h:i:sa");

        Creating a date and time with mktime()
        mktime(hour, minute, second, month, day, year)

        $d = mktime(13,47,32,04,20,2022);
        echo "The created date is " . date("Y-m-d h:i:sa", $d);
        strtotime(time, now);
        Creating date from human readable string: 
            $d = strtotime("2:34pm 20 May 2020");
            $d = strtotime("Next Friday");
            $d = strtotime("+2months");
            $d = strtotime("+2years");
            echo "The created date is " . date("Y-m-d h:i:sa", $d);
            Output: The created date is 2020-05-20 02:34:00pm.

            Example: Printing all 12 months of the year
            for($i = 1; $i <= 12; $i++) {
                $months[] = date('M', strtotime( date("Y-m-01"). " -$i months"));
            }
            foreach($months as $month) {
                echo $month . "<br>";
            }

            Setting default timezone function: 
                date_default_timezone_set();
                example: default_timezone_set('Asia/Kathmandu');
            Getting default timezone function:
                date_default_timezone_get();
    */
    date_default_timezone_set('Asia/Kathmandu');
    $bday = strtotime("May 18");
    // echo date('d', $bday);
    echo $bday . ' ';
    echo $bday - time();
    $daysRemaining = ceil(($bday -time())/60/60/24);
    // echo "Days remaining until the birthday is " . $daysRemaining;

    


?>
