<?php 
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);

$left_bar = -1;
$nav_bar = 6;

include "$rootDir/head.php";
 ?>
<!-- main -->

<div class="container">
  <div class="row p-3 flex-md-row flex-column-reverse">
    <div class="col-lg-3 col-md-4">
      <?php include "$rootDir/left-bar.php"; ?>
    </div>
    <div class="col-lg-9 col-md-8">
		<p class="text-orange col-12 h2 py-2">О компании</p>
		<p>замечательная компания</p>

	</div>
</div>


<?php 
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$rootDir/footer.php";
 ?>

</body>
</html>