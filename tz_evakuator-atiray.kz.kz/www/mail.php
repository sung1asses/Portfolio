<?php 
if (isset($_POST['form']) && $_POST['form'] == 1 ) {

	$to = 'Canter0808@mail.ru';
	$message = trim(stripslashes(htmlspecialchars($_POST['message'])));
	$username = trim(stripslashes(htmlspecialchars($_POST['username'])));
	$second_name = trim(stripslashes(htmlspecialchars($_POST['second_name'])));
	$phone = trim(stripslashes(htmlspecialchars($_POST['phone'])));
	$email = trim(stripslashes(htmlspecialchars($_POST['email'])));
	
	if($username == "" || $second_name == "" || $phone == "" || $email == "" ){

		return false;
	
	}
	else{

		$object = 'Новая заявка с сайта';
		$message = 'Имя: '.$username.'<br>Фамилия: '.$second_name.'<br>Почта: '.$email.'<br>Телефон: '.$phone.'<br>Сообщение: '.$message;
		$headers = 'From: Canter0808@mail.ru' . "\r\n" .
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

	$to = 'Canter0808@mail.ru';
	$username = trim(stripslashes(htmlspecialchars($_POST['username'])));
	$phone = trim(stripslashes(htmlspecialchars($_POST['phone'])));

	if($username == "" || $phone == ""){

		return false;
	
	}
	else{

		$object = 'Новая заявка с сайта';
		$message = '<br>Имя: '.$username.'<br>Телефон: '.$phone;
		$headers = 'From: Canter0808@mail.ru' . "\r\n" .
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