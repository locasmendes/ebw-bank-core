@extends( 'site.layouts.master ' )

@section('title', 'Passou Ganhou')

@section( 'content' )

<!-- banner desktop -->
<section class="overflow-hidden hidden lg:block">

    <div class="flex">

        <div class="w-full">

            <!-- swiper -->
            <div class="swiper-container js-swiper-banner">

                <div class="swiper-wrapper">

                    <!-- estatico e temporario -->
                    <a
                    class="swiper-slide"
                    href="#">
                        <img
                        src="{{ asset( 'images/banner-image-desktop-1.png' ) }}"
                        alt="Imagem de exemplo">
                    </a>
                    <!-- end estatico e temporario -->

                    {{-- @if( !empty($home) )
                        @if( isset($home->banners) )
                            @foreach( $home->banners as $banners ) 
                                <a 
                                class="swiper-slide" 
                                href="{{ $banners['banner_link'] == true ? $banners['banner_link'] : '#' }}">
                                    @if( isset($banners['banner_desktop']) )
                                        <img
                                        src="{{ Storage::url( $banners['banner_desktop'] ) }}"
                                        alt="">
                                    @endif
                                </a>
                            @endforeach
                        @endif
                    @endif --}}
                </div>
            </div>
            <!-- end swiper -->
        </div>
    </div>
</section>
<!-- end banner desktop -->

<!-- banner mobile -->
<section class="overflow-hidden lg:hidden">

    <div class="flex">

        <div class="w-full">

            <!-- swiper -->
            <div class="swiper-container js-swiper-banner">

                <div class="swiper-wrapper">
                    
                    <!-- estatico e temporario -->
                    <a
                    class="swiper-slide"
                    href="/#">
                        <img
                        src="{{ asset( 'images/banner-image-mobile-1.png' ) }}"
                        alt="Imagem de exemplo">
                    </a>
                    <!-- end estatico e temporario -->

                    {{-- @if( isset($home->banners) )
                        @foreach( $home->banners as $banners )
                            <a 
                            class="swiper-slide" 
                            href="{{ $banners['banner_link'] == true ? $banners['banner_link'] : '#' }}">
                                @if( isset($banners['banner_mobile']) )
                                    <img
                                    src="{{ Storage::url( $banners['banner_mobile'] ) }}"
                                    alt="">
                                @endif
                            </a>
                        @endforeach
                    @endif --}}
                </div>
            </div>
            <!-- end swiper -->
        </div>
    </div>
</section>
<!-- end banner mobile -->

<!-- machine -->
@include( 'site.sections.machine' )
<!-- end machine -->

<!-- order -->
<section class="l-order u-bg-folk-dark-purple pb-12">

    <div class="container mx-auto px-4"> 

        <div class="flex -mx-4">

            <div class="w-full -mt-24 md:-mt-44 px-4">
                
                <img
                class="mx-auto block"
                src="{{ asset( 'images/machine-collection.png' ) }}"
                alt="Máquinas Passou Ganhou">

                <div class="flex flex-wrap justify-around lg:justify-center -mx-4">

                    <div class="w-full md:w-5/12 lg:w-3/12 mt-12 lg:mr-4 px-4">

                        <p class="l-order__text font-bold text-center u-color-folk-white">
                            Peça pelo site
                        </p>

                        <div class="flex justify-center">

                            <div class="w-full mt-4 mb-4">
                                <a
                                class="c-btn-pattern c-btn-pattern__arrow-right border-0 relative block u-font-size-18 font-bold uppercase u-color-folk-white hover:u-color-folk-dark-silver u-bg-folk-light-purple hover:u-bg-folk-cyan py-6 px-12"
                                href="#">
                                    peça agora
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-6/12 lg:w-4/12 mt-12 lg:ml-4 px-4">

                        <p class="l-order__text font-bold text-center u-color-folk-white">
                            Solicite por WhatsApp
                        </p>

                        <div class="flex justify-center">

                            <div class="w-full 2xl:w-10/12 mt-4 mb-4">
                                <a
                                class="c-btn-pattern c-btn-pattern__arrow-right border-0 relative block u-font-size-18 font-bold uppercase u-color-folk-black hover:u-color-folk-white u-bg-folk-cyan hover:u-bg-folk-light-purple py-6 px-12"
                                href="#">
                                    chama no whats
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end order -->

