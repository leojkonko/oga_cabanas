@extends('front.layout.app')

@section('content')

    <main id="empresa" class="row gx-0 gt-2 gt-lg-4 overflow-hidden">

        <section class="oga py-lg-4 py-2">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-5 position-relative overflow-hidden" style="background: #f5f5f5">     
                        <div class="">
                            <svg class="position-absolute top-50 start-0 d-none d-lg-block" width="214" height="513" viewBox="0 0 214 513" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line y1="-1" x2="214" y2="-1" transform="matrix(-1 8.74228e-08 8.74228e-08 1 214 1.99997)" stroke="#2B2B2B" stroke-width="2"/>
                                <line y1="-1" x2="511" y2="-1" transform="matrix(-4.37114e-08 -1 -1 4.37114e-08 0 513)" stroke="#2B2B2B" stroke-width="2"/>
                            </svg>                                
                            {{--<svg class="position-absolute top-50 start-5 translate-middle-y" width="150" height="150" viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="150" height="150" fill="#626B53"/>
                            </svg>--}}  
                            <div class="ratio ratio-1x1" data-aos="zoom-in-right">
                                <img class="object-fit-cover w-100 h-100 ps-lg-4" src="{{ asset("front/images/backgrounds/empresa.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 " data-aos="zoom-in-left">
                        <div class="position-relative h-100 w-100 ms-xxl-4 ps-xxl-4 d-flex align-items-center justify-content-center">
                               
                            <div class="ms-lg-4">
                                <h2 class="p-400 h2-80 fw-400 mb-lg-2 mb-1 text-lg-start text-center mt-2 mt-lg-0">Conheça a <span class="fw-800">ÓGA</span></h2>
                                <div class="w-100 position-relative">
                                    <svg class="position-absolute bottom-0 end-0 object-fit-contain z-index-background" width="960" height="235" viewBox="0 0 960 235" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line y1="-1" x2="959" y2="-1" transform="matrix(-0.999999 0.0010427 -0.00173707 -0.999998 959 232)" stroke="#2B2B2B" stroke-width="2"/>
                                        <line x1="957.418" y1="-3.38661e-08" x2="957.418" y2="234" stroke="#2B2B2B" stroke-width="2"/>
                                    </svg> 
                                </div>
                                <div class="mt-lg-4 mt-2 pe-lg-2 w-lg-70 text-lg-start text-center">
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

        <x-diferentials />
        <section class="sustentabilidade overflow-hidden" style="margin-top: -2px;">
            <div class="ratio ratio-md-39 ratio-1x1">
                <img class="object-fit-cover w-100 h-100 z-index-background" src="{{ asset("front/images/backgrounds/sustentabilidade.png") }}" alt="" data-aos="flip-up">
                <div class="{{--start-50 top-50 translate-middle-x position-absolute--}}">
                    <div class="position-absolute bottom-0 m-auto w-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 bg-custom m-auto">
                                    <div class="row">
                                        <div class="col-lg-10 m-auto position-relative" data-aos="fade-down-right">
                                            <h2 class="fw-800 h2-115 text-center mt-2 mt-lg-0 text-white sustentabilidade-titulo">SUSTENTABILIDADE</h2>
                                            <p class="p-22 fw-400 text-white ps-lg-4 mt-2 mt-lg-2 mb-lg-12 mb-4 text-center text-lg-start">
                                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, 
                                                quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos.
                                            </p>
                                            <svg class="position-absolute start-0 top-20 d-none d-lg-block" width="2" height="327" viewBox="0 0 2 327" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <line x1="1" y1="-4.37114e-08" x2="1.00001" y2="327" stroke="#F5F5F5" stroke-width="2"/>
                                            </svg>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contato bg-dark-claro mt-0">
            <div class="container container-start">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="ps-lg-4 py-lg-4 py-2 bg-dark-claro pe-lg-4" data-aos="fade-down-right">
                            <div class="formulario rounded-3 p-sm-2 p-1">
                                <h2 class="h2-80 fw-400 text-white text-lg-start text-center mb-2">Quer mais <br><span class="fw-800">INFORMAÇÕES?</span></h2>
                                <form wire:submit.prevent="send" class="row g-1">
                                    @csrf
                                    <div class="col-12">
                                        <input type="text" placeholder="Nome *" class="form-control form-control2 bg-dark-claro rounded-0 text-white p-22 fw-400" wire:model.defer="name" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="email" placeholder="Email *" class="form-control form-control2 bg-dark-claro rounded-0 text-white  p-22 fw-400" wire:model.defer="email" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" placeholder="Telefone *" class="form-control form-control2 bg-dark-claro rounded-0 text-white  p-22 fw-400 mask-telefone" wire:model.defer="phone" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea id="" Placeholder="Mensagem *" class="form-control form-control2 bg-dark-claro rounded-0 text-white  p-22 fw-400" rows="5" wire:model.defer="message" required></textarea>
                                    </div>
                                    <div class="col-12 d-flex justify-content-lg-start justify-content-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" wire:model.defer="accept" id="termosCheck" required>
                                            <label class="form-check-label text-white" for="termosCheck">
                                                <x-accept-text />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                                        <button type="submit" class="btn btn-outline-light p-20 fw-400 rounded-0">
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
                    <div class="col-lg-3 bg-white d-none d-lg-block " data-aos="flip-up">
                        <div class=" my-auto h-100 d-flex align-items-center">
                            <svg style="margin-left: -25px;" class="" width="504" height="925" viewBox="0 0 504 925" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="504" height="925" fill="#626B53"/>
                            </svg>     
                        </div>                           
                    </div>
                </div> 
            </div>
        </section>

        <section class="col-12">
            <div class="container">
                @if ($page->images->count())
                    <div class="col-lg-5 gallery-wrapper ms-lg-1 mb-2 mb-lg-1">
                        <div class="ratio ratio-16x9">
                            <x-gallery-swiper :images="$page->images" :video="$page->video" :thumbnail="$page->videoThumbnail" />
                        </div>
                    </div>
                @endif

                @if ($page->text)
                    <div class="editor-texto text-center text-lg-start">
                        {!! $page->text !!}
                    </div>
                @endif
            </div>
        </section>

        @php
            $texts = array_filter([
                'Missão|missao' => $page->text_mission,
                'Visão|visao' => $page->text_vision,
                'Valores|valores' => $page->text_values,
            ]);
        @endphp
        @if (count($texts))
            {{-- Icones em svg --}}
            <svg class="d-none visibility-hidden">
                <path id="missao" d="M97.796 0.670584C95.2335 2.00719 95.3277 1.08219 95.3125 25.0233L95.2982 47.1558L91.6152 47.7094C83.1286 48.9853 73.7429 53.1924 66.6509 58.8996C56.0946 67.3951 49.4951 79.163 47.3013 93.404L47.0433 95.0781H25.702C11.635 95.0781 3.8908 95.2415 2.98365 95.558C0.535438 96.4116 -0.678397 99.4089 0.389462 101.964C1.63142 104.937 1.3149 104.9 25.3899 104.9H47.0433L47.3013 106.574C47.8862 110.37 49.4969 116.492 50.7371 119.632C55.4924 131.672 65.1438 142.022 76.7714 147.55C82.0321 150.052 84.2527 150.784 90.1643 151.967L95.075 152.95L95.1821 174.795C95.2969 198.214 95.292 198.162 97.604 199.357C99.7009 200.442 101.467 200.16 103.155 198.471L104.673 196.953V174.888V152.822L108.356 152.267C116.845 150.987 125.808 146.964 133.234 141.102C142.986 133.404 150.236 121.029 152.124 108.857L152.703 105.123L174.93 104.9L197.158 104.676L198.46 103.218C200.262 101.202 200.262 98.7759 198.46 96.7594L197.158 95.3013L174.86 95.1777L152.562 95.054L152.267 92.1755C151.562 85.2969 147.242 74.7906 142.576 68.608C134.131 57.4174 121.538 49.7719 108.113 47.6848L104.673 47.15V25.0875V3.02461L103.155 1.50675C101.458 -0.190131 99.9098 -0.43165 97.796 0.670584ZM79.2388 20.1041C59.3674 25.334 42.5109 37.4014 30.993 54.6433C25.3645 63.0688 20.4171 75.3152 18.7609 84.9219L18.4721 86.596H23.364H28.2555L28.5663 84.6987C29.8502 76.8545 35.6582 64.1085 41.4725 56.3746C51.7429 42.7139 68.133 32.0817 83.9143 28.8438L86.5929 28.2942V23.6282C86.5929 18.9759 86.5893 18.9617 85.4768 18.859C84.863 18.8023 82.0558 19.3625 79.2388 20.1041ZM113.252 23.4724L113.379 28.2063L117.62 29.2706C144.15 35.9295 164.323 56.4527 171.004 83.5826L171.746 86.596H176.592H181.437L181.175 85.1451C180.552 81.6786 179.073 76.3839 177.49 71.9527C169.438 49.4147 151.336 31.1349 128.557 22.538C124.858 21.1416 115.794 18.7389 114.226 18.7389H113.125L113.252 23.4724ZM95.2982 62.2951C95.2982 65.1348 95.5049 67.8446 95.758 68.317C96.3759 69.4723 98.5085 70.5246 100.231 70.5246C101.235 70.5246 102.072 70.0902 103.155 69.0067L104.673 67.4888V62.3103V57.1317L105.901 57.133C108.212 57.1348 115.354 59.3371 119.055 61.1888C131.766 67.5478 140.435 79.2987 142.823 93.404L143.107 95.0781H138.354C132.729 95.0781 131.016 95.6844 129.879 98.0786C129.246 99.4143 129.208 99.9513 129.646 101.414C130.499 104.258 132.038 104.896 138.064 104.898L143.107 104.9L142.823 106.574C140.45 120.596 131.648 132.564 119.138 138.779C115.054 140.808 110.496 142.284 107.073 142.687L104.673 142.969V137.729V132.489L103.155 130.971C101.464 129.28 99.7009 129 97.5951 130.089C95.7322 131.053 95.2982 132.539 95.2982 137.956V142.846H93.7857C92.9536 142.846 90.5362 142.343 88.4134 141.728C74.5049 137.697 64.2027 128.138 59.117 114.546C58.2969 112.354 56.9317 106.747 56.9129 105.495C56.9076 105.135 58.5679 104.929 62.3 104.825L67.6951 104.676L68.9964 103.218C70.7969 101.202 70.7969 98.7755 68.9964 96.7594L67.6951 95.3013L62.2786 95.1518L56.8621 95.0022L57.1625 92.9196C57.9817 87.2362 61.4205 79.1697 65.1237 74.2442C69.6237 68.2585 77.1755 62.3857 83.6911 59.804C86.9415 58.5161 92.0397 57.1871 93.8473 57.1563L95.2982 57.1317V62.2951ZM97.1665 83.5348C91.8571 84.3933 87.0482 88.1089 84.6643 93.1951C83.6299 95.4022 83.4679 96.3219 83.4679 99.9888C83.4679 103.718 83.6228 104.565 84.7509 107.008C87.8906 113.804 95.3996 117.77 102.664 116.467C113.791 114.471 119.796 102.662 114.868 92.4683C112.833 88.2585 107.553 84.2598 103.259 83.6772C102.196 83.533 100.923 83.3554 100.432 83.283C99.9411 83.2107 98.4714 83.3237 97.1665 83.5348ZM18.5131 113.94C18.5136 114.247 19.002 116.507 19.5988 118.962C23.2417 133.951 30.5087 147.072 41.1091 157.801C51.8647 168.688 64.571 176.029 79.4129 179.932C84.8496 181.362 86.3545 181.523 86.3991 180.681C86.4156 180.374 86.4661 178.256 86.5107 175.974C86.5915 171.884 86.5768 171.821 85.4768 171.575C70.2897 168.17 57.5496 161.099 47.2848 150.375C41.881 144.729 36.8698 137.493 33.8788 131.016C31.9462 126.83 29.4158 119.47 28.7546 116.109L28.218 113.382H23.3654C19.7805 113.382 18.5127 113.528 18.5131 113.94ZM170.777 117.288C167.592 130.116 161.056 141.758 151.771 151.141C141.387 161.635 131.029 167.354 115.053 171.416L113.155 171.898V176.626V181.354L115.421 181.054C119.15 180.558 127.828 177.881 132.897 175.661C153.679 166.559 170.286 148.74 177.664 127.624C178.958 123.919 181.459 114.684 181.459 113.608C181.459 113.484 179.274 113.382 176.603 113.382H171.747L170.777 117.288Z" />
                <path id="visao" d="M91.1635 47.1956C90.3421 47.2682 87.3309 47.6724 84.4715 48.0951C58.4311 51.9425 29.4931 66.9087 5.44033 88.9689C-1.6876 95.5062 -1.72794 96.3911 4.82953 102.442C29.6925 125.386 57.1956 139.648 85.256 144.145C90.3757 144.966 103.55 145.277 109.49 144.716C133.188 142.481 158.037 131.897 181.425 114.075C187.171 109.697 193.971 103.83 197.293 100.386C199.784 97.8036 200 97.4535 200 95.9986C200 94.534 199.789 94.2 197.127 91.4555C191.573 85.731 181.494 77.6097 172.371 71.5074C151.927 57.8332 131.385 49.7529 111.325 47.4925C106.973 47.0025 95.3192 46.8309 91.1635 47.1956ZM106.285 55.7196C114.841 57.0141 122.747 61.1135 129.06 67.5294C134.902 73.4669 138.606 80.6955 140.099 89.0728C140.765 92.8095 140.768 99.4164 140.106 103.118C137.491 117.721 126.767 130.14 112.802 134.74C98.4886 139.456 83.0414 135.982 72.1893 125.609C65.7659 119.469 61.7757 112.199 59.9484 103.305C59.3173 100.235 59.3182 91.9128 59.9494 88.6983C63.7401 69.3992 80.2 55.4915 99.564 55.2262C101.309 55.2023 104.334 55.4247 106.285 55.7196ZM63.1815 64.0043C57.9314 70.2119 54.6384 76.6209 52.6686 84.4673C51.3616 89.6735 51.0161 98.9415 51.9324 104.227C53.4482 112.97 57.3611 121.204 63.2745 128.096L65.5557 130.754L62.8647 129.714C57.7328 127.732 55.2905 126.635 49.4136 123.678C40.4058 119.143 32.0723 113.904 23.0353 107.095C18.8629 103.95 9.95586 96.396 9.95586 96.0015C9.95586 95.5622 19.0877 87.8909 23.7705 84.3961C32.859 77.6136 40.5231 72.8214 49.6292 68.228C54.4073 65.818 64.1854 61.5567 64.9577 61.5489C65.1246 61.547 64.3251 62.6518 63.1815 64.0043ZM139.571 63.2413C151.989 68.212 166.402 76.6638 178.37 85.9948C184.975 91.144 189.994 95.5847 189.822 96.1273C189.597 96.8377 181.524 103.686 176.291 107.606C166.752 114.751 157.7 120.337 148.312 124.872C143.153 127.363 135.776 130.458 134.995 130.458C134.777 130.458 135.55 129.405 136.713 128.117C146.383 117.417 150.752 101.299 147.927 86.7408C146.295 78.3289 142.166 69.9345 136.656 63.8263C135.524 62.5718 134.764 61.5455 134.966 61.5455C135.168 61.5455 137.24 62.3086 139.571 63.2413ZM96.017 72.2914C95.6063 72.386 94.6307 72.6283 93.8491 72.8297L92.4277 73.1958L93.562 74.4918C98.2672 79.8666 96.8652 87.8027 90.6394 91.0391C88.6798 92.0581 87.892 92.2556 85.8102 92.2527C83.035 92.2488 80.3908 91.242 78.5207 89.478C77.9328 88.9231 77.3835 88.5389 77.2993 88.6237C76.9319 88.9914 76.0545 94.1161 76.0482 95.924C76.0448 97.0142 76.3046 99.1829 76.6263 100.743C79.0589 112.559 89.3377 120.504 101.383 119.881C111.047 119.382 119.147 113.309 122.627 103.958C124.016 100.225 124.231 93.9192 123.109 89.8173C121.884 85.3376 120.341 82.7486 116.745 79.1363C113.144 75.5171 109.899 73.6785 105.278 72.6371C102.789 72.0769 97.7616 71.8892 96.017 72.2914Z" />
                <path id="valores" d="M33.9804 15.8846C32.4399 17.0975 1.02179 60.8416 0.400836 62.6393C-0.538339 65.357 -1.68959 63.7373 20.5875 91.042C24.279 95.566 28.6005 100.868 30.1919 102.824C40.8627 115.938 64.5523 145.034 71.4589 153.507C76 159.078 83.2473 167.998 87.5634 173.327C91.8789 178.656 95.9289 183.461 96.5624 184.005C97.3723 184.701 98.2822 184.995 99.6284 184.996C102.071 184.999 101.429 185.679 116.47 167.154C128.079 152.857 155.144 119.586 164.654 107.921C172.808 97.9206 183.753 84.4866 190.957 75.6373C194.861 70.8421 198.318 66.2642 198.639 65.4651C199.132 64.2387 199.124 63.7772 198.588 62.5126C197.644 60.2893 165.795 16.1779 164.682 15.5538C163.946 15.1415 149.025 15.0156 99.4236 15.0032C35.3983 14.9878 35.1148 14.9918 33.9804 15.8846ZM74.1691 24.3835C74.1691 24.8611 53.2782 58.4708 52.7008 58.9218C51.8221 59.6088 14.1512 59.736 14.3897 59.0513C14.4702 58.8201 20.0814 50.8977 26.8589 41.4454L39.1816 24.2598L56.675 24.2488C66.2965 24.2424 74.1691 24.3026 74.1691 24.3835ZM114.132 25.448C114.603 26.1142 117.66 31.0199 120.926 36.3494C124.193 41.6784 128.673 48.9705 130.884 52.5538C133.093 56.1359 134.902 59.1629 134.902 59.2792C134.902 59.396 119.059 59.4781 99.6943 59.4625C73.763 59.4417 64.487 59.3023 64.487 58.9345C64.487 58.6599 65.8458 56.2411 67.5072 53.5587C69.1681 50.8763 73.7491 43.4293 77.6863 37.0098C81.6241 30.5903 85.0424 25.0907 85.2824 24.7877C85.6151 24.3685 89.0015 24.2372 99.4982 24.2372H113.277L114.132 25.448ZM164.428 30.7435C166.992 34.3106 172.507 41.9722 176.684 47.7678C180.861 53.5628 184.379 58.5645 184.501 58.8825C184.682 59.3549 181.203 59.4417 165.445 59.3561L146.168 59.252L135.721 42.2954C129.976 32.9691 125.262 25.0907 125.247 24.7877C125.225 24.3558 128.948 24.2395 142.494 24.2471L159.767 24.2563L164.428 30.7435ZM63.8981 98.6717C70.2996 115.023 77.5319 133.456 79.9702 139.633C86.6292 156.503 86.7229 156.768 85.6822 155.709C85.2061 155.224 78.4482 146.999 70.6658 137.431C47.506 108.955 38.6442 98.0785 32.1281 90.1278C21.3431 76.9684 15.1964 69.2993 15.1964 69.001C15.1964 68.8425 23.5353 68.7639 33.7276 68.8269L52.2583 68.942L63.8981 98.6717ZM136.222 68.9854C136.222 69.1299 132.938 77.3061 128.924 87.1534C119.617 109.984 106.388 143.265 102.549 153.507C100.913 157.867 99.4363 161.591 99.2651 161.783C99.0944 161.974 98.4471 160.785 97.827 159.14C97.2062 157.495 92.303 144.951 86.9306 131.264C67.2724 81.1849 62.7266 69.5121 62.7266 69.1212C62.7266 68.8853 77.7823 68.7217 99.4745 68.7217C119.686 68.7217 136.222 68.8402 136.222 68.9854ZM183.752 69.0831C183.752 69.2814 183.094 70.2233 182.289 71.1751C181.484 72.1275 175.188 79.8428 168.297 88.3214C154.206 105.657 149.646 111.26 137.186 126.54C132.4 132.409 124.951 141.571 120.632 146.9C116.314 152.23 112.301 157.085 111.715 157.691L110.65 158.792L111.069 157.691C113.236 151.995 122.438 128.746 127.163 117.029C134.106 99.8132 145.097 72.7282 146.095 70.3731L146.796 68.7217H165.274C175.437 68.7217 183.752 68.8842 183.752 69.0831Z" />
            </svg>
            <section class="col-12">
                <div class="container">
                    <div class="row gy-2 gy-lg-0">
                        @foreach ($texts as $title_icon => $text)
                            @php
                                [$title, $icon] = explode('|', $title_icon);
                            @endphp
                            <div class="col-12 col-lg-{{ 12 / count($texts) }}">
                                <div class="mvv-card text-center d-flex justify-content-start flex-column align-items-center bg-light p-2 rounded-3 shadow-sm h-100">
                                    <div class="ratio ratio-1x1 icon mb-1">
                                        {{-- <img src="{{ url("/front/images/icons/$icon") }}" alt="Icone {{ $title }}" title="{{ $title }}"> --}}
                                        <svg class="" viewBox="0 0 200 200" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#{{ $icon }}" />
                                        </svg>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <h2 class="h3">{{ $title }}</h2>
                                    </div>
                                    <div class="editor-texto">
                                        {!! $text !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

    </main>
@endsection
