<?php
    /* File handling in php
        readfile() => read the contents of the file and
                      returns the byte read on success
        fopen() => opens the file in different modes
                   and is better than readfile() as it
                   provides many different options
        fread() => this reads from an open file. exactly expects 2 arguments
                   , first arg is name of file and second arg reads the maxm 
                   number of bytes to read.
        fclose() => closes the opened file.

        Example: 
        $file = fopen('web.txt', 'r') or die('File not found');
        echo fread($file, filesize('web.txt'));
        fclose($file);

        fgets() => read single line of the file
        $file = fopen('web.txt', 'r') or die('File not found');
        echo fgets($file);
        fclose($file);

        fgetc() => read single character of the file

        Examples: 

        $file = fopen('web.txt', 'r') or die('File not found');
        echo fgetc($file);
        fclose($file);

         $file = fopen('web.txt', 'r') or die("Unable to open the file");
        while(!(feof($file))) {
            echo fgetc($file);
        }
        fclose($file);

        fopen() also creates a new file if the file doesn't exist in w 
        or a mode
        fwrite() => writes to the file, first arg is name of file and
                    second is the string to be written or appended to
                    the file.
                    If 'w' mode is chosen, then it erases the contents
                    of the file it file already exists, and then writes
                    to the file.
                    If 'a' append mode is chosen, then it doesn't erase
                    anything but just adds content after the last word
                    of the previous contents of the file.
    */
    $file = fopen('web.txt', 'a') or die('Error occured');
    $text = 'Added content using a mode';
    fwrite($file, $text);
    fclose($file);

   
?>