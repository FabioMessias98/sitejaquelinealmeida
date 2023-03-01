(function($) {
	const swiperGallery = new Swiper('.swiper-container-gallery', {
		pagination: {
			el: '.swiper-pagination',
		},
		
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
	});

	const swiperPhotos = new Swiper('.swiper-container-photos', {
		navigation: {
			nextEl: '.swiper-button-next-photos',
			prevEl: '.swiper-button-prev-photos',
		},
		
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
	});

	const swiperDefence = new Swiper('.swiper-defence-videos', {

		
		initialSlide: 1,
		spaceBetween: 10,
		slidesPerView: 3,
		centeredSlides: true,
		loop:true,

		navigation: {
			nextEl: '.swiper-button-next-defence-videos',
			prevEl: '.swiper-button-prev-defence-videos',
		},

		breakpoints: {
			0: {
				slidesPerView: 3,
			},
			360: {
				slidesPerView: 1,
			},
			640: {
				slidesPerView: 1.5,
			},
			768: {
				slidesPerView: 1.7,
			},
			1024: {
				slidesPerView: 2,
			},
			1366: {
				slidesPerView: 2.9,
			},
		},
	});


})(jQuery)