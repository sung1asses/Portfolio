<html>
	<head>
		<title>Информация для специлистов</title>
		<meta name="description" content="Ферталь">
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="css/style.css">
    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
<body>
<?php include 'header.php';?>
<section class="for-spec bg-r">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<img style="width: 100%" src="img/fertlogo.png"/>
			</div>
			<div class="col-md-8">
				<p>Предупреждение и коррекция дисбактериоза кишечника, вызванного приемом антибиотиков.<br/>
Э.В. Супрун – д.м.н., профессор, Национальный фармацевтический университет, г. Харьков, Украина. <br/>
К.Б. Курманова – д.м.н., профессор, АО «Казахский государственный медицинский университет имени
С. Д. Асфендиярова», г. Алматы<br/>
					<a href="#" data-link="docs/Others.pdf" onclick="openPopup(this)">ССЫЛКА НА СТАТЬЮ</a>
				</p>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="col-md-3">
				<img style="width: 100%" src="img/ferlogo-kids.png"/>
			</div>
			<div class="col-md-8">
				<p>Применение синбиотика Ферталь® в комплексном лечении антибиотикоассоциированной диареи<br/>
Л.М. Карсыбекова, Научный центр педиатрии и детской хирургии МЗ РК, г. Алматы<br/><a href="#" data-link="docs/Karsybekova.pdf" onclick="openPopup(this)">ССЫЛКА НА СТАТЬЮ</a></p>
			</div>
		</div>
	</div>
</section>
<div id="overlay" class="d-none justify-content-center align-items-center">
    <div class="popup">
        <p>
            Являетесь ли Вы профессионалом здравоохранения?	
       </p>
	    <div class="d-flex justify-content-end align-items-center">
	    	<a id="continue" class="close text-center" title="Закрыть" href="">Да, являюсь</a>
	    	<a class="close text-center" title="Закрыть" href="#" onclick="openPopup()">Нет, не являюсь</a>
	    </div>
    </div>
</div>
<script>
$(document).ready(function () {		
  $(".navbar-nav li").removeClass("active");//this will remove the active class from   
  $('#spec').addClass('active');  
});
function openPopup(el){
 	$("#overlay").toggleClass("d-flex");
 	if(el){
 		let link = el.getAttribute("data-link");
 		$("#continue")[0].setAttribute("href" , link);
 	}
 }
</script>
<?php include 'footer.php';?>