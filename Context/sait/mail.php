<?php 
if (isset($_POST['Service'])) {

	$msg = '';

	$to = 'info@progroup.kz';
	$name = trim(stripslashes(htmlspecialchars($_POST['Name'])));
	$phone = trim(stripslashes(htmlspecialchars($_POST['Phone'])));
	$service = trim(stripslashes(htmlspecialchars($_POST['Service'])));

	if($name == "" || $phone == "" || $service == ""){

		echo "Вы ввели не все поля.";
	
	}
	else{

		$object = 'Новая заявка ProGroup';
		$message = 'Услуга: '.$service.'<br>Имя: '.$name.'<br>Телефон: '.$phone;
		$headers = 'From: noreply@context.com.kz' . "\r\n" .
		'Content-type: text/html; charset=utf-8'. "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		if (!mail($to, $object, $message, $headers)) {
	        //The reason for failing to send will be in $mail->ErrorInfo
	        //but you shouldn't display errors to users - process the error, log it on your server.
	        $msg = 'Простите, что-то пошло не так. Пожалуйста, попробуйте позже.';
	    } else {
	        $msg = 'Наш менеджер свяжется с Вами в ближайшее время.';
	    }

		echo $msg;

	}
}

?>