(function($){
    $('.main-carousel').flickity({
        setGallerySize: true,
        initialIndex: 0,
        cellSelector: '.carousel-cell',
        autoPlay: 3000,
        cellAlign: 'left',
        wrapAround: true,
        arrowShape: 'M 10,50 L 80,80 L 80,75 L 20,50  L 80,25 L 80,20 Z'
    });
})(jQuery); 