<?php 
	require('inc/uiHdr.php'); 
	require('inc/dbHdr.php');
?>
    <p class="intro">
        My name is <a href="#">Luke Lee</a>. I <a href="#">write</a> and
        <a href="#">talk</a> about software.
    </p>
    <ul class="posts">
        <?php
            $sql = "SELECT title, date_added
                    FROM blog_data bd, web_users wb
                    WHERE bd.created_by = wb.user_id
                    ORDER BY date_added desc";
            
            $result = mysql_query($sql,$link);
            while($row = mysql_fetch_row($result))
            {
                //$id = $row[0];
                $title = $row[0];
                $date = $row[2];

                echo '<li><a href="#">' . $title . '</a></li>';
            }
        ?>
    </ul>
<?php 
	require('inc/dbFtr.php');
	require('inc/uiFtr.php');
?>
