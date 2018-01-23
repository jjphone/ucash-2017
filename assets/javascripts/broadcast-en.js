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
    {avatar: av_6, msg: "My family are enjoying New Year with brand new appliances after I got a quick loan from UCash before the New Year." },
    {avatar: av_2, msg: "Thanks to Ucash, she can solve the problem immediately without bothering her family and friends." },
    {avatar: av_3, msg: " I'm really satisfied with Ucash. I just registered in the morning but I have been disbursed at noon.  Consultants are friendly too." },
    {avatar: av_4, msg: "Ucash is great! Yesterday,  I was lacking in money about 2 million to buy a phone. And now I'm commenting by the phone which I buy from the Ucash's loan. Thanks Ucash a lot. If there is a need, I'll borrow from Ucash." },
    {avatar: av_1, msg: "Customer service is greater.  I just sent an email and said I want to register. After that, consultant called me and helped how to registered with careful and enthusiastic" }
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