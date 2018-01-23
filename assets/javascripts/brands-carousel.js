jQuery(document).ready(function($) {
  console.log("ready");

  function initBrandSlide(){
    $('#carousel-brands>.carousel-inner > .item:first-child ').addClass('active');
  }


 initBrandSlide();

});