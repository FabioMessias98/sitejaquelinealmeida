(function() {
    new Swiper( '.js-swiper-photos', {
        slidesPerView: 2.5,
        spaceBetween: 30,
        loop: true,
        initialSlide: 1,
        centeredSlides: true,

        navigation: {
            prevEl: '.js-swiper-button-prev-photos',
            nextEl: '.js-swiper-button-next-photos',
        }
    })
})()