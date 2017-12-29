<?php
    include('inc/top.php');
?>
<h1>Change menu links</h1>
<hr>

<?php

	if (isset($_POST['saveschedule'])) {
		$schedule = addslashes($_POST['schedule']);

		$updatequery = "UPDATE contents SET content='$schedule' WHERE slug ='schedule'";
		if (mysqli_query($con,$updatequery)) {
			echo "Data Update Sucessfully";
		} else {
			echo "Error Please Try Again";
		}
		
	}
	
	// For show the previous data
	if ($con) {
		$sql = "SELECT content FROM contents WHERE slug ='schedule'";
		$schedule = mysqli_query($con,$sql)->fetch_assoc();
	}
	

?>


	<div class="grid-form1">
	<form class="form-horizontal" action="" method="post">
	  <div class="form-group">
	    <label for="schedule" class="col-sm-2 control-label hor-form">Schedule</label>
	    <div class="col-sm-10">
	      <input type="text" name="schedule" class="form-control" id="schedule" value="<?php echo $schedule['content']; ?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default" name="saveschedule">Save</button>
	    </div>
	  </div>
	</form>
	</div>

<?php

	if (isset($_POST['resultsbtn'])) {
		$results = addslashes($_POST['results']);

		$updatequery = "UPDATE contents SET content='$results' WHERE slug ='results'";
		if (mysqli_query($con,$updatequery)) {
			echo "Data Update Sucessfully";
		} else {
			echo "Error Please Try Again";
		}
	}
	
	if ($con) {
		$sql = "SELECT content FROM contents WHERE slug ='results'";
		$results = mysqli_query($con,$sql)->fetch_assoc();
		//var_dump($results);
	}
	

?>

	<div class="grid-form1">
	<form class="form-horizontal" action="" method="post">
	  <div class="form-group">
	    <label for="results" class="col-sm-2 control-label hor-form">Results</label>
	    <div class="col-sm-10">
	      <input type="text" name="results" class="form-control" id="results" value="<?php echo $results['content']; ?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default" name="resultsbtn">Save</button>
	    </div>
	  </div>
	</form>
	</div>
<hr>

<?php
    include('inc/bottom.php');
?>