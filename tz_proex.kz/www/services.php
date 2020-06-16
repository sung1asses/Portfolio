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
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/Portfolio.jpg);">
            	<div class="overlay-main bg-black" style="opacity:0.5;"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">Наши улсуги</h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
           <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-1">
                        <li><a href="index.php">Главная</a></li>
                        <li>Услуги</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->                   
            
            <!-- WHY CHOOSE US SECTION START  -->
            <div class="section-full bg-gray p-t80 p-b120" style="background-image:url(images/background/why-choose-pic.png); background-repeat:no-repeat; background-position:right bottom;">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Наши услуги</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="row">
                        
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-6 p-tb15">
                                <div class="wt-icon-box-wraper  p-a20 left bg-white">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="services-1.php" class="icon-cell"><i class="fa fa-life-ring" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">Техническое обследование зданий и сооружений</h5>
                                        <div class="wt-separator bg-primary"></div>
                                        <p>ТОО «PROJECТ ЭКСПЕРТ» осуществляет комплексное техническое обследование – комплексный анализ состояния зданий [...]</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-4 col-sm-6 p-tb15">
                                <div class="wt-icon-box-wraper  p-a20 left bg-white">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="services-2.php" class="icon-cell"><i class="fa fa-trophy" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content ">
                                        <h5 class="wt-tilte text-uppercase">Технический надзор 1 уровня ответственности</h5>
                                        <div class="wt-separator bg-primary"></div>
                                        <p>Независимый строительный контроль (технический надзор) - универсальный инструмент в руках клиента, с помощью которого [...]</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-md-4 col-sm-6 p-tb15">
                                <div class="wt-icon-box-wraper  p-a20 left bg-white">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="services-3.php" class="icon-cell"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">Технический аудит</h5>
                                        <div class="wt-separator bg-primary"></div>
                                        <p>Услуга для банков, девелоперов  и инвесторов. Финансовый и технический аудит проекта актуализирует [...]</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-md-6 col-sm-6 p-tb15">
                                <div class="wt-icon-box-wraper  p-a20 left bg-white">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="services-4.php" class="icon-cell"><i class="fa fa-users" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">Экспертиза проекта</h5>
                                        <div class="wt-separator bg-primary"></div>
                                        <p>Экспертизы проводятся судебными экспертами, являющимися членами Республиканской палаты судебных экспертов [...]</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="col-md-6 col-sm-6 p-tb15">
                                <div class="wt-icon-box-wraper  p-a20 left bg-white">
                                    <div class="icon-sm text-primary m-b20">
                                        <a href="services-5.php" class="icon-cell"><i class="fa fa-area-chart" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">Строительно-монтажные работы</h5>
                                        <div class="wt-separator bg-primary"></div>
                                        <p>ТОО «Project Эксперт» предлагает высококачественные услуги в сфере строительно-монтажных работ по отличным [...]</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            <!-- WHY CHOOSE US SECTION END --> 
            
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
