<?php
//PHP File Handling
//fopen() function is used to open a file.
$file = fopen("file.txt", "r") or die("Unable to open file!");
echo fread($file, filesize("file.txt"));
fclose($file);


/* //readfile() function is used to read a file and write it to the output buffer.
echo readfile("file.txt"); */