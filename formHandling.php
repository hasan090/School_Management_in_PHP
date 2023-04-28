<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>

	<h2>Login Form</h2>

	<?php 
		// define variables and set to empty values
		$username = $password = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  $username = test_input($_POST["username"]);
		  $password = test_input($_POST["password"]);

		  // Check if the username and password are correct
		  if ($username == "user" && $password == "password") {
		    // Redirect to user file
		    header("Location: user.php");
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

	  <input type="submit" value="Submit">
	</form>

</body>
</html>
