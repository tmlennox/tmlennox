<?php

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$subject = trim($_POST['subject']);
	$message = trim($_POST['message']);
	$contactAbout = trim($POST['contactAbout']); //What are you contacting us about
	$currentGym = trim($POST['currentGym']);
	$yearsTraining = trim($POST['yearsTraining']);
	$trainedCompeted = trim($POST['trainedCompeted']);
	$hopingToGet = trim($POST['hopingToGet']);
	$comments = trim($POST['comments']);

	if ($contactAbout == 'firstClass') $contactAbout = 'Trying a first class';
	if ($contactAbout == 'dropIn') $contactAbout = 'Dropping in for a class';
	if ($contactAbout == 'question') $contactAbout = 'Other/question';

	$emailTo = 'guardhousebjj@gmail.com'; //Put your own email address here
	if (empty($subject)) {
	    $subject = "Contact Form Message : $contactAbout";
	}
	$body = "Name: $name \n\nEmail: $email \n\nPhone: $phone \n\What are you contacting us about:\n$contactAbout \n\nCurrent Gym: $currentGym \n\n Years training: $yearsTraining \n\n Have you trained in any other martial arts or competed in any other sports? \n $trainedCompeted \n\n What are you hoping to get out of your jiu-jitsu training?\n $hopingToGet \n\n Comments:\n $comments";
	$headers = 'From: '.$email."\r\n" .
        'Reply-To: '.$email."\r\n";

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo ('success');
	
?>
