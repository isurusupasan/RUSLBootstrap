<?php
	if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	
	$to="dskapuwatte@yahoo.com";
	$headers = "From: ".$visitor_email;
	$email_body="User name:".$name. "User email:".$visitor_email. "User message:".$message; 
	
	mail($to,$subject,$email_body,$headers) or die("Error!");
	
	header("Location:contact.php?mailsend");
	}	
?>