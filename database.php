<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_php_challenge";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS db_php_challenge";
if ($conn->query($sql) === TRUE) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql1 = "CREATE TABLE IF NOT EXISTS tbl_contacts (
                      nId int(11) AUTO_INCREMENT,
                      cName varchar(255) NOT NULL,
                      cNumber varchar(9) NOT NULL,                     
                      PRIMARY KEY  (nId))";
    if($conn->query($sql1) === TRUE) {
        echo "Database and Table Online";
    }else{
        echo "Database and Table Offline" . $conn->error;
    }
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();