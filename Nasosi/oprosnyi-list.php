<?php 
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);

$nav_bar = 5;

include "$rootDir/head.php";
 ?>


<div class="container">
	<div class="row">
		<form action="" id="mainForm" class="col-12 py-4">

			<p class="text-orange col-12 h2 py-2">Опросный лист</p>
			<p class="text-dark col-12 h5">Заполните опросный лист и наш менеджер свяжется с вами в ближайшее время.</p>
			<p class="text-orange col-12 h2 py-2">Контактные данные</p>

			<div class="form-group">
				<label class="h5" for="">ФИО</label>
				<input name="fio" data-validate="fio" type="text" class="form-control" placeholder="Ваше имя">
			</div>
			<div class="form-group">
				<label class="h5" for="">Организация</label>
				<input name="organization" data-validate="organization" type="text" class="form-control" placeholder="Организация">
			</div>
			<div class="form-group">
				<label class="h5" for="">Телефон</label>
				<input name="phone" data-validate="phone" type="text" class="form-control" placeholder="Телефон">
			</div>
			<div class="form-group">
				<label class="h5" for="">E-mail</label>
				<input name="email" data-validate="email" type="email" class="form-control" placeholder="E-mail">
			</div>

			<p class="text-orange col-12 h2 py-2">Насос</p>

			<div class="form-group">
				<label class="h5" for="">Тип насоса</label>
				<div class="custom-control custom-radio ml-4">
					<input type="radio" value="Горизонтальные" class="custom-control-input" id="radio1_1" name="tip_nasosa">
					<label class="custom-control-label" for="radio1_1">Горизонтальные</label>
				</div>
				<div class="custom-control custom-radio ml-4 mt-3">
					<input type="radio" value="Вертикальные" class="custom-control-input" id="radio1_2" name="tip_nasosa">
					<label class="custom-control-label" for="radio1_2">Вертикальные</label>
				</div>
			</div>
			<div class="form-group">
				<label class="h5" for="">Количество</label>
				<input name="kol-vo" type="text" value="1" class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<label class="h5" for="">Глубина погружения, м. (только для вертикальных насосов)</label>
				<input name="glubina" type="text" class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<label class="h5" for="">Насос в безфундаментном исполнении (для горизонтальных насосов)</label>
				<div class="custom-control custom-radio ml-4">
					<input type="radio" value="Да" class="custom-control-input" id="radio2_1" name="bezfundamentalnoe_ispolnenie">
					<label class="custom-control-label" for="radio2_1">Да</label>
				</div>
				<div class="custom-control custom-radio ml-4 mt-3">
					<input type="radio" value="Нет" class="custom-control-input" id="radio2_2" name="bezfundamentalnoe_ispolnenie">
					<label class="custom-control-label" for="radio2_2">Нет</label>
				</div>
			</div>

			<p class="text-orange col-12 h2 py-2">Условия эксплуатации</p>

			<div class="form-group">
				<label class="h5" for="">Среда (концентрация %)</label>
				<input name="sreda" type="text" class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<label class="h5" for="">Химическая формула</label>
				<input name="him_formula" type="text" class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<label class="h5" for="">Твердые включения</label>
				<input name="tverd_vkl" type="text" class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<label class="h5" for="">Размер твердых включений</label>
				<input name="size_tverd_vkl" type="text" class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<label class="h5" for="">Производительность м3/час</label>
				<input name="proizvod" type="text" class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<label class="h5" for="">Напор м</label>
				<input name="napor" type="text" class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<label class="h5" for="">Напор на входе/выходе атм.</label>
				<input name="napor_na_vhode" type="text" class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<label class="h5" for="">Плотность среды</label>
				<input name="plotnost" type="text" class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<label class="h5" for="">Температура C</label>
				<input name="temperatura" type="text" class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<label class="h5" for="">Установка</label>
				<div class="custom-control custom-radio ml-4">
					<input type="radio" value="Наруже" class="custom-control-input" id="radio3_1" name="ustanovka">
					<label class="custom-control-label" for="radio3_1">Наруже</label>
				</div>
				<div class="custom-control custom-radio ml-4 mt-3">
					<input type="radio" value="Внутри" class="custom-control-input" id="radio3_2" name="ustanovka">
					<label class="custom-control-label" for="radio3_2">Внутри</label>
				</div>
			</div>
			<div class="form-group">
				<label class="h5" for="">Уплотнение вала</label>
				<div class="custom-control custom-radio ml-4">
					<input type="radio" value="Одинарное торцевое" class="custom-control-input" id="radio4_1" name="uplotnenie">
					<label class="custom-control-label" for="radio4_1">Одинарное торцевое</label>
				</div>
				<div class="custom-control custom-radio ml-4 mt-3">
					<input type="radio" value="Двойное торцевое" class="custom-control-input" id="radio4_2" name="uplotnenie">
					<label class="custom-control-label" for="radio4_2">Двойное торцевое</label>
				</div>
				<div class="custom-control custom-radio ml-4 mt-3">
					<input type="radio" value="Магнитная муфта" class="custom-control-input" id="radio4_3" name="uplotnenie">
					<label class="custom-control-label" for="radio4_3">Магнитная муфта</label>
				</div>
			</div>
			<div class="form-group">
				<label class="h5" for="">Частотное регулирование</label>
				<div class="custom-control custom-radio ml-4">
					<input type="radio" value="Да" class="custom-control-input" id="radio5_1" name="chastota_regulirovaniya">
					<label class="custom-control-label" for="radio5_1">Да</label>
				</div>
				<div class="custom-control custom-radio ml-4 mt-3">
					<input type="radio" value="Нет" class="custom-control-input" id="radio5_2" name="chastota_regulirovaniya">
					<label class="custom-control-label" for="radio5_2">Нет</label>
				</div>
			</div>
			<div class="form-group">
				<label class="h5" for="">Взрывозащита двигателя</label>
				<input name="wzrivozashita" type="text" class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<label class="h5" for="">Частота (Гц)/Напряжение (В)</label>
				<input name="napryajeniye" type="text" class="form-control" placeholder="">
			</div>
			<div class="form-group">
				<label class="h5" for="">Дополнение</label>
				<textarea name="dopolneniya" class="form-control" rows="3" placeholder=""></textarea>
			</div>
	        <div id="mainFormMessageBox" class="d-none my-3">Форма успешно отправлена!</div>
			<button type="submit" class="btn btn-orange" id="mainFormButton">Отправить заявку</button>
		</form>
	</div>
