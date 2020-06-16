<?php
	// error_reporting(E_ALL); ini_set("display_errors", 1);

	$msg = '';

	$to = 'projectekspert@mail.ru';
    $from = trim(stripslashes(htmlspecialchars($_POST['Email'])));
    $name = trim(stripslashes(htmlspecialchars($_POST['Name'])));
    $body = trim(stripslashes(htmlspecialchars($_POST['Message'])));

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

	$mail->Host = 'mail.proex.kz';
	$mail->Port = 25;
	$mail->Username = 'mailer@proex.kz';
	$mail->Password = 'Qcs702_d';

	// От кого
	$mail->setFrom('mailer@proex.kz', 'Контактная форма');        

	// Кому
	$mail->addAddress($to, 'Admin');

	//Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    $mail->Subject = 'Кто-то заполнил форму на сайте proex.kz!!!';
    //Keep it simple - don't use HTML
    $mail->isHTML(false);
    //Build a simple message body
    $mail->Body = <<<EOT
Email: {$from}
Name: {$name}
Message: {$body}
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