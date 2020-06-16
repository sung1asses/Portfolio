<!DOCTYPE html>

<html lang="en">

<!-- HEAD START -->
<?php 
require("head.php");
 ?>
 <!-- HEAD END -->

<body id="bg">
	
    <div class="page-wraper">
        	
        <!-- HEADER START -->
        <?php 
        require("header.php");
         ?>
        <!-- HEADER END -->
        
         <!-- CONTENT START -->
        <div class="page-content  bg-white">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/career.jpg);">
            	<div class="overlay-main bg-black" style="opacity:0.5;"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">Техническое обследование зданий и сооружений</h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
           <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-1">
                        <li><a href="index.php">Главная</a></li>
                        <li>Сертификаты</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->
            
            <!-- SERTS START -->
            <div class="section-full bg-white p-t80 p-b50">
                <div class="container">
                
                    <!-- IMAGE CAROUSEL START -->
                  
                        <!-- TITLE START -->
                        <div class="section-head">
                            <h2 class="text-uppercase">Наши сертификаты</h2>
                            <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                        </div>
                        <!-- TITLE END -->

                        <!-- CAROUSEL -->
                        <div class="section-content">
                            
                            <div class="owl-carousel img-carousel  owl-btn-vertical-center">
                            
                                <!-- COLUMNS 1 -->
                                <div class="item">
                                    <div class="ow-img wt-img-effect img-reflection">
                                        <a href="images/serts/1.jpg" class="fancybox"><img style="height: 200px; border:5px solid #337ab7;" src="images/serts/1.jpg" alt=""></a>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="item">
                                    <div class="ow-img wt-img-effect img-reflection">
                                        <a href="images/serts/2.jpg" class="fancybox"><img style="height: 200px; border:5px solid #337ab7;" src="images/serts/2.jpg" alt=""></a>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="item">
                                    <div class="owl-img wt-img-effect img-reflection">
                                        <a href="images/serts/3.jpg" class="fancybox"><img style="height: 200px; border:5px solid #337ab7;" src="images/serts/3.jpg" alt=""></a>
                                    </div>
                                </div>
                                <!-- COLUMNS 4 -->
                                <div class="item">
                                    <div class="ow-img wt-img-effect img-reflection">
                                        <a href="images/serts/4.jpg" class="fancybox"><img style="height: 200px; border:5px solid #337ab7;" src="images/serts/4.jpg" alt=""></a>
                                    </div>
                                </div>
                                <!-- COLUMNS 5 -->
                                <div class="item">
                                    <div class="ow-img wt-img-effect img-reflection">
                                        <a href="images/serts/5.jpg" class="fancybox"><img style="height: 200px; border:5px solid #337ab7;" src="images/serts/5.jpg" alt=""></a>
                                    </div>
                                </div>
                                
                            </div>
                        
                        </div>

                </div>
            </div>
            <!-- SERTS END -->

        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <?php 
        require('footer.php');
         ?>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop fa fa-arrow-up" ></button>
        
    </div>
    
<!-- JAVASCRIPT  FILES ========================================= --> 
<?php 
require('scripts.php');
 ?>


</body>

</html>
