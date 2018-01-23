/*setup Carousel slides at homepage*/
jQuery(document).ready(function($) {

  $('#carousel.carousel[data-type="multi"] .item').each(function() {
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < 2; i++) {
      next = next.next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }

      next.children(':first-child').clone().appendTo($(this));
    }
  });



  function updateCarouselInner(){
    var h = $('#carousel>.carousel-inner > .item.active > .carousel-col').height();
    //console.log("carousel-col height = ", h);
    $('#carousel>.carousel-inner').height(h);
  }

  $( window ).resize( function(){
    updateCarouselInner();
  });

  function slideTo(num){
    //console.log("slideTo(" + num + ")");
    $('#carousel.carousel').carousel(num);
  }
  
  function initActiveSlide(){
    $('#carousel>.carousel-inner > .item:first-child ').addClass('active');
  }


  $('#carousel div.carousel-col>div.wrapper').click( function(event){
    slideNo = event.currentTarget.classList[1]
                .match(/[0-9]/g)[0];
    $('#carousel').carousel( parseInt(slideNo) );
  });

  $(window).on("load", function(){
    initActiveSlide();
    updateCarouselInner();
  });

  console.log("home-carousel ready ...");


  initActiveSlide();
  //updateCarouselInner();

})