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

  <div class="container">
    <a href="addsocialicon.php" class="hvr-shutter-in-horizontal btn btn-success addadminbtn">Add Social Icon</a>
  </div>

  <!--FOR Showing Available Social Icon  -->

  <?php
    $sql = "SELECT * FROM sociallinks ORDER BY id DESC";
    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $allsocialicon[] = $row;
      }

      $serialno = 0;

  ?>


  <table class="table table-striped ">
        <tr>
            <td>SL</td>
            <td>Name</td>
            <td>Link</td>
            <td>Icon Preview</td>
        </tr>

  <?php foreach ($allsocialicon as $socialicon) { $serialno++; ?>

        <tr>
            <td><?php echo $serialno; ?></td>
            <td><?php echo $socialicon['name']; ?></td>
            <td><a href="<?php echo $socialicon['link']; ?>" target="_blank" class="btn btn-success mybun">View</a></td>
            <td width='10%'><i class=" fa <?php echo $socialicon['iconname'];  ?> myicon" aria-hidden="true"></i></td>
            <td><a href="editsocialicon.php?id=<?php echo $socialicon['id']; ?>" class="btn btn-success mybun">Edit</a></td>
            <td><a href="deletesocialicon.php?id=<?php echo $socialicon['id']; ?>" class="btn btn-danger mybun">Delete</a></td>
        </tr>
  <?php } ?>

  </table>

  <?php } ?>



<hr>
<?php
    include('inc/bottom.php');
?>
