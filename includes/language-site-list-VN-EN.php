<?php 


function language_domain_list($current_url){
  $sites = [ 
    (object)array(  'display'   => 'English', 
                    'subdomain' => 'wpen' ) 
    ,
    (object)array(  'display'   => 'Tiếng Việt', 
                    'subdomain' => 'wpvn')
  ];

  $result ='';

  foreach ( $sites as $idx => $site ) {
    if ( stripos($current_url, $site->subdomain) ) {
      $result .= '<li class="menu-item disable"><a class="disable" href="' . $current_url . '" >'. $site->display . '</a></li>' ;
    } else {

      $result .= '<li class="menu-item "><a href="http://' . $site->subdomain . strstr($current_url, '.') . '" >'. $site->display . '</a></li>' ;
    }
  }
  unset($site);

  return $result;
}

function add_last_nav_item($items) {
  global $wp;
  $items .= language_domain_list( home_url( add_query_arg(array(),$wp->request) )  ) ;
  return $items;
}
add_filter('wp_nav_menu_items','add_last_nav_item');