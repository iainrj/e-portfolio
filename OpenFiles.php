<?php
	if(isset($_POST["filename"])){ $text_file = $_POST["filename"];
	
	$handle = fopen($text_file, "r");
	if ($handle) {
		while ( ($line = fgets($handle) ) !== false) {
			echo "<pre>";
			echo $line;
			echo "</pre>";
		}
	} else {
		echo "Error opening file!";
	}
	fclose($handle);

?>