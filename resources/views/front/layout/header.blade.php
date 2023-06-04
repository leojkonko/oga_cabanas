<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <x-custom-code type="head" />
    <x-lgpd-head-script />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Agência Ellite Digital">

    {{-- Favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/images/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('front/images/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    {{-- Fonte temporária --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700;800&family=Inter:wght@400;600;700&family=Lora:ital@1&family=Manrope:wght@400;700;800&family=Montserrat:wght@400;600;700&family=Poppins&display=swap" rel="stylesheet">

    {{-- Swiper.js --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.css" integrity="sha512-Ja1oxinMmERBeokXx+nbQVVXeNX771tnUSWWOK4mGIbDAvMrWcRsiteRyTP2rgdmF8bwjLdEJADIwdMXQA5ccg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Fancybox --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

    {{--  --}}

    {{-- Front css --}}
    @vite(['resources/front/sass/vendors/bootstrap/bootstrap.scss', 'resources/front/sass/main.scss'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <x-head-tags />
    @livewireStyles
</head>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasHeader" aria-labelledby="offcanvasHeaderLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasHeader" aria-label="Close">X</button>
    </div>
    <div class="offcanvas-body position-relative overflow-hidden">
        <div class="w-100 text-center mt-8">
            <x-site-menu />
        </div>
        <div class="position-absolute bottom-5 w-100 text-center px-4">
            <a class="d-flex" href="{{ route('home') }}" title="Página principal">
                <img class="w-100 h-100 object-fit-contain" src="{{ asset('front/images/logos/logo.svg') }}" alt="Logo {{ env('APP_NAME') }}">
            </a>
        </div>
    </div>
</div>
<body class="position-relative">
    <div id="topo-do-site"></div>
    <x-custom-code type="body" />

    <header id="header" class="header w-100 isolation-isolate position-absolute start-0 w-100  mt-sticky top-initial
    {{ Route::is('home')  ? 'top-home' : '' }}
    {{ Route::is('company')  ? 'top-company' : '' }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto">
                    <a class="d-flex" href="{{ route('home') }}" title="Página principal">
                        <img class="w-100 h-100 object-fit-contain" src="{{ asset('front/images/logos/logo.svg') }}" alt="Logo {{ env('APP_NAME') }}">
                    </a>
                </div>

                <div class="col-auto ms-auto">

                    {{-- Botão mobile --}}
                    <button class="d-lg-none btn p-0 me-1 border border-light p-0-50 rounded-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasHeader" aria-controls="offcanvasHeader">
                        <svg class="w-1-50 h-1-50" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <div class="d-none d-lg-block">
                        <x-site-menu />
                    </div>
                </div>
            </div>
        </div>
    </header>

    @if (!Route::is('home'))
        <x-breadcrumbs />
    @endif