<!-- flags -->
<section class="l-flags u-bg-folk-dark-purple py-20">

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center -mx-4">

            <div class="lg:w-11/12 mb-12">

                <h6 class="l-flags__text font-bold text-center u-color-folk-dark-cyan">
                    Todas as bandeiras que você precisa
                </h6>
            </div>

            <div class="lg:w-11/12 2xl:w-9/12 flex flex-wrap justify-around md:justify-between items-center mb-12 px-4">
                
                <img
                class="m-4 m:my-0"
                src="{{ asset( 'images/mastercard-brand.png' ) }}"
                alt="Master Card">

                <img
                class="m-4 m:my-0"
                src="{{ asset( 'images/visa-brand.png' ) }}"
                alt="Visa">

                <img
                class="m-4 m:my-0"
                src="{{ asset( 'images/elo-brand.png' ) }}"
                alt="Elo">

                <img
                class="m-4 m:my-0"
                src="{{ asset( 'images/american-express-brand.png' ) }}"
                alt="American Express">

                <img
                class="m-4 m:my-0"
                src="{{ asset( 'images/diners-club-international-brand.png' ) }}"
                alt="Diners Club International">

                <img
                class="m-4 m:my-0"
                src="{{ asset( 'images/aura-brand.png' ) }}"
                alt="Aura">

                <img
                class="m-4 m:my-0"
                src="{{ asset( 'images/jcb-brand.png' ) }}"
                alt="JCB">
            </div>

            <div class="w-full px-4">
                <p class="u-font-size-10 font-normal text-center u-color-folk-pink">
                    Bandeiras: MasterCard, Visa e Elo nas funções crédito e débito nos chips: Amex, <br>
                    Dinners, Aura e JCB Produtos: Crédito à vista, Crédito parcelado emissor e Débito
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end flags -->

<!-- disclosure -->
<section class="l-disclosure flex items-center py-32">

    <div class="container mx-auto px-4">

        <div class="flex justify-center -mx-4">

            <div class="w-full sm:w-10/12 2xl:w-11/12 px-4">

                <div class="flex flex-wrap justify-center -mx-4">

                    <div class="w-full md:w-10/12 lg:w-8/12 2xl:w-7/12 mb-12 px-4">

                        <p class="u-font-size-14 font-bold all:u-color-folk-pink  mb-3">
                            <!-- Melhore seu faturamento <span class="font-normal">fidelizando seus clientes.</span> -->
                            Venda com a PASSOU GANHOU <br>
                            <span class="font-normal">e transforme seus clientes em fãs.</span>
                        </p>

                        <h6 class="l-disclosure__text-large leading-12 md:leading-9 2xl:leading-normal font-bold u-color-folk-cyan">
                            Quem é PASSOU GANHOU sai na frente. <br>
                            <span class="u-color-folk-white">
                                Não tem essa de plano de fidelidade ou metas de venda. <br>
                                É o atendimento sem complicação que você merece. 
                            </span>
                        </h6>
                    </div>

                    <div class="w-full md:w-10/12 lg:w-4/12 px-4">

                        <img
                        src="{{ asset( 'images/disclosure-brand.png' )}}"
                        alt="Passou Ganhou EBW">

                        <p class="u-font-size-12 font-normal u-color-folk-white mt-4 md:mt-0 md:ml-6">
                            A cada um Real gasto na sua loja, seu cliente ganha 1 ponto, que pode ser trocado por descontos exclusivos. 
                            A cada um Real vendido na PASSOU GANHOU, você, lojista, também ganha pontos e consegue exibir seus descontos exclusivos no APP PASSOU GANHOU. 
                            EM BREVE! 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end disclosure -->

