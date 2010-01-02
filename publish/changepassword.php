<?php 
require("inc/requireLogin.php");
require("inc/uiHdr.php"); 
?>

<h3 class="noMargin">Change Password</h3>
<hr style="position: absolute; left: 40px; width:400px;">
<br><br>
<?php

if(isset($_GET["e"]))
{ $err = $_GET["e"]; }
	
	switch($err)
	{
		case 1000:
			$errMsg = 'Please fill out all the password fields.';
			break;	
		case 1001:
			$errMsg = 'Too many characters in one of the password fields.';
			break;
		case 1002:
			$errMsg = 'Invalid current password, please try again.';
			break;		
		default:
			$errMsg = "";
			break;	
	}//switch

print '<span style="color: #FF0000; font-size: 10pt;">' . $errMsg . '</span>';
?>
<br><br>
<form action="changepasswordproc.php" method="POST" name="changepass">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td style="font-size: 10pt; font-weight: bold;">Current Password:&nbsp;&nbsp;</td>
			<td style="font-size: 10pt;"><input type="password" maxlength="20" name="currpass" value=""></td>
		</tr>	
		<tr>
			<td style="font-size: 10pt; font-weight: bold;">New Password:&nbsp;&nbsp;</td>
			<td style="font-size: 10pt;"><input style="margin-top: 5px;"type="password" maxlength="20" name="pass1" value=""></td>
		</tr>
		<tr>
			<td style="font-size: 10pt; font-weight: bold;">Re-type New Password:&nbsp;&nbsp;</td>
			<td style="font-size: 10pt;"><input style="margin-top: 5px;"type="password" maxlength="20" name="pass2" value=""></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Submit" style="margin-top: 15px; width: 100px;">
			<input type="reset" value="Cancel" style="margin-top: 15px; width: 100px; margin-left: 5px;"></td>
		</tr>	
	</table>


</form>

<?php require("inc/uiFtr.php"); ?>