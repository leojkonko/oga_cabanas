@inject('site', 'App\\Services\\SiteService')

<section class="" style="margin: -10px 0px">
    <div class="ratio ratio-xl-28 ratio-16x9">
        <img class="object-fit-cover w-100 h-100 z-index-background" src="{{ asset("front/images/backgrounds/breadcrumb.png") }}" alt="">
        <div class="bottom-0 breadcrumb-position">
            <div class="container container-breadcrumb">
                <nav aria-label="breadcrumb" class="d-flex flex-column flex-sm-row gap-0-50 align-items-center justify-content-xl-between justify-content-center">
                   {{-- @if ($site->getBreadTitle())
                        <h1 class="h3 mb-0">
                            {{ $site->getBreadTitle() }}
                        </h1>
                    @endif--}}
                    <ol class="breadcrumb">
                        @foreach ($site->getBreadCrumbs() as $bread)
                            @if ($loop->last)
                                <li class="breadcrumb-item p-22 fw-400 text-white text-decoration-none" aria-current="{{ $bread->getText() }}">
                                    {{ $bread->getText() }}</li>
                            @else                               
                                <li class="breadcrumb-item">
                                    <a class="p-22 fw-400 text-white text-decoration-none" href="{{ $bread->getUrl() }}">{{ $bread->getText() }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
