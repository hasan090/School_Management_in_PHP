<?php 
$servername = "localhost";
$username = "root";
$password = "has123";
$dbname = "muhriz";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
</head>
<body>

<div class="row">
  <div class="column">
    <table>
      <tr>
          <th scope="col">id</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Age</th>
          <th scope="col">Mobile Number</th>
          <th scope="col">city</th>
          <th scope="col">Address</th>
          <th scope="col">Gender</th>
      </tr>
      <tbody>
      <?php
$sql = "SELECT * FROM teachers";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
?>
<tr>
<td><?= $row['id'] ?></td>
                <td><?= $row['firstname'] ?></td>
                <td><?= $row['lastname'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['age'] ?></td> 
                <td><?= $row['mobileNumber'] ?></td> 
                <td><?= $row['city'] ?></td> 
                <td><?= $row['address'] ?></td> 
                <td><?= $row['gender'] ?></td 
            </tr>
      </tbody>
      <?php 
            }
        } else {
            echo "No found data for Teachers ";
        }
    $conn->close();
            ?>
    </table>
  </div>
  <div class="column">
    <table>
    <tr >
          <th scope="col">id</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Class</th>
          <th scope="col">Age</th>
          <th scope="col">Mobile Number</th>
          <th scope="col">city</th>
          <th scope="col">Address</th>
          <th scope="col">Gender</th>


        </tr>
        <tbody>
      <?php
$sql = "SELECT * FROM Students";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
?>
<tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['firstname'] ?></td>
                <td><?= $row['lastname'] ?></td>
                <td><?= $row['class'] ?></td>
                <td><?= $row['age'] ?></td> 
                <td><?= $row['mobileNumber'] ?></td> 
                <td><?= $row['city'] ?></td> 
                <td><?= $row['address'] ?></td> 
                <td><?= $row['gender'] ?></td> 


            </tr>
      </tbody>
      <?php 
            }
        } else {
            echo "No found data for Students ";
        }
    $conn->close();
            ?>
    </table>
  </div>
</div>

</body>
</html>
