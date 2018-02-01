<?php
require 'connect.inc.php';

if (isset($_POST['text'])) {
	
	$text = $_POST['text'];
	if (!empty($text)){
	
		$query = "INSERT INTO `data` VALUES ('', '".mysqli_escape_string($link,$text)."')";
		if($result = mysqli_query($link,$query)) {
			
			echo 'Data inserted';
			
		} else {
			echo 'Failed.';
		}
		
	} else {
		
		echo 'Please type something!';
		
	}
	
}


?>
