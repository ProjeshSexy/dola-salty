<?php 
			
			if($op=="email"){
			/*	require_once('../assets/PHPMailer/class.phpmailer.php');
	        	require_once('../assets/PHPMailer/class.smtp.php');
			*/
	        require_once('../App-resourcess/assets/PHPMailer/PHPMailerAutoload.php');

			$mail = new PHPMailer();

			$mail->IsSMTP();  // telling the class to use SMTP
			$mail->Host     = "smtp.fatcow.com"; // SMTP server

			// $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
		    $mail->SMTPAuth   = true;  

		    $mail->Username="projesh.b@synergyforce.ca";
			$mail->Password="!2jEsh9!";
			$mail->port=25;
			$mail->SetFrom('maruf.a@synergyforce.ca', 'Maruf');
			$mail->AddAddress("projesh.b@synergyforce.ca");
	//$mail->AddAddress($email);
	        $mail->IsHTML(true);
	        //$file = file_get_contents(url().'/assets/PHPMailer/index.html', FILE_USE_INCLUDE_PATH);

	      	$mail->Subject  = "Order from QSB";
			$mail->Body     = "Thank u for contact";
			$mail->WordWrap = 50;

			if(!$mail->Send()) {
			  echo 'Message was not sent.';
			  echo 'Mailer error: ' . $mail->ErrorInfo;
			  } else {
			  //echo 'Message has been sent.';
			  	echo 1;
		      	}
		      
		}

?>