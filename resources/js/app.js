import Alpine from 'alpinejs'
import Swiper from 'swiper'
import { Autoplay, Navigation } from 'swiper/modules'
import { Observer } from 'tailwindcss-intersect'
import 'swiper/css'
import './bootstrap'

window.Alpine = Alpine
Alpine.start()
Observer.start()

new Swiper('.provide-slider', {
    modules: [Autoplay],
    slidesPerView: 2,
    spaceBetween: 20,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 3000
    },
})

new Swiper('.galleries-slider', {
    modules: [Autoplay],
    loop: true,
    autoplay: {
        delay: 2000
    }
})

const slideShow = new Swiper('.slide-show', {
    init: false,
    modules: [Navigation],
    slidesPerView: 1,
    disableOnInteraction: false,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
})

slideShow.on('init', (e) => {
    e.slides.map((slide) => {
        if (slide.classList.contains('swiper-slide-active')) {
            if (slide.querySelector('video')) {
                let video = slide.querySelector('video')
                video.play()
            }
        }
    })
})

slideShow.on('slideChangeTransitionStart', (e) => {
    e.slides.map((slide) => {
        if (slide.classList.contains('swiper-slide-active')) {
            if (slide.querySelector('video')) {
                let video = slide.querySelector('video')
                video.load()
                video.play()
            }
        }
    })
})

slideShow.on('slideChangeTransitionEnd', (e) => {
    e.slides.map((slide) => {
        if (slide.classList.contains('swiper-slide-prev') || slide.classList.contains('swiper-slide-next')) {
            if (slide.querySelector('video')) {
                let video = slide.querySelector('video')
                video.pause()
            }
        }
    })
})

document.addEventListener('DOMContentLoaded', () => { slideShow.init() })
