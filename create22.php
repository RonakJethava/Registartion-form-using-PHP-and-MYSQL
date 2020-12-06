<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user-registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE tbl_member (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
password VARCHAR(255) NOT NULL,

)";






if ($conn->query($sql) === TRUE) {
  echo "Table tbl_member created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>