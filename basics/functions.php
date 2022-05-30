<?php
    /* 
        Function is a block of statements that can be repeatedly
        used throughtout the program.
        Example:
        function hello(){
        echo "hello world";
        }
        hello();

        
        function take arguments inside parentheses
        example:
        function hellofamily($fname) {
            echo "Hello $fname poudel";
        }
        hellofamily("Shiva");
        hellofamily("Jamuna");
        function login($fname, $age) {
            if($age < 18) {
                echo "<h3>Restricted Content</h3>";
            }
            else {
                echo "<h1>Welcome $fname</h1>";
            }
        }
        login('Sarisna',16);
        login('Sabina', 23);
        
        // Passing arguments by value         
        function passbyvalue($string)
        {
            $string .= "Have a good day!";
            return $string;
        }
        $str = "Good afternoon! ";
        echo passbyvalue($str);

        When function requires int to be passed but gets a string,
        it throws a fatal error.
        Example:
        function multiplyNumbers(int $a, int $b) {
            return $a * $b;
        }
        echo multiplyNumbers(3, "3 days");
        Output: fatal error, since "3 days" is a string while it
        expected int

        Function default arguments value:
            Function will use its default args if not given
            Example:
            function displayAge(int $age = 23) {
                echo "$age";
            }
            displayAge(32);
            displayAge();
            displayAge(43);

            factorial: 
                3! =  3 * 2 * 1
            function factorial($number) {
                if($number === 0) {
                    return 1;
                }
                else {
                    return $number * factorial($number-1);
                }
            }
            echo factorial(5);
            Prime number check:
            2,3,5,7,11
            function primeCheck($number) {
                for($x = 2; $x < $number; $x++) {
                    if($number % $x === 0 ) {
                        return "Not a prime number";
                    }
                }
                return "Prime number";
            }
            echo primeCheck(31);

            OddEven Check Example:

            function oddEven($number) {
                if($number % 2 == 0) {
                    return "Even number";
                }
                else {
                    return "Odd number";
                }
             }
             echo oddEven(23);

             Passing arguments by reference:
             & is added to the function argument to turn it into a 
             reference
             function multiplyFive(&$val) {
                 $val += 5;
             }
             echo multiplyFive(4);

            Fibonacci Sequence Example: 
            f0 = 0 , f1 = 1, 
            fn = f(n-1) + f(n-2)
            0 1 1 2 3 5 8 12

                function fibonacci($count=10) {
                    $a = 0;
                    $b = 1;
                    $num = 2;
                    // $count-=2;
                
                    echo $a . " " . $b . " ";
                    while($num < $count) {
                        $c = $a + $b;
                        $a = $b;
                        $b = $c;
                        echo $c . " ";
                        $num++;
                    }
                }
                fibonacci();

             Lucas Sandesh Sequence: 
                function lucas($count=10) {
                    $a = 5;
                    $b = 20;
                    $num = 2;
                    // $count-=2;
                
                    echo $a . " " . $b . " ";
                    while($num < $count) {
                        $c = $a + $b;
                        if($c % 5 == 0) {
                            $remainder = $c % 5;
                            $quotient = ($c - $remainder) / 5;
                            $c += $quotient;
                        }
                        $a = $b;
                        $b = $c;
                        echo $c . " ";
                        $num++;
                    }
                }
                lucas();   
            //Passing arguments by reference
            function multiplyFive(&$val) {
                 $val += 2;
            }
            $num = 2;
            multiplyFive($num);
            echo $num;

            function passbyref(&$string)
            {
                $string .= "Have a nice cup of coffee!";
            }
            $str = " ";
            passbyref($str);
            echo $str;
            
    */
   
    $fname = 'Simanta';
    $lname = 'Poudel';
    $match = ($fname == $lname) ? "Matched" : "Didn't Match";
    echo $match;
?>