<!-- items -->
<section class="l-items py-20" id="vantagens">

    <div class="container mx-auto px-4">

        <div class="flex -mx-4">

            <div class="w-full lg:w-8/12 mb-20 px-4">

                <h3 class="l-items__title leading-7 md:leading-normal mb-12">
                    <span class="font-bold u-color-folk-purple">
                        Quem é PASSOU GANHOU sai na frente. <br>
                        Não tem essa de plano de fidelidade ou metas de venda. <br>
                        É o atendimento sem complicação que você merece. 
                    </span> <br>

                    <span class="font-bold u-color-folk-cyan">
                        Programa de pontos e benefícios EM BREVE!
                    </span>
                </h3>

                <div class="flex flex-wrap">

                    <!-- loop -->
                    <div class="w-full md:w-6/12 flex items-center my-6">

                        <img
                        src="{{ asset( 'images/icon-split-pagamento.png' ) }}"
                        alt="Split de Pagamento">

                        <p class="font-bold u-color-folk-purple pl-6">
                            Split de pagamento
                        </p>
                    </div>
                    <!-- end loop -->

                    <div class="w-full md:w-6/12 flex items-center my-6">

                        <img
                        src="{{ asset( 'images/icon-conta-pagamento.png' ) }}"
                        alt="Conta de Pagamento">

                        <p class="font-bold u-color-folk-purple pl-6">
                            Conta pagamento
                        </p>
                    </div>

                    <div class="w-full md:w-6/12 flex items-center my-6">

                        <img
                        src="{{ asset( 'images/icon-transacao.png' ) }}"
                        alt="Acompanhamento em tempo real de transações">

                        <p class="font-bold u-color-folk-purple pl-6">
                            Acompanhamento em <br>
                            tempo real de transações
                        </p>
                    </div>

                    <div class="w-full md:w-6/12 flex items-center my-6">

                        <img
                        src="{{ asset( 'images/icon-consultoria-empresarial.png' ) }}"
                        alt="Consultoria empresarial e atendimento personalizado">

                        <p class="font-bold u-color-folk-purple pl-6">
                            Consultoria empresarial <br>
                            e atendimento personalizado
                        </p>
                    </div>

                    <div class="w-full md:w-6/12 flex items-center my-6">

                        <img
                        src="{{ asset( 'images/icon-suporte-whatsapp.png' ) }}"
                        alt="Suporte instantâneo via WhatsApp">

                        <p class="font-bold u-color-folk-purple pl-6">
                            Suporte instantâneo <br>
                            via WhatsApp
                        </p>
                    </div>

                    <div class="w-full md:w-6/12 flex items-center my-6">

                        <img
                        src="{{ asset( 'images/icon-contrato-fidelidade.png' ) }}"
                        alt="Sem contrato de fidelização">

                        <p class="font-bold u-color-folk-purple pl-6">
                            Sem contrato <br>
                            de fidelização
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex">

            <div class="w-full">

                <div class="flex justify-center">

                    <div class="w-10/12 md:w-4/12 lg:w-4/12 mt-10 mb-4">
                        <a
                        class="c-btn-pattern c-btn-pattern__arrow-right border-0 relative block u-font-size-18 font-bold uppercase u-color-folk-purple hover:u-color-folk-cyan u-bg-folk-cyan hover:u-bg-folk-purple py-4 px-12"
                        href="#">
                            peça sua maquininha
                        </a>
                    </div>
                </div>

                <p class="l-items__text text-center">
                    <span class="font-bold u-color-folk-cyan">Sem taxa de adesão.</span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end items -->

