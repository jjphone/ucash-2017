<?php 
/*
 * display people slides
 */
?>
<div class="item <?php echo $person->active ?>">  
  <div class="carousel-col "  >

    <div class="wrapper slide-<?php echo $pos?>"  >
      <img class="default" 
          src="<?php echo person_image($person->active, $person)  ?>" />

      <img class="hover" 
          src="<?php echo person_image(true, $person)  ?>" / >     
      <div class="carousel-caption ">
        <h3><?php echo $person->name ?></h3>
        <h4><?php echo $person->title ?></h4>
        <p> <?php echo $person->desc ?></p>
      </div>
    </div>

  </div>

</div>