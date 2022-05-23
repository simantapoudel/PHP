<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
                $name = $_REQUEST['fname'];
                $password = $_REQUEST['password'];
                $error="";

                // echo (empty($name)) ? 'Name is empty' : $name;
                echo $name ?? 'Name is empty';
                // echo (empty($password)) ? 'Password not entered' : $password; 
                // echo (empty($password)) ? 'Password not entered' : $password; 
                // var_dump($name);

            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>Form example</h2>
    <form method="GET" action="">
        Name: <input type="text" name="fname">
        <br>
        Password: <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>
<?php
    /* SuperGlobals:
        $GLOBAL[index] => stores all the variables defined in global scope
        Example: 
            $fname = 'simanta';
            $lname = 'poudel';
 
            function addition() {
            $GLOBALS['name'] = $GLOBALS['fname'] . " " . $GLOBALS['lname'];
            }
 
            addition();
            echo $name;
        $_SERVER => stores info about different things such as script locations,
                    headers, paths etc.
        echo $_SERVER['PHP_SELF']; //Returns name of currently executing script
        echo "<br>";
        echo $_SERVER['SERVER_NAME']; //Returns the name of the server
        echo "<br>";
        echo $_SERVER['HTTP_HOST']; //Returns the port number
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        echo "<br>";
        echo $_SERVER['REQUEST_METHOD'];
        echo "<br>";
        echo $_SERVER['HTTP_ACCEPT'];
        echo "<br>";
    
    // if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $name = $_REQUEST['fname'];
    //     if(empty($name)) {
    //         echo "Name empty";
    //     }
    //     else {
    //         echo $name;
    //     }
    // }
?>
*/