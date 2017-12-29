<?php
    include('inc/top.php');
?>
<div class="container">
  <a href="addsponsor.php" class="hvr-shutter-in-horizontal btn btn-success addadminbtn">Add Sponsor</a>
</div>
<hr>

<?php
  $sql = "SELECT * FROM sponsors2018 ORDER BY id DESC";
  $result = mysqli_query($con,$sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $all_events[] = $row;
    }
    $serialno = 0;
?>

<table class="table table-striped ">
      <tr>
          <td>SL</td>
          <td>Name</td>
          <td>Image Link</td>
          <td>Website</td>
      </tr>
<?php foreach ($all_events as $event) { $serialno++; ?>

      <tr>
          <td><?php echo $serialno; ?></td>
          <td><?php echo $event['name']; ?></td>
          <td><a href="<?php echo $event['image']; ?>" target="_blank" class="btn btn-success mybun">Image</a></td>
          <td><a href="<?php echo $event['website']; ?>" target="_blank" class="btn btn-success mybun">Website</a></td>
          <td width="10%"><a href="editsponsor.php?id=<?php echo $event['id']; ?>" class="btn btn-success mybun">Update</a></td>
          <td width="10%"><a href="deletesponsors.php?id=<?php echo $event['id']; ?>" class="btn btn-danger mybun">Delete</a></td>
      </tr>
<?php } ?>
</table>

<?php } else {
  echo "No Sponsors added yet.";
} ?>

<hr>
<?php
    include('inc/bottom.php');
?>
