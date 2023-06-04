
    <section class="banner ratio ratio-6x9 ratio-lg-16x9 overflow-hidden mt-headerr">
        <div class="banner-swiper">
            <div class="swiper-wrapper">
                {{--@foreach ($banners as $banner)--}}
                    <div class="swiper-slide banner-slide position-relative">

                        <picture>
                            {{--Video
                            <video class="object-fit-cover w-100 h-100 d-none d-lg-block" src="{{ $banner->bannerDesktop->first()?->url() }}" 
                                type="video/mp4" muted="" playsinline="" autoplay="" loop="" media="(min-width: 767px)">
                                    Seu navegador não suporta a tag de vídeo.
                                </video>
                            Video --}}
                            {{-- Desktop --}}
                            <source srcset="{{ asset("front/images/backgrounds/banner.png") }}" media="(min-width: 767px)">
                                <div class="position-absolute top-50 top-40 start-50 text-start w-100 translate-middle">
                                    <div class="container">
                                        <div class="col-lg-8 col-xl-6 col-xxl-4" data-aos="fade-right">
                                            <h2 class="text-white h2-50 fw-400 mt-lg-3 mt-xl-0 w-100 text-center text-lg-start">O <span class="fw-800">refúgio perfeito</span> para vivier dias incríveis!</h2>
                                            <p class="text-white mt-1 p-24 fw-400 text-center text-lg-start d-none d-sm-block">Uma verdadeira experiência, desde o primeiro contato até o uso do imóvel.</p>
                                        </div>
                                    </div>
                                </div>
                            {{-- Mobile --}}
                            <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/banner.png") }}" alt="">
                        </picture>

                        {{--@if ($banner->link_1)
                            <a href="{{ $banner->link_1 }}" class="stretched-link"></a>
                        @endif--}}

                    </div>
                {{--@endforeach--}}
            </div>
            <div class="swiper-button-prev">
                <svg width="1.25em" height="1.25em" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </div>
            <div class="swiper-button-next">
                <svg width="1.25em" height="1.25em" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
    </section>
