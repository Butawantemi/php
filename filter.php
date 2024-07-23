<?php
//filter url
$url = "https://www.google.com";
if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false){
    echo "URL is valid";
}



/* //filter email
$email = "j@gmail.com";
if (!filter_var($email, FILTER_SANITIZE_EMAIL) == false){
    echo "Email is valid";
}else{
    echo "Email is invalid";
} */