<?php
    /* Callback Functions 
        the function which gets passed as an argument to another function
        Callback fn is passed as a string to another function
        Example: 
        itemLength() is a callback fn which is passed to array_map function
        function itemLength($item) 
        {
            return str_word_count($item);
        }
        $numbers = ["Hello", "Simanta Poudel","Einstein's Theory of Relativity","This is Earth"];
        $itemsword = array_map("itemLength", $numbers);
        print_r($itemsword);
        
        PHP 7 allowed anonymous functions to be used as a callback function
        Example: 
        $words = ["Hello", "Simanta Poudel","Einstein's Theory of Relativity","This is Earth"];
        $itemslength = array_map(function($item) { return strlen($item); }, $words);
        print_r($itemslength);

        //User-defined callback functions
        function query($str) 
        {
            return $str . '?';
        }
        function exclaim($str)
        {
            return $str . '!';
        }
        function printFormatted($str, $format)
        {
            echo $format($str) . '<br>'; //calling format callback function
        }
        //passing query and exclaim as callback functions to the printFormatted function
        printFormatted("What is passion", 'query');
        printFormatted("It is the burning flame of desire in the heart", 'exclaim');
    */