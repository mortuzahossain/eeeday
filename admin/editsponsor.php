<?php
    include('inc/top.php');
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $sql = "SELECT * FROM sponsors2018 WHERE id = $id";
      $result = mysqli_query($con, $sql)->fetch_assoc();
    } else {
      die();
    }
?>
<hr>

<?php

if (isset($_POST['save'])) {
  $name = addslashes($_POST['name']);
  $sponsorsurl = addslashes($_POST['sponsorsurl']);
  $sponsorslogo = addslashes($_POST['sponsorslogo']);
  $sql = "UPDATE sponsors2018 SET name ='$name' , image = '$sponsorslogo' , website = '$sponsorsurl' WHERE id = $id";
  if (mysqli_query($con, $sql)) {
    echo "Data Updated Successfully . Please Go Back And See.";
  } else {
    echo "Error in Database may be . Please try again.";
  }
}

?>

<div class="grid-form1">
<h3 id="forms-horizontal">Add An Events</h3>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Sponsors Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="name" placeholder="Sponsors Name" value="<?php echo $result['name']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label hor-form">Sponsors Web Url</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="sponsorsurl" placeholder="http://sponsors.img/" value="<?php echo $result['website']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Sponsors Logo Url</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="sponsorslogo" placeholder="http://facebook.com/" value="<?php echo $result['image']; ?>">
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
