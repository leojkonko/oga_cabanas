<section class="diferenciais pt-lg-4 pt-2 bg-dark-claro">
    <div class="container position-relative">
        <div class="row">
            <h2 class="text-center w-100 text-white mb-2 mb-lg-8 h2-80 fw-400">Nossos <span class="fw-800">DIFERENCIAIS</span></h2>
            <div class="col-lg-10 m-auto">
                <div class="overflow-x-clip diferenciais-swiper">
                    <div class="swiper-wrapper pb-4">
                        @php
                         $number = 0   
                        @endphp
                        @foreach (range(0,5) as $banner)
                        @php
                         $number++   
                        @endphp
                            <div class="swiper-slide {{  $number % 2 === 0 ? 'elevar-card' : '' }}">
                                <div class="ratio ratio-6x9">
                                    <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/diferenciais.png") }}" alt="">
                                </div>    
                                <div class="ps-lg-2 text-lg-start text-center">
                                    <h6 class="ps-lg-1 mt-1 mb-1 p-24 fw-700 text-white">Design Inovador</h6>
                                    <div class="position-relative">
                                        <svg class="position-absolute bottom-0 start-lg--5 start-0" width="228" height="142" viewBox="0 0 228 142" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M227.167 141L1.17737 141L1.17737 -4.84845e-06" stroke="#F5F5F5" stroke-width="2"/>
                                        </svg> 
                                    </div>                                               
                                    <p class="ps-lg-1 mt-2 p-20 fw-400 text-white">
                                        Trabalhamos com matéria prima certificada de usina e com laudo técnico, o que garante total qualidade aos nossos produtos.
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev bg-laranja rounded-circle top-55 start-5">
                        <svg width="42" height="31" viewBox="0 0 42 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.9332 29.4392L1.99995 15.5059M1.99995 15.5059L15.9332 1.5727M1.99995 15.5059L41.013 15.5059" stroke="white" stroke-width="2"/>
                        </svg>                                                                                                     
                    </div>
                    <div class="swiper-button-next bg-laranja rounded-circle top-55 end-5">
                        <svg width="42" height="31" viewBox="0 0 42 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.9755 1.53168L40.0119 15.361M40.0119 15.361L26.1827 29.3974M40.0119 15.361L0.99997 15.651" stroke="white" stroke-width="2"/>
                        </svg>                                                     
                    </div>
                    {{--<div class="swiper-pagination d-lg-none"></div>--}}
                </div>
            </div>
        </div>
    </div>
</section>