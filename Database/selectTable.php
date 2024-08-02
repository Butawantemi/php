<?php
$server = "127.0.0.1";
$username = "root";
$password = "Mp@ng01211";
$database = "phpdb";


$connect = mysqli_connect($server, $username, $password, $database);

if (!$connect) {
    die("Connection failed" . mysqli_connect_error());
}

//sql to select data from table.
$sql = "SELECT * FROM MyGuests";
$result = mysqli_query($connect, $sql);

//return selected data
