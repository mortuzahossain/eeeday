<?php
    include('inc/top.php');
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
    } else {
      die();
    }
?>

<?php
  if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $slug = strtolower(str_replace(' ', '', $name));
    $regstatus = $_POST['regstatus'];
    $file = $_FILES['file'];
    $pdflink = $_POST['pdflink'];
    $teamon = $_POST['teamon'];
    $maxteammember = $_POST['maxteammember'];

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
            $sql = "UPDATE event2018 SET events = '$name', slug = '$slug', reg_active = '$regstatus',promoimg='$file_name_new',pdflink='$pdflink',teamon='$teamon',maxteammember='$maxteammember'
             WHERE id = $id";
                if (mysqli_query($con,$sql)) {
                    echo "Update The Event";
                } else {
                    echo "Sorry Something Wrong in Database Please try Again";
                }
            echo "Updated";
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
      $sql = "UPDATE event2018 SET events = '$name', slug = '$slug', reg_active = '$regstatus',pdflink='$pdflink',teamon='$teamon',maxteammember='$maxteammember'
       WHERE id = $id";
          if (mysqli_query($con,$sql)) {
              echo "Update The Event";
          } else {
              echo "Sorry Something Wrong in Database Please try Again";
          }
    }
  }

  // Show All The Information

  $sql = "SELECT * FROM event2018 WHERE id = $id";
  $result = mysqli_query($con,$sql)->fetch_assoc();


?>

<div class="grid-form1">
<h3 id="forms-horizontal">EDIT Events</h3>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Event Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="name" placeholder="Event Name" value="<?php echo $result['events']; ?>">
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
      <input type="text" class="form-control" name="pdflink" placeholder="http://file.pdf"  value="<?php echo $result['pdflink']; ?>">
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
      <input type="number" class="form-control" name="maxteammember" placeholder="1" step="1" max="4" min="0"  value="<?php echo $result['maxteammember']; ?>">
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
