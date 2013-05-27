<?php

if($_POST){

	$fullName = $_POST['inputFullName'];
	$contactNumber = $_POST['inputContactNumber'];
	$emailAddress = $_POST['inputEmailAddress'];
	$enquiry = $_POST['inputEnquiry'];

	$body = "You have received a Contact Form submission from www.michaelcrothers.com\n\n";
	$body .= "The following values were captured: \n\n";

	$body .= "Full Name: " . $fullName . "\n";
	$body .= "Contact Number: " . $contactNumber . "\n";
	$body .= "E-mail Address: " . $emailAddress . "\n\n";
	$body .= "Enquiry: \n" . $enquiry . "\n";

	require_once('class.phpmailer.php');

	$mail = new PHPMailer();

	$mail->IsSMTP();  // telling the class to use SMTP
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host     = "c1s2-2e-syd.hosting-services.net.au"; // SMTP server
	$mail->Port 	= 465; // SMTP port number
	$mail->Username = "admin@michaelcrothers.com"; // Account username
	$mail->Password = "Fromad93"; // Account password

	$mail->SetFrom('admin@michaelcrothers.com', 'admin@michaelcrothers.com');
	$mail->AddAddress("michaelgeorgecrothers@gmail.com");

	$mail->Subject  = "Contact Form Submission";
	$mail->Body     = $body;
	$mail->WordWrap = 50;

	if(!$mail->Send()) {

		$message .= '<p>Message was not sent.</p>';
		$message .= '<p>Mailer error: ' . $mail->ErrorInfo . '</p>';

		echo $message;

	} else {

		$message .= '<p class="lead">Thank you ' . $fullName . '! Your message has been sent and should be responded to within the next 24 hours.</p>';

		echo $message;
	}

} else {

	header('Location: /');

}

?>