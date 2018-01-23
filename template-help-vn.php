<?php
/**
 * Template Name: template-help-vn
 */

get_header(); ?>
<!-- template-contact.php -->



<div class="fullwidth-container help">
	<div class="contact-feature">
		<h1>Câu hỏi thường gặp</h1>
		<h4>Xem chi tiết</h4>
	</div>

	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>

		<header class="page-title">
			<h2 class="page-title">Loại câu hỏi</h2>
		</header>

		<main class="row"> 
			<div class="container-fluid menu"
						id="help-menu"
						aria-multiselectable="true"
			>

				
			<?php get_template_part('template-parts/help/nav-vn', null); ?>		
			<?php /*get_template_part('template-parts/help/test', null);*/ ?>		
				
			</div> 
		</main>


	<?php endif; ?>




	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
