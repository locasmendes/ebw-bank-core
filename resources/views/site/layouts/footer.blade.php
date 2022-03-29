<!-- footer -->
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
                        
                        <p class="l-footer__text-medium font-bold mb-0">
                            Fale Conosco
                        </p>

                        <p class="u-font-size-13 u-font-weight-regular text-center md:text-left my-5 md:my-0">
                            <!-- 0800 894 3000 <br>
                            cac@ebwbank.com.br -->
                            @if( !empty( $general ) )
                                @if( isset($general->telefone) )
                                    {{ $general->telefone }}
                                @endif
                            @endif

                            <br>

                            @if( !empty( $general ) )
                                @if( isset($general->email) )
                                    {{ $general->email }}
                                @endif
                            @endif
                        </p>

                        <ul class="l-social-media md:pl-12">

                            @if( !empty( $general ) )
                                @if( isset($general->linkedin) )
                                    <li class="l-social-media__item">    
                                        <a
                                        class="l-social-media__link l-social-media__linkedin"
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
                                    <li class="l-social-media__item mx-1">    
                                        <a
                                        class="l-social-media__link l-social-media__facebook"
                                        href="{{ $general->facebook }}"
                                        target="_blank"
                                        rel="noreferrer noopener">
                                            Link Facebook
                                        </a>
                                    </li>
                                @endif
                            @endif

                            @if( !empty( $general ) )
                                @if( isset($general->instagram) )
                                    <li class="l-social-media__item mx-1">    
                                        <a
                                        class="l-social-media__link l-social-media__instagram"
                                        href="{{ $general->instagram }}"
                                        target="_blank"
                                        rel="noreferrer noopener">
                                            Link Instagram
                                        </a>
                                    </li>
                                @endif
                            @endif

                            <li class="l-social-media__item mx-1">    
                                <a
                                class="l-social-media__link l-social-media__youtube"
                                href="#"
                                target="_blank"
                                rel="noreferrer noopener">
                                    Link Youtube
                                </a>
                            </li>

                            <li class="l-social-media__item mx-1">    
                                <a
                                class="l-social-media__link l-social-media__twitter"
                                href="#"
                                target="_blank"
                                rel="noreferrer noopener">
                                    Link Twitter
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="w-full my-10 px-4">
                        <div class="l-footer__divider"></div>
                    </div>
                </div>

                <div class="flex flex-wrap">

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

                <div class="flex flex-wrap">

                    <div class="w-full md:w-4/12 lg:w-3/12 my-5 md:my-0 px-4">

                        <p class="font-bold mb-3">
                            Produtos
                        </p>

                        @if( !empty( $general ) ) 
                            @if( isset($general->menu_footer_product) )
                                <ul>
                                    @foreach( $general->menu_footer_product as $item ) 
                                        <li class="u-font-size-13 u-font-weight-regular hover:u-font-weight-semibold u-color-folk-gray hover:u-color-folk-black mb-2">
                                            <a 
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

                        <p class="font-bold mb-3">
                            EBW Bank
                        </p>

                        @if( !empty( $general ) )
                            @if( isset($general->menu_footer_ebw) )
                                <ul>
                                    @foreach( $general->menu_footer_ebw as $item )
                                        <li class="u-font-size-13 u-font-weight-regular hover:u-font-weight-semibold u-color-folk-gray hover:u-color-folk-black mb-2">
                                            <!-- Quem Somos -->
                                            <a 
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

                        <p class="font-bold mb-3">
                            Suporte
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap justify-center u-bg-folk-white pb-6 pt-20">

        <div class="w-full lg:w-8/12 flex flex-col lg:flex-row justify-center items-center mb-4 px-4">

            <a 
            class="w-6/12 lg:w-3/12 my-4 lg:my-0 mx-5"
            href="#">
                <img
                src="{{ asset( 'images/logo-cerci.png' )}}"
                alt="Logo 1">
            </a>

            <a 
            class="w-6/12 lg:w-3/12 my-4 lg:my-0 mx-5"
            href="#">
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