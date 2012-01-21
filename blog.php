<?php 
    require('inc/uiHdr.php');
    require('inc/dbHdr.php');

    $id = $_GET['id'];

    if($id == ""  || !is_numeric($id)) {
        header("Location: home.php");
        exit;
    }
?>

<?php
    $sql = "SELECT title, body_text, date_added, first_name, last_name
            FROM blog_data bd, web_users wb
            WHERE bd.created_by = wb.user_id and bd.blog_id = '" . $id .
            "'ORDER BY date_added desc";

    $result = mysql_query($sql,$link);
    $row = mysql_fetch_row($result);

    if ($row != "") {
        $title = $row[0];
        $body = $row[1];
        $date = $row[2];
        $author = $row[3] . ' ' . $row[4];

        echo '<div class="creations">';
        echo '<h2>' . $title . '</h2>';
        echo '<p>' . $body . '<p>';
        echo '<p>' . $date . '</p></div>';
    }
?>

<?php 
    require('inc/dbFtr.php');
    require('inc/uiFtr.php');
?>
