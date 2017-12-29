<?php
    include('inc/top.php');
?>

	<!-- Add User Part -->
	<div class="container">
		<a href="addcontact.php" class="hvr-shutter-in-horizontal btn btn-success addadminbtn">Add Contact</a>
	</div>


<?php
  $sql = "SELECT * FROM contact2018 ORDER BY id DESC";
  $result = mysqli_query($con,$sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $alldata[] = $row;
    }

    $serialno = 0;

?>


<table class="table table-striped ">
      <tr>
          <td>SL</td>
          <td>Name</td>
          <td>Designation</td>
          <td>Phone</td>
          <td>Email</td>
          <td>Image</td>
      </tr>

<?php foreach ($alldata as $data) { $serialno++; ?>

      <tr>
          <td><?php echo $serialno; ?></td>
          <td><?php echo $data['name']; ?></td>
          <td><?php echo $data['designation']; ?></td>
          <td><?php echo $data['phone']; ?></td>
          <td><?php echo $data['email']; ?></td>
          <td><a href="<?php echo $data['image']; ?>" target="_blank" class="btn btn-success mybun">Image</a></td>
          <td width="10%"><a href="editcontact.php?id=<?php echo $event['id']; ?>" class="btn btn-success mybun">Edit</a></td>
          <td width="10%"><a href="deletecontact.php?id=<?php echo $event['id']; ?>" class="btn btn-danger mybun">Delete</a></td>

      </tr>
<?php } ?>

</table>

<?php } else {
  echo "NO DATA SAVED YET";
} ?>

<?php
    include('inc/bottom.php');
?>