<!-- ebw -->
<section class="l-ebw">

    <div>
        <div class="flex flex-wrap">
            
            <div 
            class="w-full lg:w-6/12 l-ebw__background py-20" 
            style="background-image: url( {{ asset( 'images/ebw-background-left.png' ) }} )">
               
                <div class="flex lg:justify-end">

                    <div class="w-full md:w-6/12 2xl:w-5/12 md:ml-20 lg:ml-0 lg:mr-20 px-4">
                        
                        <img
                        src="{{ asset( 'images/ebw-brand.png' )}}"
                        alt="EBW">

                        <h6 class="l-ebw__title font-bold u-color-folk-white my-10">
                            Quer um portal com informações para alavancar seu negócio? Acompanhe nossos artigos e podcasts.
                        </h6>

                        <div class="flex">

                            <div class="w-full 2xl:w-11/12 mb-4">  
                                <a
                                class="c-btn-pattern c-btn-pattern__arrow-right border-0 relative block u-font-size-15 font-bold uppercase u-color-folk-dark-silver u-bg-folk-red py-4 pl-6 pr-10"
                                href="https://ebwbank.com.br/"
                                target="_blank"
                                rel="noreferrer noopener">
                                    portal do empreendedor
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div 
            class="w-full lg:w-6/12 l-ebw__background py-20" 
            style="background-image: url( {{ asset( 'images/ebw-background-right.png' ) }} )">
                
                <div class="flex">

                    <div class="w-full md:w-6/12 2xl:w-5/12 md:ml-20 px-4">
                        
                        <img
                        src="{{ asset( 'images/ebw-brand.png' )}}"
                        alt="EBW">

                        <h6 class="l-ebw__title font-bold u-color-folk-white my-10">
                            Conheça o grande <br>
                            banco por trás da <br>
                            incrível maquininha <br>
                            Passou Ganhou
                        </h6>

                        <div class="flex">

                            <div class="w-full md:w-10/12 mb-4">

                                <a
                                class="c-btn-pattern c-btn-pattern__arrow-right border-0 relative block u-font-size-15 font-bold uppercase u-color-folk-dark-silver u-bg-folk-red py-4 pl-6 pr-10"
                                href="https://ebwbank.com.br/"
                                target="_blank"
                                rel="noreferrer noopener">
                                    conheça o ebw
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end ebw -->

