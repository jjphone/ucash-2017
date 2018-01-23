<?php
/**
 * Template Name: template-download-default-language
 */

get_header(); ?>
<!-- template-contact.php -->



<div class="fullwidth-container download">
	<div class="contact-feature">
		<h1>Download UCash App</h1>
		<h4>USE UC TO COUNTER PROBLEMS IN THE PROCESS</h4>
	</div>

	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>


		<main class="row"> 
			<div class= "download-wrap">
				<div class="row">
					<div>

						<div class="box-wrapper">
							<img class="img-responsive" src="<?php echo asset_uri("QR_code.png");  ?>" /> 
						</div>

					</div>
					<div> 
						<?php get_template_part('template-parts/download/access', null); ?>			
					</div>
				</div>
								
			</div> 
		</main>


	<?php endif; ?>




	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
