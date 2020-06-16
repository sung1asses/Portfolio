<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Химические насосы MUNSCH от эксклюзивного поставщика</title>

	<link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" media="screen" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="/css/owl.theme.green.min.css">

	<link rel="stylesheet" type="text/css" media="screen" href="/css/style.css">
	<link rel="stylesheet" type="text/css" media="screen" href="/css/all.min.css">

</head>
<body>
<div class="container py-4 d-lg-block d-none">
	<div class="row">
		<div class="col-3 d-flex justify-content-center align-items-center">
			<a href="/index.php"><img class="w-100" src="/images/lok-logo4-name.png" alt=""></a>
		</div>
		<div class="col-3 d-flex justify-content-center align-items-center">
			<img class="w-100" src="/images/munsch_logo01.png" alt="">
		</div>
		<div class="col-6 d-flex justify-content-between">
			<div class="d-flex justify-content-center flex-column">
				<a class="text-orange" href="tel:+77711450330"><i class="fas fa-phone mr-2"></i>+7 771 145 03 30</a>
				<a class="text-orange" href="mailto:info@munsch.kz"><i class="fas fa-envelope mr-2"></i>info@munsch.kz</a>
			</div>
			<div class="d-flex justify-content-center flex-column">
				<button class="btn btn-orange" data-toggle="modal" data-target="#callMe"><i class="fas fa-phone mr-2"></i>Заказать звонок</button>  <!-- modal -->
			</div>
		</div>
	</div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-orange sticky-top">
    <div class="container">
      <a class="navbar-brand d-lg-none" href="/index.php">MUNSCH</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item <?php echo $nav_bar==1?'active':'' ?>">
            <a class="nav-link" href="/index.php">Главная  <?php echo $nav_bar==1?'<span class="sr-only">(current)</span>':'' ?></a>
          </li>
          <li class="nav-item <?php echo $nav_bar==2?'active':'' ?>">
            <a class="nav-link" href="/catalog/gorizontalnie-nasosy/index.php">Горизонтальные насосы   <?php echo $nav_bar==2?'<span class="sr-only">(current)</span>':'' ?></a>
          </li>
          <li class="nav-item <?php echo $nav_bar==3?'active':'' ?>">
            <a class="nav-link" href="/catalog/vertikalnye-nasosy/index.php">Вертикальные насосы  <?php echo $nav_bar==3?'<span class="sr-only">(current)</span>':'' ?></a>
          </li>
          <li class="nav-item <?php echo $nav_bar==4?'active':'' ?>">
            <a class="nav-link" href="/bezfundamentnoe-ispolnenie.php">Безфундаментное исполнение  <?php echo $nav_bar==4?'<span class="sr-only">(current)</span>':'' ?></a>
          </li>
          <li class="nav-item <?php echo $nav_bar==5?'active':'' ?>">
            <a class="nav-link" href="/oprosnyi-list.php">Опросный лист  <?php echo $nav_bar==5?'<span class="sr-only">(current)</span>':'' ?></a>
          </li>
          <li class="nav-item <?php echo $nav_bar==6?'active':'' ?>">
            <a class="nav-link" href="/contacts.php">Контакты  <?php echo $nav_bar==6?'<span class="sr-only">(current)</span>':'' ?></a>
          </li>
        </ul>
      </div>
    </div>
</nav>

<!-- Modal -->
<form class="modal fade" id="callMe" tabindex="-1" role="dialog" aria-labelledby="callMeLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="callMeLabel">Заявка на обратный звонок</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Оставьте свой номер и наш менеджер свяжется с вами в ближайшее время</p>
        <div class="form-group">
          <input placeholder="Ваше имя" name="name" class="form-control" type="text" data-validate="name">
        </div>
        <div class="form-group">

          <input placeholder="Телефон" name="phone" class="form-control" type="text" data-validate="phone">
        </div>
        <div class="form-group">
          <label for="#comment">Комментарий</label>
          <textarea name="comment" id="comment" class="form-control" rows="3" data-validate="comment"></textarea>
        </div>
        <div id="messageBox" class="d-none">Форма успешно отправлена!</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-orange w-100" id="callMeButton">Позвоните мне</button>
      </div>
    </div>
  </div>
</form>
