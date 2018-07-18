<?php
require '../connect.php';
	
	$topic_id=$_GET['topic_id'];
	
	mysqli_query($connection,"delete from topics where topic_id=$topic_id");
	header('location:managetopics.php');
?>