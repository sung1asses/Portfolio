<?php 

/*ini_set('display_errors',1);
error_reporting(E_ALL);*/

require "auth.php";

$file = file_get_contents("array.txt");
$value = unserialize($file);

if(isset($_POST["contactsSubmit"])) {
	$value["contactsAddr"]=$_POST["contactsAddr"];
	$value["contactsBuilding"]=$_POST["contactsBuilding"];
	$value["contactsPhone"]=$_POST["contactsPhone"];
	$value["contactsInstagram"]=$_POST["contactsInstagram"];
	$value["contactsFacebook"]=$_POST["contactsFacebook"];
	$value["contactsEmailAddr"]=$_POST["contactsEmailAddr"];


	$str_value = serialize($value);

	$f = fopen('array.txt', 'w');
	fwrite($f, $str_value);
	fclose($f);
}
if (isset($_POST["sectionSubmit"])) {
	$newSectionImg = time().$_FILES["sectionImg"]['name'];
	if($_FILES["sectionImg"]){
		if (!copy($_FILES["sectionImg"]['tmp_name'], "img/".$newSectionImg)){
			echo '<p>Что-то пошло не так.</p>';
		}
		else{
			unlink("img/".$value['sectionImg']);

			$value['sectionImg'] = $newSectionImg;

			$str_value = serialize($value);
	
			$f = fopen('array.txt', 'w');
			fwrite($f, $str_value);
			fclose($f);
		}
	}
}
if (isset($_POST["tableSubmit"])) {
	$newTableImg = time().$_FILES["tableImg"]['name'];
	if($_FILES["tableImg"]){
		if (!copy($_FILES["tableImg"]['tmp_name'], "img/".$newTableImg)){
			echo '<p>Что-то пошло не так.</p>';
		}
		else{
			unlink("img/".$value['tableImg']);

			$value['tableImg'] = $newTableImg;

			$str_value = serialize($value);
	
			$f = fopen('array.txt', 'w');
			fwrite($f, $str_value);
			fclose($f);
		}
	}
}
if (isset($_POST["about_usSubmit"])) {
	$newAbout_usImg = time().$_FILES["about_usImg"]['name'];
	if($_FILES["about_usImg"]){
		if (!copy($_FILES["about_usImg"]['tmp_name'], "img/".$newAbout_usImg)){
			echo '<p>Что-то пошло не так.</p>';
		}
		else{
			unlink("img/".$value['about_usImg']);

			$value['about_usImg'] = $newAbout_usImg;

			$str_value = serialize($value);
	
			$f = fopen('array.txt', 'w');
			fwrite($f, $str_value);
			fclose($f);
		}
	}
}
if (isset($_POST["delSlide"])) {
	unlink("img/".$value['slider'][$_POST['slideId']]['image']);

	unset($value['slider'][$_POST['slideId']]);
	sort($value['slider']);

	$str_value = serialize($value);

	$f = fopen('array.txt', 'w');
	fwrite($f, $str_value);
	fclose($f);
}
if (isset($_POST["addSlide"])) {

	if($_FILES["slideImg"]){
		$newSlideImg = time().$_FILES["slideImg"]['name'];
		if (!copy($_FILES["slideImg"]['tmp_name'], "img/".$newSlideImg)){
			echo '<p>Что-то пошло не так.</p>';
		}
		else{
			$newSlide = array(
				"link"=>$_POST['slideLink'],
				"image"=>$newSlideImg,
				"header"=>$_POST['slideHeader']
			);
			$slideNum = (int)$_POST['slideNumber'];
			if($slideNum <= count($value['slider']) && $slideNum > 0 ){
				array_splice($value['slider'], $slideNum-1, 0, "");
				$value['slider'][$slideNum-1] = $newSlide;
			}
			else{
				$value['slider'][] = $newSlide;
			}

			$str_value = serialize($value);
	
			$f = fopen('array.txt', 'w');
			fwrite($f, $str_value);
			fclose($f);
		}
	}

	$str_value = serialize($value);

	$f = fopen('array.txt', 'w');
	fwrite($f, $str_value);
	fclose($f);
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>АЮ</title>
    <meta content="хостинг, разместить сайт, домены kz, vps, хостинг казахстан, хостинг в казахстане" name="keywords">
    <meta content="Профессионально оказываем услуги хостинга с 2003 года. Собственный дата-центр в Алматы (Казахстан). Зарегистрируйтесь и покупайте хостинг и домены онлайн."
          name="description">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css"/>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
	<script src="https://matthewelsom.com/assets/js/libs/instafeed.min.js"></script>
	<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script>
		// Use the CDN or host the script yourself
// https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js
// https://matthewelsom.com/assets/js/libs/instafeed.min.js

var userFeed = new Instafeed({
  get: 'user',
  userId: '12175073456',
  clientId: '25eef677dbe34976afdbada716a958af',
  accessToken: '12175073456.25eef67.972f3daa91da4cb39fea90a97bd07e02',
  resolution: 'standard_resolution',
  template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
  sortBy: 'most-recent',
  limit: 4,
  links: false
});
userFeed.run();
	</script>
	<style>
		.contenteditable{
			outline: 2px solid #000;
			background-color: #eee;
			margin: 50px 0;
			padding: 25px 0;
		}
		.nav{
			z-index: 9999;
			background-color: #333;
			width: 100vw;
			position: fixed;
		}
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
	<a class="m-3 save mr-auto btn btn-success" href="#">Сохранить</a>
	<a class="m-3 btn btn-danger" href="admin.php?do=logout">Выход</a>
	<a class="changePass m-3 btn btn-warning" href="ChangePasswd.php">Сменить пароль</a>
</div>

<div style="height: 100px;"></div>

<div class="contenteditable">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<form method="POST"action="admin.php"enctype="multipart/form-data">
					<h1>Редактирование контактов:</h1>
						<label for="contactsAddr">Адрес:</label>
						<input value="<?php echo $value["contactsAddr"]; ?>" name="contactsAddr" id="contactsAddr" type="text">
						<label for="contactsBuilding">Здание:</label>
						<input value="<?php echo $value["contactsBuilding"]; ?>" name="contactsBuilding" id="contactsBuilding" type="text">
						<label for="contactsPhone">Телефон:</label>
						<input value="<?php echo $value["contactsPhone"]; ?>" name="contactsPhone" id="contactsPhone" type="text">
						<label for="contactsInstagram">Instagram:</label>
						<input value="<?php echo $value["contactsInstagram"]; ?>" name="contactsInstagram" id="contactsInstagram" type="text">
						<label for="contactsFacebook">Facebook:</label>
						<input value="<?php echo $value["contactsFacebook"]; ?>" name="contactsFacebook" id="contactsFacebook" type="text">
						<label for="contactsEmailAddr">Почта:</label>
						<input value="<?php echo $value["contactsEmailAddr"]; ?>" name="contactsEmailAddr" id="contactsEmailAddr" type="text">
						<input type="submit"name="contactsSubmit" value="сохранить">
					</form>
				</div>			
			</div>
			<hr/>
		</div>
	</section>
</div>
<div class="contenteditable">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-6 pr-0 pl-0">
					<img src="img/<?php echo $value["sectionImg"]; ?>">
				</div>
				<div class="col-md-6 reload d-flex">
					<div class="faligner">
					<p class="zag">БОРЬБА -<br/>
					ПЕРЕЗАГРУЗКА</p>
					<p style="font-family:ComLight;margin-bottom: 2rem;">ЗАПИСЫВАЙТЕСЬ НА ЗАНЯТИЯ В УНИКАЛЬНЫЙ<br/>ДЕТСКИЙ СПОРТИВНЫЙ КЛУБ!</p>
					<div><a href="#zapis">ПОДРОБНЕЕ</a></div>
					</div>
				</div>			
			</div>
			<hr/>
		</div>
	</section>
	<div class="imageForm">
		<form method="POST"action="admin.php"enctype="multipart/form-data">
			<h5 style="text-align: center;">Поменять изображение</h5>
			<input type="file" name="sectionImg" required="true" accept="image/jpeg, image/jpg, image/png">
			<input type="submit"name="sectionSubmit"value="Загрузить">
		</form>
	</div>
</div>
<div class="contenteditable">
	<section id="table">
		<div class="container text-center table-price">
			<span>Стоимость - 10 000 тг. в месяц. Занятия 3 раза в неделю.<br>Вы можете подобрать удобное для вас время занятий</span>
			<h2>РАСПИСАНИЕ ТРЕНИРОВОК</h2>
			<div class="d-flex flex-row justify-content-center">
				<div class="bd-highlight d-md-block d-none">
					<img src="img/<?php echo $value["tableImg"]; ?>">
				</div>
				<div style="overflow-x:auto;" class="bd-highlight">
					<div id="SAVEtable" contenteditable="true">

						<?php require("table.html") ?>		
					
					</div>
				</div>
			</div>
			<hr>
		</div>
	</section>
	<div class="imageForm">
		<form method="POST"action="admin.php"enctype="multipart/form-data">
			<h5 style="text-align: center;">Поменять изображение</h5>
			<input type="file" name="tableImg" required="true" accept="image/jpeg, image/jpg, image/png">
			<input type="submit"name="tableSubmit"value="Загрузить">
		</form>
	</div>
</div>

<div class="contenteditable">
	<section class="about-us" id="about">
		<div class="container">
		<h2>О НАС</h2>
		<div class="row">
			<div class="col-md-5">
				<img src="img/<?php echo $value["about_usImg"]; ?>">
			</div>
			<div class="col-md-7">
				<div id="SAVEabout_us" contenteditable="true">
					
					<?php require("about_us.html") ?>
				
				</div>
			</div>	
		</div>
		<hr>
		</div>
	</section>
	<div class="imageForm">
		<form method="POST"action="admin.php"enctype="multipart/form-data">
			<h5 style="text-align: center;">Поменять изображение</h5>
			<input type="file" name="about_usImg" required="true" accept="image/jpeg, image/jpg, image/png">
			<input type="submit"name="about_usSubmit"value="Загрузить">
		</form>
	</div>
</div>

<div class="container-fluid">
	<div class="row"></div>
	<div class="col-12 owl-carousel">
		<?php 
		$i=0;
		foreach ($value['slider'] as $slide) : ?>
			<div class="pt-3"> 
			    <a class="customLink" href="<?= $slide['link'] ?>" target="_blank">
			        <div class="sliderImage" style="background-image: url(img/<?= $slide['image'] ?>);"></div>
			        <p class="text-center my-3"><?= $slide['header'] ?></p>
			        <form method="POST"action="admin.php"enctype="multipart/form-data">
						<input type="hidden" value="<?= $i ?>" name="slideId">
						<input type="submit"name="delSlide"value="удалить">
					</form>
			    </a>
		    </div>
		<?php
		$i++; 
		endforeach; ?>
	</div>
	
	<div class="col-4 mx-auto">
		<form class="rounded p-4" method="POST"action="admin.php"enctype="multipart/form-data" style="background-color: #eeeeee;">
			<h5 style="text-align: center;">Добавить слайд</h5>
			<p>Ссылка на партнера</p>
			<input type="text" name="slideLink" required>
			<hr>
			<p>Заголовок</p>
			<input type="text" name="slideHeader" required>
			<hr>
			<p>Файл</p>
			<input type="file" name="slideImg" required="true" accept="image/jpeg, image/jpg, image/png">
			<hr>
			<label for="slideNum">Порядковый номер в слайдере. <br> Оставьте пустым, чтоб добавить в конец слайдера.</label>
			<input type="text" id="slideNum" name="slideNumber" placeholder="">
			<hr>
			<input type="submit"name="addSlide"value="Добавить">
		</form>
	</div>
</div>

	<script>
		$(document).ready(function(){
			$(".owl-carousel").owlCarousel({
				margin:20,
			    loop:true,
			    items:4,
			    nav:true,
			    responsive:{
			        0:{
			            items:1
			        },
			        600:{
			            items:3
			        },
			        1000:{
			            items:5
			        }
			    }
			});
			$(".save").click(function(){
				let tableContent = $("#SAVEtable").html();
				let aboutUsContent = $("#SAVEabout_us").html();
				$.ajax({
				  dataType: "html",
				  type: "POST",
				  url: "handle.php",
				  data: {
				  	"key": "1234567890987654321",
				  	"tableContent": tableContent,
				  	"aboutUsContent": aboutUsContent,
				  },
				  success: function(response){
				  	alert(response);
				  	console.log(response);
				  },
				});
			})
		})
	</script>
</body>
</html>