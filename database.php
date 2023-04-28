<?php
// Create connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "has123";
$dbname = "muhriz";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Query the Teacher table


// Query the Student table
// $sql2 = "SELECT * FROM Students";
// $result2 = $conn->query($sql2);
?>