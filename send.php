<?php

    $name = $_POST['name'];
    $email =$_POST['email'];
	$number = $_POST['number'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$email_from = 'muhammadarab781@gmail.com';

	$email_subject = 'Contact Form Submission';

	$email_body = "Name: $name\n Email: $email \n Number: $number\n Subject: $subject\n Message: $message\n";

	$to = "muhammadarab784@gmail.com";

	$headers = "From: $email_from\r\n";

	$headers = "Reply-To: $email\r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("alert");
	
	alert("Your response is recorded");

    function alert($msg)
    {echo "<script type='text/javascript'>alert('$msg'); location.href='index.html'</script>";}

?>