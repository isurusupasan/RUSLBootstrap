<?php

	if (isset($_POST['submit'])){
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$mailFrom = $_POST['email'];
		$message = $_POST['message'];
		
		$mailTo = "dskapuwatte@yahoo.com";
		
		mail($mailTo,$subject,$message,$mailFrom);
		header("Location: contact1.php?mailsent");
	}
?>