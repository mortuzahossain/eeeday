<?php
	session_start();
	if( !isset($_SESSION['login'])){
		header('Location: signin.php');
			exit();
	}
	include '../inc/conn.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM contact2018 WHERE id = $id";
	//echo $sql;
	$result = mysqli_query($con,$sql);
	if ($result) {
	  header('Location: index.php');
	    exit();
	} else {
	  header('Location: index.php');
	  exit();
	}
?>
