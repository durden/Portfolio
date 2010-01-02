<?php
	if(!$sidebar)
		echo '</div> <!-- content -->';
?>

	<div id="footer">
			This website is designed for Mozilla Firefox 1.0 and Internet
			Explorer 6.  All rights reserved.  Copyright Luke Lee. <br />
			
			<?php 
				if($pageName != "work")
				{
					echo '<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.admin.lukelee.net%2F' . $pageName . '.php">' .
					'<img src="img/valid-html401.gif" border="0" alt="Valid HTML 4.01 Transitional" title="Valid HTML 4.01 Transitional" height="21" width="60">' .
					'</a>';
				}// work.php does not validate b/c of dojo toolkit		
			?>
			
			<a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.admin.lukelee.net/portfolio.css">
				<img height="21" width="60" src="img/vcss.gif" alt="Valid CSS!" title="Valid CSS!">
			</a>
	</div>
</div> <!-- container -->
</body>
</html>
