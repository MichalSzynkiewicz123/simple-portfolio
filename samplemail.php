<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
	$from_add = $_REQUEST['Email'];

	$to_add = "example@gmail.com"; //<-- put your yahoo/gmail email address here

	$subject = $_REQUEST['Name'];
	$message = $_REQUEST['Message'];

	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $from_add \r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";


	if(mail($to_add,$subject,$message,$headers))
	{
		$msg = "Thanks";
	}
	else
	{
 	   $msg = "Error sending email!";
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Email Send</title>
</head>
<body>
<div>
<h3 class="w3-center"><?php echo $msg ?></h3>
</div>
</body>
</html>
