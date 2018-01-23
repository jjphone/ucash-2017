<?php
/**
 * Template Name: template-help-default-language
 */

get_header(); ?>
<!-- template-contact.php -->



<div class="fullwidth-container help">
	<div class="contact-feature">
		<h1>Q &amp A</h1>
		<h4>USE UC TO COUNTER PROBLEMS IN THE PROCESS</h4>
	</div>

	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>

		<header class="page-title">
			<h2 class="page-title">Question Category</h2>
		</header>

		<main class="row"> 
			<div class="container-fluid menu"
						id="help-menu"
						aria-multiselectable="true"
			>

				
			<?php get_template_part('template-parts/help/nav', null); ?>		
			<?php /*get_template_part('template-parts/help/test', null);*/ ?>		
				
			</div> 
		</main>


	<?php endif; ?>




	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
