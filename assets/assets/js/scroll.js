$(document).ready(function() {

    var $elem = $('.homepage');
   
    $("a[href='#recent_portfolio']").click(function() {
        $("html, body").animate({ scrollTop: $elem.height() }, "slow");
        return false;
    });

    $(window).scroll(function(){
         if ($(this).scrollTop() > 100) {
             $('.arrow, .arrow2').fadeOut();
           
         } else {
             $('.arrow, .arrow2').fadeIn();
             
         }
    });


    $(window).scroll(function(){
    if ($(this).scrollTop() > 700) {
      $('.Up').fadeIn();
    } else {
      $('.Up').fadeOut();
    }
  });
  
  
  $('.Up').click(function(){
    $('html, body').animate({scrollTop : 0},600);
    return false;
  });


});
