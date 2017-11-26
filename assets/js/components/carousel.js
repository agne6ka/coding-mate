import $ from 'jquery';

import 'slick-carousel';

class Carousel {
    constructor(options) {
        let defaults = {
            slider: {},
            settings: {
                dots: true,
                arrows: true,
                dotsClass: 'slick-dots',
                appendDots: $('.header-carousel'),
                prevArrow: '<a class="slick-prev slick-arrow">&lsaquo;</a>',
                nextArrow: '<a class="slick-next slick-arrow">&rsaquo;</a>',
                slidesToShow: 1
            }
        };

        this.o = $.extend(true, {}, defaults, options);
    }

    startSlick() {
        this.o.slider.slick(this.o.settings);
    }
}

export default Carousel;