<!-- business -->
<section class="l-business py-20">

    <div class="container mx-auto px-4">

        <div class="flex">

            <div class="w-full mb-10">

                <img
                class="mx-auto block"
                src="{{ asset( 'images/icon-business.png' ) }}"
                alt="Negocie as suas taxas">

                <h4 class="l-business__title font-bold text-center u-color-folk-cyan my-4">
                    Negocie suas taxas. 
                </h4>

                <p class="u-font-size-15 font-bold text-center u-color-folk-purple">
                    Com a PASSOU GANHOU, você tem o atendimento personalizado <br>
                    que você merece e as taxas ideais para o seu negócio prosperar. 
                </p>
            </div>
        </div>

        <div class="flex flex-wrap justify-center -mx-4">

            <!-- loop -->
            <div class="w-full md:w-6/12 lg:w-4/12 my-4 lg:my-0 px-4">

                <div class="l-business__card">

                    <div class="l-business__card-body">

                        <p class="l-business__category font-bold u-color-folk-cyan my-4">
                            Vendas
                        </p>

                        <p class="l-business__phone font-bold u-color-folk-purple mb-4">
                            (61) 9.9604-4061
                        </p>

                        <p class="u-font-size-13 font-normal u-color-folk-purple">
                            Horário de atendimento: <br>
                            <span class="font-bold">Segunda a sexta das 8h às 18h</span>
                        </p>
                    </div>

                    <div class="l-business__card-footer">

                        <div class="flex flex-wrap">

                            <div class="w-full">
                                <p class="c-btn-pattern before::thumbnail:u-icon-img-email hover:before::thumbnail:u-icon-img-email border u-border-color-lilac relative flex justify-center items-center u-font-size-12 font-normal u-color-folk-purple hover:u-color-folk-white hover:u-bg-folk-light-purple py-4 pl-6 pr-10">
                                    vendas@passouganhou.com.br
                                </p>
                            </div>

                            <div class="w-full my-4">
                                <a 
                                class="c-btn-pattern u-border-color-lilac relative block u-font-size-12 font-bold text-center u-color-folk-white u-bg-folk-cyan py-4 pl-6 pr-10" 
                                href="#"
                                target="_blank"
                                rel="noreferrer noopener">
                                    Chame pelo WhatsApp!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- end loop -->
            
            <div class="w-full md:w-6/12 lg:w-4/12 my-4 lg:my-0 px-4">

                <div class="l-business__card">

                    <div class="l-business__card-body">

                        <p class="l-business__category font-bold u-color-folk-cyan my-4">
                            Suporte
                        </p>

                        <p class="l-business__phone font-bold u-color-folk-purple mb-4">
                            (61) 9.9604-1988    
                        </p>

                        <p class="u-font-size-13 font-normal u-color-folk-purple">
                            Horário de atendimento: <br>
                            <span class="font-bold">Segunda a sexta das 8h às 18h</span>
                        </p>
                    </div>

                    <div class="l-business__card-footer">

                        <div class="flex flex-wrap">

                            <div class="w-full">
                                <a 
                                class="c-btn-pattern before::thumbnail:u-icon-img-email hover:before::thumbnail:u-icon-img-email border u-border-color-lilac relative flex justify-center items-center u-font-size-12 font-normal u-color-folk-purple hover:u-color-folk-white hover:u-bg-folk-light-purple py-4 pl-6 pr-10" 
                                href="malito:suporte@passouganhou.com.br">
                                    suporte@passouganhou.com.br
                                </a>
                            </div>

                            <div class="w-full my-4">
                                <a 
                                class="c-btn-pattern u-border-color-lilac relative block u-font-size-12 font-bold text-center u-color-folk-white u-bg-folk-cyan py-4 pl-6 pr-10" 
                                href="https://wa.me/5561996044061"
                                target="_blank"
                                rel="noreferrer noopener">
                                    Chame pelo WhatsApp!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-6/12 lg:w-4/12  my-4 lg:my-0 px-4">

                <div class="l-business__card">

                    <div class="l-business__card-body">

                        <p class="l-business__category font-bold u-color-folk-cyan my-4">
                            Fale conosco
                        </p>

                        <p class="l-business__phone font-bold u-color-folk-purple mb-4">
                            0800-894-3000
                        </p>

                        <p class="u-font-size-13 font-normal u-color-folk-purple">
                            Horário de atendimento: <br>
                            <span class="font-bold">
                                Segunda a Sexta - 8h às 18h <br>
                                Sábado - 8h às 13h
                            </span>
                        </p>
                    </div>

                    <div class="l-business__card-footer">

                        <div class="flex flex-wrap">

                            <div class="w-full">
                                <a 
                                class="c-btn-pattern before::thumbnail:u-icon-img-email hover:before::thumbnail:u-icon-img-email border u-border-color-lilac relative flex justify-center items-center u-font-size-12 font-normal u-color-folk-purple hover:u-color-folk-white hover:u-bg-folk-light-purple py-4 pl-6 pr-10" 
                                href="malito:cac@passouganhou.com.br">
                                    cac@passouganhou.com.br
                                </a>
                            </div>

                            <div class="w-full my-4">
                                <a 
                                class="c-btn-pattern u-border-color-lilac relative block u-font-size-12 font-bold text-center u-color-folk-white u-bg-folk-cyan py-4 pl-6 pr-10" 
                                href="#">
                                    Ligue 0800-894-3000
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end business -->

@endsection