</div>
	

<!-- endmain -->
<?php 
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$rootDir/footer.php";
 ?>

<script>
$(document).ready(function(){

	$('#mainFormButton').on('click', function(e){
		$('#mainForm').validate({
			rules : {
				fio : {
					required : true,
				},
				organization : {
					required : true,
				},
				phone : {
					required : true,
					minlength : 10,
					maxlength : 10,
					number : true,
				},
				email : {
					required : true,
				},
			},
			messages : {
				fio : {
					required : '<div class="error">Введите Имя</div>',
					valid : '<div class="success">Ок!</div>'
				},
				organization : {
					required : '<div class="error">Введите организацию</div>',
					valid : '<div class="success">Ок!</div>'
				},
				phone : {
					required : '<div class="error">Введите телефонный номер</div>',
					minlength : '<div class="error">Введите правильный телефонный номер</div>',
					maxlength : '<div class="error">Введите правильный телефонный номер</div>',
					number: '<div class="error">Введите правильный телефонный номер</div>',
					valid : '<div class="success">Ок!</div>'
				},
				email : {
					required : '<div class="error">Введите почту</div>',
					email: '<div class="error">Введите правильную почту</div>',
					valid : '<div class="success">Ок!</div>'
				}
			},

			errorClass: "text-danger mt-1",

			submitHandler: function(form){
				e.preventDefault();
				console.log($('#mainForm').serialize().fio);

				$.ajax({
				  type: "POST",
				  url: "/mainFormSubmit.php",
				  data: {
					fio: $("#mainForm input[name='fio']"),
					organization: $("#mainForm input[name='organization']"),
					phone: $("#mainForm input[name='phone']"),
					email: $("#mainForm input[name='email']"),
					tip_nasosa: $("#mainForm input[name='tip_nasosa']"),
					kol: $("#mainForm input[name='kol']"),
					glubina: $("#mainForm input[name='glubina']"),
					bezfundamentalnoe_ispolnenie: $("#mainForm input[name='bezfundamentalnoe_ispolnenie']"),
					sreda: $("#mainForm input[name='sreda']"),
					him_formula: $("#mainForm input[name='him_formula']"),
					tverd_vkl: $("#mainForm input[name='tverd_vkl']"),
					size_tverd_vkl: $("#mainForm input[name='size_tverd_vkl']"),
					proizvod: $("#mainForm input[name='proizvod']"),
					napor: $("#mainForm input[name='napor']"),
					napor_na_vhode: $("#mainForm input[name='napor_na_vhode']"),
					plotnost: $("#mainForm input[name='plotnost']"),
					temperatura: $("#mainForm input[name='temperatura']"),
					ustanovka: $("#mainForm input[name='ustanovka']"),
					uplotnenie: $("#mainForm input[name='uplotnenie']"),
					chastota_regulirovaniya: $("#mainForm input[name='chastota_regulirovaniya']"),
					wzrivozashita: $("#mainForm input[name='wzrivozashita']"),
					napryajeniye: $("#mainForm input[name='napryajeniye']"),
					dopolneniya: $("#mainForm input[name='dopolneniya']"),
				  },
				  success: function(){
				  	$("#mainFormMessageBox").html("<span class='text-success'>Форма успешно отправлена!</span>");
				  	$("#mainFormMessageBox").removeClass("d-none");
				  },
				  error: function(){
				  	$("#mainFormMessageBox").html("<span class='text-danger'>Возникла ошибка, попробуйте позже...</span>");
				  	$("#mainFormMessageBox").removeClass("d-none");
				  },
				});
			},
		});

	})

})
</script>
</body>
</html>