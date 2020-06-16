<html>
	<head>
		<title>Ферталь и Ферталь Детский</title>
		<meta name="description" content="Ферталь">
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="css/style.css">
    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
<body>
<?php require 'header.php';?>
<section class="mainslide">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img class="d-block w-100" src="img/fertal_kz.png" alt="First slide">
					</div>
					<div class="carousel-item">
					<img class="d-block w-100" src="img/fertal3_kz.jpeg" alt="Second slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
			</div>
			<div class="img-for-slide">
					<img class="d-block w-100" src="img/mainslide-min.png" alt="First slide">
			</div>
</section>

<section class="sposobrim">
	<div class="container-fluid">
		<div class="row d-flex justify-content-center align-items-start flex-md-row flex-column">
			<div class="col-md-4 text-center whatsod-main">
				<div style="max-width: 250px;" class="m-auto py-4 w-100 d-flex justify-content-center align-items-start flex-column">
					<a style="text-decoration: none;" href="compostion.php">
						<span class="whatsod">
							ФЕРТАЛЬ® НЕНІ ҚАМТИДЫ?
						</span>
						<img src="img/sodhref.png" />
					</a>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<img src="img/center-image.png" class="py-4 flac-main"/>
			</div>
			<div class="col-md-4 text-center sposob-main">
				<div style="max-width: 250px;" class="m-auto py-4 w-100 d-flex justify-content-center align-items-start flex-column">
					<a style="text-decoration: none;" href="sposob-primineniya.php">
						<span class="sposoby">
							ҚОЛДАНУ ТӘСІЛІ
						</span>
						<img src="img/sposobhref.png" />
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="checklist">
<div class="container-fluid">
	<div class="d-flex justify-content-center align-items-center flex-wrap m-auto">
		<div class="d-flex justify-content-center align-items-start flex-wrap">
			<div style="width:300px" class="d-flex justify-content-start align-items-start m-2">
				<div style="width: 50px; height: 50px">
					<img style="width: 50px;" src="img/check.png"/>
				</div>
				<span>ІШЕК МИКРОФЛОРАСЫН ҚАЛЫПҚА КЕЛТІРЕДІ</span>
			</div>
			<div style="width:300px" class="d-flex justify-content-start align-items-start m-2">
				<div style="width: 50px; height: 50px">
					<img style="width: 50px;" src="img/check.png"/>
				</div>
				<span>АС ҚОРЫТУДЫ ЖӘНЕ ЗАТ АЛМАСУДЫ ЖАҚСАРТАДЫ</span>
			</div>
		</div>
		<div class="d-flex justify-content-center align-items-start flex-wrap">
			<div style="width:300px" class="d-flex justify-content-start align-items-start m-2">
				<div style="width: 50px; height: 50px">
					<img style="width: 50px;" src="img/check.png"/>
				</div>
				<span>ИММУНИТЕТТІ НЫҒАЙТАДЫ</span>
			</div>
			<div style="width:300px" class="d-flex justify-content-start align-items-start m-2">
				<div style="width: 50px; height: 50px">
					<img style="width: 50px;" src="img/check.png"/>
				</div>
				<span>Е және К ДӘРУМЕНДЕРІНІҢ СИНТЕЗІН ҚАЛЫПТАНДЫРАДЫ</span>
			</div>
		</div>
	</div>
</div>
</section>
<div id="overlay" class="d-flex justify-content-center align-items-center">
    <div class="popup">
        <p>
            Конкурстар мен акциялар туралы ең бірінші болып білгің келсе, біздің инстаграмға жазыл!	
       </p>
	    <div class="d-flex justify-content-end align-items-center">
	    	<a class="close text-center" title="Закрыть" href="https://www.instagram.com/fertalkz_official" target="_blank" style="width:auto">Инстаграмға Жазылу</a>
	    	<a class="close text-center" title="Закрыть" href="#" onclick="openPopup()">Жоқ, рахмет</a>
	    </div>
    </div>
</div>
<script>
function openPopup(el){
 	$("#overlay").toggleClass("d-flex");
 	if(el){
 		let link = el.getAttribute("data-link");
 		$("#continue")[0].setAttribute("href" , link);
 	}
 }
</script>
<?php require 'footer.php';?>