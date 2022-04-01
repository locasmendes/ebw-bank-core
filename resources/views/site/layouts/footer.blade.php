<!-- footer -->
<div x-data="{open: false}"
x-init="
    if(!getCookie('cookie_notice_accepted')) {
        setTimeout(function() {
            open = true;

        }, 1000)
    }
">
    <div
    class="fixed bottom-0 left-0 right-0 bg-ebw-third py-4"
    x-show="open"
    x-cloak
    x-transition:enter="transition-all duration-300"
    x-transition:enter-start="transform translate-y-full"
    x-transition:enter-end="transform translate-y-0"
    x-transition:leave="transition-all duration-300"
    x-transition:leave-start="transform translate-y-0"
    x-transition:leave-end="transform translate-y-full"
    >
        <div class="container mx-auto flex items-center justify-center">
            <p class="text-sm text-white mr-6">Nosso site salva seu histórico de uso para proporcionar uma melhor experiência. Ao continuar navegando você concorda com a nossa política de cookies e privacidade</p>
            <button
            class="bg-ebw-fourth px-3 py-2 rounded-sm block text-xs text-white mx-1 hover:bg-opacity-80 transition-all"
            type="button"
            x-on:click="createCookie">
                Ok, Entendi!
            </button>
            <button 
            class="bg-ebw-fourth px-3 py-2 rounded-sm block text-xs text-white mx-1 hover:bg-opacity-80 transition-all" 
            type="button"
            x-on:click="open = false">
                Fechar
            </button>
            <a target="_blank" class="bg-ebw-fourth px-3 py-2 rounded-sm block text-xs text-white mx-1 hover:bg-opacity-80 transition-all" href="{{ route('privacidade') }}">Política de Privacidade</a>
        </div>
        <button 
        type="button" 
        class="absolute right-5 top-1/2 transform -translate-y-1/2 p-3"
        x-on:click="open = false">
            <i class="fas fa-times text-lg text-ebw-form"></i>
        </button>
    </div>
    <script>
        function createCookie() {
            setCookie('cookie_notice_accepted', true, 99999);
            this.open = false;
        }

       function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            let expires = "expires="+ d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
        function getCookie(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for(let i = 0; i <ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    </script>
</div>

<footer class="l-footer pt-16 pb-10">

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center">

            <div class="w-full md:w-10/12 mb-10">

                <div class="flex flex-wrap">

                    <div class="w-full lg:w-4/12 flex md:block justify-center mb-8 lg:mb-0 px-4">
                        <img
                        src="{{ asset( 'images/footer-logo.png' ) }}">
                    </div>

                    <div class="w-full lg:w-8/12 flex flex-col md:flex-row justify-around items-center px-4">
                        <div class="flex xl:flex-row flex-col items-center justify-center">
                            <p class="text-2xl font-bold px-3 leading-none xl:mb-0 mb-3">
                                Fale Conosco
                            </p>
    
                            <p class="u-font-weight-regular text-center md:text-left sm:my-5 md:my-0 px-3">
                                <!-- 0800 894 3000 <br>
                                cac@ebwbank.com.br -->
                                @if( !empty( $general ) )
                                    @if( isset($general->telefone) )
                                        <a href="tel:{{ $general->telefone }}">
                                            {{ $general->telefone }}
                                        </a>
                                    @endif
                                @endif
    
                                <br>
    
                                @if( !empty( $general ) )
                                    @if( isset($general->email) )
                                        <a href="mailto:{{ $general->email }}">
                                            {{ $general->email }}
                                        </a>
                                    @endif
                                @endif
                            </p>    
                        </div>

                        <ul class="l-social-media xl:pl-12 pl-5 pt-5 md:pt-0">

                            @if( !empty( $general ) )
                                @if( isset($general->linkedin) )
                                    <li class="mx-1">    
                                        <a
                                        class="l-social-media__item l-social-media__link l-social-media__linkedin"
                                        href="{{ $general->linkedin }}"
                                        target="_blank"
                                        rel="noreferrer noopener">
                                            Link Linkedin
                                        </a>
                                    </li>
                                @endif
                            @endif

                            @if( !empty( $general ) )
                                @if( isset($general->facebook) )
                                    <li class="mx-1">    
                                        <a
                                        class="l-social-media__item l-social-media__link l-social-media__facebook"
                                        href="{{ $general->facebook ?? 'https://www.facebook.com/ebwbank/' }}"
                                        target="_blank"
                                        rel="noreferrer noopener">
                                            Link Facebook
                                        </a>
                                    </li>
                                @endif
                            @endif

                            @if( !empty( $general ) )
                                @if( isset($general->instagram) )
                                    <li class="mx-1">    
                                        <a
                                        class="l-social-media__item l-social-media__link l-social-media__instagram"
                                        href="{{ $general->instagram }}"
                                        target="_blank"
                                        rel="noreferrer noopener">
                                            Link Instagram
                                        </a>
                                    </li>
                                @endif
                            @endif

                            @if( !empty( $general ) )
                                @if( isset($general->youtube) )
                                    <li class="mx-1">    
                                        <a
                                        class="l-social-media__item l-social-media__link l-social-media__youtube"
                                        href="{{ $general->youtube }}"
                                        target="_blank"
                                        rel="noreferrer noopener">
                                            Link Youtube
                                        </a>
                                    </li>
                                @endif
                            @endif

                            @if( !empty( $general ) )
                                @if( isset($general->twitter) )
                                    <li class="mx-1">    
                                        <a
                                        class="l-social-media__item l-social-media__link l-social-media__twitter"
                                        href="{{ $general->twitter }}"
                                        target="_blank"
                                        rel="noreferrer noopener">
                                            Link Twitter
                                        </a>
                                    </li>
                                @endif
                            @endif
                        </ul>
                    </div>

                    <div class="w-full my-10 px-4">
                        <div class="l-footer__divider"></div>
                    </div>
                </div>

                <div class="flex flex-wrap pb-16 mb-12 border-b-2 border-ebw-form">

                    @if( !empty( $general) )
                        @if( isset($general->mapas) )
                            @foreach( $general->mapas as $address )
                                <div class="w-full lg:w-6/12 mb-10 lg:mb-0 md:px-4">

                                    <p class="l-footer__text-large font-bold mb-5">
                                        <!-- São Paulo -->
                                        {{ $address[ 'estado' ] }}
                                    </p>
                                    
                                    <!-- <iframe 
                                    class="l-footer__map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.878205588231!2d-46.69945838538264!3d-23.60870056922646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50cd2866b565%3A0x2f097e58e08f7278!2sWTC%20Events%20Center!5e0!3m2!1spt-BR!2sbr!4v1638794187902!5m2!1spt-BR!2sbr" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy"></iframe> -->

                                    <div class="l-footer__map">
                                        {!! $address[ 'mapa' ] !!}
                                    </div>

                                    <!-- <p class="u-font-size-13 u-font-weight-regular mt-12">
                                        World Trade Center <br>
                                        Av. das Nações Unidas, 12551- 19° Andar <br>
                                        Sala 1912 - CEP: 04578-903.
                                    </p> -->

                                    <p class="u-font-size-13 u-font-weight-regular mt-12">
                                        {!! $address[ 'endereco' ] !!}
                                    </p>
                                </div>
                            @endforeach
                        @endif
                    @endif

                    <!-- <div class="w-full lg:w-6/12 mb-10 lg:mb-0 md:px-4">

                        <p class="l-footer__text-large font-bold mb-5">
                            Distrito Federal
                        </p>

                        <iframe 
                        class="l-footer__map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.056257145434!2d-47.886045285554815!3d-15.800987377325734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3adffaaaa80d%3A0xcd93d19bd1cd5b51!2sPrime%20Business%20Convenience!5e0!3m2!1spt-BR!2sbr!4v1638795529181!5m2!1spt-BR!2sbr" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"></iframe>

                        <p class="u-font-size-13 u-font-weight-regular mt-12">
                            Ed. Prime Business <br>
                            Setor Bancário Sul, Q 2 Salas 09/10 <br>
                            Asa Sul - CEP: 70.070-120.
                        </p>
                    </div>

                    <div class="w-full my-10 px-4">
                        <div class="l-footer__divider"></div>
                    </div> -->
                </div>

                <div class="flex flex-wrap ">

                    <div class="w-full md:w-4/12 lg:w-3/12 my-5 md:my-0 px-4">

                        <p class="font-bold mb-3 text-xl">
                            Produtos
                        </p>

                        @if( !empty( $general ) ) 
                            @if( isset($general->menu_footer_product) )
                                <ul>
                                    @foreach( $general->menu_footer_product as $item ) 
                                        <li class="u-font-size-13 u-font-weight-regular hover:u-font-weight-semibold u-color-folk-gray hover:u-color-folk-black mb-2">
                                            <a 
                                            class="text-lg"
                                            href="{{ $item[ 'menu_footer_product_link' ] }}"
                                            @if( $item[ 'menu_footer_product_new_tab'] )
                                                target="_blank"
                                            @endif
                                            >
                                                <!-- EBW Pay -->
                                                {{ $item[ 'menu_footer_product_item'] }}
                                            </a>
                                        </li>
                                    @endforeach

                                    <!-- <li class="u-font-size-13 u-font-weight-regular hover:u-font-weight-semibold u-color-folk-gray hover:u-color-folk-black mb-2">
                                        Passou Ganhou
                                    </li> -->
                                </ul>
                            @endif
                        @endif
                    </div>

                    <div class="w-full md:w-4/12 lg:w-3/12 my-5 md:my-0 px-4">

                        <p class="font-bold mb-3 text-xl">
                            EBW Bank
                        </p>

                        @if( !empty( $general ) )
                            @if( isset($general->menu_footer_ebw) )
                                <ul>
                                    @foreach( $general->menu_footer_ebw as $item )
                                        <li class="u-font-size-13 u-font-weight-regular hover:u-font-weight-semibold u-color-folk-gray hover:u-color-folk-black mb-2">
                                            <!-- Quem Somos -->
                                            <a 
                                            class="text-lg"
                                            href="{{ $item[ 'menu_footer_ebw_link' ] }}"
                                            @if( $item[ 'menu_footer_ebw_new_tab' ] )
                                                target="_blank"
                                            @endif
                                            >
                                                <!-- EBW Pay -->
                                                {{ $item[ 'menu_footer_ebw_item'] }}
                                            </a>
                                        </li>
                                    @endforeach

                                    <!-- <li class="u-font-size-13 u-font-weight-regular hover:u-font-weight-semibold u-color-folk-gray hover:u-color-folk-black mb-2">
                                        Portal do Empreendedor
                                    </li>

                                    <li class="u-font-size-13 u-font-weight-regular hover:u-font-weight-semibold u-color-folk-gray hover:u-color-folk-black mb-2">
                                        Contato
                                    </li>

                                    <li class="u-font-size-13 u-font-weight-regular hover:u-font-weight-semibold u-color-folk-gray hover:u-color-folk-black mb-2">
                                        Banco de Talentos
                                    </li>

                                    <li class="u-font-size-13 u-font-weight-regular hover:u-font-weight-semibold u-color-folk-gray hover:u-color-folk-black mb-2">
                                        Privacidade
                                    </li> -->
                                </ul>
                            @endif
                        @endif
                    </div>

                    <div class="w-full md:w-4/12 lg:w-3/12 my-5 md:my-0 px-4">

                        <p class="font-bold mb-3 text-xl">
                            Suporte
                        </p>

                        <ul>
                            <li class="u-font-weight-regular hover:u-font-weight-semibold u-color-folk-gray hover:u-color-folk-black mb-2">
                                <!-- Quem Somos -->
                                <a 
                                class="text-lg"
                                href="tel:08008943000">
                                    Help Desk
                                </a>
                            </li>
                            <li class="u-font-weight-regular hover:u-font-weight-semibold u-color-folk-gray hover:u-color-folk-black mb-2">
                                <!-- Quem Somos -->
                                <a 
                                class="text-lg"
                                href="mailto:cac@ebwbank.com.br">
                                   E-mail
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap justify-center u-bg-folk-white pb-6 pt-20">
        <div class="w-full lg:w-8/12 flex flex-col lg:flex-row justify-center items-center mb-4 px-4">
            <a 
            class="w-6/12 lg:w-3/12 my-4 lg:my-0 mx-5"
            href="https://www.cerc.inf.br/"
            target="_blank"
            rel="noopener noreferrer">
                <img
                src="{{ asset( 'images/logo-cerci.png' )}}"
                alt="Logo 1">
            </a>

            <a 
            class="w-6/12 lg:w-3/12 my-4 lg:my-0 mx-5"
            href="https://www.pcisecuritystandards.org/"
            target="_blank"
            rel="noreferrer noopenner">
                <img
                src="{{ asset( 'images/logo-pci.png' )}}"
                alt="Logo 1">
            </a>
        </div>
    </div> 

    <div class="flex">

        <div class="w-full pt-10">
            <p class="u-font-size-12 u-font-weight-regular text-center">
                © EBW Bank - Um banco feito e pensado para o empreendedor.
            </p>
        </div>
    </div>
</footer>
<!-- end footer -->

<!-- swiperjs 7 -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>