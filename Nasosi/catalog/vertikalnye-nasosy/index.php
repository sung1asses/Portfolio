<?php 
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);

$left_bar = 20;
$nav_bar = 3;
$breadcrumb[0] = 2;
$breadcrumb[1] = null;

include "$rootDir/head.php";
 ?>
<!-- main -->

<div class="container">
    <div class="row p-3">
      <div class="col-md-3">
        <?php include "$rootDir/left-bar.php"; ?>
      </div>
    <div class="col-md-9">
      <?php include "$rootDir/breadcrumb.php" ?>
      
      <div class="row">

        <div class="col-md-4 col-sm-6 col p-1">
          <div class="card h-100">
            <a href="/catalog/vertikalnye-nasosy/tnp-kl.php">  
              <img class="card-img-top" src="/images/single/vertical/tnp-kl/1.jpg"> <!-- !! -->
            </a>
            <div class="card-body d-flex justify-content-between flex-column">
              <p class="card-text text-orange">Вертикальный химический насос TNP-KL</p> <!-- !! -->
              <a href="/oprosnyi-list.php" class="btn btn-gray">Оставить заявку</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 col p-1">
          <div class="card h-100">
            <a href="/catalog/vertikalnye-nasosy/tnp.php">  
              <img class="card-img-top" src="/images/single/vertical/tnp/1.jpg"> <!-- !! -->
            </a>
            <div class="card-body d-flex justify-content-between flex-column">
              <p class="card-text text-orange">Вертикальный химический насос TNP</p> <!-- !! -->
              <a href="/oprosnyi-list.php" class="btn btn-gray">Оставить заявку</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 col p-1">
          <div class="card h-100">
            <a href="/catalog/vertikalnye-nasosy/tpc.php">  
              <img class="card-img-top" src="/images/single/vertical/tpc/1.jpg"> <!-- !! -->
            </a>
            <div class="card-body d-flex justify-content-between flex-column">
              <p class="card-text text-orange">Вертикальный химический насос TPC</p> <!-- !! -->
              <a href="/oprosnyi-list.php" class="btn btn-gray">Оставить заявку</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 col p-1">
          <div class="card h-100">
            <a href="/catalog/vertikalnye-nasosy/tpc-m.php">  
              <img class="card-img-top" src="/images/single/vertical/tpc-m/1.jpg"> <!-- !! -->
            </a>
            <div class="card-body d-flex justify-content-between flex-column">
              <p class="card-text text-orange">Вертикальный химический насос TPC-M</p> <!-- !! -->
              <a href="/oprosnyi-list.php" class="btn btn-gray">Оставить заявку</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 col p-1">
          <div class="card h-100">
            <a href="/catalog/vertikalnye-nasosy/tpc-b.php">  
              <img class="card-img-top" src="/images/single/vertical/tpc-b/1.jpg"> <!-- !! -->
            </a>
            <div class="card-body d-flex justify-content-between flex-column">
              <p class="card-text text-orange">Вертикальный химический насос TPC-B</p> <!-- !! -->
              <a href="/oprosnyi-list.php" class="btn btn-gray">Оставить заявку</a>
            </div>
          </div>
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