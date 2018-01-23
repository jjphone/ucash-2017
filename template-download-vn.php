
<?php
/**
 * Template Name: template-download-vn
 */

get_header(); ?>

<div class="fullwidth-container download">
	<div class="contact-feature">
		<h1>Tải ứng dụng Ucash</h1>
		<h4>Nhập thông tin để đăng kí </h4>
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
						<?php get_template_part('template-parts/download/access', "vn"); ?>			
					</div>
				</div>

				
			</div> 
		</main>


	<?php endif; ?>




	<?php get_sidebar(); ?>
</div>

<?php get_footer();
