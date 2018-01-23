<?php
/**
 * Template Name: template-contact-default-language
 */

get_header(); ?>
<!-- template-contact.php -->



<div class="fullwidth-container contact">
	<div class="contact-feature">
		<h1>UC IS A XXXX COMPANY</h1>
		<h4>TO PROVIDE YOU WITH PROFESSIONAL AND RAPID FINANICAL SOLUTIONS</h4>
	</div>

	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>

		<header class="brand-header">
			<h2 class="page-title">Cooperation Brands</h2>
		</header>

		<div class="row"> <div class="brands-wrap">

				<div class="row">
					<?php get_template_part('template-parts/contact/brands', null); ?>		
				</div>

		</div> </div>


	<?php endif; ?>


	<div  class="contact-form row">
		<main id="main" class="contact-wrap" role="main">

			<div class="row">
				<div class="halves left">
					<?php get_template_part('template-parts/contact/form', null);  ?>
				</div>

				<div class="halves right">
					<?php get_template_part('template-parts/contact/inform'); ?>
				</div>
				
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
