<?php 
	require('inc/uiHdr.php');
	require('inc/dbHdr.php');
	
	$sidebar = 0; 
	$id = "";
	$name = "";
	$thumb_name = "";
	$thumb_width = "";
	$thumb_height = "";
	$intro = "";
	
	$sql = "SELECT feature_id,feature_name,thumbnail_name,thumbnail_width,
			thumbnail_height,intro_text FROM featured_work order by last_updated desc";
			
	$result = mysql_query($sql,$link) or die('Unable to retrieve featured work.');
	
	if($result != "")
	{
		echo '<h3 class="long">Work Summary</h3>' . "\n";
		echo '<table cellpadding="0" cellspacing="0" border="0" width="100%" class="proj_desc">'; 		
		while($row = mysql_fetch_row($result))
		{
			$id = $row[0];
			$name = $row[1];
			$thumb_name = $row[2];
			$thumb_width = $row[3];
			$thumb_height = $row[4];
			$intro = $row[5];
			
			echo "\n" . '<tr><td><a href="work_detail.php?id=' . $id . '">' .
					"\n" . '<img src="' . $thumb_name . '" width="' . $thumb_width . 
					'" height="' . $thumb_height . '" title="' . $name . '"alt="'. $name .
					'">' . "\n" . '</a></td>' . "\n<td>" . $intro . "</td>\n" . '</tr>' . "\n";
			echo '<tr><td colspan="2" align="right" class="noBorder"><a href="#">top</a></td></tr>';		
		}//while
	}//if $result
	else
	{ header("Location: home.php"); exit; }
	
	echo '</table>';

	require('inc/dbFtr.php');	
	require('inc/uiFtr.php');
?>
