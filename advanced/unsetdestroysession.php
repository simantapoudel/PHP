<?php
    session_start();
    session_unset();
    session_destroy();
    echo "Session variables are cleared out and session is destroyed." . "<br>";
    // session_destroy();
    // echo session_id() . "<br>";
    // print_r($_SESSION);