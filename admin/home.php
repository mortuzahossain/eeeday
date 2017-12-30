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
<hr>
<?php
    include('inc/bottom.php');
?>
