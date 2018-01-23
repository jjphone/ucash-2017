<!--## page-home-people.php -->
<?php
/**
 * Display graph on Homepage 
 * Template Name: page-home-people-default-language
 */

	/* skip the header if partial rendering */
	if ( get_current_template() == 'page-home-people' ) {
		get_header(); 
	}
?>

<div class="home-frontpage"> <!--## container-fluid -->

  <div class="row"><div class="home-people "> 



  	<div class="row"> <!--## row -->
  		<?php get_template_part('template-parts/home/people', 'broadcast');	?>

  	</div> <!-- row ##-->

  	<div><!--## row -->
  		<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/home/people', null );
          //get_template_part( 'template-parts/home/people', test );

				endwhile; // End of the loop.
		  ?>
  	</div> <!-- row ##-->

	</div></div>
</div>




<?php
	/* skip the footer if partial rendering */
	if ( get_current_template() == 'page-home-people' ) {
 		get_footer();
 	}
