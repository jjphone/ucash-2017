<?php 
/*
 * Quickly Apply for access
 */
?>
<div class="quick-access ">

  <h3><span></span>Truy cập nhanh</h3>
  
  <?php
  if ( have_posts() ) :

    /* Start the Loop */
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;

  else :

    get_template_part( 'template-parts/post/content', 'none' );

  endif;
  ?>
</div>
