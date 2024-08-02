<?php
$server = "127.0.0.1";
$username = "root";
$password = "Mp@ng01211";
$database = "phpdb";


$connect = mysqli_connect($server, $username, $password, $database);

if (!$connect) {
    die("Connection failed" . mysqli_connect_error());
}

//prepare and bind
$stmt = $connect->prepare("INSERT INTO MyGuests(firstname, lastname, email) VALUES(?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

//set parameters and execute
$firstname = "Jackson";
$lastname = "Buta";
$email = "example@gmail.com";
$stmt->execute();

$firstname = "Prisca";
$lastname = "Mlali";
$email = "prisca@gmail.com";
$stmt->execute();

echo "New records was created successfully";

$stmt->close();