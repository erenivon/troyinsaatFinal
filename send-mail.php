<?php
	$site_name = 'Troy İnşaat'; //Site Adı
	$sender_domain = 'info@troyinsaat.com.tr'; //mail
	$to = 'info@troyinsaat.com.tr'; //mail tekrar

    $name = trim( $_POST['name'] );
	$email = trim( $_POST['email'] );
	$subject = trim( $_POST['subject'] );
	$message = trim( $_POST['message'] );
	
	$error = false;
	if ( $name === "" ) { $error = true; }
	if ( $email === "" ) { $error = true; }
	if ( $subject === "" ) { $error = true; }
	if ( $message === "" ) { $error = true; }
	
	if(isset($_POST['url']) && $_POST['url'] == ''){
		 
		if ( $error == false )
		{
			$body = "Name: $name \n\nEmail: $email \n\nMessage: $message";
			
			$headers = "From: " . $site_name . ' <' . $sender_domain . '> ' . "\r\n";
			$headers .= "Reply-To: " . $name . ' <' . $email . '> ' . "\r\n";
			
			$mail_result = mail( $to, $subject, $body, $headers );
			
			if ( $mail_result == true )
				{ echo 'success'; }
			else
				{ echo 'unsuccess'; }
		}
		else 
		{
			echo 'error';
		}
	}
	else 
	{
		echo 'success';
	}
	
?>