<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white h-6">
      <?php 
      if($breadcrumb[1]):
       ?>
        <li class="breadcrumb-item">
      		<?php echo ($breadcrumb[0]==1)?'<a class="text-dark" href="/catalog/gorizontalnie-nasosy">Горизонтальные насосы</a>':'<a class="text-dark" href="/catalog/vertikalnye-nasosy">Вертикальные насосы</a>' ?>
        </li>
      <?php 
      else:
       ?>
        <li class="breadcrumb-item active">
          <?php echo ($breadcrumb[0]==1)?'Горизонтальные насосы':'Вертикальные насосы' ?>
        </li>
       <?php 
        endif;
       ?>
 
      <?php 
      	if($breadcrumb[1]):
       ?>
      <li class="breadcrumb-item active" aria-current="page"><?php echo $breadcrumb[1] ?></li>
      <?php 
      	endif;
       ?>
    </ol>
  </nav>