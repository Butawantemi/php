<?php
$server = "127.0.0.1";
$username = "root";
$password = "Mp@ng01211";
$database = "phpdb";


$connect = mysqli_connect($server, $username, $password, $database);

if (!$connect) {
    die("Connection failed" . mysqli_connect_error());
}

//order by
$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY firstname";
$result = mysqli_query($connect, $sql);

//return selected data
if (mysqli_num_rows($result) > 0) {
    while
}