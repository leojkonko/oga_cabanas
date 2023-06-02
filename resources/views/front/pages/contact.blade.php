@inject('contact', 'Ellite\\Contact\\Services\\ContactService')

@extends('front.layout.app')

@section('content')
    <main id="contato">
        {{--<section class="bg-light py-2 py-lg-4">
            <div class="container">
                <ul class="mb-0 list-unstyled p-0 row g-1 contacts">
                    @if ($contact->getAdresses())
                        <li class="col-lg-4 address">
                            <div class="card text-primary">
                                <svg width="3em" class="h-100 flex-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="h5 mb-0 fw-bold">Visite-nos</span>
                                    @foreach ($contact->getAdresses() as $address)
                                        <a @if ($address['link']) href="{{ $address['link'] }}" target="_blank" @endif class="text-muted">{{ $address['address'] }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    @endif

                    @if ($contact->getEmails())
                        <li class="col-lg-4">
                            <div class="card text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="3em" class="h-100 flex-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="h5 mb-0 fw-bold">Envie-nos um e-mail</span>
                                    @foreach ($contact->getEmails() as $email)
                                        <a href="mailto:{{ $email['email'] }}" class="text-muted">{{ $email['email'] }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    @endif

                    @if ($contact->getPhones())
                        <li class="col-lg-4">
                            <div class="card text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="3em" class="h-100 flex-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="h5 mb-0 fw-bold">Ligue para a gente</span>
                                    @foreach ($contact->getPhones() as $phone)
                                        <a class="text-muted" href="tel:+ {{ $phone['phone_link'] }}">{{ $phone['phone'] }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                    @endif

                </ul>

            </div>
        </section>--}}
        <section>
            
        </section>
<section class="py-lg-4 py-2 bg-dark-claro">
    <div class="container">
        <h2 class="h2-80 fw-400 text-lg-start text-white text-center mb-2">Surgiu alguma dúvida? <br><span class="fw-800">CONTATE-NOS</span></h2>
    </div>
</section>

        <section class="contato  mt-0" >
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-6 ms-auto position-lg-absolute z-index-2 end-0" >
                        <div class="accordion accordion-flush d-none d-lg-block z-index-background" id="cardd" style="
                        transform: rotate(-90deg);
                        width: 250px;
                        height: 600px;
                        position: absolute;
                        left: 125px;
    bottom: -175px;">
                            <div class="">
                                <button id="button" onclick="moverElemento()" class="btn btn-success w-100 rounded-0">COMO CHEGAR
                                    <svg style="transform: rotate(90deg);" class="ms-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12.4285L0.999999 0.99994M0.999999 0.99994L12.4286 0.999939M0.999999 0.99994L17 16.9999" stroke="#F5F5F5" stroke-width="2"/>
                                    </svg>        
                                </button>
                            </div>
                            <div class="bg-dark-claro h-100 w-100 d-none" id="bg-escuro">
                                <div class="position-relative" style="transform: rotate(90deg);">
                                    <div class="positon-absolute" style="left:130px;position: absolute;
                                        left: 170px;
    position: absolute;
    width: 350px;
    top: -84px;">
                                        <h6 class="p-24 fw-700 text-white">Bento Gonçalves - RS</h6>
                                        <a href="" target="_blank" class="text-decoration-none">
                                            <p class="text-white p-20 fw-400">
                                                Alameda Fenavinho, 214 - B. Fenavinho | CEP 95703-364
                                            </p>
                                        </a>
                                        <a href="" target="_blank" class="text-decoration-none">
                                            <p class="text-white p-20 fw-400">
                                                (54) 3451.1413
                                            </p>
                                        </a>
                                        <a href="" target="_blank" class="text-decoration-none">
                                            <p class="text-white p-20 fw-400">
                                                contato@ogacabanas.com.br
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                          </div>
                        <div class="p-lg-2 p-1 bg-secondary">
                            <div class="formulario rounded-3 p-sm-2 p-1 p-lg-1 p-xl-2">
                                <h6 class="p-24 fw-800 text-lg-start text-center">Preencha os campos abaixo:</h6>
                                <p class="p-22 fw-400 text-lg-start mb-2 text-center">Campos com (*) são obrigatórios.</p>
                                <form wire:submit.prevent="send" class="row g-1">
                                    {{-- button--}}
                                    
                                    {{-- button--}}
                                    @csrf
                                    <div class="col-12">
                                        <input type="text" placeholder="Nome *" class="form-control form-control2 bg-white text-dark border border-dark-claro border-2 rounded-0 p-22 fw-400" wire:model.defer="name" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="email" placeholder="Email *" class="form-control form-control2 bg-white text-dark border border-dark-claro border-2 rounded-0  p-22 fw-400" wire:model.defer="email" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" placeholder="Telefone *" class="form-control form-control2 bg-white text-dark border border-dark-claro border-2 rounded-0  p-22 fw-400 mask-telefone" wire:model.defer="phone" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea id="" Placeholder="Mensagem *" class="form-control form-control2 bg-white text-dark border border-dark-claro border-2 rounded-0  p-22 fw-400" rows="5" wire:model.defer="message" required></textarea>
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
                </div> 
            </div>
        </section>

        <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6981.107809335571!2d-51.102496963116245!3d-28.970953083748654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951e93f8e4cf5629%3A0x7c934bd9ea793d32!2sSERRA%20TELHAS!5e0!3m2!1spt-BR!2sbr!4v1685640093131!5m2!1spt-BR!2sbr" width="100%" height="1000" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
@endsection
