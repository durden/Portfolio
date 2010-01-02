<?php 
	require('inc/uiHdr.php');
	require('inc/dbHdr.php');
	$sidebar = 0;
?>

<h3>Blog</h3>

<?php
	$sql = "SELECT title, body_text, date_added, first_name, last_name
			FROM blog_data bd, web_users wb
			WHERE bd.created_by = wb.user_id
			ORDER BY date_added desc";
	
	$result = mysql_query($sql,$link);
	while($row = mysql_fetch_row($result))
	{
		$title = $row[0];
		$body = $row[1];
		$date = $row[2];
		$author = $row[3] . ' ' . $row[4];

		echo '<div class="blog">';
		echo '<h2>' . $title . '</h2>';
		echo '<p>' . $body . '<p>';
		echo '<p class="blogInfo"> Submitted by: ' . $author . '&nbsp;&nbsp;' .
				$date . '</p></div>';
	}
	
	
?>

<?php 
	require('inc/dbFtr.php');
	require('inc/uiFtr.php');
?>