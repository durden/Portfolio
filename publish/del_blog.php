<?php
	require('inc/dbHdr.php');
	require('inc/common.js');
	$id = $_GET['id'];
	
	$sql = "DELETE FROM blog_data WHERE blog_id = '$id'";
	mysql_query($sql,$link);
	
	require('inc/dbFtr.php');
	
	header("Location: viewblogs.php");
?>