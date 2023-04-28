<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHP</title>
  </head>
  <body>
    <?php include 'sidebar.php';?>
<section class="home-section">
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<h2 style=" margin-top:0%" class="p1">Welcome to Muhriz InfoTech Dashboard</h2>

<?php 
		$username = $password = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  $username = test_input($_POST["username"]);
		  $password = test_input($_POST["password"]);

		  // Check if the username and password are correct
		  if ($username == "u" && $password == "p") {
		    // Redirect to user file
		    header("Location: admin.php");
		    exit();
		  } elseif ($username == "admin" && $password == "adminpassword") {
		    // Redirect to admin file
		    header("Location: admin.php");
		    exit();
		  } else {
		    // Display an error message if the username or password is incorrect
		    echo "Invalid username or password.";
		  }
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
	?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  <label for="username">Username:</label>
	  <input type="text" name="username" id="username">

	  <br><br>

	  <label for="password">Password:</label>
	  <input type="password" name="password" id="password">

	  <br><br>

	  <input type="submit" class="btn btn-primary" value="Submit">
	</form>

</section>
</body>

</html>
