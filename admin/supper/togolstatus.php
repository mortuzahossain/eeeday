<?php 
	session_start();
	if( !isset($_SESSION['active'])){
	 	header('Location: login.php');
	    exit();
	}
	include '../../inc/conn.php';
	
	$id = $_GET['id'];
	$status = $_GET['status'];
	if ($status == 0) {
		$sql = "UPDATE admin SET status = 1 WHERE id = $id";
		$result = mysqli_query($con,$sql);
		if ($result) {
			header('Location: index.php?message=success');
		    exit();
		} else {
			header('Location: index.php?message=error');
		    exit();
		}
	} else {
		$sql = "UPDATE admin SET status = 0 WHERE id = $id";
		$result = mysqli_query($con,$sql);
		if ($result) {
			header('Location: index.php?message=success');
		    exit();
		} else {
			header('Location: index.php?message=error');
		    exit();
		}
	}
	
?>