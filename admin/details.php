<?php
    include('inc/top.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM participance2018 WHERE id = $id";
    $result = mysqli_query($con,$sql)->fetch_assoc();
    //var_dump($result);
?>


<?php
	if (isset($_POST['approve'])) {
		$sql = "UPDATE participance2018 SET status = 1 WHERE id = $id";
		if(mysqli_query($con,$sql)){
			echo "Complete The Operation Please Go Back";
		}
	}

	if (isset($_POST['reject'])) {
		$sql = "UPDATE participance2018 SET status = 2 WHERE id = $id";
		if(mysqli_query($con,$sql)){
			echo "Complete The Operation Please Go Back";
		}
	}

?>
	

<?php
	if (!empty($result['name'])) {
?>

	<div class="panel panel-primary">
		<div class="panel-heading text-center"><h1>Participants Detail</h1></div>
		
	<form action="" method="post">
			<table class="table table-bordered">
				<tr>
					<td width="30%">Name</td>
					<td width="70%"><?php echo $result['name']; ?></td>
				</tr>
				<tr>
					<td width="30%">Roll</td>
					<td width="70%"><?php echo $result['roll']; ?></td>
				</tr>
				<tr>
					<td width="30%">Department</td>
					<td width="70%"><?php echo $result['depertment']; ?></td>
				</tr>
				<tr>
					<td width="30%">Institute</td>
					<td width="70%"><?php echo $result['institute']; ?></td>
				</tr>
				<tr>
					<td width="30%">Phone</td>
					<td width="70%"><?php echo $result['phone']; ?></td>
				</tr>
				<tr>
					<td width="30%">Alternative Phone</td>
					<td width="70%"><?php echo $result['alternativephone']; ?></td>
				</tr>
				<tr>
					<td width="30%">Email</td>
					<td width="70%"><?php echo $result['email']; ?></td>
				</tr>
				<tr>
					<td width="30%">Alternative Email</td>
					<td width="70%"><?php echo $result['alternativeemail']; ?></td>
				</tr>
				<?php if(!empty($result['transectionid'])){ ?>
				<tr>
					<td width="30%">Transaction ID</td>
					<td width="70%"><?php echo $result['transectionid']; ?></td>
				</tr>
				<?php } else {  ?>
				<tr>
					<td width="30%">Transaction Image</td>
					<td width="70%"><img src="../img/bankrecept/<?php echo $result['transectionimg']; ?>"></td>
				</tr>
				<?php } ?>
				<tr>
					<td width="30%">Remark</td>
					<td width="70%"><?php if(!empty($result['remark'])) {echo $result['remark'];}else{echo "No Comment";} ?></td>
				</tr>

<?php if($result['status'] == 0){ ?>
				<button type="submit" class="btn btn-lg btn-success warning_1" name="approve">Approve</button>
				<button type="submit" class="btn btn-lg btn-danger" name="reject">Reject</button>
<?php } elseif ($result['status'] == 1) { ?>
				<button type="submit" class="btn btn-lg btn-danger" name="reject">Reject</button>
<?php } else { ?>
				<button type="submit" class="btn btn-lg btn-success warning_1" name="approve">Approve</button>
<?php } ?>

			</table>
		</form>
	</div>
<?php } else { ?>
<div class="panel panel-primary">
		<div class="panel-heading text-center"><h1>Participants Detail</h1></div>
		<form action="" method="post">
		<table class="table table-bordered">
			
			<tr>
				<td width="30%">Team Name</td>
				<td width="70%"><?php echo $result['teamname']; ?></td>
			</tr>
			<tr>
				<td width="30%">Team Leader</td>
				<td width="70%"><?php echo $result['teamleadername']; ?></td>
			</tr>
			<tr>
				<td width="30%">Team Leader Roll</td>
				<td width="70%"><?php echo $result['teamleaderroll']; ?></td>
			</tr>
			<tr>
				<td width="30%">Team Leader Department</td>
				<td width="70%"><?php echo $result['teamleaderdept']; ?></td>
			</tr>

			<?php for ($i=1; $i < 5; $i++) {
				$name = 'member'.$i.'name';
				$roll = 'member'.$i.'roll';
				$dept = 'member'.$i.'dept';
				if (!empty($result[$name])) {
			?>

			<tr>
				<td width="30%">Member <?php echo $i; ?> Name</td>
				<td width="70%"><?php echo $result[$name]; ?></td>
			</tr>
			<tr>
				<td width="30%">Member <?php echo $i; ?> Name</td>
				<td width="70%"><?php echo $result[$roll]; ?></td>
			</tr>
			<tr>
				<td width="30%">Member <?php echo $i; ?> Name</td>
				<td width="70%"><?php echo $result[$dept]; ?></td>
			</tr>

			<?php } } ?>

			<tr>
				<td width="30%">Institute</td>
				<td width="70%"><?php echo $result['institute']; ?></td>
			</tr>
			<tr>
				<td width="30%">Phone</td>
				<td width="70%"><?php echo $result['phone']; ?></td>
			</tr>
			<tr>
				<td width="30%">Alternative Phone</td>
				<td width="70%"><?php echo $result['alternativephone']; ?></td>
			</tr>
			<tr>
				<td width="30%">Email</td>
				<td width="70%"><?php echo $result['email']; ?></td>
			</tr>
			<tr>
				<td width="30%">Alternative Email</td>
				<td width="70%"><?php echo $result['alternativeemail']; ?></td>
			</tr>
			<?php if(!empty($result['transectionid'])){ ?>
			<tr>
				<td width="30%">Transaction ID</td>
				<td width="70%"><?php echo $result['transectionid']; ?></td>
			</tr>
			<?php } else {  ?>
			<tr>
				<td width="30%">Transaction Image</td>
				<td width="70%"><img width="100%" height="300px" src="../img/bankrecept/<?php echo $result['transectionimg']; ?>"></td>
			</tr>
			<?php } ?>
			<tr>
				<td width="30%">Remark</td>
				<td width="70%"><?php if(!empty($result['remark'])) {echo $result['remark'];}else{echo "No Comment";} ?></td>
			</tr>
<?php if($result['status'] == 0){ ?>
				<button type="submit" class="btn btn-lg btn-success warning_1" name="approve">Approve</button>
				<button type="submit" class="btn btn-lg btn-danger" name="reject">Reject</button>
<?php } elseif ($result['status'] == 1) { ?>
				<button type="submit" class="btn btn-lg btn-danger" name="reject">Reject</button>
<?php } else { ?>
				<button type="submit" class="btn btn-lg btn-success warning_1" name="approve">Approve</button>
<?php } ?>
		</table>
		</form>
	</div>

<?php } ?>


<?php
    include('inc/bottom.php');
?>