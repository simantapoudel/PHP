<?php
    /* 
        Folder Manipulation in PHP

        is_dir($file) => checks whether the file is a directory or not. The result of is_dir()
                         is cached, so use clearstatcache() to clear the cache
        mkdir() => creates a directory
        rmdir() => removes a directory
        
    */


    $file = "./folder";
    if (!is_dir($file)) {
        mkdir('folder');
        echo "Directory Created";
    } else {
        echo "Folder already created";
    }
    // rmdir("./folder");
    clearstatcache();

