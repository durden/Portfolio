<?php
$_SESSION["loggedIn"] = 0;
$_SESSION["user_id"] = 0;
$_SESSION["usrFriendly"] = 0;

session_destroy();

header("Location: home.php");
?>
