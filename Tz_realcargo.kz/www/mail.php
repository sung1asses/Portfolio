<?php 
if (isset($_POST['form']) && $_POST['form'] == 1 ) {

	$to = 'info@realcargo.kz';
	$name = trim(stripslashes(htmlspecialchars($_POST['name'])));
	$phone = trim(stripslashes(htmlspecialchars($_POST['phone'])));
	$service = trim(stripslashes(htmlspecialchars($_POST['service'])));
	$message = trim(stripslashes(htmlspecialchars($_POST['message'])));

	if($name == "" || $phone == "" || $service == "" || $message == ""){

		return false;
	
	}
	else{

		$object = 'Новая заявка RealCargo';
		$message = 'Услуга: '.$service.'<br>Имя: '.$name.'<br>Телефон: '.$phone.'<br>Сообщение: '.$message;
		$headers = 'From: info@realcargo.kz' . "\r\n" .
		'Content-type: text/html; charset=utf-8'. "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		if (!mail($to, $object, $message, $headers)) {
	        //The reason for failing to send will be in $mail->ErrorInfo
	        //but you shouldn't display errors to users - process the error, log it on your server.
	    } else {
	        echo 'Message sent!';
	    }

	}
}
if (isset($_POST['form']) && $_POST['form'] == 2 ) {

	$to = 'info@realcargo.kz';
	$name = trim(stripslashes(htmlspecialchars($_POST['name'])));
	$phone = trim(stripslashes(htmlspecialchars($_POST['phone'])));

	if($name == "" || $phone == ""){

		return false;
	
	}
	else{

		$object = 'Новая заявка RealCargo';
		$message = '<br>Имя: '.$name.'<br>Телефон: '.$phone;
		$headers = 'From: info@realcargo.kz' . "\r\n" .
		'Content-type: text/html; charset=utf-8'. "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		if (!mail($to, $object, $message, $headers)) {
	        //The reason for failing to send will be in $mail->ErrorInfo
	        //but you shouldn't display errors to users - process the error, log it on your server.
	    } else {
	        echo 'Message sent!';
	    }

	}
}

?>