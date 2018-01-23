<?php

  $b = brands_update_image_path( $brand );
  $name = $b->name;  
?>


<div class="carousel-col">
  <div class="wrapper ">
    <img class="default" src="<?php echo $b->img_name ?>" alt="<?php echo $name ?>">
    <img class="hover" src="<?php echo $b->alt_image ?>" alt="<?php echo $name ?>">
    <div class="carousel-caption">
      <h3><?php echo $b->img_name ?></h3>
    </div>
  </div>
</div>

