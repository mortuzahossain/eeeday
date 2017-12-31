<?php
    include('inc/top.php');
?>
<h1>Home Page Content</h1>
<hr>

<?php

	if (isset($_POST['countdownsave'])) {

		$countdown = addslashes($_POST['countdown']);

		$updatequery = "UPDATE contents SET content='$countdown' WHERE slug ='countdown'";
		if (mysqli_query($con,$updatequery)) {
			echo "Data Update Sucessfully";
		} else {
			echo "Error Please Try Again";
		}

	}
?>


	<div class="grid-form1">
	<h3 id="forms-horizontal"># Show Count Down</h3>
	<form class="form-horizontal" action="" method="post">
    <div class="form-group">
      <label class="col-sm-2 control-label hor-form">Count Down On / Off</label>
      <div class="col-sm-10">
        <select name="countdown" class="form-control" >
          <option value="1">On</option>
          <option value="0">Off</option>
        </select>
      </div>
    </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default" name="countdownsave">Save</button>
	    </div>
	  </div>
	</form>
	</div>

<?php
  if (isset($_POST['abouteeeday'])) {
    $abouteeeday_heading = addslashes($_POST['abouteeeday_heading']);
    $abouteeeday_content = addslashes($_POST['abouteeeday_content']);
    $abouteeeday_video = addslashes($_POST['abouteeeday_video']);

    $sql1 = "UPDATE contents SET content='$abouteeeday_heading' WHERE slug ='abouteeeday_heading'";
    $sql2 = "UPDATE contents SET content='$abouteeeday_content' WHERE slug ='abouteeeday_content'";
    $sql3 = "UPDATE contents SET content='$abouteeeday_video' WHERE slug ='abouteeeday_video'";

    if (mysqli_query($con,$sql1) AND mysqli_query($con,$sql2) AND mysqli_query($con,$sql3)) {
			echo "Data Update Sucessfully";
		} else {
			echo "Error Please Try Again";
		}

  }

  $abouteeeday_heading = mysqli_query($con,"SELECT content FROM contents WHERE slug = 'abouteeeday_heading'")->fetch_assoc();
  $abouteeeday_content = mysqli_query($con,"SELECT content FROM contents WHERE slug = 'abouteeeday_content'")->fetch_assoc();
  $abouteeeday_video = mysqli_query($con,"SELECT content FROM contents WHERE slug = 'abouteeeday_video'")->fetch_assoc();

?>


  	<div class="grid-form1">
  	<h3 id="forms-horizontal"># About EEE Day</h3>
  	<form class="form-horizontal" action="" method="post">
      <div class="form-group">
        <label class="col-sm-2 control-label hor-form">Heading</label>
        <div class="col-sm-10">
          <input type="text" name="abouteeeday_heading" class="form-control" value="<?php echo $abouteeeday_heading['content']; ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label hor-form">Content</label>
        <div class="col-sm-10">
          <textarea name="abouteeeday_content"  class="form-control1" cols="50" rows="10"><?php echo $abouteeeday_content['content']; ?></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label hor-form">Video ID Youtube</label>
        <div class="col-sm-10">
          <input type="text" name="abouteeeday_video" class="form-control" value="<?php echo $abouteeeday_video['content']; ?>">
          <p>https://www.youtube.com/watch?v=<mark class="mark">4zBH7rgMPQA</mark></p>
        </div>
      </div>
  	  <div class="form-group">
  	    <div class="col-sm-offset-2 col-sm-10">
  	      <button type="submit" class="btn btn-default" name="abouteeeday">Save</button>
  	    </div>
  	  </div>
  	</form>
  	</div>


<hr>
<?php
    include('inc/bottom.php');
?>
