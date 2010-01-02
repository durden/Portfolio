<?php
	require("inc/uiHdr.php");
	require("inc/dbHdr.php");
echo '<a href="insert_work.php">Insert a new featured work</a>&nbsp;&nbsp;&nbsp;' . 
		'<a href="home.php">Admin Home</a> <br /><br />';

	echo '<style type="text/css">
			TD { border-bottom: 1px solid #000000; }
		</style>';
	
	$sql = "SELECT feature_id,feature_name FROM featured_work";
	
	$result = mysql_query($sql,$link);
	
	echo '<table cellpadding="4" cellspacing="0" border="0" width="100%"	>';
	
	if($result != "")
	{
		while($row = mysql_fetch_row($result))
		{
			echo'<tr style="background-color: #FFFFAA;">' .
				'<td>' . $row[1] . '</td>' .
				'<td><a href="insert_work.php?id=' . $row[0] . '" class="imgLink">' .
				'<img src="img/edit.gif" width="25" height="11" alt="Edit Work"' .
				'title="Edit Work"></a></td><td>'.
				'<a href="del_work.php?id=' . $row[0] . '" class="imgLink">' .
				'<img src="img/close.gif" alt="Delete Work" title="Delete Work"' .
				' width="16" height="16"></a></td></tr>';
		}//while
	}//if $result
	echo '</table>';
	
	require("inc/uiFtr.php");
	require("inc/dbFtr.php");	
?>