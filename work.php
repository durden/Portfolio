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
	$section = "personal";	
	$sql = "SELECT feature_id,feature_name,thumbnail_name,thumbnail_width,
			thumbnail_height,intro_text,personal FROM featured_work order by personal desc, last_updated desc";
			
	$result = mysql_query($sql,$link) or die('Unable to retrieve featured work.');
	
	if($result != "")
	{
		echo '<h3 class="long">Work Summary</h3>' . "\n";
		echo '<p>My work is subdivided into 2 categories, <a href="#pro">professional</a> and <a href="#personal">personal</a>.</p>
		      <p>The majority of my personal work is open source and the code can be viewed on my
		         <a href="http://www.github.com/durden">github profile</a>.</p>';
		echo '<h4 id="personal">Personal</h4>';
		echo '<table cellpadding="0" cellspacing="0" border="0" width="100%" class="proj_desc">';
		while($row = mysql_fetch_row($result))
		{
			$id = $row[0];
			$name = $row[1];
			$thumb_name = $row[2];
			$thumb_width = $row[3];
			$thumb_height = $row[4];
			$intro = $row[5];
			$personal = $row[6];

			/* Switching from personal section to professional */
			if ($section == "personal" && $personal == 0) {
				$section = "professional";
				echo '</table><br><br><h4 id="pro">Professional</h4>';
				echo '<table cellpadding="0" cellspacing="0" border="0" width="100%" class="proj_desc">';
			}
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
