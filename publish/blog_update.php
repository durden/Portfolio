<?php 
	require('inc/uiHdr.php');
	require('inc/dbHdr.php');
	
	$id = $_GET['id'];
	$title = "";
	$body = "";
	$active = 0;
	
	if($id != "")
	{
		$sql = "SELECT blog_id,title,body_text,active FROM blog_data
				WHERE blog_id = '$id'";
		$result = mysql_query($sql,$link);
		if($result != "")
		{
			$id = mysql_result($result,0,"blog_id");
			$title = mysql_result($result,0,"title");
			$body = mysql_result($result,0,"body_text");
			$active = mysql_result($result,0,"active");
			if($active == 1)
				$checked = 'checked';
			else
				$checked = "";
		}//if $result
	}//if $id
?>

<h3>Contact</h3>

<?php echo '<a href="viewblogs.php">View current blogs</a>&nbsp;&nbsp;&nbsp;
	<a href="home.php">Admin Home</a><br /><br />'; ?>

<form action="insert_blog.php" method="post">
	<fieldset class="blog">
		<legend>Blog Here</legend>
		<ul>
			<li>
				<label for="title">Blog Title:</label>
				<input type="text" name="title" maxlength="200" style="width:450px;"
					value="<?php echo $title; ?>"/>
			</li>	
			<li>
				<label for="body">Body:</label>
				<textarea name="body" cols="52" rows="10"><?php echo $body; ?></textarea>
			</li>
			<li>
				<label for="active">Active?</label>
				<input type="checkbox" value="1" name="active" <?php echo $checked; ?> >
			</li>
			<li>
				<input type="submit" value="Blog" class="button" />
				<input type="reset" value="Clear" class="button" />
			</li>
		</ul>
	</fieldset>	
	<input type="hidden" value="<?php echo $id ?>" name="id">
</form>


<?php 
	require('inc/dbFtr.php');	
	require('inc/uiFtr.php');
?>