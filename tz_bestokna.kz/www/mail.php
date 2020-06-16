<?php
/*	error_reporting(E_ALL); ini_set("display_errors", 2);*/

	$msg = '';

	$to = 'www.bestokna.kz@mail.ru';
    $from = trim(stripslashes(htmlspecialchars($_POST['Email'])));
    $name = trim(stripslashes(htmlspecialchars($_POST['Name'])));
    $phone = trim(stripslashes(htmlspecialchars($_POST['Phone'])));

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

	$mail->Host = 'mail.bestokna.kz';
	$mail->Port = 25;
	$mail->Username = 'mailer@bestokna.kz';
	$mail->Password = '9Dxl7d%3';

	// От кого
	$mail->setFrom('mailer@bestokna.kz', 'bestokna.kz');        

	// Кому
	$mail->addAddress($to, 'Admin');

	//Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    $mail->Subject = 'bestokna.kz contact form';
    //Keep it simple - don't use HTML
    $mail->isHTML(false);
    //Build a simple message body
    $mail->Body = <<<EOT
Email: {$from}
Name: {$name}
Phone: {$phone}
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