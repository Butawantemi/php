<?php
$server = "127.0.0.1";
$username = "root";
$password = "Mp@ng01211";
$database = "phpdb";


$connect = mysqli_connect($server, $username, $password, $database);

if (!$connect) {
    die("Connection failed" . mysqli_connect_error());
}

//filter data
$sql = "SLECT * FROOM MyGuests WHERE firstname = 'Prisca'";
$result = mysqli_query($connect, $sql);

//return selected data
