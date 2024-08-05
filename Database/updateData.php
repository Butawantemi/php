<?php
$server = "127.0.0.1";
$username = "root";
$password = "Mp@ng01211";
$database = "phpdb";


$connect = mysqli_connect($server, $username, $password, $database);

if (!$connect) {
    die("Connection failed" . mysqli_connect_error());
}

//update data
$sql = "UPDATE MyGuests SET lastname  = 'Paul' WHERE id = 1";

if (mysqli_query($connect, $sql) == TRUE){
    echo "Record was updated successfully";
}else {
    echo "Error updating record:" . mysqli_error($connect);
}