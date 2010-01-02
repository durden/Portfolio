<?php require("inc/uiHdr.php"); ?>

<h3>Please Login</h3>
<hr style="position: absolute; left: 40px; width:400px;">
<br><br>
<?php

if(isset($_GET["e"]))
{ $err = $_GET["e"]; }
	
	switch($err)
	{
		case 1000:
			$errMsg = 'Username or password is too long, please stay below 20 characters.';
			break;
		case 1001:
			$errMsg = 'Please enter a username and password.';
			break;
		case 1002:
			$errMsg = 'Invalid username and/or password. Please try again.';
			break;		
		default:
			$userName = "";
			$errMsg = "";
			break;	
	}//switch

print '<span style="color: #FF0000; font-size: 10pt;">' . $errMsg . '</span>';
?>
<br><br>
<form action="loginproc.php" method="POST" name="login">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td style="font-size: 10pt; font-weight: bold;">User Name:&nbsp;&nbsp;</td>
			<td style="font-size: 10pt;"><input type="text" maxlength="25" name="username" value="<? echo $username ?>"></td>
		</tr>	
		<tr>
			<td style="font-size: 10pt; font-weight: bold;">Password:&nbsp;&nbsp;</td>
			<td style="font-size: 10pt;"><input style="margin-top: 5px;"type="password" maxlength="25" name="pass" value=""></td>
		</tr>
		<tr>
			<td><input type="submit" value="Submit" style="margin-top: 15px; width: 100px;"></td>
			<td><input type="reset" value="Cancel" style="margin-top: 15px; width: 100px; margin-left: 5px;"></td>
		</tr>	
	</table>


</form>

<?php require("inc/uiFtr.php"); ?>
