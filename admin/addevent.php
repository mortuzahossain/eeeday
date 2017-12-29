<?php
    include('inc/top.php');
?>

<div class="grid-form1">
<h3 id="forms-horizontal">Add An Events</h3>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label hor-form">Event Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Event Name">
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
    <label for="name" class="col-sm-2 control-label hor-form">Pdf Link</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pdflink" placeholder="http://file.pdf">
    </div>
  </div>


  <div class="form-group">
    <label for="name" class="col-sm-2 control-label hor-form">Max Team Member</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="pdflink" placeholder="1" step="1" max="4" min="0">
    </div>
  </div>



  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Save</button>
    </div>
  </div>
</form>
</div>



<?php
    include('inc/bottom.php');
?>
