<?php   
    /*
        Cookie is used to identify the user. It is a small file
        that server embeds on the user's computer. Each time the 
        same computer requests a page with a browser, it sends the 
        cookies too. 

        Cookie creating method => by setcookie() function

        setcookie(name, value, expire, path, domain, secure, htpponly);
        only param name is required, others are optional.
        isset() is used to check whether cookie is set or not
        global variable $_COOKIE is used to access the name and value
        of the cookie.
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

        if (!isset($_COOKIE[$cookie_name])) {
            echo "The cookie " . $cookie_name . " is not set";
        } else {
            echo "The cookie " . $cookie_name . " is set <br>";
            echo "The value of the cookie is " . $_COOKIE[$cookie_name] . ".";
        }

        Delete a cookie => delete a cookie by using expiration date in 
        the past
    */
    $cookie_name = "user";
    $cookie_value = "simanta";
    setcookie($cookie_name, $cookie_value , time() + (86400 * 30), "/");
    // setcookie($cookie_name, $cookie_value, time() - 3600, "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
        if (!isset($_COOKIE[$cookie_name])) {
            echo "The cookie " . $cookie_name . " is not set";
        } else {
            echo "The cookie " . $cookie_name . " is set <br>";
            echo "The value of the cookie is " . $_COOKIE[$cookie_name] . ".";
        }
        if (count($_COOKIE) > 0) {
            echo "Cookies are enabled.";
        } else {
            echo "Cookies are disabled.";
        }
        var_dump($_COOKIE);
        // echo "Cookie deleted";
    ?>
</body>
</html>    