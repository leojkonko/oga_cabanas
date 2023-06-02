/**
 * Declaração dos swipers
 * Exemplo:
 * let swiper = new Swiper(".swiper-teste", {opcoes})
 * breakpoints: {
        1200: {
            slidesPerView: 6,
        },
        992: {
            slidesPerView: 5,
        },
        767: {
            slidesPerView: 4,
        },
        576: {
            slidesPerView: 3,
        },
    },
 */

new Swiper(".banner-swiper", {
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    rewind: false,
    navigation: {
        nextEl: ".banner-swiper .swiper-button-next",
        prevEl: ".banner-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".banner-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
});

new Swiper(".gallery-swiper", {
    rewind: false,
    slidesPerView: 1,
    spaceBetween: 1,
    navigation: {
        nextEl: ".gallery-swiper .swiper-button-next",
        prevEl: ".gallery-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".gallery-swiper .swiper-pagination",
        type: "bullets",
        dynamicBullets: true,
        clickable: true,
    },
});
new Swiper(".depoimentos-swiper", {
    rewind: false,
    slidesPerView: 1,
    spaceBetween: 36,
    navigation: {
        nextEl: ".depoimentos-swiper .swiper-button-next",
        prevEl: ".depoimentos-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".depoimentos-swiper .swiper-pagination",
        type: "bullets",
        dynamicBullets: true,
        clickable: true,
    },
});
new Swiper(".diferenciais-swiper", {
    rewind: false,
    slidesPerView: 1,
    spaceBetween: 80,
    navigation: {
        nextEl: ".diferenciais-swiper .swiper-button-next",
        prevEl: ".diferenciais-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".diferenciais-swiper .swiper-pagination",
        type: "bullets",
        dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        992: {
            slidesPerView: 3,
        },
        767: {
            slidesPerView: 2,
        },
        576: {
            slidesPerView: 2,
        },
    },
});
new Swiper(".cabanas-swiper", {
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
        nextEl: ".cabanas-swiper .swiper-button-next",
        prevEl: ".cabanas-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".cabanas-swiper .swiper-pagination",
        type: "bullets",
        dynamicBullets: true,
        clickable: true,
    },
});
new Swiper(".cores-swiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
        nextEl: ".cores-swiper .swiper-button-next",
        prevEl: ".cores-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".cores-swiper .swiper-pagination",
        type: "bullets",
        dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        992: {
            slidesPerView: 3,
        },
        767: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 2,
        },
    },
});
