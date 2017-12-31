<?php
	session_start();
	if( !isset($_SESSION['login'])){
		header('Location: signin.php');
			exit();
	}
	include '../inc/conn.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM sociallinks WHERE id = $id";
	//echo $sql;
	$result = mysqli_query($con,$sql);
	if ($result) {
	  header('Location: index.php?message=success');
	    exit();
	} else {
	  header('Location: index.php?message=error');
	  exit();
	}
?>
