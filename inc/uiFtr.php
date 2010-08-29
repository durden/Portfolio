<?php

	if(!$sidebar)
	{ echo '</div> <!-- content -->'; }	
?>

	
</div> <!-- container -->
	<div id="footer">
	<div id="diigo" style="float: left;">
 	  <?php require("inc/diigo.php"); ?>
	</div>
	<div id="google" style="float: left;">
 	  <?php require("inc/google.php"); ?>
	</div>
	<p id="copyright" style="clear: left;">
	 	This website is designed for Mozilla Firefox 1.0, Internet
		Explorer 6, and Safari 1.3.  All rights reserved.  Copyright Luke Lee. <br>
			
<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.lukelee.net/<?php echo $pageName ?>.php"> Valid HTML</a>

<a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.lukelee.net/portfolio.css"> Valid CSS </a>
	</p>
	</div>
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
			var pageTracker = _gat._getTracker("UA-73055-3");
			pageTracker._trackPageview();
		} catch(err) {}
	</script>
</body>
</html>
