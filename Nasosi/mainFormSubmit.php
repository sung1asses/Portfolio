<?php
	// error_reporting(E_ALL); ini_set("display_errors", 1);

	$msg = '';

	$to = 'suvorov_roman_01@mail.ru';
    $fio = trim(stripslashes(htmlspecialchars($_POST['fio'])));
    $organization = trim(stripslashes(htmlspecialchars($_POST['organization'])));
    $phone = trim(stripslashes(htmlspecialchars($_POST['phone'])));
    $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
    $tip_nasosa = trim(stripslashes(htmlspecialchars($_POST['tip_nasosa'])));
    $kol = trim(stripslashes(htmlspecialchars($_POST['kol'])));
    $glubina = trim(stripslashes(htmlspecialchars($_POST['glubina'])));
    $bezfundamentalnoe_ispolnenie = trim(stripslashes(htmlspecialchars($_POST['bezfundamentalnoe_ispolnenie'])));
    $sreda = trim(stripslashes(htmlspecialchars($_POST['sreda'])));
    $him_formula = trim(stripslashes(htmlspecialchars($_POST['him_formula'])));
    $tverd_vkl = trim(stripslashes(htmlspecialchars($_POST['tverd_vkl'])));
    $size_tverd_vkl = trim(stripslashes(htmlspecialchars($_POST['size_tverd_vkl'])));
    $proizvod = trim(stripslashes(htmlspecialchars($_POST['proizvod'])));
    $napor = trim(stripslashes(htmlspecialchars($_POST['napor'])));
    $napor_na_vhode = trim(stripslashes(htmlspecialchars($_POST['napor_na_vhode'])));
    $plotnost = trim(stripslashes(htmlspecialchars($_POST['plotnost'])));
    $temperatura = trim(stripslashes(htmlspecialchars($_POST['temperatura'])));
    $ustanovka = trim(stripslashes(htmlspecialchars($_POST['ustanovka'])));
    $uplotnenie = trim(stripslashes(htmlspecialchars($_POST['uplotnenie'])));
    $chastota_regulirovaniya = trim(stripslashes(htmlspecialchars($_POST['chastota_regulirovaniya'])));
    $wzrivozashita = trim(stripslashes(htmlspecialchars($_POST['wzrivozashita'])));
    $napryajeniye = trim(stripslashes(htmlspecialchars($_POST['napryajeniye'])));
    $dopolneniya = trim(stripslashes(htmlspecialchars($_POST['dopolneniya'])));

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

	$mail->Host = 'mail.lipartextiles.kz';
	$mail->Port = 25;
	$mail->Username = 'mailer@lipartextiles.kz';
	$mail->Password = 'kjXd06!9';

	// От кого
	$mail->setFrom('mailer@lipartextiles.kz', 'Lipar Ltd');        

	// Кому
	$mail->addAddress($to, 'Admin');

	//Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    $mail->Subject = 'Заявка с формы Munsch';
    //Keep it simple - don't use HTML
    $mail->isHTML(false);
    //Build a simple message body
    $mail->Body = <<<EOT
ФИО: {$fio}
Организация: {$organization}
Телефон: {$phone}
E-mail: {$email}
Тип насоса: {$tip_nasosa}
Количество: {$kol}
Глубина погружения, м. (только для вертикальных насосов): {$glubina}
Насос в безфундаментном исполнении (для горизонтальных насосов): {$bezfundamentalnoe_ispolnenie}
Среда (концентрация %): {$sreda}
Химическая формула: {$him_formula}
Твердые включения: {$tverd_vkl}
Размер твердых включений: {$size_tverd_vkl}
Производительность м3/час: {$proizvod}
Напор м: {$napor}
Напор на входе/выходе атм.: {$napor_na_vhode}
Плотность среды: {$plotnost}
Температура C: {$temperatura}
Установка: {$ustanovka}
Уплотнение вала: {$uplotnenie}
Частотное регулирование: {$chastota_regulirovaniya}
Взрывозащита двигателя: {$wzrivozashita}
Частота (Гц)/Напряжение (В): {$napryajeniye}
Дополнение: {$dopolneniya}
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