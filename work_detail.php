<?php

    require('inc/uiHdr.php');
    require('inc/dbHdr.php');

    $id = "";
    $name = "";
    $big_name = "";
    $big_width = "";
    $big_height = "";
    $full_text = "";
    $web = "";
    $updated = "";

    $id = $_GET['id'];

    if($id == ""  || !is_numeric($id)) {
        header("Location: work.php");
        exit;
    }

	$sql = "SELECT feature_name,big_img_name,big_img_width,
            big_img_height,full_text,web_address,last_updated
            FROM featured_work WHERE feature_id = '$id'";

    $result = mysql_query($sql,$link) or die('Unable to retrieve featured work.');

    if($result != "") {
        $row = mysql_fetch_row($result);

        $name = $row[0];
        $big_name = $row[1];
        $big_width = $row[2];
        $big_height = $row[3];
        $full_text = $row[4];
        $web = $row[5];
        $updated = $row[6];
        
        echo '<h2 class="creations">' . $name . '</h2>' . "\n";
        echo '<img src="' . $big_name . '" width="' . $big_width . 
                '" height="' . $big_height . '" title="' . $name . '"alt="'. 
                $name .  '">' . "\n";
        echo '<div class="creations">';
        echo  $full_text;
			
    echo '<p>Last Updated on ' . $updated . '</p>'; 
    echo '</div>';

    }//if $result
    else {
        header("Location: work.php"); exit;
    }

    require('inc/dbFtr.php');	
    require('inc/uiFtr.php');
?>
