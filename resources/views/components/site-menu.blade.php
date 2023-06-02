{{-- @inject('products', 'Ellite\\Products\\Services\\ProductService')

@php
    $categories = $products->getCategories()->get();
@endphp

@if ($categories->count())
    @if ($type === 'footer')
        @foreach ($categories as $category)
            <li>
                <a href="{{ route_lang('products.category', ['category' => $category->slug]) }}">
                    {{ $category->title }}
                </a>
            </li>
        @endforeach
    @else
        <li class="dropdown">
            <button class="dropdown-button gap-0-50">Produtos
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flecha w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <ul class="dropdown-content">
                @foreach ($categories as $category)
                    <li>
                        <a href="{{ route_lang('products.category', ['category' => $category->slug]) }}">
                            {{ $category->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    @endif
@endif --}}

<nav class="menu">
    <ul class="mb-0 list-unstyled d-flex flex-column flex-lg-row align-items-lg-center gap-1 gap-lg-2 pe-lg-4">
        <li>
            <a href="{{ route_lang('home') }}" title="Home" class="@if (Route::is('home')) active @endif text-white p-16 fw-400 text-decoration-none">HOME</a>
        </li>
        <li>
            <a href="{{ route_lang('company') }}" title="Empresa" class="@if (Route::is('company')) active @endif text-white p-16 fw-400 text-decoration-none">SOBRE</a>
        </li>
            <li>
                <a href="{{ route_lang('products') }}" title="products" class="@if (Route::is('products')) active @endif text-white p-16 fw-400 text-decoration-none">CABANAS</a>
            </li>
        <li>
            <a href="{{ route_lang('contact') }}" title="Contato" class="@if (Route::is('contact')) active @endif text-white p-16 fw-400 text-decoration-none">CONTATO</a>
        </li>
    </ul>
</nav>
