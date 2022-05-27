<?php
    /* Session is a  way to store info to be used across multiple pages
       Session is not stored on the user's computer but on the server.
       Session variables stores user info like username, color preference,
       etc. 
       By default, session variables last until browser is closed.

       session_start() => starts the session
       $_SESSION => global variable that is used to set the session variables

    */
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Practice</title>
</head>
<body>
    <?php
        //Setting session variables
        $_SESSION['username'] = 'Simanta';
        $_SESSION['location'] = 'Nepal';
    ?>
</body>
</html>
