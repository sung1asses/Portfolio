<?php 
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);

$left_bar = -1;
$nav_bar = 4;

include "$rootDir/head.php";
 ?>
<!-- main -->

<div class="container">
  <div class="row p-3 flex-md-row flex-column-reverse">
    <div class="col-lg-3 col-md-4">
      <?php include "$rootDir/left-bar.php"; ?>
    </div>
    <div class="col-lg-9 col-md-8">

      <div class="row">
        <div class="col-12">
            <h1 class="mb-3 text-orange"> Безфундаментное исполнение </h1>  <!-- !! -->
            <div>
                <img src="/images/nasos-bezfundamentnoe-ispolnenie.jpg" class="w-100">
            </div>
            <p>Все чаще наши клиенты заказывают горизонтальные насосы в безфундаментном исполнении. Поскольку насосы Munsch в процессе работы не вибрируют, эта установка имеет ряд преимуществ:</p>
            <ul>
            	<li>не требует изготовления фундамента</li>
            	<li>не требует крепления анкерными болтами</li>
            	<li>не требует ровной поверхности</li>
            	<li>простота монтажа и демонтажа насоса</li>
            	<li>насос работает без напряжения со стороны обвязки трубопроводов</li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- endmain -->
<?php 
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$rootDir/footer.php";
 ?>

<script type="text/javascript">

$(document).ready(function(){

  

})

</script>
</body>
</html>