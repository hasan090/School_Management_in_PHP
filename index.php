<?php include 'sidebar.php'; ?>

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
		echo '<section class="home-section"><main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
		<div class="limiter">
					<div class="container-login100">
					
						<div class="wrap-login100"><p style="color:white;font-size: 25px;">Invalid username or password.</p></div></div></div></section>';
						header("refresh:1; url=http://localhost/School_Management_in_Php/login.php");
	}
}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>



	</style>

</head>

<body>
	<section class="home-section">
		<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
				<!--  -->

				<div class="limiter">
					<div class="container-login100">
						<div class="wrap-login100">
							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

								<span class="login100-form-logo">
									<img src="Logo-Muhriz-white.png" alt="Company_Logo" srcset="">
								</span>

								<span class="login100-form-title p-b-34 p-t-27">
									Log in
								</span>

								<div class="wrap-input100 validate-input" data-validate="Enter username">
									<input class="input100" type="text" name="username" placeholder="Username">
									<span class="focus-input100" data-placeholder="&#xf207;"></span>
								</div>

								<div class="wrap-input100 validate-input" data-validate="Enter password">
									<input class="input100" type="password" name="password" placeholder="Password">
									<span class="focus-input100" data-placeholder="&#xf191;"></span>
								</div>



								<div class="container-login100-form-btn">
									<button class="login100-form-btn" value="Submit">
										Login
									</button>
								</div>


							</form>
						</div>
					</div>
				</div>
	</section>


	<!-- <div id="dropDownSelect1"></div> -->

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>