<?php 
/*
 * includes list of customized functions for functions.php
 */


require_once( __DIR__ . '/includes/language-site-list.php');
require_once( __DIR__ . '/includes/contact-brands.php');
require_once( __DIR__ . '/includes/graph-dots.php');

require_once( __DIR__ . '/includes/homepage-people-en.php');
//require_once( __DIR__ . '/includes/homepage-people-vn.php');

/*return array size*/
function homepage_people_count(){
  return sizeof( homepage_people() );
}


/*return person image path for given active state*/
function person_image($state, $details){
  if ( $state == 'active' ){
    return asset_uri('home/people/' . $details->img_file);
  } else {
    return asset_uri('home/people/' . $details->alt_img);
  }
}

/* update image path to brand */
function brands_update_image_path($b){
  $brand = $b;
  $brand->img_name  = asset_uri('brands/' . $brand->img_name );
  $brand->alt_image = asset_uri('brands/' . $brand->alt_image);
  return $brand;
}
