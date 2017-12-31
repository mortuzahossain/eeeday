<?php
    include('inc/top.php');
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
    } else {
      die();
    }

    $sql = "SELECT * FROM sociallinks WHERE id = $id";
    $result = mysqli_query($con,$sql)->fetch_assoc();
?>

<hr>

<?php
  if (isset($_POST['save'])) {
    $name = addslashes($_POST['name']);
    $url = addslashes($_POST['url']);
    $logo = addslashes($_POST['logo']);

    $sql = "UPDATE sociallinks SET name ='$name', link = '$url', iconname = '$logo'";

    if (mysqli_query($con, $sql)) {
      echo "Data is Update. PLease Go Back And Check Again";
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
      <input type="text" class="form-control"  name="name" placeholder="Facebook" value="<?php echo $result['name']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label hor-form">URL</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="url" placeholder="http://facebook.com/mdmortuza.hossain/" value="<?php echo $result['link']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Sponsors Logo Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="logo" placeholder="fa-facebook" value="<?php echo $result['iconname']; ?>">
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
