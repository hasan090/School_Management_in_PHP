<?php 

$servername = "localhost";
$username = "root";
$password = "has123";
$dbname = "muhriz";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS Students (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
class VARCHAR(50),
age INT(50),
mobileNumber INT(50),
city VARCHAR(50),
address VARCHAR(50),
gender VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Students created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();










?>