<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>


<nav class="navbar navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <a class="navbar-brand" href="#">
      <img alt="UCash_logo" src="<?php echo asset_uri(); ?> " />
    </a>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-top-menu-items" aria-expanded="false">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  

  </div>


  <div id="nav-top-menu-items" class="navbar-collapse collapse">

    <?php wp_nav_menu( array(
    'theme_location' => 'top',
    'menu_id'        => 'top-menu',
  ) ); ?>




  </div>




</nav>
