<?php include 'inc/header.php'; ?>
<?php

// Get Data From URL
$id = $_GET['id'];
$participationtype = $_GET['participationtype'];

if (empty($id) OR empty($participationtype)) {
	header('Location: index.php');
}


// For Single User

if ($participationtype == 0) {
	$sql = "SELECT name, roll, depertment, institute, phone, alternativephone, email, alternativeemail, transectionid, transectionimg, status, remark FROM participance2018 WHERE id = $id";
	$result = mysqli_query($con,$sql)->fetch_assoc();
	//var_dump($result);
?>
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading text-center"><h1>Participants Detail</h1></div>
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
				<td width="70%"><img src="img/bankrecept/<?php echo $result['transectionimg']; ?>"></td>
			</tr>
			<?php } ?>
			<tr>
				<td width="30%">Remark</td>
				<td width="70%"><?php if(!empty($result['remark'])) {echo $result['remark'];}else{echo "No Comment";} ?></td>
			</tr>
		</table>
		<div class="panel-footer text-center"><p>Need To Change Any Information Then Please Contact With Us.</p></div>
	</div>
</div>
<?php } else { 

	$sql = "SELECT teamname, teamleadername, teamleaderroll, teamleaderdept, member1name, member1roll, member1dept, member2name, member2roll, member2dept, member3name, member3roll, member3dept, member4name, member4roll, member4dept, institute, phone, alternativephone, email, alternativeemail, transectionid, transectionimg, status, remark FROM participance2018 WHERE id = $id";
	$result = mysqli_query($con,$sql)->fetch_assoc();
?>
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading text-center"><h1>Participants Detail</h1></div>
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
				<td width="70%"><img width="100%" height="300px" src="img/bankrecept/<?php echo $result['transectionimg']; ?>"></td>
			</tr>
			<?php } ?>
			<tr>
				<td width="30%">Remark</td>
				<td width="70%"><?php if(!empty($result['remark'])) {echo $result['remark'];}else{echo "No Comment";} ?></td>
			</tr>
		</table>
		<div class="panel-footer text-center"><p>Need To Change Any Information Then Please Contact With Us.</p></div>
	</div>
</div>
<?php } ?>

<?php include 'inc/footer.php'; ?>