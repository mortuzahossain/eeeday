<?php
    include('inc/top.php');
?>
<h1>Change Footer Content</h1>
<hr>

<?php

	if (isset($_POST['save'])) {
		$copyright_text = addslashes($_POST['copyright_text']);

		$updatequery = "UPDATE contents SET content='$copyright_text' WHERE slug ='copyright_text'";
		if (mysqli_query($con,$updatequery)) {
			echo "Data Update Sucessfully";
		} else {
			echo "Error Please Try Again";
		}
		
	}
	// For show the previous data
	if ($con) {
		$sql = "SELECT content FROM contents WHERE slug ='copyright_text'";
		$result = mysqli_query($con,$sql)->fetch_assoc();
		//var_dump($result);
	}
	

?>


	<div class="grid-form1">
	<h3 id="forms-horizontal"># Change Copyright Text</h3>
	<form class="form-horizontal" action="" method="post">
	  <div class="form-group">
	    <label for="footertext" class="col-sm-2 control-label hor-form">Copyritht Text</label>
	    <div class="col-sm-10">
	      <input type="text" name="copyright_text" class="form-control" id="footertext" value="<?php echo $result['content']; ?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default" name="save">Save</button>
	    </div>
	  </div>
	</form>
	</div>
<hr>
<?php
    include('inc/bottom.php');
?>