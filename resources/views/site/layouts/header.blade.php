<header class="l-header w-full top-0 left-0 absolute antialiased select-none px-4 lg:px-6 py-5">

    <div class="container mx-auto px-4">

        <nav class="w-full h-screen lg:u-h-unset inset-0 fixed lg:relative hidden lg:flex items-center u-bg-folk-light-black lg:u-bg-folk-none z-40 js-navbar">

            <div class="w-full sm:h-1/2 flex flex-wrap justify-between md:justify-center items-center font-medium mx-auto">

                <div class="w-full h-full md:relative flex flex-col lg:flex-row items-center z-40 py-3 md:p-0">
                    
                    <a
                    class="py-4 pl-6 pr-4 md:pl-4 md:py-0" 
                    href="#" >
                        <img 
                        class="img-fluid" 
                        src="{{ asset( 'images/header-logo.png' ) }}" 
                        alt="">
                    </a>
                    
                    <div class="w-full h-auto h-full rounded-lg md:rounded-none overflow-hidden md:overflow-auto select-none md:flex flex-col md:flex-row mt-8 lg:mt-0">
                        
                        <div class="w-full h-full flex flex-col lg:flex-row justify-between items-center sm:mt-12 md:mt-0">
                            
                            <!-- loop -->
                            @if( !empty( $menu ) )
                                @if( isset( $menu->menu ) )
                                    @foreach( $menu->menu as $item ) 
                                        <a 
                                        class="l-header__nav-link u-font-weight-regular hover:u-font-weight-bold text-center md:text-left uppercase text-white my-3 md:my-0 mx-2 lg:mx-3 px-4 md:px-0 py-2" 
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

                            <!-- <a 
                            class="l-header__nav-link u-font-weight-regular hover:u-font-weight-bold text-center md:text-left uppercase text-white my-3 md:my-0 mx-2 lg:mx-3 px-4 md:px-0 py-2"
                            href="#" >
                                Vantagens
                            </a>
                            
                            <a 
                            class="l-header__nav-link u-font-weight-regular hover:u-font-weight-bold text-center md:text-left uppercase text-white my-3 md:my-0 mx-2 lg:mx-3 px-4 md:px-0 py-2"
                            href="#" >
                                Passou Ganhou
                            </a>
                            
                            <a 
                            class="l-header__nav-link u-font-weight-regular hover:u-font-weight-bold text-center md:text-left uppercase text-white my-3 md:my-0 mx-2 lg:mx-3 px-4 md:px-0 py-2"
                            href="#">
                                Conheça o EBWBank
                            </a>

                            <a 
                            class="l-header__nav-link u-font-weight-regular hover:u-font-weight-bold text-center md:text-left uppercase text-white my-3 md:my-0 mx-2 lg:mx-3 px-4 md:px-0 py-2"
                            href="/portal" >
                                Portal do Empreendedor
                            </a> -->

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
                                class="c-btn-pattern c-btn-icon-arrow u-border-color-primary relative inline-block font-bold uppercase text-white hover:u-color-folk-primary u-bg-folk-primary hover:u-bg-folk-none mt-12 py-5 pl-7 pr-28"
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
</header>