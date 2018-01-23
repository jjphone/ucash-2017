<?php
/**
 * Display people on Homepage
 */
?>

<div id="carousel" class="carousel slide container"  data-type="multi" data-interval="2500" data-pause=" ">

  <ol class="carousel-indicators">
    <?php 

      $len = homepage_people_count();
      for( $idx = 0; $idx < $len; $idx++ ){
        set_query_var('idx', $idx);
        get_template_part( 'template-parts/home/people', 'indicator' );
      }
      unset($idx);
      unset($len)

    ?>
  </ol>


  <div class="carousel-inner " role="listbox">
    <?php

      foreach ( homepage_people() as $key => &$p ) {
        set_query_var('person', $p );
        set_query_var('pos', $key);
        get_template_part( 'template-parts/home/people', 'slide' ); 
      }

      unset($pos);
      unset($p);
      unset($person); 

    ?>
  </div>


  <?php 
    get_template_part( 'template-parts/home/people', 'control' );
  ?>

</div>


<script type="text/javascript" src="/wp-content/themes/2017-child/assets/javascripts/home-carousel.js" ></script>
