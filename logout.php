<?php
	session_start();
	
	if(isset($_SESSION["auteurNews"])) {
		unset($_SESSION["auteurNews"]);
	}
	
	session_destroy();
	header("location:page 1.php");
?>