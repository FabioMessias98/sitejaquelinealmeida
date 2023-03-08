(function() {
    const swiperTestimonials = new Swiper('.js-swiper-testimonials', {
        slidesPerView: 2.5,
        spaceBetween: 30,

        navigation: {
            prevEl: '.js-swiper-button-prev-testimonials',
            nextEl: '.js-swiper-button-next-testimonials'
        },

        breakpoints: {
            320: {
                slidesPerView: 1.5
            },

            768: {
                slidesPerView: 2
            },

            992: {
                slidesPerView: 2.5
            }
        }
    })
})()