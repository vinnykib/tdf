<?php
require '../connect.php';
	
	$id=$_GET['id'];
	
	mysqli_query($connection,"delete from users where id=$id");
	header('location:manageusers.php');
?>