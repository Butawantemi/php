<?php
$server = "127.0.0.1";
$username = "root";
$password = "Mp@ng01211";

//Create connection
try {
    $connect = new mysqli($server, $username, $password);
    echo "Connected Successfully";
}catch(mysqli_sql_exception $e){
    echo "" . $e->getMessage() . "";
}

//create database
$sql = "CREATE DATABASE phpdb";
if ($connect->query($sql) == TRUE)
{
    echo "Database created successfully";
}else {
    echo "Error creating database". $connect->error;
}