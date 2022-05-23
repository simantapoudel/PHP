<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
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