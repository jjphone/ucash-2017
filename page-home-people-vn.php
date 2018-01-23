
<?php
/**
 * Display graph on Homepage 
 * Template Name: page-home-people-vn

	/* skip the header if partial rendering */
	if ( get_current_template() == 'page-home-people' ) {
		get_header(); 
	}
?>

<div class="home-frontpage"> 
  <div class="row"><div class="home-people "> 


  	<div class="row"> 
  		<?php get_template_part('template-parts/home/people', 'broadcast-vn');	?>

  	</div>

  	<div>
  		<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/home/people', null );
          
				endwhile; // End of the loop.
		  ?>
  	</div>

	</div></div>
</div>




<?php
	/* skip the footer if partial rendering */
	if ( get_current_template() == 'page-home-people' ) {
 		get_footer();
 	}
