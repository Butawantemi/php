<?php
//PHP File Handling
//PHP Create File - fopen()
//fopen("word.text", "w");
//PHP Write to File - fwrite()
$file = fopen("newFile.text", "w") or die("Unable to open file!");
$text  = "Hello World!";
fwrite($file, $text);
$text = "Hello World Again!";
fwrite($file, $text);
fclose($file);


/* //fopen() function is used to open a file.
//read each single character from file
$file = fopen("file.txt", "r") or die("Unable to open file!");
while(!feof($file)) {
    echo fgetc($file);
}
fclose($file);
 */

/* $file = fopen("file.txt", "r") or die("Unable to open file!");
//echo fread($file, filesize("file.txt"));
//read single line
//echo "\n" . fgets($file);
// Output one line until end-of-file
while(!feof($file)){
    echo fgets($file) ."\n";
}
fclose($file); */


/* //readfile() function is used to read a file and write it to the output buffer.
echo readfile("file.txt"); */