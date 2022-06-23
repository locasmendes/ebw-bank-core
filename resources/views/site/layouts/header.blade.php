<div
x-data="{openMenu: false, openSearch: false, floatingMenu: false, alwaysOpen: false}"
x-on:scroll.window.throttle.50ms="handleScroll"
x-init="
    window.addEventListener('resize', function() {
        if(!!document.querySelector('.no-floating-menu')) {
            alwaysOpen = window.innerWidth >= 1200;
        }
    })
    if(!!document.querySelector('.no-floating-menu')) {
        alwaysOpen = window.innerWidth >= 1200;
    }
    $watch('openSearch', function(value) {
        document.querySelector('body').style.overflowY = value ? 'hidden' : 'auto';
    });
    $watch('floatingMenu', function(value) {

    })
">
    <div
    class="fixed inset-0 bg-ebw-dark-grey flex-center z-50 flex justify-center items-center"
    x-show="openSearch"
    x-cloak
    x-transition:enter="transition-opacity duration-500"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition-opacity duration-500"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    x-on:keyup.escape.window="openSearch = false"
    x-init="

    "
    >
        <button
        type="submit"
        aria-label="Search"
        class="absolute right-10 top-10 w-10 h-10 rounded-full border-2 border-white hover:border-ebw-primary transition-all duration-300 group bg-transparent hover:bg-opacity-10 bg-opacity-0 bg-white"
        x-on:click="openSearch = false">
            <i class="fas fa-times text-white text-xl group-hover:text-ebw-primary transition-colors duration-300"></i>
        </button>
        <div class="max-w-2xl w-full">
            <div class="flex relative">
                <form action="{{ route('search') }}" class="w-full">
                    <input
                    type="text"
                    class="bg-transparent w-full text-4xl border-b-2 border-ebw-third-grey py-2 shadow-none outline-none text-white text-center px-12"
                    autocomplete="off"
                    aria-autocomplete="off" name="s">
                    <button
                    type="submit"
                    class="absolute top-1/2 transform -translate-y-1/2 right-0  w-10 h-10 rounded-full border-2 border-white hover:border-ebw-primary transition-all duration-300 group bg-transparent hover:bg-opacity-10 bg-opacity-0 bg-white"
                    aria-label="search">
                        <i class="fas fa-arrow-right text-white text-xl group-hover:text-ebw-primary transition-colors duration-300"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <header
    x-ref="header-menu"
    class="top-0 left-0 right-0 z-40 transition-all duration-300"
    x-bind:class="floatingMenu || alwaysOpen ? 'fixed bg-white shadow-md' : 'absolute py-9'"
    {{-- class="fixed top-0 left-0 right-0 z-40 py-2 bg-white shadow-md" --}}
    >
        <nav class="container mx-auto px-4 hidden xl:block py-2">
            <div class="flex justify-center items-center">
                <a class="l-header__logo flex justify-center" href="{{ route('home') }}">
                    <img x-bind:class="floatingMenu || alwaysOpen ? 'max-w-ss' : 'max-w-xxs'" src="{{ Request::is('passou-ganhou') ? asset('images/header-logo.png') :  asset('images/haeder-logo-black.png')  }}" alt="EBW Bank Logo">
                </a>
                <div class="flex items-center">

                    <ul class="2xl:pl-20 lg:pl-8 flex flex-row items-center justify-center">

                        <li class="my-4 mx-3">
                            <a class="l-header__nav-link font-bold uppercase p-2 inline-block  {{ Request::is('passou-ganhou') ? 'text-white' : 'text-black' }}" href="{{ route('home') }}">
                                Home
                            </a>
                        </li>

                        <li class="my-4 mx-3">
                            <a class="l-header__nav-link font-bold uppercase p-2 inline-block {{ Request::is('passou-ganhou') ? 'text-white' : 'text-black' }}" href="{{ route('conheca-ebw') }}">
                                A EBW
                            </a>
                        </li>

                        <li class="l-dropdown relative my-4 mx-3">
                            <a class="l-header__nav-link font-bold uppercase p-2 inline-block {{ Request::is('passou-ganhou') ? 'text-white' : 'text-black' }}" href="#">
                                Para seu negócio
                            </a>

                            <ul class="l-dropdown__menu">

                                <li class="l-dropdown__item u-icon__free u-icon__arrow-right hover:opacity:08 relative all:u-color-folk-white my-4">

                                    <a class="font-medium text-white" href="{{ route('venda-internet') }}">
                                        Venda pela internet
                                    </a>
                                </li>

                                <li class="l-dropdown__item u-icon__free u-icon__arrow-right hover:opacity:08 relative all:u-color-folk-white my-4">

                                    <a class="font-medium text-white" href="{{ route('products') }}">
                                        Peça sua maquininha
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="my-4 mx-3">
                            <a class="l-header__nav-link font-bold uppercase p-2 inline-block {{ Request::is('passou-ganhou') ? 'text-white' : 'text-black' }}" href="{{ route('seja-investidor') }}">
                                Seja um investidor
                            </a>
                        </li>

                        <li class="my-4 mx-3">
                            <a class="l-header__nav-link font-bold uppercase p-2 inline-block {{ Request::is('passou-ganhou') ? 'text-white' : 'text-black' }}" href="{{ route('portal') }}">
                                Blog
                            </a>
                        </li>
                    </ul>

                    <div class="my-4 mx-3">
                        <button
                        type="button"
                        aria-label="search button"
                        class="w-44 bg-ebw-primary rounded-full flex justify-between items-center font-bold text-white text-sm py-1 px-5"
                        x-on:click="openSearch = true">
                            Busca
                            <i class="fas fa-search text-white text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <nav
        class="fixed bg-black bg-opacity-95 inset-0 flex justify-center items-center"
        x-show="openMenu"
        x-cloak
        x-transition:enter="transition-opacity duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        >
            <div class="flex flex-col justify-center items-center">
                <a class="l-header__logo flex justify-center mb-6" href="{{ route('home') }}">
                    <img src="{{ asset('images/header-logo.png') }}" alt="EBW Bank Logo">
                </a>

                <ul class="flex-1 flex flex-col items-center justify-center">

                <li class="my-1 mx-3">
                        <a class="l-header__nav-link font-bold uppercase p-2 inline-block text-white" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                <li class="my-1 mx-3">
                        <a class="l-header__nav-link font-bold uppercase p-2 inline-block text-white" href="{{ route('conheca-ebw') }}">
                            A EBW
                        </a>
                    </li>
                    <li class="text-center text-white text-opacity-75">Para seu negócio</li>
                <li class="mx-3">
                        <a class="l-header__nav-link font-bold uppercase p-2 inline-block text-white" href="{{ route('venda-internet') }}">
                            Venda pela internet
                        </a>
                    </li>
                <li class="mb-1 mx-3">
                    <a class="l-header__nav-link font-bold uppercase p-2 inline-block text-white" href="{{ route('products') }}">
                        Peça sua maquininha
                    </a>
                </li>


                <li class="my-1 mx-3">
                        <a class="l-header__nav-link font-bold uppercase p-2 inline-block text-white" href="{{ route('seja-investidor') }}">
                            Seja um investidor
                        </a>
                    </li>

                <li class="my-1 mx-3">
                        <a class="l-header__nav-link font-bold uppercase p-2 inline-block text-white" href="{{ route('portal') }}">
                            Blog
                        </a>
                    </li>
                </ul>

            <div class="mx-3">
                    <button
                    type="button"
                    class="w-56 bg-ebw-primary rounded-full flex justify-end py-2 px-6"
                    x-on:click="openSearch = true">
                        <i class="fas fa-search text-white text-2xl"></i>
                    </button>
                </div>
            </div>

        </nav>
        <button
        type="button"
        aria-label="Open Menu"
        class="l-header__hamburger xl:hidden z-50 flex justify-center items-center"
        x-on:click="openMenu = !openMenu">
            <span
            class="fas fa-bars text-xl text-white"
            x-bind:class="openMenu ? 'fa-times' : 'fa-bars' "
            ></span>
        </button>
    </header>

    <script>
        function handleScroll(evt) {
            const top = window.pageYOffset || document.documentElement.scrollTop;

            this.floatingMenu = top > 400;
        }
    </script>
