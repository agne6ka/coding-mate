import $ from "jquery";

import Carousel from './components/carousel';


class App {
    constructor() {
        this.init();
        this.initPlugins();
    }

    init() {
    }

    initPlugins() {
        let carousel = new Carousel({slider: $('.header-carousel')});

        carousel.startSlick();
    }
}

document.addEventListener('DOMContentLoaded', () => new App());
