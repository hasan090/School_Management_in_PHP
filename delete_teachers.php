<?php include 'database.php';?>
<?php include 'sidebar.php';?>



<?php 
if (isset($_GET['deleteid'])) {
$id = $_GET['deleteid'];

$sql = "DELETE FROM teachers WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "<h6 style='text-align:center';>Record saved successfully.</h6>";
    header("refresh:1; url=http://localhost/School_Management_in_Php/teachersData.php");
} else {
    echo "Error deleting record:" . mysqli_error($conn);
}
}


    
?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
        <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
    
     <!-- <td><a type='button' class='btn btn-danger' href="delete_teachers.php?id=<?php echo $row['id']; ?>"  name='delete' class='bx bxs-trash-alt'>Delete</a></td> -->

      
      </div>
    </div>
  </div>
</div>
          <!-- Delete Modal End -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



  <!-- Modal 2-->
  <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
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
            <form method="POST" action="delete_row.php">
          <?php
          //echo "<a type='button' class='btn btn-danger'  name='delete_row' >Delete</a>";

          ?>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
        
      </div>
    </div>
  </div> -->