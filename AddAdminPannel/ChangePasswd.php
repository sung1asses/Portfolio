<?php 

require "auth.php";

$file = file_get_contents("array.txt");
$value = unserialize($file);

if (isset($_POST["changePasswd"])) {
	if($_POST["oldName"]==$value['login'] && password_verify($_POST["oldPasswd"],$value['passwd'])){
		$hash = password_hash($_POST["newPasswd"], PASSWORD_DEFAULT);

		$value['login'] = $_POST['newName'];
		$value['passwd'] = $hash;


		$str_value = serialize($value);

		$f = fopen('array.txt', 'w');
		fwrite($f, $str_value);
		fclose($f);
	}
	else echo '
	 <script>
	 	alert("Логин или пароль неверны!");
	 </script>
	 ';
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>АЮ-admin</title>
    <meta content="хостинг, разместить сайт, домены kz, vps, хостинг казахстан, хостинг в казахстане" name="keywords">
    <meta content="Профессионально оказываем услуги хостинга с 2003 года. Собственный дата-центр в Алматы (Казахстан). Зарегистрируйтесь и покупайте хостинг и домены онлайн."
          name="description">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
	<script src="https://matthewelsom.com/assets/js/libs/instafeed.min.js"></script>
	<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>

			  <style>	
				.imageForm{
					display: flex;
					justify-content: center;
					align-items: center;
					flex-direction: column;
					border:1px solid #000;
					border-radius: 5px;
				}
			  </style>
</head>
<body>
<div class="nav bg-primary">
	<a class="ml-auto m-3 btn btn-danger" href="admin.php?do=logout">Выход</a>
	<a class="changePass m-3 btn btn-warning" href="admin.php">В админ панель</a>
</div>

<div class="col-md-6 mx-auto my-5">
	<form method="POST"action="ChangePasswd.php" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="oldName">Старый логин</label>
	    <input required="true" type="text" class="form-control" name="oldName" id="oldName">
	  </div>
	  <div class="form-group">
	    <label for="oldPasswd">Старый пароль</label>
	    <input required="true" type="password" class="form-control" name="oldPasswd" id="oldPasswd">
	  </div>
	  <div class="form-group">
	    <label for="newName">Новый логин</label>
	    <input required="true" type="text" class="form-control" name="newName" id="newName">
	  </div>
	  <div class="form-group">
	    <label for="newPasswd">Новый пароль</label>
	    <input required="true" type="password" class="form-control" name="newPasswd" id="newPasswd">
	  </div>
	  <input type="submit" class="btn btn-primary float-right" name="changePasswd" value="Сменить">
	</form>
</div>
	

</body>
</html>