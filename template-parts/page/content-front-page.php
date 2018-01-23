<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<script type="text/javascript">
  window.ucashConfig = { language: "english", currencyDelimiter: "," };
</script>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] );  ?>); ">

      <div class="panel-title" id="panel-title">
        <h1>LET CREDIT CREATES VALUE</h1>
        <h4>PROVIDE YOU THE PROFESSIONAL AND RAPID FINANCIAL SOLUTIONS</h4>

      </div>

			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>

		</div>

	<?php endif; ?>

	<div class="home-frontpage"> 

    <div class="row"><div class="home-content"> 
      <div>  
        <div class="halves left">
          <?php get_template_part( 'template-parts/home/graph', 'left-en' );?>
        </div>
        <div class="halves right">
          <?php get_template_part( 'template-parts/home/graph', 'right-en' ); ?>
        </div>
      </div>



      <div class="row home-2-thumbs">
        <?php get_template_part('template-parts/home/thumbs', 'en'); ?>
      </div>  

    </div></div> 

	</div>

</article>
