<?php include 'sidebar.php'; ?>
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
$sql1 = "SELECT * FROM teachers";
$result1 = $conn->query($sql1);

// Query the Student table
// $sql2 = "SELECT * FROM Students";
// $result2 = $conn->query($sql2);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>

  <!-- <link rel="stylesheet" href="styles.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="numbers.css">

</head>

<body>
  <section class="home-section">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <!-- <dir class="head" style="display: flex; justify-content: space-between;"> -->
      <h2 style="text-align: center !important; margin-left: 35%">Welcome TO Muhriz InfoTech</h2>
      <a href="login.php">
        <span class="btn btn-danger" style="float: right;" type="button">Logout</span></a>
      <!-- <a href="teachersData.php">
<button class="btn btn-primary" type="button" >Add Teachers</button>
</a>
<a href="studentsData.php">
<button type="button" class="btn btn-primary">Add Students</button>
</a> -->
       <div class="counter_boxes">

        <div class="col-md-3 col-sm-6">
          <div class="counter pink">
            <div class="counter-icon">
              <i class="bx bx-menu"></i>
            </div>
            <h3>Number of Teachers:</h3>
            <?php
            $sql = "SELECT COUNT(*) AS count FROM teachers";
            $result = $conn->query($sql);

            // Get the count of records
            $count = $result->fetch_assoc()["count"];
            echo "<span class='counter-value'> $count</span>";

            ?>
          </div>
              <a href="teachersData.php">
            <br><button type="button" id="for_teachers" class="btn btn-primary">View all Teachers</button>
              </a>
            </div>

             <div class="container">
                <div class="row">
                  <div class="col-md-3 col-sm-6">
                    <div class="counter">
                      <div class="counter-icon">
                        <i class="bx bx-menu"></i>
                      </div>
                      <h3>Number of Students:</h3>
                      <?php
                      $sql = "SELECT COUNT(*) AS count FROM Students";
                      $result = $conn->query($sql);

                      // Get the count of records
                      $count = $result->fetch_assoc()["count"];
                      echo "<span class='counter-value'> $count</span>";


                      ?>
                    </div>
                  </div>
                </div>
                <a href="studentsData.php">
                  <br><button type="button" id="for_students" class="btn btn-primary">View all Students</button>
                  <a>
              </div>
      </div>

  </section>

  <script src="style.js"></script>



</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js">
</script>
<script>
  $(document).ready(function () {
    $('.counter-value').each(function () {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 3500,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now));
        }
      });
    });
  });
</script>

</html>
