<?php
$server = "127.0.0.1";
$username = "root";
$password = "Mp@ng01211";
$database = "phpdb";


$connect = mysqli_connect($server, $username, $password, $database);

if (!$connect) {
    die("Connection failed" . mysqli_connect_error());
}

//sql to insert multiple data to table.
$sql = "INSERT INTO MyGuests(firstname, lastname, email)
VALUES('Jackson', 'Buta', 'jackbuta@gmail.com')";

$sql = "INSERT INTO MyGuests(firstname, lastname, email)
VALUES('Jackline', 'Paul', 'jacklinep@gmail.com')";

$sql = "INSERT INTO MyGuests(firstname, lastname, email)
VALUES('Josephat', 'Wante', 'josebuta@gmail.com')";