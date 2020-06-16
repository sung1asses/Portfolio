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
				<p><strong>Антибиотиктерді қабылдаумен туындаған ішек дисбактериозын ескерту және түзету.</strong><br/>
Э.В. Супрун – м.ғ.д, профессор, Ұлттық фармацевтикалық университет, Харьков қ., Украина.<br/>
К.Б. Құрманова – м.ғ.д, профессор, «С. Д. Асфендияров атындағы Қазақ мемлекеттік медицина университеті»,
Алматы қ.<br/>
					<a href="#" data-link="/docs/Others.pdf" onclick="openPopup(this)">МАҚАЛАҒА СІЛТЕМЕ</a>
				</p>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="col-md-3">
				<img style="width: 100%" src="img/ferlogo-kids.png"/>
			</div>
			<div class="col-md-8">
				<p><strong>Антибиотиктік қауымдасқан іш өтуді кешенді емдеуде Ферталь® синбиотигін қолдану</strong><br/>
Л.М. Қарсыбекова, ҚР ДСМ Педиатрия және балалар хирургиясы ғылыми орталығы, Алматы қ.<br/><a href="#" data-link="docs/Karsybekova.pdf" onclick="openPopup(this)">МАҚАЛАҒА СІЛТЕМЕ</a></p>
			</div>
		</div>
	</div>
</section>
<div id="overlay" class="d-none justify-content-center align-items-center">
    <div class="popup">
        <p>
            Сіз денсаулық сақтау саласының кәсіби дәрігері болып табыласыз ба?
       </p>
	    <div class="d-flex justify-content-end align-items-center">
	    	<a id="continue" class="close text-center" title="Закрыть" href="">Иә</a>
	    	<a class="close text-center" title="Закрыть" href="#" onclick="openPopup()">Жоқ</a>
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