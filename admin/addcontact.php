<?php
    include('inc/top.php');
?>

<?php
  if (isset($_POST['save'])) {
    $name         = $_POST['name'];
    $designation  = $_POST['designation'];
    $phone        = $_POST['phone'];
    $email        = $_POST['email'];
    $image        = $_POST['image'];

    $sql = "INSERT INTO contact2018 (name, designation, phone, email, image) VALUES ('$name','$designation','$phone','$email','$image')";

    if (mysqli_query($con, $sql)) {
      echo "Data Added Successfuly.";
    } else {
      echo "Operation in not complete. Please Try Again.";
    }


  }
?>
<hr>
<div class="grid-form1">
<h3 id="forms-horizontal">Add A Contact</h3>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="name" placeholder="Name" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Designation</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="designation" placeholder="Designation" required>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Phone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="phone" placeholder="01000000000" required>
    </div>
  </div>


  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="demo@demo.com" required>
    </div>
  </div>


  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Image Url</label>
    <div class="col-sm-10">
      <input type="url" class="form-control" name="image" placeholder="http://image.jpg" required>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="save" class="btn btn-default">Save</button>
    </div>
  </div>
</form>
</div>
<hr>
<?php
    include('inc/bottom.php');
?>
