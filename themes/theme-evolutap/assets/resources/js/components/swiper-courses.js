(function() {
    const swiperCourses = new Swiper('.js-swiper-courses', {
        slidesPerView: 3,
        spaceBetween: 30,

        navigation: {
            prevEl: '.js-swiper-button-prev-services',
            nextEl: '.js-swiper-button-next-services'
        }
    })
})()