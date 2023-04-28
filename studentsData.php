<?php include 'sidebar.php';?>
<?php
$host = "localhost";
$username = "root";
$password = "has123";
$dbname = "muhriz";
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql2 = "SELECT * FROM Students";
$result2 = $conn->query($sql2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Students Data</title>
</head>
<body>
  <section class="home-section">
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

<h1 class="students_form" style="text-align:center">Total Students</h1>
<!-- <div style="display:flex; " class="head_title">
      <h6  class="id">id</h6>
      <h6 style="margin-left: 1%;" class="fname">First Name</h6>
      <h6 style="margin-left: 3%;" class="lname">Last Name</h6>
      <h6 style="margin-left: 8%;" class="email_head">Email</h6>
      <h6 style="margin-left: 13%;" class="age_head">Age</h6>
      <h6 style="margin-left: 3%;" class="city_head">city</h6>
      <h6 style="margin-left: 4%;" class="mobile_head">Mobile Number</h6>
      <h6 style="margin-left: 3%;" class="address_head">Address</h6>
      <h6 style="margin-left: 6%;" class="gender_head">Gender</h6>
      <h6 style="margin-left: 9%;" class="action_head">Action</h6>
      </div> -->
     
<table class="table table-striped table-sm" style="width:100%; border-collapse: collapse;">
  <thead>

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
      <th scope="col">Action</th>




    </tr>
  </thead>
  <tbody>
  <?php
if ($result2->num_rows > 0) {
while($row = $result2->fetch_assoc()) {

            echo "<tr>";
            echo "<td>" . $row["id"] ."&emsp;&emsp;&emsp;</td>";
            echo "<td>" . $row["firstname"] . "&emsp;&emsp;&emsp;</td>";
            echo "<td>" . $row["lastname"] . "&emsp;&emsp;&emsp;</td>";
            echo "<td>" . $row["class"] . "</td>";
            echo "<td>" . $row["age"] . "&emsp;&emsp;&emsp;</td>";
            echo "<td>" . $row["mobileNumber"] . "&emsp;&emsp;&emsp;</td>";
            echo "<td>" . $row["city"] . "&emsp;</td>";
            echo "<td>" . $row["address"] . "&emsp;&emsp;&emsp;</td>";
            echo "<td>" . $row["gender"] . "&emsp;</td>";
            echo"<td>"."<a class='bx bxs-edit' href=''></a>"."</td>";
            echo"<td>"."<a class='bx bxs-trash-alt' href=''></a>". "</td>";

            echo "</tr>";
          }
        } else {
          echo "No results found.";
        }
        ?>
  </tbody>
  
</table>
    </section>   
</body>
</html>
<?php
$conn->close();
?>