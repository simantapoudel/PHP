<?php
    /*
        Php Filer function:
            Used to validate and sanitize external input 
            Validate => to check whether the data is in proper format
            Sanitize => to remove illegal characters from the input
            filter_var() => this func is used to validate and sanitize
                            needs 2 arguments, first is variable to be 
                            sanitized, second is the type of check to be
                            done on that variable.
            
    */
    //Validating an ip address 
    $ip = "192.165.0.2";

    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address <br>");
    } else {
    echo("$ip is not a valid IP address <br>");
    }

    //Sanitizing and validating an email address
    $email = 'simantapoudel@gmail.com';
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("$email is a valid IP address");
    } 
    else {
        echo("$email is not a valid IP address");
    }

    //Validating an ipv6 address
    $ip1 = "2001:78b3:78a8:08d3:4531:8a2e:0423:7334";

    if (!filter_var($ip1, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo("$ip1 is a valid IPv6 address");
    } else {
    echo("$ip1 is not a valid IPv6 address");
    }

    //Validate url that must contain query string
    $url = "https://www.amazon.com/name?=fname";

    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("$url is a valid URL with a query string");
    } else {
    echo("$url is not a valid URL with a query string");
    }

    //remove characters with ascii value greater than 127
    $text = "<h1>This is EarthÆØÅ!</h1>";
    $filteredtext = filter_var($text, FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_HIGH);
    echo $filteredtext;