<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "Hashtag";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connection_error) {
    die("Connection failed: ". $conn->connect_error);
}


?>