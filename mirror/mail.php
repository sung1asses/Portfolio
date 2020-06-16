<?php
	/*error_reporting(E_ALL); ini_set("display_errors", 2);*/

	$msg = '';

	$to = 'maksim_perfilev@mail.ru';
    $name = trim(stripslashes(htmlspecialchars($_POST['name'])));
    $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
    $phoneNumber = trim(stripslashes(htmlspecialchars($_POST['phoneNumber'])));

	require_once 'PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;
	$mail->CharSet = 'UTF-8';

	// Настройки SMTP
	$mail->isSMTP();
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
	$mail->SMTPAuth = true;
	$mail->SMTPDebug = 0;

	$mail->Host = 'mail.interstroyglass.kz';
	$mail->Port = 25;
	$mail->Username = 'info@interstroyglass.kz';
	$mail->Password = 'y%H80jc2';

	// От кого
	$mail->setFrom('info@interstroyglass.kz', 'Контактная форма');        

	// Кому
	$mail->addAddress($to, 'Admin');

	//Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    
    $mail->Subject = 'Подписка на консультацию';
    //Keep it simple - don't use HTML
    $mail->isHTML(false);
    //Build a simple message body
    $mail->Body = <<<EOT
Пользователь с сайта http://interstroyglass.kz/ подписался на консультацию.

Имя:            {$name}
Почта:          {$email}
Номер телефона: {$phoneNumber}
EOT;
    //Send the message, check for errors
    if (!$mail->send()) {
        //The reason for failing to send will be in $mail->ErrorInfo
        //but you shouldn't display errors to users - process the error, log it on your server.
        $msg = 'Простите, что-то пошло не так. Пожалуйста, попробуйте позже.';
    } else {
        $msg = 'Сообщение отправлено, спасибо за сотрудничество.';
    }

	echo $msg;

	$mail->send();

?>