<?php
/**
 * Template part for displaying pages on front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

global $twentyseventeencounter;

?>

<!--## content-front-page-panel.php -->

<article id="panel<?php echo $twentyseventeencounter; ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content">

		<?php 
			/* Render article with customized template if exists.*/
			if ( is_null( get_page_template_slug( $post->ID ) ) ) {
				get_template_part( 'template-parts/page/content-front-page-panel-default-article', 'none' );
			} else {
				get_template_part( pathinfo( get_page_template_slug($post->ID) )['filename'] , null );
			}
		?>

	</div><!-- .panel-content -->

</article><!-- #post-## -->
