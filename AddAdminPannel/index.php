<?php 
$file = file_get_contents("array.txt");
$value = unserialize($file);
 ?>
<!DOCTYPE html>
<html class="gt-ie8 gt-ie9 not-ie pxajs">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>АЮ</title>
	<meta property="og:type" content="article">
<meta property="og:title" content="Детский Борцовский Клуб 'АЮ' в Алматы">
<meta property="og:url" content="https://ayuclub.kz/">
<meta property="og:description" name="description" content="Основатель клуба Тимур Сериков, сын олимпийского чемпиона Шамиля Серикова. Уникальные тренировки для детей в детском борцовском клубе в Алматы. Записывайтесь на занятия по борьбе!">
	<meta property="og:image" content="https://ayuclub.kz/img/logo-top.png">
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144605712-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144605712-1');
</script>	
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(54597304, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54597304" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-2 hlogo">
				<img src="img/logo-top.png">
			</div>
			<div class="col-md-10 text-right">
				<h1>ДЕТСКИЙ БОРЦОВСКИЙ КЛУБ "АЮ"<br>ОЛИМПИЙСКОГО ЧЕМПИОНА ШАМИЛЯ СЕРИКОВА</h1>
				<hr>
				<nav class="navbar navbar-expand-lg">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
						<a class="nav-item nav-link active" href="#about">О нас<span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link" href="#table">Расписание</a>
						<a class="nav-item nav-link" href="#contact">Контакты</a>
						</div>
					</div>
					<span class="menu-contact"><a href="https://www.instagram.com/<?php echo $value["contactsInstagram"]; ?>/" target="_blank"><img src="img/insta.png"></a><a href="https://www.facebook.com/<?php echo $value["contactsFacebook"]; ?>" target="_blank"><img src="img/fb.png"></a><a href="tel:87078174323"><?php echo $value["contactsPhone"]; ?></a></span>
				</nav>
			</div>
		</div>
	</div>
</header>
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
<section class="why-au">
	<div class="container">
	<h2>ПОЧЕМУ ДЕТСКИЙ БОРЦОВСКИЙ КЛУБ АЮ?</h2>
		<div class="row text-center">
			<div class="col">
				<img src="img/clock.png">
				<span>Досуг<br/>вашего ребенка</span>
			</div>
			<div class="col">
				<img src="img/run.png">
				<span>Укрепляет<br/>все мускулы</span>
			</div>
			<div class="col">
				<img src="img/vinos.png">
				<span>Повышает<br/>выносливость</span>
			</div>
			<div class="col">
				<img src="img/intellect.png">
				<span>Развивает<br/>эмоциональный интеллект</span>
			</div>
			<div class="col">
				<img src="img/work.png">
				<span>Улучшает<br/>работоспособность имунной системы</span>
			</div>
		</div>
	</div>
</section>
<section class="dynamic">
	<div class="container text-center">
	<hr/>
	<h2>БОРЬБА – ДИНАМИЧНЫЙ ВИД СПОРТА!</h2>
	<span class="reddy">ТРЕНИРОВКИ ВКЛЮЧАЮТ В СЕБЯ ЭЛЕМЕНТЫ АКРОБАТИКИ, РАСТЯЖКИ, СИЛОВЫХ ВИДОВ СПОРТА:</span>
	<ul>
		<li><span>Для физического воспитания юных спортсменов используются гимнастические  и акробатические упражнения - кувырки, сальто, колесо;</span></li>
		<li><span>Для функционального развития, используется  авторская методика детского кроссфита;</span></li>
		<li><span>Для развития гибкости используют различные упражнения  на растяжку суставов – шпагат, мостик и т. д.</span></li>
	</ul>
	<p class="reddy">Мы создали все условия, чтобы детям было интересно<br/>и они могли увернно идти к достижению своей цели!</p>
	<div class="btn-z"><a href="#zapis">Записаться на тренировку</a></div>
	<hr/>
	</div>
</section>
<section id="table">
	<div class="container text-center table-price">
		<span>Стоимость - 10 000 тг. в месяц. Занятия 3 раза в неделю.<br>Вы можете подобрать удобное для вас время занятий</span>
		<h2>РАСПИСАНИЕ ТРЕНИРОВОК</h2>
		<div class="d-flex flex-row justify-content-center">
			<div class="bd-highlight d-md-block d-none">
				<img src="img/<?php echo $value["tableImg"]; ?>">
			</div>
			<div style="overflow-x:auto;" class="bd-highlight">
				<div id="table" contenteditable="true">

					<?php require("table.html") ?>		
				
				</div>
			</div>
		</div>
		<hr>
	</div>
</section>
<section class="about-us" id="about">
		<div class="container">
		<h2>О НАС</h2>
		<div class="row">
			<div class="col-md-5">
				<img src="img/<?php echo $value["about_usImg"]; ?>">
			</div>
			<div class="col-md-7">
				<div id="about_us" contenteditable="true">
					
					<?php require("about_us.html") ?>
				
				</div>
			</div>	
		</div>
		<hr>
	</div>
</section>
<section id="zapis">
	<div class="container">
	<div class="row">
		<div class="col-md-6">
			<img src="img/form.png">
		</div>
		<div class="col-md-6">
			<h2 class="text-left" style="line-height:1">ОСТАВИТЬ ЗАЯВКУ<br/>И ЗАПИСАТЬСЯ НА ТРЕНИРОВКИ</h2>
			<div class="col-md-6">
				<label>ИМЯ</label><br>
				<input id="name" required="true" placeholder="Введите ваше имя"><br>
				<label>ТЕЛЕФОН</label><br>
				<input id="phone" required="true" placeholder="+7 (___) ___ __ __" maxlength="12"><br>
				<input id="submit" type="submit" value="Отправить"/>
			</div>
		</div>
	</div>
	<hr/>
	</div>
</section>
<section id="contact">
	<div class="container maps">
	<div class="row">
		<div class="col-md-6 gismap">
			<a class="dg-widget-link" href="http://2gis.kz/almaty/firm/70000001038163043/center/76.921978,43.225298/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a><div class="dg-widget-link"><a href="http://2gis.kz/almaty/center/76.921978,43.225298/zoom/16/routeTab/rsType/bus/to/76.921978,43.225298╎Аю, детский борцовский клуб?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Аю, детский борцовский клуб</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":640,"height":600,"borderColor":"#a3a3a3","pos":{"lat":43.225298,"lon":76.921978,"zoom":16},"opt":{"city":"almaty"},"org":[{"id":"70000001038163043"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
		</div>
		<div class="col-md-6 d-flex flex-column justify-content-center">
			<h2 class="text-left">АДРЕС:</h2>
			<p><?php echo $value["contactsAddr"]; ?><br/><?php echo $value["contactsBuilding"]; ?><br/><a href="tel:<?php echo $value["contactsPhone"]; ?>"><?php echo $value["contactsPhone"]; ?></a></p>
			<p class="social">
			<a href="https://instagram.com/<?php echo $value["contactsInstagram"]; ?>" target="_blank"><img src="img/insta.png">@<?php echo $value["contactsInstagram"]; ?></a><br/>
			<a href="https://www.facebook.com/<?php echo $value["contactsFacebook"]; ?>" target="_blank"><img src="img/fb.png">@<?php echo $value["contactsFacebook"]; ?></a><br/>
			<a href="mailto:<?php echo $value["contactsEmailAddr"]; ?>"><img src="img/massage.png"><?php echo $value["contactsEmailAddr"]; ?></a></p>
		</div>
	</div>
	<hr/>
	</div>
</section>
<section>
<h2>СМИ О НАС</h2>
<div class="container owl-carousel owl-theme">
  <?php foreach ($value['slider'] as $slide) : ?>
	<div class="pt-3"> 
	    <a class="customLink" href="<?= $slide['link'] ?>" target="_blank">
	        <div class="sliderImage" style="background-image: url(img/<?= $slide['image'] ?>);"></div>
	        <p class="text-center my-3"><?= $slide['header'] ?></p>
	    </a>
    </div>
<?php endforeach; ?>
</div>
</section>
<section>	
<div class="container">
<hr/>
<h2>МЫ В ИНСТАГРАМ</h2>
			<div id="instafeed">
			</div>
</div>
</section>
<footer>
	<div class="container">
		<div class="d-flex flex-row flex-wrap justify-content-center">
			<div class="col-md-4 text-center">
				<img src="img/logo.png" style="width:200px;" class="flogot">
			</div>
			<div class="d-flex flex-column justify-content-center text-left text-left col-md-4" class="fadr">
				<span>АДРЕС:</span>
				<p><?php echo $value["contactsAddr"]; ?><br/><?php echo $value["contactsBuilding"]; ?><br/><a href="tel:<?php echo $value["contactsPhone"]; ?>"><?php echo $value["contactsPhone"]; ?></a></p>
<p class="fotcont"><a href="https://instagram.com/<?php echo $value["contactsInstagram"]; ?>" target="_blank"><img src="img/insta-f.png">@<?php echo $value["contactsInstagram"]; ?></a>
			<a href="https://www.facebook.com/<?php echo $value["contactsFacebook"]; ?>" target="_blank"><img src="img/fb-f.png">@<?php echo $value["contactsFacebook"]; ?></a>
			<a href="mailto:<?php echo $value["contactsEmailAddr"]; ?>"><img src="img/massage-f.png" style="height: 18px;"><?php echo $value["contactsEmailAddr"]; ?></a></p>
			</div>
		</div>
	</div>
</footer>

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
	            items:4
	        }
	    }
	});
	$('#submit').click(function(){
		var name = $('#name').val();
		var phoneNumber = $('#phone').val();
		$.post(
		  'mail.php',
		  {name: name, phoneNumber: phoneNumber},
		  function (data){
		      if(data != ""){
		          alert (data);
		      }
		      else{
		          alert ('Что-то пошло не так, попробуйте позже.');
		      }
		  }
		);
	})
})
</script>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+7(707)8174323", // WhatsApp number
            company_logo_url: "//static.whatshelp.io/img/flag.png", // URL of company logo (png, jpg, gif)
            greeting_message: "Здравствуйте! Отправьте нам сообщение через WhatsApp.", // Text of greeting message
            call_to_action: "Напишите нам", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

</body>
</html>