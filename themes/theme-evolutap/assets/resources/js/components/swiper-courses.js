(function() {
    const swiperCourses = new Swiper('.js-swiper-courses', {
        slidesPerView: 3,
        spaceBetween: 30,

        navigation: {
            prevEl: '.js-swiper-button-prev-courses',
            nextEl: '.js-swiper-button-next-courses'
        },

        breakpoints: {
            320: {
                slidesPerView: 1.2
            },

            768: {
                slidesPerView: 2
            },

            992: {
                slidesPerView: 3
            }
        }
    })

    const swiperProducts = new Swiper('.js-swiper-products', {
        slidesPerView: 3,
        spaceBetween: 30,

        navigation: {
            prevEl: '.js-swiper-button-prev-products',
            nextEl: '.js-swiper-button-next-products'
        },

        breakpoints: {
            320: {
                slidesPerView: 1.2
            },

            768: {
                slidesPerView: 2
            },

            992: {
                slidesPerView: 3
            }
        }
    })
})()