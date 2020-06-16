<?php
    // error_reporting(E_ALL); ini_set("display_errors", 1);

    $msg = '';

    $to = 'kainar.co123@gmail.com';
    $name = trim(stripslashes(htmlspecialchars($_POST['name'])));
    $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
    $phone = trim(stripslashes(htmlspecialchars($_POST['phone'])));
    $discuss = trim(stripslashes(htmlspecialchars($_POST['discuss'])));

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

    $mail->Host = 'mail.kainar-co.kz';
    $mail->Port = 25;
    $mail->Username = 'mailer@kainar-co.kz';
    $mail->Password = 'hrR8y^71';

    // От кого
    $mail->setFrom('mailer@kainar-co.kz', 'Contact Form');        

    // Кому
    $mail->addAddress($to, 'Admin');

    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    $mail->Subject = 'Контактная форма kainar-co.kz';
    //Keep it simple - don't use HTML
    $mail->isHTML(false);
    //Build a simple message body
    $mail->Body = <<<EOT
Имя: {$name}
Почта: {$email}
Телефон: {$phone}
Услуга: {$discuss}
EOT;
    //Send the message, check for errors
    if (!$mail->send()) {
        //The reason for failing to send will be in $mail->ErrorInfo
        //but you shouldn't display errors to users - process the error, log it on your server.
        $msg = 'Простите, что-то пошло не так. Пожалуйста, попробуйте позже.';
    } else {
        $msg = 'success';
    }

    echo $msg;

?>