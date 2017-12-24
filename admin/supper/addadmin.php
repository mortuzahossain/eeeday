<?php 
	session_start();
	if( !isset($_SESSION['active'])){
	 	header('Location: login.php');
	    exit();
	}
	include '../../inc/conn.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT id FROM admin WHERE name='$name' AND email = '$email'";
	$result = mysqli_query($con,$sql);
	$have_data = mysqli_num_rows($result);
	if($have_data == 0 ){
		$sql = "INSERT INTO admin (name,email,password) VALUES ('$name','$email','$password')";
		$result = mysqli_query($con,$sql);
		if ($result) {
			header('Location: index.php?message=success');
		    exit();
		} else {
			header('Location: index.php?message=error');
		    exit();
		}
	} else {
		header('Location: index.php?message=error');
		exit();
	}
?>