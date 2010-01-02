<?php
	require('inc/dbHdr.php');
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM featured_work WHERE feature_id = '$id'";
	mysql_query($sql,$link);
	
	require('inc/dbFtr.php');
	
	header("Location: viewworks.php");
?>