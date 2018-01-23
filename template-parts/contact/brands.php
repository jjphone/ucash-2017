<?php
/* 
 * Brands carousel on contact page
 */
?>

<div id="carousel-brands" class="carousel slide " data-interval="2500" data-pause=" " >

  <ol class="carousel-indicators">
    <?php 
      $len = contact_item_count();
      for( $idx = 0; ($len > 1) && ($idx < $len) ; $idx++ ) {
        set_query_var('idx', $idx);
        get_template_part('template-parts/contact/brands', 'indicator') ;
      }
      unset($idx);
      unset($len);
    ?>
    
  </ol>

    <div class="carousel-inner" role="listbox">
      <?php 
        $brand_list = contact_brands();
        foreach($brand_list as $row => $innerArray){
      ?>
        <div class=" item slide-<?php echo $row ?> ">

      <?php
          foreach($innerArray as $innerRow => $value){
            set_query_var('brand', $value);
            get_template_part( 'template-parts/contact/brands', 'slide' );
          }
      ?>

        </div>

      <?php
        }
        unset($brand);
      ?>
     
    </div> 

  <?php 
    if( contact_item_count() > 1 ) {
      get_template_part( 'template-parts/contact/brands', 'controls');
    }
  ?>

</div>

<script type="text/javascript" src="/wp-content/themes/2017-child/assets/javascripts/brands-carousel.js" ></script>