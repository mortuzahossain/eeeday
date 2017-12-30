<?php
    include('inc/top.php');
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
    } else {
      die();
    }

    $sql = "SELECT * FROM contact2018 WHERE id = $id";
    $result = mysqli_query($con, $sql)->fetch_assoc();
?>

<?php
  if (isset($_POST['save'])) {
    $name         = $_POST['name'];
    $designation  = $_POST['designation'];
    $phone        = $_POST['phone'];
    $email        = $_POST['email'];
    $image        = $_POST['image'];

    $sql = "UPDATE contact2018 SET name = '$name', designation = '$designation', phone = '$phone', email = '$email', image='$image' WHERE id = $id";

    if (mysqli_query($con, $sql)) {
      echo "Data Updated Successfuly.";
    } else {
      echo "Operation in not complete. Please Try Again.";
    }


  }
?>
<hr>
<div class="grid-form1">
<h3 id="forms-horizontal">Update The Contact</h3>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="name" placeholder="Name" required value="<?php echo $result['name']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Designation</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="designation" placeholder="Designation" required value="<?php echo $result['designation']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Phone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="phone" placeholder="01000000000" required value="<?php echo $result['phone']; ?>">
    </div>
  </div>


  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="demo@demo.com" required value="<?php echo $result['email']; ?>">
    </div>
  </div>


  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Image Url</label>
    <div class="col-sm-10">
      <input type="url" class="form-control" name="image" placeholder="http://image.jpg" required value="<?php echo $result['image']; ?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="save" class="btn btn-default">Update</button>
    </div>
  </div>
</form>
</div>
<hr>
<?php
    include('inc/bottom.php');
?>
