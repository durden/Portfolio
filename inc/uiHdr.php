<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php 
	$scriptName = explode("/",$_SERVER["SCRIPT_NAME"]);
	foreach($scriptName as $val)
	{
		
		if(preg_match("/\.php$/",$val))
		{
			$pageName = substr($val,0, $val.length-4);	 // get all but last 4 characters
			break;
		}
	}
	if($pageName != "error")	
		{ require('inc/detectBrowser.php'); }
?>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="/portfolio.css">
    <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
	<title>Charles (Luke) Lee</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<script src="/inc/common.js" type="text/javascript"></script>
	<!--[if IE]>
		<style type="text/css">
			#topNav {margin: 25px 0px 15px 150px; }
		</style>
	<![endif]-->
</head>
<body id="<?php echo $pageName ?>">

<div id="header">
	<img src="/img/name_banner.jpg" height="136" width="154" style="position: absolute; left: 0px; top:0px;" title="Charles (Luke) Lee" alt="Charles (Luke) Lee">
	<img src="/img/logo1.jpg" height="127" width="176"style="float: right;" title="Create. Refine. Repeat" alt="Create. Refine. Repeat."><br>
	<div id="topNav">
		<a href="/home.php">Home</a> | 
		<a href="/about.php">About</a> | 
		<a href="/work.php">Work</a> | 
		<a href="/contact.php">Contact</a> | 
		<a href="/blog.php">Blog</a>
	</div>	
</div>
<div id="shadow"></div>
<div id="container">
	<div id="content">
