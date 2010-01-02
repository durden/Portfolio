<?php
	require("inc/uiHdr.php");
	require("inc/dbHdr.php");
	echo '<style type="text/css">
			TD { border-bottom: 1px solid #000000; }
		</style>';
	
	$sql = "SELECT blog_id, title, date_added,active FROM blog_data ORDER BY date_added desc";
				
	$result = mysql_query($sql,$link);
	
	echo '<a href="blog_update.php">Create new blog</a>&nbsp;&nbsp;&nbsp;
	<a href="home.php">Admin Home</a><br /><br />';
	
	echo '<table cellpadding="4" cellspacing="0" width="100%"
			style="font-size: 11pt;">';
	
	echo '<tr style="font-size: 14pt;"><td>Blog Title</td><td colspan="3">Date Created</td></tr>';
	if($result != "")
	{
		while($row = mysql_fetch_row($result))
		{
				$color = 'style="background-color: #FFFFAA;"';
		
			if($row[3] == 0)
				$color = 'style="background-color: #DD0000;"';
			
			echo '<tr ' . $color . '><td style="color: #3366CC;">' .
				$row[1] . '</td><td>' . $row[2] . '</td><td>' .
				'<a href="blog_update.php?id=' . $row[0] . '" class="imgLink">' .
				'<img src="img/edit.gif" width="25" height="11" alt="Edit Blog"' .
				'title="Edit Blog"></a></td><td>'.
				'<a href="del_blog.php?id=' . $row[0] . '" class="imgLink">' .
				'<img src="img/close.gif" alt="Delete Blog" title="Delete Blog"' .
				' width="16" height="16"></a></td></tr>';
		}//while
	}//if	
	echo '</table>';
	require("inc/dbFtr.php");
	require("inc/uiFtr.php");
?>


