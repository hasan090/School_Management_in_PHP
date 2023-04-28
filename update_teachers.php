<?php include 'sidebar.php'; ?>
<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>
<!-- Update Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-left:-40%;margin-top:22% ;width:200%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
              <input type="number" name="age" class="form-control" maxlength="2" required>
            </div>
            <div class="col-md-6">
              <label>Mobile Number</label>
              <input type="text" name="mobileNumber" class="form-control" maxlength="12" required>
            </div>
            <div class="col-md-6">
              <label>City</label>
              <input type="text" name="city" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label>Address</label>
              <textarea class="form-control" rows="2" required></textarea>
            </div>
            <div class="col-md-6">

              <label>Gender</label>
              <div class="input_box" style="display:flex; margin-top:5%">


                <div class="male">
                  <input type="radio" class="radio_buttons" name="gender" value="male" onclick="checkOne('male')">
                  <label class="radio_button" for="male">Male</label>
                </div>
                <div class="male">
                  <input type="radio" class="radio_buttons" name="gender" value="female" onclick="checkOne('female')">
                  <label class="radio_button" for="female">Female</label>
                </div>

                <div class="others" style="margin-left: 10%;">
                  <input type="radio" class="radio_buttons" name="gender" value="others" onclick="checkOne('others')">
                  <label class="radio_button" for="others">Others</label>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Update Modal End -->