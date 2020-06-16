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
        <div class="page-content">
        
            <!-- Section content -->
            <div class="wt-contact-wrap row equal-wraper">
            
                <!-- MAP BLOCK START -->
                <div class="contact-left-part equal-col">
                    <div class="gmap-outline">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A381adf674479303bcac2e96cfe456a2e15449ef72f5b0f2a739bd72dc0c09ce9&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
                <!-- MAP BLOCK END -->
                
                <!-- RIGHT PART START -->
                <div class="contact-right-part equal-col">
                
                    <!-- CONTACT DETAIL -->
                    <div class="p-a30  wt-box">
                        <h4 class="text-uppercase">Контакты</h4>
                        <div class="wt-separator-outer m-b30">
                            <div class="wt-separator style-square">
                               <span class="separator-left bg-primary"></span>
                               <span class="separator-right bg-primary"></span>
                           </div>
                       </div>
                        <div class="row">
                        
                            <div class="col-lg-4 col-md-12 col-sm-12 m-b30">
                                    <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                        <div class="wt-icon-box-sm bg-primary m-b20 corner">
                                            <span class="icon-cell text-white">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </div>
                                        <div class="icon-content">
                                            <h5>Телефон</h5>
                                            <a href="tel:+7 (777) 001-16-34"><p>+7 (777) 001-16-34</p></a>
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-12 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                    <div class="wt-icon-box-sm bg-primary m-b20 corner">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h6>Email</h6>
                                        <p>projectekspert@mail.ru</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-12 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                    <div class="wt-icon-box-sm bg-primary m-b20 corner">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h5>Адресс</h5>
                                        <p>г.Нур-Султан, ул.Айнаколь 60, в.п.14</p>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    
                    <!-- CONTACT FORM -->
                    <div class="p-lr30">
                        <h4 class="text-uppercase">Напишите нам!</h4>
                        <div class="wt-separator-outer m-b30">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <div class="m-a30 wt-box border-2">
                    
                        <form class="cons-contact-form" method="post" id="submitForm">
                        
                            <div class="row">
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input name="username" type="text" id="Name" required class="form-control" placeholder="Имя">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input name="email" type="text" id="Email" class="form-control" required placeholder="Email">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon v-align-m"><i class="fa fa-pencil"></i></span>
                                            <textarea name="message" id="Message" rows="4" class="form-control " required placeholder="Обращение" ></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 text-right">
                                    <button name="submit" type="submit" value="Submit" class="site-button skew-icon-btn m-r15">Отправить <i class="fa fa-angle-double-right"></i></button>
                                    <button name="Resat" type="reset" value="Reset"  class="site-button skew-icon-btn" >Очистить <i class="fa fa-angle-double-right"></i></button>
                                </div>

                            </div>

                        </form>
                        
                    </div>
                    
                </div>
                <!-- RIGHT PART END -->
            
            </div>
            <!-- Section content END -->  
           
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


<script  src="http://maps.google.com/maps/api/js?sensor=false"></script><!-- GOOGLE MAP -->
<script   src="js/map.script.js"></script><!-- MAP FUCTIONS [ this file use with google map]  -->

<script type="text/javascript">
$(document).ready(function(){
    $('form').on('submit',function(){
        event.preventDefault();
        var Name = $('#Name').val();
        var Email = $('#Email').val();
        var Message = $('#Message').val();
        let mailer = $.post(
            'mail.php',
            {
                Name: Name, 
                Email: Email,
                Message: Message
            },
            function (data){
                if(data != ""){
                    alert (data);
                }
                else{
                    alert ('Что-то пошло не так, попробуйте позже.')
                }
            }
        );
    })
})
</script>


</body>

</html>
