<nav id="menu-1" class="mega-menu full-width">
   <section class="menu-list-items">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 col-md-12">
               <ul class="menu-logo">
                  <li>
                     <a class="ml-3" href="index.php"><img id="logo_img" src="images/logo.png" style="max-height: 62px; background-color: #105282" alt="logo"> </a>
                  </li>
               </ul>
               <ul class="menu-links">
                  <!-- <li>
                     <a href="javascript:void(0)">Home<i class="fa fa-angle-down fa-indicator"></i></a>
                     <ul class="drop-down-multilevel">
                        <li><a href="index.html">Home One </a></li>
                        <li><a href="index2.html">Home Two </a></li>
                        <li><a href="index3.html">Home Three </a></li>
                     </ul>
                  </li> -->
                  <li><a href="index.php"> Главная </a></li>
                  <li><a href="about.php"> О нас </a></li>
                  <li><a href="services.php"> Услуги </a></li>
                  <?php 
                  if($url == "index"){
                     echo '<li><a href="#consult"> Бесплатная консультация </a></li>';
                  }
                   ?>
                  <li><a href="contact.php"> Контакты </a></li>
                  <li>
                     <div class="contact-in-header">
                        <i class="ti-mobile"></i>
                        <span>
                        Свяжитесь с нами
                        <br>
                        <strong><a style="color:#fff;" href="tel:+7 (777) 268-88-28 "> +7 (777) 268-88-28 </a></strong>
                        </span>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>
</nav>