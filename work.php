<?php 
	require('inc/uiHdr.php');
	require('inc/dbHdr.php');
?>
    <div class="talks">
        <p class="intro talks"> I've <strong>talked</strong> </p>
        <ul class="posts talks">
            <li>
                at <a href="http://www.meetup.com/python-14/">Pyhou</a>
                about <a href="http://durden.github.com/pyhou_oil/">Developing oil applications</a>.</li>
            <li>
                at <a href="http://www.meetup.com/Django-Houston/">Django Houston</a>
                about <a href="http://durden.github.com/django_deployment/">Django cloud deployment</a>.</li>
        </ul>
    </div>

    <div class="creations">
        <p class="intro creations"> I've <strong>created</strong> </p>
        <ul class="posts creations">
<?php
	$id = "";
	$name = "";
	$intro = "";
    $sql = "SELECT feature_id,feature_name, intro_text
            FROM featured_work order by last_updated desc";
	$result = mysql_query($sql,$link) or die('Unable to retrieve featured work.');
	if($result != "")
	{
		while($row = mysql_fetch_row($result))
		{
			$id = $row[0];
			$name = $row[1];
			$intro = $row[2];

            $period = '';
            if ($intro[strlen($intro)-1] != ".") {
                $period = ".";
            }

            echo '<li><a href="work_detail.php?id=' . $id . '">' . $intro .
                    '</a>' . $period . '</li>';
		}//while
	}//if $result
	else
	{ header("Location: home.php"); exit; }
	
	require('inc/dbFtr.php');	
	require('inc/uiFtr.php');
?>
            </ul>
        </div>
        <br style="clear: both;">
    </div>
