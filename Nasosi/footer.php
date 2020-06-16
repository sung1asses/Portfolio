<?php 
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
 ?>
<section class="bg-dark text-white p-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 my-2">
				<h5>
					© TOO Pumpen & Technologien <br>
					Промышленные химические насосы MUNSCH <br>
					<a class="text-white border-bottom" href="mailto:pumpen-technologien@bk.ru">pumpen-technologien@bk.ru</a>
				</h5>
			</div>
			<div class="col-md-4 my-2">
				<h5>
					
					Шымкент <br>
					<a class="text-white border-bottom" href="tel:+77071490708 ">+7 707 149 07 08</a>
	
				</h5>
			</div>
			<div class="col-md-4 my-2">
				<h5>
					<ul>
						<a class="text-white" href="/preimushestva-nasosov-munsh.php"><li class="border-bottom">Преимущества насосов Munsch</li></a>
						<a class="text-white" href="/contacts.php"><li class="border-bottom">Контакты</li></a>
					</ul>
				</h5>
			</div>
		</div>
	</div>
</section>

	<!-- LINKS -->
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/font_avesome/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

<script>
$(document).ready(function(){

	$('#callMeButton').on('click', function(e){
		$('#callMe').validate({
			rules : {
				name : {
					required : true,
				},
				phone : {
					required : true,
					minlength : 10,
					maxlength : 10,
					number : true,

				},
				comment : {
					required : true,
				},
			},
			messages : {
				name : {
					required : '<div class="error">Введите Имя</div>',
					valid : '<div class="success">Ок!</div>'
				},
				phone : {
					required : '<div class="error">Введите телефонный номер</div>',
					minlength : '<div class="error">Введите правильный телефонный номер</div>',
					maxlength : '<div class="error">Введите правильный телефонный номер</div>',
					valid : '<div class="success">Ок!</div>'
				},
				comment : {
					required : '<div class="error">Введите комментарий</div>',
					valid : '<div class="success">Ок!</div>'
				}
			},

			errorClass: "text-danger mt-1",


			submitHandler: function(form){
				e.preventDefault();

				$.ajax({
				  type: "POST",
				  url: "/callMeSubmit.php",
				  data: {
				  	name: $("#callMe input[name='name']").val(),
				  	phone: $("#callMe input[name='phone']").val(),
				  	comment: $("#callMe input[name='comment']").val(),
				  },
				  success: function(msg){
				  	console.log(msg)
				  	$("#messageBox").html("<span class='text-success'>Форма успешно отправлена!</span>");
				  	$("#messageBox").removeClass("d-none");
				  	setTimeout(function(){
				  		$("#messageBox").addClass("d-none");
				  		$("#callMe").modal("hide");
				  	}, 2000);
				  },
				  error: function(msg){
				  	console.log(msg)
				  	$("#messageBox").html("<span class='text-danger'>Возникла ошибка, попробуйте позже...</span>");
				  	$("#messageBox").removeClass("d-none");
				  },
				});
			},
		});

	})

})
</script>