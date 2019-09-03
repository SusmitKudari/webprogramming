<?php
$servername = "localhost";
$username = "ladiesin_b1";
$password = "b1@2019";
$dbname = "ladiesin_batch1";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE newspost (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
title VARCHAR(255) NOT NULL,
comment VARCHAR(255) NOT NULL,
img longblob,
email_contact VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table newspost created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
