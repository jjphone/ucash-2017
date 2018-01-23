/* broadcast.js*/
jQuery(document).ready(function($) {
  const DEBUG = false;
  var av_6 ='/wp-content/themes/2017-child/assets/home/avatar_a.png';
  var av_2 ='/wp-content/themes/2017-child/assets/home/avatar_b.png';
  var av_3 ='/wp-content/themes/2017-child/assets/home/avatar_c.png';
  var av_4 ='/wp-content/themes/2017-child/assets/home/avatar_d.png';
  var av_1 ='/wp-content/themes/2017-child/assets/home/avatar_1.png';


  var graph = $("#graph>.graph-line");
  var graphActive = false;
  
  messages = [
    {avatar: av_6, msg: "Ucash quá tuyệt vời !, hôm trước tôi thiếu 2 triệu mua điện thoại. Giờ tôi đang bình luận bằng điện thoại tôi mua từ khoản vay của Ucash. Cảm ơn Ucash rất nhiều, Nếu có việc cần tôi lại vay Ucash." },
    {avatar: av_2, msg: " Có Ucash, chị đã giải quyết được vấn đề trước mắt, mà không cần làm phiền đến người thân hay bạn bè." },
    {avatar: av_3, msg: "Thật sự hài lòng về Ucash. Tôi mới đăng kí hồi sáng mà đến trưa đã được giải ngân ngay. Các bạn chăm sóc KH thì rất dễ thương" },
    {avatar: av_4, msg: "Ucash quá tuyệt vời !, hôm trước tôi thiếu 2 triệu mua điện thoại. Giờ tôi đang bình luận bằng điện thoại tôi mua từ khoản vay của Ucash. Cảm ơn Ucash rất nhiều, Nếu có việc cần tôi lại vay Ucash." },
    {avatar: av_1, msg: "CSKH của Ucash quá tuyệt vời, tôi chỉ cần gửi mail nói muốn đăng ký nhưng không hiểu về ứng dụng, trong ngày là có nhân viên CSKH gọi đến hướng dẫn tôi đăng ký khoản vay tận " }
  ];

  var msg = {
    avatar: av_1,
    msg: "hello from jquery"
  }  ;


  function randomItem(){
    var pos = Math.floor(Math.random() * 5);
    var delay = Math.floor(Math.random() * 60) + 10;
    return { 
      pos: pos, 
      delay: delay,
      msg: "generated [" + pos + "] at delay of " + delay + "seconds"
    }
  }

  function update( item , prefix){
    if( item.avatar === null ){
      item.avatar = '/wp-content/themes/2017-child/assets/home/avatar_1.png'
    }
    $("#avatar>img").attr("src", item.avatar);
    $("#msg-content").text( prefix  + item.msg ) ;
  }

  function startTimer(){
    var rand = randomItem();  
    var prefix = "";
    var id = setTimeout( function() {
      if (DEBUG) {
        //prefix = "Next in " + rand.delay + " sec :: "

        console.log("startTimer :: next broadcast -> " + prefix );
      }
      update( messages[rand.pos], prefix );
      startTimer();
    }, rand.delay*1000);
  }


  // change the opacity on panel-title based on scroll
  function dimTitleOnScroll(){
    var elem = $("#panel-title");
    var height = elem.parent().height() - 200;
    var scrollValue = $(window).scrollTop();
    var ratio = 0 ; 
    if ( ( height - scrollValue ) > 0 ) {
      ratio = ( height - scrollValue ) / height;
      elem.css( "opacity" , ratio);
    } 
  }

  function parallaxOnMobileSection( extra ){
    // default screen-sm-min width (px)
    const SCREEN_SM_MIN = 768;
    var mobile = $(".home-mobile");
    var scroll = 0;

    var row;

    if ( $(window).width() < SCREEN_SM_MIN ) {
      mobile.css({"height" : ""});
      mobile.children(1).css({"width" : ""});
      return;
    }
    scroll = $(window).scrollTop()  + $(".navbar").height() + extra -  mobile.offset().top  ; 

    if ( (scroll  >= 0) && (scroll < mobile.height()) )  {
      //console.log( "parallaxOnMobileSection :: scroll = " + scroll + "    mobile.height = " + mobile.height() );
      row = mobile.children(1) ;

      mobile.addClass("parallax");

      row.offset( { top: (mobile.offset().top + scroll * 0.95 ) } )  ;

      mobile.css( "opacity", 1 - (scroll / mobile.height() ) );
      
    } else {
      mobile.removeClass("parallax");
    }


    //console.log("parallaxOnMobileSection :: COMPLETED  window.size = "+ $(window).width() );
     
    
    return;
    
  }


  $(window).on("scroll", function(){
    dimTitleOnScroll() ;
    parallaxOnMobileSection(10);
  });


  console.log("broadcast ready...");
  startTimer();

});