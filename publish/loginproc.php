<?php
require("inc/dbHdr.php");
require("inc/util.php");

function redirectPage($err)
{ header("Location: login.php?e=$err");}

$user = $_POST['username'];
$password = $_POST['pass'];

$max = 20;

if($user == "" || $password == "")
{
	redirectPage(1001);
	exit;
}

if(strlen($user) > $max || strlen($password) > $max)
{
	redirectPage(1000);
	exit;
}

$query = "SELECT count(*) as cnt, username,first_name,last_name,user_id FROM users WHERE username='$user' AND password='$password' GROUP BY user_id"; 
			 
$result = mysql_query($query,$dbLink) or die("could not sumbit quer1y");
$resultRow = mysql_fetch_array($result);

if($resultRow["cnt"] != 1)
{
	redirectPage(1002);
	exit;
}//if

$_SESSION["loggedIn"] = 1;
$_SESSION["user_id"] = $resultRow["user_id"];
$_SESSION["usrFriendly"] = $resultRow["firstname"] . " " . $resultRow["lastname"];

require("inc/dbFtr.php");
header("Location: blog_update.php");
?>
