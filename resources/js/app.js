import Alpine from 'alpinejs'
import Swiper from 'swiper'
import { Autoplay, FreeMode } from 'swiper/modules'
import { Observer } from 'tailwindcss-intersect'
import 'swiper/css'
import './bootstrap'
import EmblaCarousel from 'embla-carousel'

window.Alpine = Alpine
Alpine.start()
Observer.start()

// const emblaNode = document.querySelector('.embla')
// const options = {
//     loop: false
// }
// const emblaApi = EmblaCarousel(emblaNode, options)

// console.log(emblaApi.slideNodes())

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

const swiper = new Swiper('.slide-show', {
    init: false,
    modules: [Autoplay],
    slidesPerView: 1,
    disableOnInteraction: false,
    loop: true,
    autoplay: {
        delay: 3000
    }
})

swiper.on('init', (e) => {
    e.slides.map((slide) => {
        if (slide.classList.contains('swiper-slide-active')) {
            let video = slide.querySelector('video')
            video.play()
        }
    })
})

swiper.on('slideChangeTransitionStart', (e) => {
    e.slides.map((slide) => {
        if (slide.classList.contains('swiper-slide-active')) {
            let video = slide.querySelector('video')
            video.load()
            video.play()
        }
    })
})

swiper.on('slideChangeTransitionEnd', (e) => {
    e.slides.map((slide) => {
        if (slide.classList.contains('swiper-slide-prev') || slide.classList.contains('swiper-slide-next')) {
            let video = slide.querySelector('video')
            video.pause()
        }
    })
})

document.addEventListener('DOMContentLoaded', () => { swiper.init() })
