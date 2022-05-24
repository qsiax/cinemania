import './styles/all.scss'
import gsap from "gsap"
import ScrollTrigger from "gsap/ScrollTrigger"
import TweenMax from "gsap/all"
import { Power2, Elastic, CSSPlugin, Expo } from "gsap/all"
import Swiper from 'swiper/bundle'
import 'swiper/css'

gsap.registerPlugin(ScrollTrigger, TweenMax);

const mainSlider = new Swiper('.main__slider', {
    speed: 600,
    centeredSlides: true,
    autoplay: {
        delay: 5000,
    },
    breakpoints: {
        0: {
            slidesPerView: 1.2,
            spaceBetween: 40,
        },
        680: {
            slidesPerView: 3,
            spaceBetween: 60,
            autoplay: false
        }
    },
});

const soonSlider = new Swiper('.soon__slider', {
    speed: 600,
    autoplay: {
        delay: 5000,
    },
    breakpoints: {
        0: {
            slidesPerView: 2.5,
            spaceBetween: 10,
        },
        680: {
            slidesPerView: 3,
            spaceBetween: 60,
            autoplay: false
        }
    },
});

TweenMax.to('.overlay', 1.5, {
	delay: 1.5,
	opacity: 0,
	ease: Expo.easeInOut
})

TweenMax.to('.overlay-logo', 1.5, {
	delay: 1,
	opacity: 0,
	ease: Expo.easeInOut
})