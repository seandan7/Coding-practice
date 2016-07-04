<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Post Email</title>
</head>
<body>
<?php

	$myEmailAddress= "sbd12b@gmail.com";
	$subject = "Question from Contact Page";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$header = "from: $name <$email>";
	
	mail($myEmailAddress, $subject, $message, $header);
	
?>	
	<p>Thank you for your message. We will get back to you shortly</p>
</body>
</html>