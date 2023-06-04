@extends('front.layout.app')

@section('content')

    <main id="produto" class="py-lg-4 py-2" style="overflow-x:hidden;">
        
        <section class="atuacao py-lg-4 pb-2 overflow-hidden">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-7 " data-aos="fade-right">
                        <div class="position-relative h-100 w-100 d-flex align-items-center justify-content-center">
                            <div class="">
                                <h2 class="p-400 h2-80 fw-400 mb-lg-2 text-lg-start text-center ps-lg-4 mt-1 mb-1">Cabana <br> <span class="fw-800">PREMIUM</span></h2>
                                <div class="w-100 position-relative">
                                    <svg class="position-absolute top-0 start-0 start-lg-5 object-fit-contain z-index-background" width="787" height="419" viewBox="0 0 787 419" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line y1="-1" x2="786.001" y2="-1" transform="matrix(0.999999 -0.0011869 0.00152623 0.999999 1 3.86719)" stroke="#2B2B2B" stroke-width="2"/>
                                        <line x1="2.11298" y1="419" x2="2.113" y2="2.00018" stroke="#2B2B2B" stroke-width="2"/>
                                    </svg>                                        
                                </div>
                                <div class="mt-lg-0 p-lg-4 w-lg-70 text-lg-start text-center mt-2 mb-2">
                                    <p class="p-22 fw-400 px-1 px-lg-0">O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, 
                                        quando uma misturou os caracteres de um texto para criar um espécime de livro.                                    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 position-relative " data-aos="fade-left">
                        <div class="overflow-x-clip overflow-hidden cabanas-swiper">
                            <div class="swiper-wrapper pb-4">
                                @foreach (range(0,10) as $banner)
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-1x1">
                                            <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/detalhes.png") }}" alt="">
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
        <section class="bg-secondary py-lg-4 py-2 mx-lg-2 mx-xl-4 mx-xxl-6">
            <div class="container ">
                <div class="row">
                    <h2 class="fw-800 h2-80 text-center mt-2 mt-lg-0 mb-2">PERSONALIZAÇÃO</h2>
                    <div class="d-flex d-none d-lg-flex">
                        @php
                          $h = 0;  
                        @endphp
                        @foreach (range(0,3) as $item)
                            <div class="col-lg-2 col-md-4 col-6 m-auto" data-aos="fade-down"
                            data-aos-easing="linear"
                            data-aos-duration="1500">
                                <div class="ratio ratio-1x1">
                                    <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/cores-detalhe.png") }}" alt="">
                                </div>
                                @foreach (range(0,5) as $hehe)
                                @php
                                $h++
                                @endphp
                                    <input type="checkbox" class="d-none" name="" id="checkbox-item">
                                    <label for="checkbox-item" class="w-100 d-flex align-items-center mt-1 px-0-50 fundo" id="" style="cursor: pointer;">
                                        <div class="ratio ratio-1x1" style="width: 50px;">
                                            <span href="" id="item" class="">
                                                <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/cores-detalhe.png") }}" alt="">
                                                <svg class="z-index-1 position-absolute d-none" width="30" height="21" viewBox="0 0 30 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9.1L10.9355 19L29 1" stroke="white" stroke-width="2"/>
                                                </svg>                                                
                                            </span>
                                        </div>
                                        <p class="p-22 fw-400 mt-1 ms-1">Preto</p>
                                    </label>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper cores-swiper d-lg-none">
                        <div class="swiper-wrapper pb-4">
                            @foreach (range(0,10) as $banner)
                                <div class="swiper-slide">
                                    <div class="ratio ratio-1x1">
                                        <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/cores-detalhe.png") }}" alt="">
                                    </div>
                                    @foreach (range(0,5) as $hehe)
                                    @php
                                    $h++
                                    @endphp
                                        <input type="checkbox" class="d-none" name="" id="checkbox-item">
                                        <label for="checkbox-item" class="w-100 d-flex align-items-center mt-1 px-0-50 fundo" id="" style="cursor: pointer;">
                                            <div class="ratio ratio-1x1" style="width: 50px;">
                                                <span href="" id="item" class="">
                                                    <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/cores-detalhe.png") }}" alt="">
                                                    <svg class="z-index-1 position-absolute d-none" width="30" height="21" viewBox="0 0 30 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9.1L10.9355 19L29 1" stroke="white" stroke-width="2"/>
                                                    </svg>                                                
                                                </span>
                                            </div>
                                            <p class="p-22 fw-400 mt-1 ms-1">Preto</p>
                                        </label>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        {{--<div class="swiper-button-prev bg-laranja rounded-circle top-55 start-5">
                            <svg width="42" height="31" viewBox="0 0 42 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.9332 29.4392L1.99995 15.5059M1.99995 15.5059L15.9332 1.5727M1.99995 15.5059L41.013 15.5059" stroke="white" stroke-width="2"/>
                            </svg>                                                                                                     
                        </div>
                        <div class="swiper-button-next bg-laranja rounded-circle top-55 end-5">
                            <svg width="42" height="31" viewBox="0 0 42 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.9755 1.53168L40.0119 15.361M40.0119 15.361L26.1827 29.3974M40.0119 15.361L0.99997 15.651" stroke="white" stroke-width="2"/>
                            </svg>                                                     
                        </div>--}}
                        <div class="swiper-pagination d-lg-none pagination-dark"></div>
                    </div>
                </div>
            </div>
            {{--<div id="botaoRenderizado"></div>--}}
        </section>
        <section>
            <div class="ratio ratio-lg-21x9 ratio-6x9">
                <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/render.png") }}" alt="">
            </div>    
        </section>  

        <x-diferentials />
        
        <section class="contato bg-secondary mt-0">
            <div class="container container-start">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="ps-lg-4 py-lg-4 py-2 bg-secondary pe-lg-4" data-aos="zoom-in-right">
                            <div class="formulario rounded-3 p-2">
                                <h2 class="h2-80 fw-400 text-lg-start text-center mb-2">Quer mais <br><span class="fw-800">INFORMAÇÕES?</span></h2>
                                <form wire:submit.prevent="send" class="row g-1">
                                    @csrf
                                    <div class="col-12">
                                        <input type="text" placeholder="Nome *" class="form-control form-control2 bg-secondary border border-dark-claro border-2 rounded-0 p-22 fw-400" wire:model.defer="name" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="email" placeholder="Email *" class="form-control form-control2 bg-secondary border border-dark-claro border-2 rounded-0  p-22 fw-400" wire:model.defer="email" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" placeholder="Telefone *" class="form-control form-control2 bg-secondary border border-dark-claro border-2 rounded-0  p-22 fw-400 mask-telefone" wire:model.defer="phone" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea id="" Placeholder="Mensagem *" class="form-control form-control2 bg-secondary border border-dark-claro border-2 rounded-0  p-22 fw-400" rows="5" wire:model.defer="message" required></textarea>
                                    </div>
                                    <div class="col-12 d-flex justify-content-lg-start justify-content-center">
                                        <div class="form-check">
                                            <input class="form-check-input mt-0-50" type="checkbox" value="1" wire:model.defer="accept" id="termosCheck" required>
                                            <label class="form-check-label text-dark ms-0-50" for="termosCheck">
                                                <x-accept-text />
                                             </label>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                                        <button type="submit" class="btn btn-outline-dark-claro border border-dark border-2 p-20 fw-400 rounded-0">
                                            <span wire:loading.remove>
                                                ENVIAR
                                            </span>
                                            <span wire:loading.inline>
                                                Aguarde...
                                            </span>
                                        </button>
                                    </div>
                                    <div class="col-12">
                                        <x-flash-messages />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 bg-white d-none d-lg-block" data-aos="flip-down">
                        <div class=" my-auto h-100 d-flex align-items-center">
                            <svg style="margin-left: -25px;" class="" width="504" height="925" viewBox="0 0 504 925" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="504" height="925" fill="#626B53"/>
                            </svg>     
                        </div>                           
                    </div>
                </div> 
            </div>
        </section>

    </main>
@endsection
