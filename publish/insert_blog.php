<?php
	require("inc/dbHdr.php");

	$title = $_POST['title'];
	$body = $_POST['body'];
	$active = $_POST['active'];
	$id = $_POST['id'];	

	// FIXME: Doesn't work for webfaction b/c it is already escaped for some reason
	//$title = str_replace("'","\'",$title);
	//$body = str_replace("'","\'",$body);
	
	if($active == "")
		$active = 0;
	
	if($id == "")
	{
		$sql = "INSERT INTO blog_data (title,body_text,created_by,active)
			VALUES ('$title','$body','1','$active')";
	}
	else
	{
		$sql = "UPDATE blog_data SET title = '$title', body_text = '$body',
				created_by = '1', active = '$active' 
				WHERE blog_id = '$id'";
	}
	$result = mysql_query($sql, $link) or die('Error inserting blog');

	require("inc/dbFtr.php");		
	header("Location: viewblogs.php");
?>


