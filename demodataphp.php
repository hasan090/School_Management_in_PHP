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

// Query the first table
$sql1 = "SELECT * FROM teachers";
$result1 = $conn->query($sql1);

// Query the second table
$sql2 = "SELECT * FROM Students";
$result2 = $conn->query($sql2);
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Database Tables</title>
</head>
<body>

  <h1>Table 1</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
    </tr>
    <?php
    // Output the results of the first query
    if ($result1->num_rows > 0) {
      while($row = $result1->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "No results found.";
    }
    ?>
  </table>

  <h1>Table 2</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Phone</th>
      <th>Address</th>
    </tr>
    <?php
    // Output the results of the second query
    if ($result2->num_rows > 0) {
      while($row = $result2->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "No results found.";
    }
    ?>
  </table>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>

