<?php
    include('inc/top.php');
?>

<?php
  if (isset($_POST['save'])) {
    $name = addslashes($_POST['name']);
    $slug = addslashes(strtolower(str_replace(' ', '', $name)));
    $regstatus = addslashes($_POST['regstatus']);
    $file = $_FILES['file'];
    $pdflink = addslashes($_POST['pdflink']);
    $teamon = addslashes($_POST['teamon']);
    $maxteammember = addslashes($_POST['maxteammember']);

    // For Files Upload
    $file_name = $file['name'];
  	$file_tmp = $file['tmp_name'];
  	$file_size = $file['size'];
  	$file_error = $file['error'];
  	// File Extention
  	$file_extention = explode('.', $file_name);
  	$file_extention = strtolower(end($file_extention));

    $allowed = array('png','jpg','gif');

    if (in_array($file_extention,$allowed)) {
  		if ($file_error === 0) {
  			if ($file_size <= 100000000) {
  				$file_name_new = uniqid('',true). '.' .$file_extention;
  				// In Server Where Want to save the file
          define('ROOTPATH', __DIR__);
  				$file_destinition = ROOTPATH.'/img/events/'.$file_name_new;
          //echo $file_destinition;
  				//echo $file_destinition;
  				if (move_uploaded_file($file_tmp, $file_destinition)) {
            $sql = "INSERT INTO event2018 ( events, slug, reg_active, promoimg, pdflink, teamon, maxteammember) VALUES
                ('$name','$slug','$regstatus','$file_name_new','$pdflink','$teamon','$maxteammember')";
                if (mysqli_query($con,$sql)) {
                    echo "Event Is Added Sucessflly";
                } else {
                    echo "Sorry Something Wrong in Database Please try Again";
                }
  				} else {
            echo "File can not moved in right place. Please Try Again";
          }
  			} else {
          echo "File Size is too Big";
        }
  		} else {
  		  echo "Error During File Uploading";
  		}
  	} else {
      echo "File Format Not allowed . Please Provide Right File .";
    }
  }
?>

<div class="grid-form1">
<h3 id="forms-horizontal">Add An Events</h3>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Event Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="name" placeholder="Event Name">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Registration On / Off</label>
    <div class="col-sm-10">
      <select name="regstatus" class="form-control" >
        <option value="1">On</option>
        <option value="0">Off</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Promo Image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="file" placeholder="Select Your File">
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-2 control-label hor-form">Pdf Link</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="pdflink" placeholder="http://file.pdf">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Team On / Off</label>
    <div class="col-sm-10">
      <select name="teamon" class="form-control" >
        <option value="1">On</option>
        <option value="0">Off</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Max Team Member</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="maxteammember" placeholder="1" step="1" max="4" min="0">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="save" class="btn btn-default">Save</button>
    </div>
  </div>
</form>
</div>

<?php
    include('inc/bottom.php');
?>
