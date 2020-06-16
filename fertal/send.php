<?php

if(isset($_GET["email"])){

$safe_name = trim(stripslashes(htmlspecialchars($_GET["name"])));
$safe_email = trim(stripslashes(htmlspecialchars($_GET["email"])));
$safe_subject = trim(stripslashes(htmlspecialchars($_GET["subject"])));
$safe_message = trim(stripslashes(htmlspecialchars($_GET["message"])));

$to = "art.kurozu@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма
$from = "info@fertalkids.kz"; // this is the sender's Email address
$first_name = $safe_name;
$email = $safe_email;
$subject = $safe_subject;/*
$subject2 = "Copy of your form submission";*/
$message = $safe_name . " оставил сообщение:" . "\n\n" . $safe_message. " | Email:" . $safe_email;/*
$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $safe_message;*/

$headers = "From:" . $from;/*
$headers2 = "From:" . $to;*/

mail($to,$subject,$message,$headers);
echo "confirm";
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!

}

?>