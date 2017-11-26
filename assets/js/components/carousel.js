import $ from 'jquery';

import 'slick-carousel';

class Carousel {
    constructor(options) {
        let defaults = {
            slider: {},
            settings: {
                dots: true,
                arrows: true,
                dotsClass: 'box-dots-el',
                appendDots: $('.header-carousel'),
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
