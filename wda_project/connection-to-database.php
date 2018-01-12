<?php

$servername = "localhost";
$username = "root";
$password = "Dwyane Wade 2006";
$database = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
}else{
	die("Connected successfully");
}