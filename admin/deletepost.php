<?php
require '../connect.php';
	
	$posts_id=$_GET['posts_id'];
	
	mysqli_query($connection,"delete from posts where posts_id=$posts_id");
	header('location:manageposts.php');
?>