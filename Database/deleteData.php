<?php
$server = "127.0.0.1";
$username = "root";
$password = "Mp@ng01211";
$database = "phpdb";


$connect = mysqli_connect($server, $username, $password, $database);

if (!$connect) {
    die("Connection failed" . mysqli_connect_error());
}

//delete data
$sql = "DELETE FROM MyGuests WHERE id = 2";

if (mysqli_query($connect, $sql) == TRUE) {
    echo "Record was deleted successfully";
}else{
    echo "Error deleting record:" . mysqli_error($connect);
}