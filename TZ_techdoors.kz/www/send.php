<?php
$headers .= "From: techdoors.kz\r\n";

mail('astana@tootride.kz', "Заявка с сайта - techdoors.kz", "Имя: ".$_POST['name']."\nТелефон: ".$_POST['phone'], $headers);

header("Location: thanks.html");