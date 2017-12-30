<?php
    include('inc/top.php');
?>
<hr>

<?php
  if (isset($_POST['save'])) {
    $name = addslashes($_POST['name']);
    $sponsorsurl = addslashes($_POST['sponsorsurl']);
    $sponsorslogo = addslashes($_POST['sponsorslogo']);

    $sql = "INSERT INTO sponsors2018 (name, image, website) VALUES ('$name','$sponsorslogo','$sponsorsurl')";

    if (mysqli_query($con, $sql)) {
      echo "Data is saved.";
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
      <input type="text" class="form-control"  name="name" placeholder="Sponsors Name">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label hor-form">Sponsors Web Url</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="sponsorsurl" placeholder="http://sponsors.img/">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Sponsors Logo Url</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="sponsorslogo" placeholder="http://facebook.com/">
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
