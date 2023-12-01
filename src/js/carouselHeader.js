var currentPage = window.location.pathname;

if (currentPage === '/carta') {
    console.log('Script carusel loaded (Page-Platos)');

    var mySwiper;

    function initializeSwiper() {
        mySwiper = new Swiper('#miCarrusel', {
            slidesPerView: 'auto',
            spaceBetween: 1,
            loop: false,
            centeredSlides: true,
        
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                1024: {
                    slidesPerView: 4,
                    centeredSlides: false,
                },
            },
            on: {
                slideChangeTransitionEnd: function () {
                    if (this.isEnd) {
                        this.params.autoplay.reverseDirection = true;
                        this.autoplay.start();
                    } else if (this.isBeginning) {
                        this.params.autoplay.reverseDirection = false;
                        this.autoplay.start();
                    }
                },
            },
            
        });
    }

    initializeSwiper();
}
