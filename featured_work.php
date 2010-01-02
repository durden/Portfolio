	</div> <!-- content -->
	<div id="sidebar">
		<h3 class="long" <?php if($isIE) { echo 'style="margin-top:-4px;"'; } ?> >Featured Work</h3>
<?php
require("inc/dbHdr.php");

$result = "";

$sql = "SELECT feature_id,feature_name,thumbnail_name,thumbnail_width,thumbnail_height,intro_text 
		FROM featured_work ORDER BY RAND() LIMIT 1";

$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());

if($result != "")
{
	$id = mysql_result($result,0,"feature_id");
	$name = mysql_result($result,0,"feature_name");
	$img_name = mysql_result($result,0,"thumbnail_name");
	$width = mysql_result($result,0,"thumbnail_width");	
	$height = mysql_result($result,0,"thumbnail_height");
	$text = mysql_result($result,0,"intro_text");
	
	$imgTag = '<img src="' . $img_name . '" width="' . $width . '" height="' . 
		$height . '" title="' . $name . '" alt="' . $name . '" style="border: 1px solid #000000;" />';	
}
?>
		
		
		<a href="work_detail.php?id=<?php echo $id;?> " class="imgLink"> <?php echo $imgTag; ?> </a>
		<p> <?php echo $text; ?> </p>
		<p>Want to see more of my work? Go <a href="work.php">here</a>.</p>
	</div>

<?php 
	require("inc/dbFtr.php"); 
?>
