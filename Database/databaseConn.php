<?php 
// variable for connection
$server= "127.0.0.1";
$username  = "root";
$password = "Mp@ng01211";
$database = "firstdb";

// Create connection
$conn = new mysqli($server, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    // die() function is used to terminate the script
    die("Connection failed:" . $conn->connect_error);
}
echo "Connected successfully";