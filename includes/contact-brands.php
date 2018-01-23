<?php 
/* return 6 brands for each item in the Contact page */
function contact_brands(){

  $item_1 = (object)array(

    (object)array(  'active'    => '',
                    'name'      => 'VISA',
                    'url'       => '#',
                    'img_name'  => 'item_11_alt.png',
                    'alt_image' => 'item_11_alt.png'
                  ) ,
    (object)array(  'active'    => '',
                    'name'      => 'Paypal',
                    'url'       => '#',
                    'img_name'  => 'item_12_alt.png',
                    'alt_image' => 'item_12_alt.png'
                  ) ,

    (object)array(  'active'    => '',
                    'name'      => 'MasterCard',
                    'url'       => '#',
                    'img_name'  => 'item_13_alt.png',
                    'alt_image' => 'item_13_alt.png'
                  ) ,

    (object)array(  'active'    => '',
                    'name'      => 'StandardChartered',
                    'url'       => '#',
                    'img_name'  => 'item_14_alt.png',
                    'alt_image' => 'item_14_alt.png'
                  ) ,

    (object)array(  'active'    => '',
                    'name'      => 'Discover',
                    'url'       => '#',
                    'img_name'  => 'item_15_alt.png',
                    'alt_image' => 'item_15_alt.png'
                  ) ,

    (object)array(  'active'    => '',
                    'name'      => 'DBSBank',
                    'url'       => '#',
                    'img_name'  => 'item_16_alt.png',
                    'alt_image' => 'item_16_alt.png'
                  ) 

  );

  return array( $item_1  );
}


function contact_item_count(){
  return sizeof( contact_brands() );
}