</div>


{{-- <header class="l-header w-full top-0 left-0 absolute antialiased select-none px-4 lg:px-6 py-5">

    <div class="container mx-auto px-4">

        <nav class="w-full h-screen lg:u-h-unset inset-0 fixed lg:relative hidden lg:flex items-center u-bg-folk-light-black lg:u-bg-folk-none z-40 js-navbar">

            <div class="w-full sm:h-1/2 flex flex-wrap justify-between md:justify-center items-center font-medium mx-auto">

                <div class="w-full h-full md:relative flex flex-col lg:flex-row items-center z-40 py-3 md:p-0">

                    <a
                    class="py-4 pl-6 pr-4 md:pl-4 md:py-0"
                    href="/" >
                        <img
                        class="img-fluid"
                        src="{{ asset( 'images/haeder-logo-black.png' ) }}"
                        alt="">
                    </a>

                    <div class="w-full h-auto h-full rounded-lg md:rounded-none overflow-hidden md:overflow-auto select-none md:flex flex-col md:flex-row mt-8 lg:mt-0">

                        <div class="w-full h-full flex flex-col lg:flex-row justify-between items-center sm:mt-12 md:mt-0">

                            <!-- loop -->
                            @if( !empty( $menu ) )
                                @if( isset( $menu->menu ) )
                                    @foreach( $menu->menu as $item )
                                        <a
                                        class="l-header__nav-link font-bold text-center md:text-left uppercase my-3 md:my-0 mx-2 lg:mx-3 px-4 md:px-0 py-2"
                                        href="{{ $item[ 'menu_link' ] }}"
                                        @if( $item[ 'menu_new_tab' ] )
                                            target="_black"
                                        @endif>
                                            <!-- Venda Online -->
                                            {{ $item[ 'menu_item' ] }}
                                        </a>
                                    @endforeach
                                @endif
                            @endif
                            <!-- end loop -->


                            @if( !empty( $general ) )
                                @if( isset($general->button_start_now) )
                                    <a
                                    class="c-btn-pattern c-btn-icon-arrow u-border-color-primary relative inline-block font-bold uppercase u-color-folk-white hover:u-color-folk-primary u-bg-folk-primary hover:u-bg-folk-none py-5 pl-7 pr-16"
                                    href="{{ $general->button_start_now }}">
                                        comece agora
                                    </a>
                                @endif
                            @else
                                <a
                                class="c-btn-pattern c-btn-icon-arrow u-border-color-primary relative inline-block font-bold uppercase text-white hover:u-color-folk-primary u-bg-folk-primary hover:u-bg-folk-none py-5 pl-7 pr-28"
                                href="#">
                                    comece agora
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <button class="l-header__hamburger lg:hidden z-50 js-hamburger">
            <span class="l-header__hamburger__icon"></span>
        </button>
    </div>
</header> --}}
