/* help-menu.js */
jQuery(document).ready(function($) { 
  console.log("ready");

  var menu_items = [ 
          $('#guide-details') ,
          $('#borrow-details'),
          $('#repay-details')
  ];


  function matchMenuEvent(event){

    var id = event.currentTarget.id.slice(0,-5) ;
    var collapsed = event.currentTarget.className.indexOf("collapsed") >= 0 ? true : false;
    var len = menu_items.length;
    for( var i = 0; (collapsed && i < len ); i++){

      if ( menu_items[i][0].id.indexOf(id) < 0 ){
        menu_items[i].collapse('hide');
      }

    }
  };

  $('#help-menu div.links').on('click', matchMenuEvent);


} );