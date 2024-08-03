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
$sql = "SLECT * FROM MyGuests WHERE firstname = 'Prisca'";
$result = mysqli_query($connect, $sql);

//return selected data
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " -Name: " . $row["firstname"] . " " . $row["lastname"] . " -Email: " . $row["email"]."\n";
        
    }
}else{
    echo "0 results";
}