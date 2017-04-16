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
            $('.main-navigation').css({"background-color" : "#f5ea9b", "box-shadow": "-9px 12px 69px 18px #fff"});
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

    //width 800
    //height 600
    //of map

    resize();

    $('.read-more').on('click', function(){
        if($(this).text() == 'Read More'){
            $(this).text('Read Less')
        }else{
            $(this).text('Read More');
        }
        $(this).next().slideToggle('600', 'swing');
    })
    // $('.popup').on('click', function(event){
    //     event.preventDefault();
    //     $('.gallery-popup').css({"display": "block"});
    //     $(this).clone();
    //     $('.gallery-popup').append($(this))
    //     $('.gallery-popup').fadeIn('1000', 'linear');
    // })

    // $('.gallery-image-container').on('click', function(event){
    //     event.preventDefault();
    //     // $('.popup-description').empty();
    //     $('.gallery-popup').css({"display" : "block"})
    //     $(this).clone()
    //     $('.gallery-popup').append($(this));
    // });

    


})(jQuery)


