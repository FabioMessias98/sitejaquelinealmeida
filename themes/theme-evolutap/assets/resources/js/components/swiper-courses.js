(function() {
    const swiperCourses = new Swiper('.js-swiper-courses', {
        slidesPerView: 3,
        spaceBetween: 30,

        navigation: {
            prevEl: '.js-swiper-button-prev-courses',
            nextEl: '.js-swiper-button-next-courses'
        }
    })

    const swiperProducts = new Swiper('.js-swiper-products', {
        slidesPerView: 3,
        spaceBetween: 30,

        navigation: {
            prevEl: '.js-swiper-button-prev-products',
            nextEl: '.js-swiper-button-next-products'
        }
    })
})()