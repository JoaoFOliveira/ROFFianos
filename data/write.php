<?php
	$line = $_REQUEST['row'];
	
	$myFile = "../contacts.html";
	$fh = fopen($myFile, 'a') or die("can't open file");

	$stringData = $line;
	fwrite($fh, $stringData);

	fclose($fh);

?>