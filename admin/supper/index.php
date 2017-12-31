<?php 
	session_start();
	if( !isset($_SESSION['active'])){
	 	header('Location: login.php');
	    exit();
	}
	include '../../inc/conn.php';
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>EEE Day Supper Admin Entry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <link href="../css/font-awesome.css" rel="stylesheet">
</head>

<body>


	<!-- Add User Part -->
	<div class="container">
		<a href="logout.php" class="hvr-shutter-in-horizontal btn btn-success addadminbtn">Logout</a>
		<a data-toggle="modal" data-target="#myModal" class="hvr-shutter-in-horizontal btn btn-success addadminbtn">Add Admin</a>
	</div>

    <div class="container">
        <h1 class="text-center heading">Admin List</h1>

		<?php if(isset($_GET['message'])){ $message = $_GET['message']; ?>
			<?php if ($message == 'success') {
				echo "<h3 class='text-center'>Your operation is successfully complete.</h3>";
			} elseif ($message == 'error') {
				echo "<h3 class='text-center'>Your operation is not successfully complete. Please try again.</h3>";
			} ?>
			
		<?php } ?>

		<div class="table-responsive">
		<?php
			$sql = "SELECT * FROM admin";
			$result = mysqli_query($con,$sql);
			if($result){
			$have_admin = mysqli_num_rows($result);
			if ($have_admin) {
				while($row = mysqli_fetch_assoc($result)){
	                $all_admin[] = $row;
	            }
		?>
			<table class="table table-condensed text-center">
				<tr >
					<td width="5%">#</td>
					<td width="20%">Name</td>
					<td width="25%">Email</td>
					<td width="20%">Password</td>
					<td width="15%">Delete</td>
					<td width="15%">Status</td>
				</tr>
			<?php
				$i = 0;
	            foreach ($all_admin as $admin) { $i++;
			?>

				<tr >
					<td width="5%"><?php echo $i; ?></td>
					<td width="20%"><?php echo $admin['name']; ?></td>
					<td width="25%"><?php echo $admin['email']; ?></td>
					<td width="20%"><?php echo $admin['password']; ?></td>
					<td width="15%"><a href="delete.php?id=<?php echo $admin['id']; ?>" class="hvr-shutter-in-horizontal btn btn-danger addadminbtn">Delete</a></td>

					<?php if ($admin['status'] == 0) { ?>
					<td width="15%"><a href="togolstatus.php?id=<?php echo $admin['id']; ?>&status=<?php echo $admin['status']; ?>" class="hvr-shutter-in-horizontal btn btn-success addadminbtn">Pending</a></td>
					<?php } else { ?>
					<td width="15%"><a href="togolstatus.php?id=<?php echo $admin['id']; ?>&status=<?php echo $admin['status']; ?>" class="hvr-shutter-in-horizontal btn btn-danger addadminbtn">Active</a></td>
					<?php } ?>


				</tr>

			<?php } ?>
			</table>
			<?php } } ?>
		</div>
    </div>

<!-- Add admin Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" method="post" action="addadmin.php">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

</body>

</html>