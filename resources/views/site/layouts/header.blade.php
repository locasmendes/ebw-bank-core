<header class="absolute top-0 left-0 right-0 p-0 lg:px-4 lg:px-6 lg:py-5">
    
    <nav class="container mx-auto lg:px-4">
        
        <div class="h-screen lg:u-h-unset hidden lg:flex flex-col lg:flex-row justify-center lg:justify-between items-center u-bg-folk-light-black lg:u-bg-folk-none js-navbar">

            <a class="l-header__logo flex justify-center" href="{{ route('home') }}">
                <img src="{{ asset('images/haeder-logo-black.png') }}" alt="EBW Bank Logo">
            </a>

            <ul class="flex-none lg:flex-1 flex flex-col lg:flex-row items-center justify-center">
                
                <li class="my-8 mx-4">
                    <a class="l-header__nav-link font-bold uppercase p-2 inline-block u-color-folk-white lg:u-color-folk-black" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="my-8 mx-4">
                    <a class="l-header__nav-link font-bold uppercase p-2 inline-block u-color-folk-white lg:u-color-folk-black" href="{{ route('conheca-ebw') }}">
                        A EBW
                    </a>
                </li>

                <li class="relative my-8 mx-4">
                    <a class="l-header__nav-link font-bold uppercase p-2 inline-block u-color-folk-white lg:u-color-folk-black" href="#">
                        Para seu negócio
                    </a>

                    <ul class="l-dropdown-menu">
                        
                        <li class="l-dropdown-menu__item u-icon__free u-icon__arrow-right hover:opacity:08 relative all:u-color-folk-white my-4">

                            <a class="font-medium text-white" href="#">
                                Venda pela internet
                            </a>
                        </li>

                        <li class="l-dropdown-menu__item u-icon__free u-icon__arrow-right hover:opacity:08 relative all:u-color-folk-white my-4">

                            <a class="font-medium text-white" href="#">
                                Peça sua maquininha
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="my-8 mx-4">
                    <a class="l-header__nav-link font-bold uppercase p-2 inline-block u-color-folk-white lg:u-color-folk-black" href="{{ route('partner-investor') }}">
                        Seja um investidor
                    </a>
                </li>

                <li class="my-8 mx-4">
                    <a class="l-header__nav-link font-bold uppercase p-2 inline-block u-color-folk-white lg:u-color-folk-black" href="#">
                        Blog
                    </a>
                </li>
            </ul>

            <div class="my-8 mx-4">
                <div class="w-56 bg-ebw-primary rounded-full flex justify-end py-2 px-6">
                    <i class="fas fa-search text-white text-2xl"></i>
                </div>
            </div>
        </div>

        <button class="l-header__hamburger lg:hidden z-50 js-hamburger">
            <span class="l-header__hamburger__icon"></span>
        </button>    
    </nav>
</header>

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