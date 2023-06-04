@extends('front.layout.app')

@section('content')

    <main id="produto" class="" style="background: #F5f5f5;overflow-x:hidden;">

        <section class="cabanas bg-dark py-lg-4 py-2 pb-4 position-relative">
            <div class="container">
                <div class="row"> 
                    <div class="col-lg-10 m-auto">
                        <h2 class="text-white h2-80 fw-400 mb-2 text-lg-start text-center ">Nossas <br><span class="fw-800">CABANAS</span></h2>
                        <div class="row">
                            @foreach (range(0,2) as $r)
                                <div class="col-lg-4 mt-2 mt-lg-0">
                                    <div class="ratio ratio-6x9 mb-lg-4">
                                        <a href="{{ route_lang('details') }}" class="cabana overflow-hidden z-index-1" data-aos="fade-down"
                                        data-aos-easing="linear"
                                        data-aos-duration="1500">
                                            <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/cabana-colorida.png") }}" alt="">
                                            <div class="bg-danger rounded-circle position-absolute mx-auto esfera"></div>
                                        </a>
                                        <p class="ratio-unstyled text-white bottom-0 w-100 text-center">Sem personalização</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <svg class="position-absolute end-0 top-50 translate-middle-y" width="1092" height="829" viewBox="0 0 1092 829" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="1" y="1" width="1168" height="827" stroke="#F5F5F5" stroke-width="2"/>
            </svg>                
        </section>

        {{--<x-catalog-card tipo="produtos" />--}}

        {{--<section class="busca">
            <div class="container">
                <form method="GET" action="{{ route_lang('products') }}">
                    <div class="row">
                        <div class="div-button2">
                            <button class="btn btn-outline-black btn-busca" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                <img src="{{ url('/site/dist/images/icones/filtro.svg') }}" alt=""> Filtre sua
                                Busca
                            </button>
                        </div>
                        <div class="col-12 d-flex alinhamento">
                            <div class="div-input">
                                <input type="text" name="busca" id="" placeholder="Busque por código">
                                <button type="submit">
                                    <img src="{{ url('/site/dist/images/icones/lupa-produtos.svg') }}" alt="">
                                </button>
                            </div>
                            <div class="div-button">
                                <button class="btn btn-outline-black btn-busca" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                    <img src="{{ url('/site/dist/images/icones/filtro.svg') }}" alt=""> Filtre
                                    sua
                                    Busca
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="cards">
            <div class="container">
                @if ($products->count())
                    <div class="page active" id="page-1">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-2 cards-conteudo">
                                    <x-product-card :product="$product" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="container pb-4 mb-4" style="margin-left:5%">
                        <p>
                            Nenhum produto encontrado.
                        </p>
                    </div>
                @endif

                <div class="row py-2">
                    <div class="col-12 d-flex justify-content-center">
                        <x-pagination :list="$products" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filtros:</h5>
                <div class="d-flex">
                    <button type="button" class="btn-close text-reset button-cor" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
                </div>
            </div>
            <div class="offcanvas-body">
                @foreach ($categories->get() as $category)
                    <div class="col-12 d-flex justify-content-center py-1">
                        <a href="{{ route_lang('products.category', [$category->slug]) }}" class="btn btn-custom btn-categorias">{{ $category->title }}</a>
                    </div>
                @endforeach
            </div>
        </div>
        <!--modal -->
        <nav aria-label="Page navigation example">--}}
    </main>
@endsection
