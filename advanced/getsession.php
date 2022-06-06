<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessing Session Variables</title>
</head>
<body>
    <?php
        // print_r($_SESSION);
        echo "User is " . $_SESSION['username'] . "<br>";
        echo "User resides in " . $_SESSION['location'] . "<br>";
    ?>
</body>
</html>