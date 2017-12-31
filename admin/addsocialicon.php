<?php
    include('inc/top.php');
?>
<hr>

<?php
  if (isset($_POST['save'])) {
    $name = addslashes($_POST['name']);
    $url = addslashes($_POST['url']);
    $logo = addslashes($_POST['logo']);

    $sql = "INSERT INTO sociallinks (name, link, iconname) VALUES ('$name','$url','$logo')";

    if (mysqli_query($con, $sql)) {
      echo "Data is saved.";
    } else {
      echo "Error in Database may be . Please try again.";
    }

  }

?>


<div class="grid-form1">
<h3 id="forms-horizontal">Add A Social Icon</h3>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="name" placeholder="Facebook">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label hor-form">URL</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="url" placeholder="http://facebook.com/mdmortuza.hossain/">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Sponsors Logo Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="logo" placeholder="fa-facebook">
      <p>You Can Get The Social Icon Name From <a href="http://fontawesome.io/icons/">Here</a>. And Click The Icon And From the Use Section copy the class like <mark class="mark">fa-facebook</mark> part only and paste it in the input field. Please Don't Put Any Other thing without the class otherwise it will break or provide unwanted baviour in the website.</p>
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
