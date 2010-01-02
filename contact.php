<?php 
	require('inc/uiHdr.php');
	$sidebar = 0; 
	$err = $_GET['err'];

	switch($err)
	{
		case 100:
			$errMsg = "Your email was unable to be sent at this time.  Please try again later.";
			$isMsg = 1;
			break;
		case 1:
			$errMsg = '<img src="/img/go.jpg" width="50" height="48">&nbsp;&nbsp;&nbsp; ' .
						'Your message was sent.  Thank you.';
			$isMsg = 1;
			break;
		case 101:
			$errMsg = '<img src="/img/error.jpg" width="100" height="40">&nbsp;&nbsp;&nbsp; ' .
						'Please enter a valid email address.';
			$isMsg = 1;
			break;
		case 102:
			$errMsg = '<img src="/img/error.jpg" width="100" height="40">&nbsp;&nbsp;&nbsp; ' .
						'Please fill out all forms marked with **';
			$isMsg = 1;
			break;			
		default:
			$isMsg = 0;
			break;
	}//switch
?>




<h3>Contact</h3>

<?php 
	if($isMsg) 
	{
		if($err != 1)
			{ echo '<div class="errMsg">' . $errMsg . '</div>'; }
		else
			{ echo '<div class="successMsg">' . $errMsg . '</div>'; }
	}//outer if		
?>

<p class="successMsg">Form is temporarily disabled.  Please send information to luke (at) lukelee (dot) net.</p>
<form action="#" method="post">
	<fieldset>
		<legend>Contact Me</legend>
		<ul>
			<li>
				<label for="name">** Name:</label>
				<input id="name" type="text" name="name" maxlength="20" />
			</li>	
			<li>
				<label for="email">** Email:</label>
				<input id="email" type="text" name="email" maxlength="50" style="width: 151px;"/>
			</li>
			<li>
				<label for="msg">** Message:</label>
				<textarea id="msg"name="msg" cols="40" rows="5"></textarea>
			</li>
			<li>
				<input type="submit" value="Send" class="button" />
				<input type="reset" value="Clear" class="button" />
			</li>
		</ul>
	</fieldset>		
</form>


<?php require('inc/uiFtr.php');?>
