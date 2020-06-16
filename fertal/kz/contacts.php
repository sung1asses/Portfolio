<html>
	<head>
		<title>Контакты</title>
		<meta name="description" content="Ферталь">
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="css/style.css">
    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
<body>
<?php include 'header.php';?>
<section class="bg-r contact">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<form class="cont-form needs-validation" action="" method="post">
					<div class="row">
					<div class="col-md-6"><label for="name">Имя*</label><input required id="name" type="text" name="name" /></div>
					<div class="col-md-6"><label for="email">E-Mail*</label><input required id="email" type="email" name="email" /></div>
					</div>
					<p><label for="subject">Тема</label><input required id="subject" type="text" name="subject"></p>
					<p><label for="message">Сообщение</label><textarea required id="message" name="message" type="text"></textarea></p>
					
					<input type="submit" name="submit" value="ОТПРАВИТЬ" class="submit">
				</form>
				<div class="map-con">
				<a class="dg-widget-link" href="http://2gis.kz/almaty/firm/9429940000978053/center/76.947137,43.229228/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a><div class="dg-widget-link"><a href="http://2gis.kz/almaty/center/76.947137,43.229228/zoom/16/routeTab/rsType/bus/to/76.947137,43.229228╎SELTFAR, компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до SELTFAR, компания</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":640,"height":300,"borderColor":"#a3a3a3","pos":{"lat":43.229228,"lon":76.947137,"zoom":16},"opt":{"city":"almaty"},"org":[{"id":"9429940000978053"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
				</div>
			</div>
			<div class="col-md-6 cont-info">
				<h4>СЭЛТФАР ЛТД</h4>
				<p>Office 504, 83 Baker Street,<br/>
					W1U 6AG London, United Kingdom<br/>
					Phone: +44 (0) 20 7969 1421/24<br/>
					E-Mail: info@seltfar.co.uk<p>
				<hr/>
				<p>Представительство<br/>
				в Республике Казахстан</p>
				<p>Пр-кт Аль-Фараби 5/1А, офис 301,<br/>
				050059 Алматы, Казахстан<br/>
				Телефон: +7 (727) 311 1628</p>
				<hr/>
				<p>Если у Вас есть сообщение о побочном действии 
				на прием лекарственного средства компании 
				Сэлтфар ЛТД, Вы можете позвонить 
				по телефону +7 (727) 311 16 28 или отправить 
				сообщение на электронный адрес info@seltfarrep.kz</p>
			</div>
		</div>
	</div>
</section>
<div id="overlay" class="d-none justify-content-center align-items-center">
    <div style="font-size: 25px; color:#fff" class="popup">
        <p>

       </p>
    </div>
</div>
<script>
$(document).ready(function () {
  $(".navbar-nav li").removeClass("active");//this will remove the active class from  
                                     //previously active menu item 
  $('#contact').addClass('active');
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.getElementsByClassName('needs-validation');
	// Loop over them and prevent submission
	var validation = Array.prototype.filter.call(forms, function(form) {
	  form.addEventListener('submit', function(event) {
	    if (form.checkValidity() === false) {
	      event.preventDefault();
	      event.stopPropagation();
	    }
	    else{
	      event.preventDefault();
	      event.stopPropagation();
	    	submit();
	    }
	  }, false);
    });
    $("#overlay").click(function(){
    	$("#overlay").toggleClass("d-flex");
    })
});
function submit(){/*
	$(".loader").fadeIn("normal");*/
	let request = $.get({
		url: "send.php",
		type: "get", //send it through get method
		data: {
		name : $("form input#name").val(),
		email: $("form input#email").val(),
		subject: $("form input#subject").val(),
		message: $("form textarea#message").val()
		},
		/*success: function() {
			$(".loader").fadeOut("normal");
		},*/
	}).done(function(request){
		if(request=="confirm"){
			openPopup("1");
		}
		else{
			openPopup("0");
		}
	})
}
function openPopup(val){
	if(val=="1"){
		$("#overlay p").html('Вы удачно отправили письмо');
		$("#overlay .popup").removeClass('bg-danger');
		$("#overlay .popup").addClass('bg-success');
	}
	else if(val=="0"){
		$("#overlay p").html('Что-то пошло не так');
		$("#overlay .popup").addClass('bg-danger');
		$("#overlay .popup").removeClass('bg-success');
	}
 	$("#overlay").toggleClass("d-flex");
 }
</script>
<?php include 'footer.php';?>