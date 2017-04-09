(function ($) {
    
    setTimeout(function(){
        $('.folding-cube-container').fadeOut("slow")
    },1500)
  
    $(window).scroll( function(){
        $('.fadein').each( function(){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},1000);
            }
        }); 
    });

    

})(jQuery)