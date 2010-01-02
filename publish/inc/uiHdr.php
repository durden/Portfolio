<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
	require('inc/detectBrowser.php');

	$scriptName = explode("/",$_SERVER["SCRIPT_NAME"]);
	foreach($scriptName as $val)
	{
		
		if(preg_match("/\.php$/",$val))
		{
			$pageName = substr($val,0, $val.length-4);	 // get all but last 4 characters
			break;
		}
	}

?>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="http://www.lukelee.net/portfolio.css">
	<title>Charles (Luke) Lee</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<script language="javascript" src="inc/common.js" type="text/javascript"></script>
</head>
<body id="admin">

<div id="header">
	<img src="img/name_banner.jpg" height="136" width="154" style="position: absolute; left: 0px; top:0px;" title="Charles (Luke) Lee" alt="Charles (Luke) Lee" />
	<img src="img/logo1.jpg" height="127" width="176" align="right" style="float: right;" title="Create. Refine. Repeat" alt="Create. Refine. Repeat."/><br />
</div>
<div id="shadow"></div>
<div id="container">
	<div id="content">
