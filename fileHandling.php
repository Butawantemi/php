<?php
//PHP File Handling

//PHP Create File - fopen()
/*//file uploading
 $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
} */



//fopen("word.text", "w");
//PHP Write to File - fwrite()
/* $file = fopen("newFile.text", "a") or die("Unable to open file!");
$text  = "Japhet Butawantemi!\n";
fwrite($file, $text);
$text = "Japhet Paul!\n";
fwrite($file, $text);
fclose($file); */


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