<?php
	require("inc/dbHdr.php");
	
	$name = $_POST['name'];
	$thumb_name = $_POST['thumb_name'];
	$thumb_width = $_POST['thumb_width'];
	$thumb_height = $_POST['thumb_height'];
	$big_name = $_POST['big_name'];
	$big_width = $_POST['big_width'];
	$big_height = $_POST['big_height'];
	$intro = $_POST['intro'];
	$full_text = $_POST['full'];
	$web = $_POST['web'];
	$id = $_POST['id'];	
	// FIXME: Doesn't work on webfaction b/c it's already escaped :|
	//$full_text = str_replace("'","\'",$full_text);
	//$intro = str_replace("'","\'",$intro);
	if($id == "")
	{
		$sql = "INSERT INTO featured_work 
				(feature_name,web_address,thumbnail_name,thumbnail_width,thumbnail_height,big_img_name,
				big_img_width,big_img_height,intro_text,full_text)
				VALUES('$name','$web','$thumb_name','$thumb_width','$thumb_height','$big_name',
				'$big_width','$big_height','$intro','$full_text')";
	}
	else
	{
		$sql = "UPDATE featured_work 
				SET feature_name = '$name',web_address = '$web',thumbnail_name = '$thumb_name',
				thumbnail_width = '$thumb_width',thumbnail_height = '$thumb_height',
				big_img_name = '$big_name', big_img_width = '$big_width',
				big_img_height = '$big_height',intro_text = '$intro',full_text = '$full_text'
				WHERE feature_id = '$id'";
	}
	
	mysql_query($sql,$link) or die('Unable to insert new work');
	
	require("inc/dbFtr.php");
	header("Location: viewworks.php");
?>	
