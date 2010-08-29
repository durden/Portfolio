<?php 
	require('inc/uiHdr.php');
	require('inc/dbHdr.php');
	
	$name = "";
	$thumb_name = "";
	$thumb_width = "";
	$thumb_height = "";
	$big_name = "";
	$big_width = "";
	$big_height = "";
	$intro = "";
	$full_text = "";
	$web = "";
	$id = $_GET['id'];
	
	if($id != "")
	{
		$sql = "SELECT feature_name, thumbnail_name,thumbnail_width,thumbnail_height,
				big_img_name,big_img_width,big_img_height,intro_text,full_text,web_address,personal
				FROM featured_work
				WHERE feature_id = '$id'";
		
		$result = mysql_query($sql,$link) or die('Unable to get featured works.');
		if($result != "")
		{
			$row = mysql_fetch_row($result);
			$name = $row[0];
			$thumb_name = $row[1];
			$thumb_width = $row[2];
			$thumb_height = $row[3];
			$big_name = $row[4];
			$big_width = $row[5];
			$big_height = $row[6];
			$intro = $row[7];
			$full_text = $row[8];
			$web = $row[9];
			$personal = "";
			if ($row[10] == 1)
				$personal = "checked";
		}//if	
	}//if 
?>
<a href="viewworks.php">View all works</a>&nbsp;&nbsp;&nbsp; 
<a href="home.php">Admin Home</a> <br /><br />

<form action="insert_workproc.php" method="post">
	<fieldset class="work">
		<legend>Featured Work</legend>
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td><label for="name">Name:</label></td>
				<td><input type="text" name="name" maxlength="50" value="<?php echo $name; ?>"/></td>
				<td><label for="thumb_name">Thumbnail Name:</label></td>
				<td><input name="thumb_name" value="<?php echo $thumb_name; ?>" maxlength="150"/></td>
			</tr>
			<tr>
				<td><label for="thumb_width">Thumbnail Width:</label></td>
				<td><input name="thumb_width" value="<?php echo $thumb_width; ?>" maxlength="3"/></td>				
				<td><label for="thumb_height">Thumbnail Height:</label></td>
				<td><input name="thumb_height" value="<?php echo $thumb_height; ?>" maxlength="3"/></td>				
			</tr>
			<tr>
				<td><label for="big_name">Big name:</label></td>
				<td><input name="big_name" value="<?php echo $big_name; ?>" maxlength="150"/></td>
				<td><label for="big_width">Big Width:</label></td>
				<td><input name="big_width" value="<?php echo $big_width; ?>" maxlength="3"/></td>				
			</tr>
			<tr>
				<td><label for="big_height">Big Height:</label>
				<td><input name="big_height" value="<?php echo $big_height; ?>" maxlength="3"/>				
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><label for="intro">Intro Text:</label></td>
				<td colspan="3"><textarea name="intro" rows="5" cols="30"><?php echo $intro; ?></textarea></td>				
			</tr>
			<tr>
				<td><label for="full">Full Text:</label></td>
				<td colspan="3"><textarea name="full" rows="10" cols="52"><?php echo $full_text; ?></textarea></td>				
			</tr>
			<tr>
				<td><label for="web">Web Address:</label></td>
				<td colspan="3"><input style="width: 300px;" name="web" value="<?php echo $web?>" maxlength="200" /></td>
			</tr>
			<tr>
				<td><label for="personal">Personal:</label></td>
				<td colspan="3"><input type="checkbox" value="1" name="personal" <?php echo $personal?> /></td>
			</tr>
			<tr>
				<td colspan="4"><input type="submit" value="Insert" class="button" /></td>
			</tr>
		</table>
	</fieldset>	
	<input type="hidden" value="<?php echo $id ?>" name="id" />
</form>


<?php 
	require('inc/dbFtr.php');	
	require('inc/uiFtr.php'); 
?>
