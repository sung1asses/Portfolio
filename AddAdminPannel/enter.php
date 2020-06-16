<?php
session_start();

$file = file_get_contents('array.txt');
$value = unserialize($file);

$admin = $value['login'];
$pass = $value['passwd'];
	
if($_POST['submit']){
 if($admin == $_POST['user'] && password_verify($_POST['pass'],$pass)){
 $_SESSION['admin'] = $admin;
 header("Location: admin.php");
 exit;
 }else echo '
 <script>
 	alert("Логин или пароль неверны!");
 </script>
 ';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Вход в панель администратора</title>
</head>
<body>
<div style="text-align:center;">
<a href="index.php" style="padding: 10px 0; display:block">На главную</a>
<hr />
Это страница авторизации.
<br />
<form method="post">
 Username: <input type="text" name="user" style="margin: 10px;"/><br />
 Password: <input type="password" name="pass" style="    margin: 10px;"/><br />
 <input type="submit" name="submit" value="Войти" />
</form>
	</div>
</body>
</html>
