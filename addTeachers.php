<?php
if (isset($_POST['save'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $mobileNumber = $_POST['mobileNumber'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];


  $sql = "INSERT INTO teachers(firstname, lastname ,email,age,mobileNumber,city,address,gender) VALUES ('$firstname','$lastname','$email','$age','$mobileNumber','$city','$address','$gender')";

    if (mysqli_query($conn, $sql)) {
       echo "<h6 style='text-align:center';>Record saved successfully.</h6>";
   header("refresh:1; url=http://localhost/School_Management_in_Php/teachersData.php");
   } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>


