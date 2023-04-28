<?php include 'database.php'; ?>


<?php
$sql1 = "SELECT * FROM teachers";
$result1 = $conn->query($sql1);
?>
<?php 

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM student WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:index.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}



?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
                echo "<tr>";
                echo "<td>" . $row["id"] . "&emsp;</td>";
                echo "<td>" . $row["firstname"] . "&emsp;</td>";
                echo "<td>" . $row["lastname"] . "&emsp;</td>";
                echo "<td>" . $row["email"] . "&emsp;</td>";
                echo "<td>" . $row["age"] . "&ensp;</td>";
                echo "<td>" . $row["city"] . "&ensp;</td>";
                echo "<td>" . $row["mobileNumber"] . "&emsp;&emsp;&emsp;&emsp;</td>";
                echo "<td>" . $row["address"] . "&emsp;&emsp;</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo '<td><button type="button" class="btn btn-danger deletebtn"> DELETE </button></td>';
			    }

                echo "</tr>";
              
            } else {
              echo "No results found.";
            }
            ?>

          </tbody>
        </table>
        </form>
      </div>
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle" style="color: red; text-align:center">Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5 class="modal-title" id="exampleModalCenterTitle">Are you sure want to Delete?</h5>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php 
          echo "<td><a type='button' class='btn btn-danger' href='delete_teachers.php?deleteid=" . $row["id"] . "' name='delete' class='bx bxs-trash-alt'>Delete</a></td>";

        ?>
      </div>
    </div>
  </div>
</div>
    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#exampleModalCenter').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



</html>

