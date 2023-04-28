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

if (isset($_POST['save'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $class = $_POST['class'];
    $age = $_POST['age'];
    $mobileNumber = $_POST['mobileNumber'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    // $data = $_POST['data'];

    $sql = "INSERT INTO Students(firstname, lastname ,class,age,mobileNumber,city,address,gender) VALUES ('$fname','$lname','$class','$age',
    '$mobileNumber','$city','$address','$gender')";

    if (mysqli_query($conn, $sql)) {
        echo "<section class='home-section'><main class='col-md-9 ms-sm-auto col-lg-10 px-md-4'><h6 style='text-align:center';>Record saved successfully.</h6></section";
        header("refresh:1; url=http://localhost/School_Management_in_Php/admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Record Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<section class="home-section">
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<h2 style=" margin-top:0%" class="p1">Welcome Admin</h2>
<h2 style=" margin-top:0%" class="p1">Add Students</h2>
    <form class="teachersForm" method="post">
        First Name
        <input type="text" name="firstname" required><br><br>
        <label>Last Name</label>
        <input type="text" name="lastname" required><br><br>
        <label>Class</label>
        <input type="text" name="class" required><br><br>
        <label>Age</label>
        <input type="number" name="age" required><br><br>
        <label>Mobile Number</label>
        <input type="number" name="mobileNumber" required><br><br>
        <label>City</label>
        <input type="text" name="city" required><br><br>
        <label>Address</label>
        <input type="text" name="address" required><br><br>
        <label>Gender</label>
        <input type="text" name="gender" required><br><br>

        <button type="submit" class="btn btn-primary" name="save">Save Record</button>
        
      </form>
      <br>
      <a href="admin.php">
      <button type="back" class="btn btn-danger" name="back">Back</button></a>

    <hr>
</section>
    <!-- <form method="post" action="Showdata.php">
        <label>Select Date:</label>
        <input type="date" name="search_date" required>
        <button type="submit" name="search">Search Record</button>
    </form> -->
</body>
</html>
