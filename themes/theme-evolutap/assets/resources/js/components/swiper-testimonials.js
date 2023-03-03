(function() {
    const swiperTestimonials = new Swiper('.js-swiper-testimonials', {
        slidesPerView: 2.5,
        spaceBetween: 30,

        navigation: {
            prevEl: '.js-swiper-button-prev-testimonials',
            nextEl: '.js-swiper-button-next-testimonials'
        }
    })
})()