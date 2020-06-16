<?php 
if (isset($_POST['form']) && $_POST['form'] == 1 ) {

	$to = 'logistic@kazbiotrans.kz';
	$name = trim(stripslashes(htmlspecialchars($_POST['name'])));
	$last_name = trim(stripslashes(htmlspecialchars($_POST['last_name'])));
	$email = trim(stripslashes(htmlspecialchars($_POST['email'])));
	$phone = trim(stripslashes(htmlspecialchars($_POST['phone'])));
	$message = trim(stripslashes(htmlspecialchars($_POST['message'])));
	
	if($name == "" || $last_name == "" || $email == "" || $phone == "" ){

		return false;
	
	}
	else{

		$object = 'Новая заявка КазБиоТранс';
		$message = 'Имя: '.$service.'<br>Фамилия: '.$name.'<br>Почта: '.$phone.'<br>Телефон: '.$phone.'<br>Сообщение: '.$message;
		$headers = 'From: logistic@kazbiotrans.kz' . "\r\n" .
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

	$to = 'logistic@kazbiotrans.kz';
	$name = trim(stripslashes(htmlspecialchars($_POST['name'])));
	$phone = trim(stripslashes(htmlspecialchars($_POST['phone'])));

	if($name == "" || $phone == ""){

		return false;
	
	}
	else{

		$object = 'Новая заявка КазБиоТранс';
		$message = '<br>Имя: '.$name.'<br>Телефон: '.$phone;
		$headers = 'From: logistic@kazbiotrans.kz' . "\r\n" .
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