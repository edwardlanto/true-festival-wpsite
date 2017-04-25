(function ($) {
    var WideWindow = $(window);
    
    setTimeout(function(){
        $('.folding-cube-container').fadeOut("slow")
    },1500)
  
    $(window).scroll( function(){
        $('.fadein').each( function(){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},1000);
            }else{
                $(this).animate({'opacity':'0'},1000)
            }
        }); 
    });

    $('.gallery-list').hide();

    //Gallery Slider

    $(window).scroll(function(){
    event.preventDefault();
    var y = $(window).scrollTop();
    var slider = $('.gallery-list').scrollTop();
    if (y > slider + 3000){
      $('.gallery-list').show('4000', 'linear')
        }
    })

    //Header Transparency

    $(window).scroll(function(){
        event.preventDefault();
        var y = $(window).scrollTop();
        if( y > 600 ){
            $('.main-navigation').css({"background-color" : "rgba(245, 234, 155, 0.5)", "box-shadow": "none"});
            $('.nav-header').css({"color" : "white", "text-shadow" : "none"});
        }else{
            $('.main-navigation').css({"background-color" : "#f5ea9b"});
            $('.nav-header').css({"color" : "black", "text-shadow" : "4px 3px #fff"})

        }
    })

    //Gallery Popup function

    function resize() {
        if(WideWindow.width() >= 830){
            $('.gallery-image-container').addClass('popup');
            $('.map-container').attr("width","800");
            $('.map-container').attr("height","400");
            $('.mobile-dropdown').show();
            $('.dropdown-button').css({"display":"none"});
        }else{
            $('.gallery-image-container').removeClass('popup');
            $('.artist-social').remove();
            $('.artist-icon-container').remove();
            $('.map-container').attr("width","320vw");
            $('.map-container').attr("height","250");
            $('.mobile-dropdown').hide();
             $('.dropdown-button').css({"display":"block"});
        }
    }

    resize();

    function mobileResize(){
        if(WideWindow.width() <= 450){
            $('.news-title').css({"left":"40%"});
        }else{
            $('.news-title').css({"left":"0%"});
        }
    }

    mobileResize();
    $('.read-more').on('click', function(){
        if($(this).text() == 'Read More'){
            $(this).text('Read Less')
        }else{
            $(this).text('Read More');
        }
        $(this).next().slideToggle('600', 'swing');
    })


    //Gallery Popup

    $('.gallery-breakpoint').on('click', function(){
        $(this).toggleClass('image-grow');
    })

    //Small Gallery Desktop Popup
        
    $('.small-gallery-item').on('click', function(){
        $('.gallery-popup-container').empty();  
        $('.popup-container').css({"display":"flex"});
        $(this).clone().addClass("chosen-image").css({"width":"50%", "height":"100%", "margin":"0 auto", "border":"none","margin-top":"4%", "filter":"none"}).appendTo('.gallery-popup-container').children().css({"object-fit":"fill","border":"10px solid #fff"});
        $('.chosen-image').children().css({"width":"auto", "height":"auto"});

    });

    $('.x-button').on('click', function(){
        $('.popup-container').fadeOut("fast");
    })





    


})(jQuery)


