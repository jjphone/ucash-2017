/* graph-dragable.js */
jQuery(document).ready( function($){ 

  var drag = $("#dragable");
  var unit = 0;       //grind size
  var dragRange = 0;  // dragable range
  var size = 18;      // no. of grids
  var extra = 2;      // extra padding for the line

  function graphUpdateScale(){
    resetElem( drag.parent() );
    resetElem( $("#graph-line") );
    //resetElem( drag );

    ptWidth = drag.width();
    resizeLineBox( size , ptWidth, extra );

    line = $("#graph-line");
    graphScaleGrid( size, ptWidth , ptWidth/2 - 5  );
    resetPointerPosition( dragableStep(0, null) , 0 );
    drag.draggable("option", "grid", [unit, 0]);    
  }

// reset the Dragable position after resize
  function resetPointerPosition( steps , offset  ){
    if ( steps < 1 || steps > 10){
      return; // error, do nothing !
    }

    drag.offset( {left: 2*unit * (steps -1) + drag.parent().offset().left + offset } );
    return;
  }

// reset the width, top, left attr of an element
  function resetElem( elem ){
    elem.css({"width": "100%", "top": '', "left": ''  });
  }
// resize/scale LineBox offset.left and its width to whole number
  function resizeLineBox(size, ptWidth, extra){
    box = drag.parent();
    coord = box.offset();
    coord.left = Math.round(coord.left);
    box.offset(coord);

    unit = Math.floor( (box.width() - ptWidth) / size );
    dragRange = unit * size + ptWidth + extra;
    box.width( dragRange );
  }

// scale dots to grid
  function graphScaleGrid(steps, ptWidth, initX){
    elem = $("#graph-line");

    newCoord = elem.offset();
    newCoord.left += initX;
    newCoord.top += 3;
    elem.offset( newCoord ) ;

    elem.width( dragRange - ptWidth );

    lineUnit = elem.width() / steps;
    dots = elem.children();
    

    var coord = $( dots[0] ).offset();
    for (i=1; i < 10 ; i++){
      dot = $( dots[i] );
      dot.offset().left = coord.left + ( 2 * i * lineUnit );
    }
    
  }

// getter dragable.data-line-step when opcode = 0
  // setter dragable.data-line-step = value when opcode = 1
  function dragableStep(opcode, strValue){
    if (opcode == 1) {
      drag.attr("data-line-step", strValue);
      return strValue;
    } else 
      return drag.attr("data-line-step");
  }


// $("#graph").toggleClass("active") if ( #dragable.data-line-step) > 0
  function graphActiveToggle(event, elem){
    switch (event.type){
      case "mouseenter" :
        elem.addClass("active");
        break;
      case "mouseleave" :
        if ( dragableStep(0, null) == 1 )
          elem.removeClass("active");        
      default :
        break;
    }
  }

  
// return string display for offset /Position
  function elemLeftOffsetPosition(elem){
    return elem.position().left + " / " + elem.offset().left;
  }

  function dragStepPos(){
    steps = (Math.round( drag.position().left / unit ) / 2) + 1;
    return steps;
  }


// Dragging operation
  function graphDragging(event){
    //$("#graph").addClass("dragging");
    $("#repay-values").addClass("dragging");
    steps = dragStepPos();
    
    $("#amount").text( steps );
    //$("#amount").text( elemLeftOffsetPosition( drag ) );
  }

// Draggone complete operation
  function graphDragStopped(){
    // $("#graph").removeClass("dragging");
    $("#repay-values").removeClass("dragging");

    steps = dragStepPos();

    dragableStep(1, steps);
    updateRepayValues( steps * 1000000 );
  }

// update #repay-values
  function updateRepayValues( amount ){
    var values = $("#repay-values span.value");
    //console.log("updateRepayValues :: values ", values);
    
    values.eq(0).text( toCurrency( amount * 0.13 ) );
    values.eq(1).text( toCurrency( amount * 0.2  ) );
    values.eq(2).text( toCurrency( amount * 0.27 ) );
    values.eq(3).text( toCurrency( amount * 0.34 ) );
  }

function toCurrency(amount){
  console.log( " toCurrency :: window.ucashConfig = " , window.ucashConfig );
  x = int2Currency( amount, '', window.ucashConfig.currencyDelimiter);
  console.log( " toCurrency :: x = " , x);
  return x;
}

// convert number to currency with thousand separator
  function int2Currency(x, prefix, delimit){
    if ( prefix == null ) 
      prefix = '';
    x = Math.round(x);
     return ( prefix + x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, delimit) );
  }

  function initDraggable(){
    drag.draggable( {
      axis :        "x",
      containment:  "#graph-line-box",
      scroll:       false,
      zIndex:       10,


      drag:         graphDragging,
      stop:         graphDragStopped
    } ) ;
    graphUpdateScale();
  }



  initDraggable();
  $( window ).on( "resize", graphUpdateScale );


  //$("#graph").on("mouseenter mouseleave", graphActiveToggle(event, this) );
  $("#graph").on("mouseenter mouseleave", function(event){
    graphActiveToggle(event, $(this));
  } );



  console.log("graph-dragable ready");
  console.log("window.ucash : ", window.ucash);

  //console.log("ucash : ", ucash);


});