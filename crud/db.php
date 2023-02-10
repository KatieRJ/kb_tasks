<?php
$servername = "db";
$username = "capp1";
$password = "katie123";
$dbname = "capp1";

// Creating connection
$conn = new mysqli ($servername, $username, $password, $dbname);

// Checking the connection
if ($conn -> connect_error){
    die("connection failed:".$conn->connect_error);

}
?>