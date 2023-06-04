@extends('front.layout.app')

@section('content')
    <main id="">

        <x-banners />

        <section class="oga py-lg-4 py-2">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-5 position-relative overflow-hidden" style="background: #f5f5f5">     
                        <div class="ms-lg-2">
                            <svg class="position-absolute top-50 start-5 translate-middle-y" width="150" height="150" viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="150" height="150" fill="#626B53"/>
                            </svg>  
                            <div class="ratio ratio-1x1">
                                <img class="object-fit-cover w-100 h-100 ps-lg-4" src="{{ asset("front/images/backgrounds/oga.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 ">
                        <div class="position-relative h-100 w-100 ms-xxl-4 ps-xxl-4 d-flex align-items-center justify-content-center">
                               
                            <div class="ms-lg-4" data-aos="fade-left">
                                <h2 class="P-400 h2-80 fw-400 mb-lg-2 mb-1 text-lg-start text-center mt-2 mt-lg-0">Conheça a <span class="fw-800">ÓGA</span></h2>
                                <div class="w-100 position-relative">
                                    <svg class="position-absolute bottom-0 end-0 object-fit-contain z-index-background" width="960" height="235" viewBox="0 0 960 235" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line y1="-1" x2="959" y2="-1" transform="matrix(-0.999999 0.0010427 -0.00173707 -0.999998 959 232)" stroke="#2B2B2B" stroke-width="2"/>
                                        <line x1="957.418" y1="-3.38661e-08" x2="957.418" y2="234" stroke="#2B2B2B" stroke-width="2"/>
                                    </svg> 
                                </div>
                                <div class="mt-xl-4 mt-2 pe-lg-2 w-lg-70 text-lg-start text-center">
                                    <p class="p-22 fw-400">Com experiência de mais de 10 anos na construção civil, em especial na fabricação de telhas, apresentamos para você a Óga Cabanas.</p>
                                    <p class="p-22 fw-400">Nos orgulhamos em oferecer ao mercado brasileiro cabanas que vão além das expectativas, proporcionando satisfação, design inovador, 
                                        conforto e segurança construtiva em cada projeto entregue.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="atuacao py-lg-4 py-2">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-7 " data-aos="fade-right">
                        <div class="position-relative h-100 w-100 d-flex align-items-center justify-content-center">
                            <div class="" data-aos="fade-right">
                                <h2 class="p-400 h2-80 fw-400 mb-lg-2 text-lg-start text-center ps-lg-4 m-0 mb-1">Atendemos toda <br> <span class="fw-800">A REGIÃO SUL</span></h2>
                                <div class="w-100 position-relative">
                                    <svg class="position-absolute top-0 start-0 start-lg-5 object-fit-contain z-index-background" width="787" height="419" viewBox="0 0 787 419" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line y1="-1" x2="786.001" y2="-1" transform="matrix(0.999999 -0.0011869 0.00152623 0.999999 1 3.86719)" stroke="#2B2B2B" stroke-width="2"/>
                                        <line x1="2.11298" y1="419" x2="2.113" y2="2.00018" stroke="#2B2B2B" stroke-width="2"/>
                                    </svg>                                        
                                </div>
                                <div class="mt-lg-2 p-lg-4 ms-lg-4 w-lg-70 text-lg-start text-center mt-2">
                                    <p class="p-22 fw-400">Presentes em toda a região sul e sudeste do Brasil para anteder nossos clientes onde for necessário.</p>
                                    <button class="btn btn-outline-dark p-16 rounded-0 fw-400 mt-lg-3">
                                        ONDE NOS ENCONTRAR
                                        <svg class="ms-0-50" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.69106 1.0332H17.1197M17.1197 1.0332V12.4618M17.1197 1.0332L1.11966 17.0332" stroke="#2B2B2B" stroke-width="2"/>
                                        </svg>                                            
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 position-relative " data-aos="fade-left">
                        <div class="mt-4 mt-lg-0" style="background:#f5f5f5">
                            <div class="ratio ratio-1x1 border border-dark rounded-circle border-2">
                                <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/mapa.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="personalizar py-lg-0 py-2 bg-dark-claro">
            <div class="container container-end">
                <div class="row">
                    <div class="col-lg-4 ">
                        <div class="ratio ratio-16x9">
                            <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/personalize1.png") }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex m-xl-auto">
                        <h2 class="p-400 h2-80 fw-400 mt-2 mt-lg-1 mb-lg-3 mb-1 ps-xxl-6 text-white d-xxl-none ps-lg-2 ps-xl-0 text-lg-start text-center">
                            <span class="fw-800">PERSONALIZE A SUA CABANA</span> para uma experiênica única
                        </h2>
                    </div>
                </div>
            </div>
            <div class="mt-xxl-5">
                <div class="container container-start">
                    <div class="row">
                        <div class="col-lg-4 d-none d-lg-block" data-aos="fade-right">
                            <div class="ratio ratio-84">
                                <img class="object-fit-cover w-100 h-100 pe-lg-4" src="{{ asset("front/images/backgrounds/personalize2.png") }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="zoom-in-up">
                            <div class="pe-xl-2 pe-xxl-6 ps-xl-3 ps-xxl-0-50 position-relative text-lg-start text-center pb-2 pb-lg-0">
                                <h2 class="p-400 h2-80 fw-400 mt-lg-6 mb-lg-3 text-personalize text-white position-absolute start-0 d-none d-xxl-block"><span class="fw-800">PERSONALIZE A SUA CABANA</span> para uma experiênica única</h2>
                                <p class="p-22 fw-400 text-white">Nossas cabanas são entregues com funcionalidades que vão atender todas as suas necessidades.</p>
                                <p class="p-22 fw-400 text-white">Podem ter o interior personalizado para se adequar ao seu estilo de vida ou oferecer o melhor em hospedagem.</p>
                                <button class="btn btn-outline-light p-16 rounded-0 fw-400 text-white mt-xl-3">
                                    CONHEÇA AS POSSIBILIDADES
                                    <svg class="ms-0-50" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.69106 1.0332H17.1197M17.1197 1.0332V12.4618M17.1197 1.0332L1.11966 17.0332" stroke="white" stroke-width="2"/>
                                    </svg>                                            
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-right">
                            <div class="ratio ratio-84">
                                <img class="object-fit-cover w-100 h-100 ps-lg-2" src="{{ asset("front/images/backgrounds/personalize3.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="personalizar bg-dark-claro border-light border-2 border-top border-bottom">
            <div class="container border-white border-start border-end border-2">
                <div class="">
                    <div class="row">
                        <div class="swiper depoimentos-swiper">
                            <div class="swiper-wrapper">
                                @foreach (range(0,2) as $banner)
                                    <div class="swiper-slide d-lg-flex">
                
                                        <div class="col-lg-8">
                                            <div class="py-lg-6 px-lg-4 position-relative text-lg-start text-center p-1" data-aos="zoom-out-down">
                                                <h2 class="h2-80 fw-800 text-white text-lg-start text-center">Depoimentos</h2>
                                                <p class="p-22 fw-400 text-white pe-lg-4 pt-lg-2 mt-1">Tive o prazer de trabalhar em conjunto da Óga Cabanas. Extremamente profissionais e comprometidos, trabalho excelente, com uma qualidade acima do esperado no mercado de telhas. 
                                                    Recomendo de olhos fechados, deu ótimos resultados na vinícola, todos amam este novo conceito!</p>
                                                <div class="d-flex align-items-center pt-lg-2 mt-2" data-aos="zoom-in-up">
                                                    <div class="quadrado">
                                                        <div class="ratio ratio-1x1">
                                                            <img class="object-fit-cover w-100 h-100 rounded-circle" src="{{ asset("front/images/backgrounds/depoimento.png") }}" alt="">  
                                                        </div>    
                                                    </div>    
                                                    <p class="p-22 fw-400 text-white ms-1"><span class="fw-800">Luís Almeida</span>
                                                    <br>
                                                    CEO da Vinícola Valduga
                                                    </p>
                                                </div>
                                                <div class="position-relative w-150 mt-lg-4 pt-4">
                                                    <div class="swiper-button-prev bg-laranja rounded-circle top-55 start-5">
                                                        <svg width="42" height="30" viewBox="0 0 42 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M15.9333 29.2466L2.00001 15.3133M2.00001 15.3133L15.9332 1.38008M2.00001 15.3133L41.013 15.3133" stroke="white" stroke-width="2"/>
                                                        </svg>                                                                      
                                                    </div>
                                                    <div class="swiper-button-next bg-laranja rounded-circle top-55 end-5">
                                                        <svg width="42" height="31" viewBox="0 0 42 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M25.9755 1.53168L40.0119 15.361M40.0119 15.361L26.1827 29.3974M40.0119 15.361L0.99997 15.651" stroke="white" stroke-width="2"/>
                                                        </svg>                                                     
                                                    </div>
                                                </div>    
                                                <svg class="position-absolute start-0 bottom-0 d-none d-lg-block" width="1080" height="2" viewBox="0 0 1080 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <line x1="1080" y1="1" y2="1" stroke="#F5F5F5" stroke-width="2"/>
                                                </svg> 
                                            </div>                                               
                                        </div>
                                        <div class="col-lg-4 g-0">
                                            <div class="ratio ratio-125 mt-lg-10 mt-2" data-aos="zoom-in-up">
                                                <img class="object-fit-cover w-100 h-100 z-index-background" src="{{ asset("front/images/backgrounds/depoimentos.png") }}" alt="">
                                            </div>
                                        </div>
                
                                    </div>
                                @endforeach
                            </div>
                            {{--<div class="swiper-pagination d-lg-none"></div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
