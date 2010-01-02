<?php
	$isIE = 0;

	if(preg_match('/MSIE/',$_SERVER['HTTP_USER_AGENT']))
		$isIE = 1;
?>