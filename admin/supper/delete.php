<?php 
	session_start();
	if( !isset($_SESSION['active'])){
	 	header('Location: login.php');
	    exit();
	}
	include '../../inc/conn.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM admin WHERE id = $id";
	$result = mysqli_query($con,$sql);
	if ($result) {
		header('Location: index.php?message=success');
	    exit();
	} else {
		header('Location: index.php?message=error');
	    exit();
	}
?>