<?php
/*
 * contact form for Contact page
 */

?>

<?php
if ( have_posts() ) :

  while ( have_posts() ) : the_post();
    the_content();
  endwhile;

else :

  get_template_part( 'template-parts/post/content', 'none' );

endif;
?>