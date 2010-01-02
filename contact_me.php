<?php
	require("inc/common.php");
	
	if($_POST["msg"] == '' || $_POST["name"] == '')
	{
		header("Location: contact.php?err=102");
		exit;		
	}//if	

	$to = "luke@lukelee.net";
	$name = $_POST["name"];
	$from = $_POST["email"];
	$msg = $_POST["msg"];
	
	$msg_send = "FROM " . $from . "\n\n";
	$msg_send = $msg;
	$subject = "Website request from " . $name;
	$headers = "Cc: durden2.0@gmail.com \n";
	$headers .= "From: webmaster@lukelee.net \n";

	$msg = wordwrap($msg_send,70); // dont exceed 70 characters per line
		
	if(isEmail($from))
	{
		if(mail($to,$subject,$msg_send,$headers))
		{ header("Location: contact.php?err=1"); exit; }
		else
		{ header("Location: contact.php?err=100"); exit; }
	}// if email
	else
	{ header("Location: contact.php?err=101"); exit; }
?>