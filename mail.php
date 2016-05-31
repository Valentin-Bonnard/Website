<?php
if(isset($_POST['submit'])) {
    $message=
	'Name:'.$_POST['name'].'<br />
	Subject:'.$_POST['subject'].'<br />
	Email:'.$_POST['email'].'<br />
	Comment'.$_POST['message'].'';
	
	require "phpmailer/class.phpmailer.php"; // Inclure la class PHPMailer
	
	$mail = new PHPMailer();
	
	$mail->IsSMTP(); // Prépare une connection SMTP 
	$mail->SMTPAuth = true; // Connection avec SMTP nécessite une authotisation
	$mail->SMTPSecure = "ssl" // Connection TLS
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // Port SMTP Gmail
	$mail->Encoding = '7bit';
	
	$mail->Username = "valentinbonnard0303@gmail.com"; // Adresse Gmail complête
	$mail->Password = "valentin03031992"; // Mon mot de passe Gmail
	
	//Composition
	$mail->SetFrom($_POST['email'], $_POST['name']);
	$mail->AddReplyTo($_POST['email'], $_POST['name']);
	$mail->Subject = "Nouveau contact"; // Objet ( pas requiq mais important)
	$mail->MsgHTML($message);
	
	$mail->AddAddress("valentin03031992@gmail.com", "Recipient name");
	$result = $mail->Send();
	$message = $result ? 'Success' : 'Failed';
	unset($mail);