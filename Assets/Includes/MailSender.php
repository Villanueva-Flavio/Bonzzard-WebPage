<?php
    include_once('Utils/die.php');
	function sendEmail($recipent, $subject, $message) {
		require_once "Mail.php";
		
		$settings = array(
			'mail' => array(
				'email' => 'noreply.bonzzard@gmail.com',
				'passwd' => 'tbsk hxab iike kkyj'
			),
		);
		
		$headers = array(
			'From' => $settings['mail']['email'],
			'To' => $recipent,
			'Subject' => $subject
		);
		
		$smtp = Mail::factory('smtp', array(
				'host' => 'ssl://smtp.gmail.com',
				'port' => '465',
				'auth' => true,
				'username' => $settings['mail']['email'],
				'password' => $settings['mail']['passwd'] 
			));
		
		$mail = $smtp->send($recipent, $headers, $message);
		
		if (PEAR::isError($mail)) {
			echo '<script> alert('.$mail->getMessage().')</script>';
		} else {
			echo "<script> alert('Mail sent successfully!') </script>";
		}

	}
?>