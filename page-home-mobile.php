<!--## page-home-mobile.php -->
<?php
/**
 * Display mobile section at hoepage
 * Template Name: page-home-mobile
 */

	/* skip the header if partial rendering */
	if ( get_current_template() == 'page-home-mobile' ) {
		get_header(); 
	}
?>

<div class="home-frontpage mobile"> <!--## container-fluid -->

  <div class="row"><div class="home-mobile"> 



  	<div class="row"> <!--## row -->
      <div id="bg-wrapper">
        <div class="row">
  		    <?php get_template_part('template-parts/home/mobile', null);	?>
        </div>
      </div>

  	</div> <!-- row ##-->



	</div></div>
</div>




<?php
	/* skip the footer if partial rendering */
	if ( get_current_template() == 'page-home-mobile' ) {
 		get_footer();
 	}
