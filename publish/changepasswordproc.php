<?php
require("inc/dbHdr.php");
require("inc/util.php");

function redirectPage($err)
{ header("Location: changepassword.php?e=$err");}

$oldPass = strip_tags($_POST['currpass']);
$pass1 = strip_tags($_POST['pass1']);
$pass2 = strip_tags($_POST['pass2']);


if($pass2  == "" || $pass1  == ""  || $oldPass  == "" )
{
	redirectPage(1000);
	exit;
}//if

if(strlen($pass1) > 20 || strlen($pass2) > 20 || strlen($currpass) > 20)
{
	redirectPage(1001);
	exit;
}//if

$userid = $_SESSION['user_id'];

if($userid <= 0)
{
	header("Location: login.php");
	exit;
}

require("../inc/requireLogin.php");
	
$query = "SELECT count(*) as cnt FROM users WHERE user_id = '$userid' AND password = '$oldPass'";
$result = mysql_query($query,$dbLink) or die("could not sumbit query");

//echo $query;
//exit;	

$count = mysql_result($result,0,"cnt");
if($count == 0)
{
	redirectPage(1002);
	exit;
}//if

$query = "UPDATE users SET password = '$pass1' WHERE user_id = '$userid'";	

//echo $query;
//exit;
mysql_query($query,$dbLink) or die("could not sumbit query");

header("Location: login.php");
require("inc/dbFtr.php");
	
exit;

?>
