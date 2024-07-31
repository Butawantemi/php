<?php 
// variable for connection
$server= "localhost";
$username  = "root";
$password = "Mp@ng01211";
$database = "firstdb";

// Create connection
$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}
echo "Connected successfully";