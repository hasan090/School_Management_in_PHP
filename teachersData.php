<?php include 'sidebar.php'; ?>
<?php include 'database.php'; ?>
<?php include 'addTeachers.php'; ?>
<?php include 'update_teachers.php'; ?>
<?php include 'delete_teachers.php'; ?>




<?php
$sql1 = "SELECT * FROM teachers";
$result1 = $conn->query($sql1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Teachers Data</title>
</head>

<body>
  <section class="home-section">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <h1 class="teachers_form" style="margin-left: 50%;">Teachers Data</h1>
      <button type="button" href="addTeachers.php" data-toggle="modal" data-target='#add_teachers'class="btn btn-primary">Add Teachers</button>

      <div style="max-height: 100%;" class="teachers">
      <form action="" method="post">
        <table class="table table-striped table-sm" style="width:100%;">
          <thead>
            <tr>
              <th scope="col">id</th>&emsp14;
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Email</th>
              <th scope="col">Age</th>
              <th scope="col">city</th>
              <th scope="col">Mobile Number</th>
              <th scope="col">Address</th>
              <th scope="col">Gender</th>
              <th scope="col">Action</th>


            </tr>
          </thead>
          
          <tbody>
            <?php
            if ($result1->num_rows > 0) {
              while ($row = $result1->fetch_assoc()) {
                ?>
                 <tr>  
                 <td> <?php echo   $row["id"]. "&emsp;" ?></td>
                 <td> <?php echo   $row["firstname"] . "&emsp;"?></td>
                 <td> <?php echo   $row["lastname"] . "&emsp;"?></td>
                 <td> <?php echo   $row["email"] . "&emsp;"?></td>
                 <td> <?php echo   $row["age"] . "&ensp;"?></td>
                 <td> <?php echo   $row["city"] . "&ensp;"?></td>
                 <td> <?php echo   $row["mobileNumber"] . "&emsp;&emsp;&emsp;&emsp;"?></td>
                
                <td> <?php echo   $row["address"] . "&emsp;&emsp;"?></td>
                <td> <?php echo   $row["gender"] ?> </td>

                 <td> <a class='bx bxs-edit'  style='  margin-left: 20%;' data-toggle='modal' data-target='#update' href=''></a></td>
                <td> <?php echo "<a class='bx bxs-trash' href='delete_teachers.php?deleteid=" . $row["id"] . "' </a> "?></td>
                <!-- //echo"<td>"."<a type='button' style='  margin-left: -60%;' class='bx bxs-trash-alt' href='' data-toggle='modal' data-target='#exampleModalCenter'></a>". "</td>"; -->
                <!-- //echo "<td><a href='delete_teachers.php?deleteid=" . $row["id"] . "' name='delete' class='bx bxs-trash-alt'>Delete</a></td>"; -->
                <!-- <td><a <?php  echo'deleteid=" . $row["id"]"' ?> data-toggle='modal' data-target='#exampleModalCenter' name='delete' class='bx bxs-trash-alt'></a></td> -->
                <td><a class='bx bxs-trash '  style='  margin-left: 20%;' data-toggle='modal' data-target='#exampleModalCenter' href=''></a></td>

               
                <!-- //echo "<td><a href='delete_teachers.php?deleteid=" . $row["id"] . "' name='delete' class='bx bxs-trash-alt'></a></td>"; -->
                <!-- //echo '<td><a  href="delete_teachers.php?deleteid=' . $row["id"] . '" class="bx bxs-trash-alt" onclick="confirmDelete(this)"></a></td>'; -->
                </tr>
                <?php
              }
            } else {
              echo "No results found.";
            }
            ?>

          </tbody>
        </table>
        </form>
      </div>
  </section>

    <!-- Modal 1-->
  <div class="modal fade" id="add_teachers" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-left:-40%;margin-top:22% ;width:200%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Teachers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">

          <form method="post" action="">

            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <label>First Name </label>
                  <input type="text" name="firstname" class="form-control" required>
                </div>
                <div class="col-md-6">
                  <label>Last Name</label>
                  <input type="text" name="lastname" class="form-control" required>
                </div>
                <div class="col-md-6">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" required>
                </div>
                <div class="col-md-2">
                  <label>Age</label>
                  <input type="number" name="age" class="form-control"
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                    maxlength="2" required>

                </div>
                <div class="col-md-6">
                  <label>Mobile Number</label>
                  <input type="number" name="mobileNumber" class="form-control"
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                    maxlength="11" required>

                </div>
                <div class="col-md-6">
                  <label>City</label>
                  <input type="text" name="city" class="form-control" required>
                </div>
                <div class="col-md-6">
                  <label>Address</label>
                  <textarea class="form-control"  name="address"rows="2" required></textarea>
                </div>
                <div class="col-md-6">
                  <label>Gender</label>
                  <div class="input_box">

                    <div class="" style="display:flex; margin-top:8%">

                      <div class="male">
                        <input type="radio" class="radio_buttons" name="gender" value="male" onclick="checkOne('male')">
                        <label class="radio_button" for="male">Male</label>
                      </div>
                      <div class="female" style="margin-left: 10%;">
                        <input type="radio" class="radio_buttons" name="gender" value="female"
                          onclick="checkOne('female')">
                        <label class="radio_button" for="female">Female</label>
                      </div>
                      <div class="others" style="margin-left: 10%;">
                        <input type="radio" class="radio_buttons" name="gender" value="others"
                          onclick="checkOne('others')">
                        <label class="radio_button" for="others">Others</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary" name="save">Save Record</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          </form>
        </div>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
  integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"
  integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                    console.log(tr);
                }).get();


                $('#delete_id').val(data[0]);

            });
        });
    </script>
  
</body>

</html>

<style>
  #myModal .modal-dialog {
    -webkit-transform: translate(0, -50%);
    -o-transform: translate(0, -50%);
    transform: translate(0, -50%);
    top: 50%;
    margin: 0 auto;
  }

  #hasn {
    width: 200%;
    margin-left: -50%;


  }

  #label_style {
    margin-left: 24%;
  }
</style>
