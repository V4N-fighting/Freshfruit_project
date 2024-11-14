document.addEventListener('DOMContentLoaded', function () {
    var splide = new Splide( '#products-content', {
        perPage: 4,
        gap: 30,
        rewind : true,
        pagination: false
    } );
        
    splide.mount();        
});




