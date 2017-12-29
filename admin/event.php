<?php
    include('inc/top.php');
?>

	<!-- Add User Part -->
	<div class="container">
		<a href="addevent.php" class="hvr-shutter-in-horizontal btn btn-success addadminbtn">Add Events</a>
	</div>


<?php
  $sql = "SELECT * FROM event2018 ORDER BY id DESC";
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
          <td>Event Name</td>
          <td>PDF Link</td>
          <td>Registration Status</td>
          <td>Promo Image</td>
          <td>Allow Team</td>
          <td>Maximum Member</td>
      </tr>

<?php foreach ($all_events as $event) { $serialno++; ?>

      <tr>
          <td><?php echo $serialno; ?></td>
          <td><?php echo $event['events']; ?></td>
          <td><a href="<?php echo $event['pdflink']; ?>" target="_blank" class="btn btn-success mybun">PDF</a></td>

          <?php if ($event['reg_active'] == 1) { ?>
          <td>Avtive</td>
          <?php } else { ?>
          <td>Deactive</td>
          <?php } ?>

          <td><a href="img/events/<?php echo $event['promoimg']; ?>" target="_blank" class="btn btn-success mybun">See Image</a></td>

          <?php if ($event['teamon'] == 1) { ?>
          <td>Yes</td>
          <?php } else { ?>
          <td>No</td>
          <?php } ?>


          <?php if (empty($event['maxteammember'])) { ?>
          <td></td>
          <?php } else { ?>
          <td><?php echo $event['maxteammember']; ?></td>
          <?php } ?>

          <td width="10%"><a href="editevent.php?id=<?php echo $event['id']; ?>" class="btn btn-success mybun">Edit</a></td>

      </tr>
<?php } ?>

</table>

<?php } ?>

<?php
    include('inc/bottom.php');
?>
