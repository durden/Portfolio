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
	<img src="/img/name_banner.jpg" height="136" width="154" style="position: absolute; left: 0px; top:0px;" title="Charles (Luke) Lee" alt="Charles (Luke) Lee" />
	<img src="/img/logo1.jpg" height="127" width="176"style="float: right;" title="Create. Refine. Repeat" alt="Create. Refine. Repeat."/><br />
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
<?php
	require('inc/dbHdr.php');
	srand ((double) microtime( )*1000000);
	$rand = rand(0,1);
	
	if($rand == 0)
		$sql = 'select blog_id,title,date_added from blog_data order by date_added desc limit 1';
	else
		$sql = 'select feature_id,feature_name,last_updated from featured_work order by last_updated desc limit 1';
		
	$result = mysql_query($sql,$link);
	
	if($row = mysql_fetch_row($result))
	{
		list($date,$time) = split(' ',$row[2]);
		list($yr,$month,$day) = split('-',$date);
		$date = $month . '/' . $day . '/' . $yr;
		switch($rand)
		{
			case 0:
				$linkTxt = 'New blog <a href="blog.php">' . $row[1] . '</a> was added on ' . $date . ' !';
				break;
			default:
				$linkTxt = 'New featured work <a href="work_detail.php?id=' . $row[0] . '">' . $row[1] . '</a> was added on ' . $date .  ' !';
				break;
		}//switch
		echo '<div class="update"> Recent Updates:  ' . $linkTxt . '</div>';
	}//if $result	
	
	require('inc/dbFtr.php');
?>
	<div id="content">
