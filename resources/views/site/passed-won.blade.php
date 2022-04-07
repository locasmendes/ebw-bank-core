@extends( 'site.layouts.master ' )

@section('title', 'Peça sua Maquininha')

@section( 'content' )

<!-- banner desktop -->
{{-- <section class="overflow-hidden hidden lg:block">

    <div class="flex">

        <div class="w-full">

            <!-- swiper -->
            <div class="swiper-container js-swiper-banner">

                <div class="swiper-wrapper">

                    <!-- estatico e temporario -->
                    <a
                    class="swiper-slide"
                    href="#">
                        <img loading="lazy"
                        src="{{ asset( 'images/banner-image-desktop-1.png' ) }}"
                        alt="Imagem de exemplo">
                    </a>
                    <!-- end estatico e temporario -->

                    @if( !empty($home) )
                        @if( isset($home->banners) )
                            @foreach( $home->banners as $banners ) 
                                <a 
                                class="swiper-slide" 
                                href="{{ $banners['banner_link'] == true ? $banners['banner_link'] : '#' }}">
                                    @if( isset($banners['banner_desktop']) )
                                        <img loading="lazy"
                                        src="{{ Storage::url( $banners['banner_desktop'] ) }}"
                                        alt="">
                                    @endif
                                </a>
                            @endforeach
                        @endif
                    @endif
                </div>
            </div>
            <!-- end swiper -->
        </div>
    </div>
</section> --}}
<!-- end banner desktop -->

<!-- banner mobile -->
{{-- <section class="overflow-hidden lg:hidden">

    <div class="flex">

        <div class="w-full">

            <!-- swiper -->
            <div class="swiper-container js-swiper-banner">

                <div class="swiper-wrapper">
                    
                    <!-- estatico e temporario -->
                    <a
                    class="swiper-slide"
                    href="/#">
                        <img loading="lazy"
                        src="{{ asset( 'images/banner-image-mobile-1.png' ) }}"
                        alt="Imagem de exemplo">
                    </a>
                    <!-- end estatico e temporario -->

                    @if( isset($home->banners) )
                        @foreach( $home->banners as $banners )
                            <a 
                            class="swiper-slide" 
                            href="{{ $banners['banner_link'] == true ? $banners['banner_link'] : '#' }}">
                                @if( isset($banners['banner_mobile']) )
                                    <img loading="lazy"
                                    src="{{ Storage::url( $banners['banner_mobile'] ) }}"
                                    alt="">
                                @endif
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
            <!-- end swiper -->
        </div>
    </div>
</section> --}}
<!-- end banner mobile -->

<!-- new banner -->
{{-- <section
class="l-passed-won-banner flex items-end relative"
style="background-image: url( {{ asset( 'images/banner-home.jpg' ) }} )">
    <div class="shadow-custom absolute top-0 left-0 right-0 w-full sm:w-1/2"></div>

    <div class="container mx-auto px-4">

        <div class="flex -mx-4">

            <div class="w-full px-4 pb-20">
                
                <img loading="lazy"
                class="mb-3"
                src="{{ asset( 'images/passou-ganhou-white-brand.png' ) }}"
                alt="Passou Ganhou">

                <h1 class="text-5xl text-white leading-tight">
                    <b>Soluções inteligentes,</b> <br>
                    benefícios exclusivos <br>
                    e claro, as melhores taxas.
                </h1>

                <div class="flex">

                    <div class="w-10/12 md:w-4/12 lg:w-3/12 mt-10 mb-4">
                        <a 
                        class="c-btn-pattern c-btn-pattern__arrow-right border-0 relative block text-size-1.3 rounded-full tracking-wide font-black uppercase u-color-folk-purple hover:u-color-folk-cyan u-bg-folk-cyan hover:u-bg-folk-purple py-4 px-12" 
                        href="#">
                            peça a sua
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- end banner -->

<!-- machine -->
@include( 'site.sections.machine' )
<!-- end machine -->

<!-- items -->
<section class="l-items" id="vantagens">

    <div class="container mx-auto px-4 pt-20 border-b-2 border-ebw-for-grey pb-32">

        <div class="flex -mx-4">

            <div class="w-full lg:w-8/12 lg:mb-20 px-4">

                <h3 class="xl:text-6xl lg:text-5xl text-4xl font-poppins font-bold u-color-folk-cyan mb-3">
                    Sem Complicação.
                </h3>

                <p class="xl:text-4xl text-3xl font-poppins text-ebw-purple mb-16 xl:leading-tight leading-tight">
                    Com a gente não tem essa de<br>
                    metas de venda, plano de fidelidade<br>
                     e nem domicílio bancário.
                </p>

                <div class="flex flex-wrap">

                    <!-- loop -->
                    <div class="w-full md:w-6/12 flex items-center my-6">

                        <img loading="lazy"
                        src="{{ asset( 'images/icon-split-pagamento.png' ) }}"
                        alt="Split de Pagamento">

                        <p class="font-bold text-ebw-purple-200 text-lg font-poppins leading-snug pl-6">
                            Split de pagamento
                        </p>
                    </div>
                    <!-- end loop -->

                    <div class="w-full md:w-6/12 flex items-center my-6">

                        <img loading="lazy"
                        src="{{ asset( 'images/icon-conta-pagamento.png' ) }}"
                        alt="Conta de Pagamento">

                        <p class="font-bold text-ebw-purple-200 text-lg font-poppins leading-snug pl-6">
                            Conta pagamento
                        </p>
                    </div>

                    <div class="w-full md:w-6/12 flex items-center my-6">

                        <img loading="lazy"
                        src="{{ asset( 'images/icon-transacao.png' ) }}"
                        alt="Acompanhamento em tempo real de transações">

                        <p class="font-bold text-ebw-purple-200 text-lg font-poppins leading-snug pl-6">
                            Acompanhamento em <br>
                            tempo real de transações
                        </p>
                    </div>

                    <div class="w-full md:w-6/12 flex items-center my-6">

                        <img loading="lazy"
                        src="{{ asset( 'images/icon-consultoria-empresarial.png' ) }}"
                        alt="Consultoria empresarial e atendimento personalizado">

                        <p class="font-bold text-ebw-purple-200 text-lg font-poppins leading-snug pl-6">
                            Consultoria empresarial e <br>
                            atendimento personalizado
                        </p>
                    </div>

                    <div class="w-full md:w-6/12 flex items-center my-6">

                        <img loading="lazy"
                        src="{{ asset( 'images/icon-suporte-whatsapp.png' ) }}"
                        alt="Suporte instantâneo via WhatsApp">

                        <p class="font-bold text-ebw-purple-200 text-lg font-poppins leading-snug pl-6">
                            Suporte instantâneo via <br>
                            WhatsApp
                        </p>
                    </div>

                    <div class="w-full md:w-6/12 flex items-center my-6">

                        <img loading="lazy"
                        src="{{ asset( 'images/icon-contrato-fidelidade.png' ) }}"
                        alt="Sem contrato de fidelização">

                        <p class="font-bold text-ebw-purple-200 text-lg font-poppins leading-snug pl-6">
                            Sem contrato<br>de fidelização
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex -mx-4">

            <div class="xl:w-8/12 lg:w-10/12 w-full px-4">

                <div class="flex flex-wrap -mx-4">

                    <div class="w-full md:w-6/12 px-4">

                        <div class="flex justify-center">

                            <div class="w-full flex mt-10 mb-4">
                                <a
                                class="c-btn-pattern group  border-0 relative block sm:text-xl text-base rounded-full font-bold font-poppins uppercase u-color-folk-purple hover:u-color-folk-cyan u-bg-folk-cyan hover:u-bg-folk-purple py-4 px-8"
                                href="#">
                                    peça sua maquininha
                                    <i class="fas fa-chevron-right ml-3 text-ebw-purple-300 group-hover:text-ebw-cyan"></i>
                                </a>
                            </div>
                        </div>

                        <p class="sm:text-3xl text-2xl">
                            <span class="font-bold u-color-folk-cyan font-poppins">Sem taxa de adesão.</span>
                        </p>
                    </div>

                    <div class="w-full md:w-6/12 pl-4 pr-4 lg:pr-20">
                        <img loading="lazy"
                        src="{{ asset( 'images/passou-ganhou-brand.png' ) }}"
                        alt="Passou Ganhou">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- end items -->

<!-- order -->
<section class="l-order u-bg-folk-dark-purple mt-64 pb-12">

    <div class="container mx-auto px-4"> 

        <div class="flex -mx-4">

            <div class="w-full -mt-24 md:-mt-44 px-4">
                
                <img loading="lazy"
                class="mx-auto block mb-12"
                src="{{ asset( 'images/machine-collection.png' ) }}"
                alt="Máquinas Passou Ganhou">

                <div class="flex flex-wrap justify-around lg:justify-center -mx-4">

                    <div class="mt-4 mb-4 mx-6">
                        <div class="flex justify-center my-4">
                            <a
                            class="c-btn-pattern c-btn-pattern__arrow-right font-poppins border-0 rounded-full inline-block relative sm:text-2xl text-lg font-bold uppercase u-color-folk-white hover:u-color-folk-dark-silver u-bg-folk-light-purple hover:u-bg-folk-cyan py-5 pl-12 pr-20"
                            href="#">
                                peça agora
                            </a>

                        </div>

                        <p class="text-lg font-bold text-center text-white mt-2">
                            Peça pelo site
                        </p>
                    </div>

                    <div class="mt-4 mb-4 mx-6">
                        <div class="flex justify-center my-4">
                            <div>
                                <a
                                class="c-btn-pattern c-btn-pattern__arrow-right font-poppins border-0 rounded-full relative inline-block sm:text-2xl text-lg font-bold uppercase u-color-folk-black hover:u-color-folk-white u-bg-folk-cyan hover:u-bg-folk-light-purple py-5 sm:pl-12 pl-10 sm:pr-28 pr-14"
                                href="#">
                                    chama no whats
                                </a>

                            </div>
                        </div>

                        <p class="text-lg font-bold text-center text-white mt-2">
                            Solicite por WhatsApp
                        </p>
                    </div>

                    <div class="mt-4 mb-4 mx-6">
                        <div class="flex justify-center my-4">
                            <a
                            class="c-btn-pattern c-btn-pattern__arrow-right font-poppins border-0 rounded-full tracking-wider relative inline-block sm:text-2xl text-lg font-bold uppercase u-color-folk-white hover:u-color-folk-dark-silver u-bg-folk-light-purple hover:u-bg-folk-cyan py-5 pl-8 pr-16"
                            href="tel:08008943000">
                                0800 894 3000
                            </a>
                        </div>

                        <p class="text-lg font-bold text-center text-white mt-2">
                            Solicite por telefone
                        </p>
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

                <h6 class="font-bold tracking-wide text-center text-ebw-green font-poppins text-lg">
                    Todas as bandeiras que você precisa
                </h6>
            </div>

            <div class="lg:w-11/12 2xl:w-9/12 flex flex-wrap justify-around md:justify-between items-center mb-12 px-4">
                
                <img loading="lazy"
                class="m-4 m:my-0"
                src="{{ asset( 'images/mastercard-brand.png' ) }}"
                alt="Master Card">

                <img loading="lazy"
                class="m-4 m:my-0"
                src="{{ asset( 'images/visa-brand.png' ) }}"
                alt="Visa">

                <img loading="lazy"
                class="m-4 m:my-0"
                src="{{ asset( 'images/elo-brand.png' ) }}"
                alt="Elo">

                <img loading="lazy"
                class="m-4 m:my-0"
                src="{{ asset( 'images/american-express-brand.png' ) }}"
                alt="American Express">

                <img loading="lazy"
                class="m-4 m:my-0"
                src="{{ asset( 'images/diners-club-international-brand.png' ) }}"
                alt="Diners Club International">

                <img loading="lazy"
                class="m-4 m:my-0"
                src="{{ asset( 'images/aura-brand.png' ) }}"
                alt="Aura">

                <img loading="lazy"
                class="m-4 m:my-0"
                src="{{ asset( 'images/jcb-brand.png' ) }}"
                alt="JCB">
            </div>

            <div class="w-full hidden px-4">
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
<section class="l-disclosure hidden items-center py-32">

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

                        <img loading="lazy"
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

<!-- app -->
<section class="l-app relative pt-10 pb-20">

    <div class="container relative z-10 mx-auto px-4">

        <div class="flex flex-wrap -mx-4">

            <div class="w-full px-4">

                <img loading="lazy"
                class="w-16 block mx-auto mb-10"
                src="{{ asset( 'images/g-white.png' ) }}"
                alt="Passou Ganhou">

                <div class="flex flex-wrap justify-center -mx-4">  

                    <div class="w-full 2xl:w-4/12  lg:w-5/12 md:w-1/2 px-4 flex md:justify-start justify-center">

                        <p class="xl:text-4xl text-3xl font-normal text-white">
                            Transforme seus <br>
                            clientes em fãs com <br>

                            <span class="flex items-center text-white mt-3">
                                o App
                                <img loading="lazy"
                                class="w-48 ml-3"
                                src="{{ asset( 'images/passou-ganhou-white-brand-small.png' ) }}"
                                alt="Passou Ganhou">
                            </span>

                            em breve  <br>
                            lançamento nacional
                        </p>
                    </div>

                    <div class="w-full 2xl:w-4/12  lg:w-5/12 md:w-1/2 mt-10 lg:mt-0 px-4 flex md:items-start items-center flex-col">

                        <p class="xl:text-4xl sm:text-3xl text-2xl font-bold u-color-folk-cyan mb-8">
                            Mostre seus produtos em <br>
                            uma das maiores vitrines <br>
                            de negócios do país
                        </p>

                        <p class="sm:text-2xl text-xl font-normal text-white">
                            Seus clientes compram com a <br>
                            PASSOU GANHOU e acumulam <br>
                            pontos para trocar por descontos.
                        </p>
                    </div>                    
                </div>

                <div class="flex justify-center">

                    <div class="pt-10">
                        <a class="c-btn-pattern c-btn-pattern__arrow-right border-0 relative block sm:text-xl text-base font-poppins font-extrabold rounded-full uppercase u-color-folk-purple bg-ebw-cyan hover:bg-opacity-80 transition-opacity duration-150 hover:u-bg-folk-light-purple py-4 pl-8 pr-12" href="#">
                            peça sua maquininha
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end app -->

<!-- ebw -->
{{-- <section class="l-ebw">

    <div>
        <div class="flex flex-wrap">
            
            <div 
            class="w-full lg:w-6/12 l-ebw__background py-20" 
            style="background-image: url( {{ asset( 'images/ebw-background-left.png' ) }} )">
               
                <div class="flex lg:justify-end">

                    <div class="w-full md:w-6/12 2xl:w-5/12 md:ml-20 lg:ml-0 lg:mr-20 px-4">
                        
                        <img loading="lazy"
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
                        
                        <img loading="lazy"
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
</section> --}}
<!-- end ebw -->

<!-- business -->
<section class="l-business py-20">

    <div class="container mx-auto px-4">

        <div class="flex">

            <div class="w-full mb-10">

                <img loading="lazy"
                class="mx-auto block"
                src="{{ asset( 'images/icon-business.png' ) }}"
                alt="Negocie as suas taxas">

                <h4 class="l-business__title font-bold text-center u-color-folk-cyan my-4 font-poppins">
                    Negocie suas taxas. 
                </h4>

                <p class="text-lg font-bold text-center">
                    Com a PASSOU GANHOU, você tem o atendimento personalizado <br>
                    que você merece e as taxas ideais para o seu negócio prosperar. 
                </p>
            </div>
        </div>

        <div class="flex flex-wrap justify-center -mx-4">
            <!-- loop -->
            <div class="w-full md:w-6/12 lg:w-4/12 my-4 lg:my-0 px-4">
                <div class="l-business__card sm:p-6 p-4">
                    <div class="l-business__card-body mb-8">
                        <p class="l-business__category font-bold u-color-folk-cyan my-4">
                            Vendas
                        </p>
                        <p class="l-business__phone font-black mb-4">
                            (61) 9.9604-4061
                        </p>
                        <p class="text-lg text-black font-poppins">
                            Horário de atendimento: <br>
                            <span class="font-bold">Segunda a sexta das 8h às 18h</span>
                        </p>
                    </div>
                    <div class="l-business__card-footer">
                        <div class="mb-4">
                            <a href="mailto:vendas@passouganhou.com.br" class="flex w-full leading-none break-all px-4 justify-center items-center border-2 border-ebw-rosinha bg-opacity-0 hover:bg-opacity-20 bg-ebw-rosinha transition-opacity duration-300 rounded-full py-5">
                                <i class="far fa-envelope text-ebw-purple-300 text-lg"></i>
                                <span class="text-ebw-purple-200 font-poppins font-medium tracking-wide ml-3">vendas@passouganhou.com.br</span>
                            </a>
                        </div>
                        <div class="mb-4">
                            <a href="https://wa.me/556199604198" target="_blank" rel="noopener noreferrer" class="flex w-full leading-none justify-center items-center border-2 border-ebw-whatsapp bg-ebw-whatsapp hover:bg-opacity-80 transition-opacity duration-300 text-white rounded-full py-5 font-bold text-lg font-poppins">
                                Chame pelo WhatsApp!
                            </a>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="w-full md:w-6/12 lg:w-4/12 my-4 lg:my-0 px-4">
                <div class="l-business__card sm:p-6 p-4">
                    <div class="l-business__card-body mb-8">
                        <p class="l-business__category font-bold u-color-folk-cyan my-4">
                            Suporte
                        </p>
                        <p class="l-business__phone font-black mb-4">
                            (61) 9.9604-1988
                        </p>
                        <p class="text-lg text-black font-poppins">
                            Horário de atendimento: <br>
                            <span class="font-bold">Segunda a sexta das 8h às 18h</span>
                        </p>
                    </div>
                    <div class="l-business__card-footer">
                        <div class="mb-4">
                            <a href="mailto:suporte@passouganhou.com.br" class="flex w-full break-all px-4 leading-none justify-center items-center border-2 border-ebw-rosinha bg-opacity-0 hover:bg-opacity-20 bg-ebw-rosinha transition-opacity duration-300 rounded-full py-5">
                                <i class="far fa-envelope text-ebw-purple-300 text-lg"></i>
                                <span class="text-ebw-purple-200 font-poppins font-medium tracking-wide ml-3">suporte@passouganhou.com.br</span>
                            </a>
                        </div>
                        <div class="mb-4">
                            <a href="https://wa.me/5561996041988" target="_blank" rel="noopener noreferrer" class="flex w-full leading-none justify-center items-center border-2 border-ebw-whatsapp bg-ebw-whatsapp hover:bg-opacity-80 transition-opacity duration-300 text-white rounded-full py-5 font-bold text-lg font-poppins">
                                Chame pelo WhatsApp!
                            </a>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="w-full md:w-6/12 lg:w-4/12 my-4 lg:my-0 px-4">
                <div class="l-business__card sm:p-6 p-4">
                    <div class="l-business__card-body mb-8">
                        <p class="l-business__category font-bold u-color-folk-cyan my-4">
                            Fale conosco
                        </p>
                        <p class="l-business__phone font-black mb-4">
                            0800-894-3000
                        </p>
                        <p class="text-lg text-black font-poppins">
                            Horário de atendimento: <br>
                            <span class="font-bold">Segunda a Sexta - 8h às 18h Sábado - 8h às 13h</span>
                        </p>
                    </div>
                    <div class="l-business__card-footer">
                        <div class="mb-4">
                            <a href="emailto:cac@passouganhou.com.br" class="flex w-full leading-none break-all px-4 justify-center items-center border-2 border-ebw-rosinha bg-opacity-0 hover:bg-opacity-20 bg-ebw-rosinha transition-opacity duration-300 rounded-full py-5">
                                <i class="far fa-envelope text-ebw-purple-300 text-lg"></i>
                                <span class="text-ebw-purple-200 font-poppins font-medium tracking-wide ml-3">cac@passouganhou.com.br</span>
                            </a>
                        </div>
                        <div class="mb-4">
                            <a href="tel:0800894300" class="flex w-full leading-none justify-center items-center border-2 border-ebw-whatsapp bg-ebw-whatsapp hover:bg-opacity-80 transition-opacity duration-300 text-white rounded-full py-5 font-bold text-lg font-poppins">
                                Ligue 0800-894-300
                            </a>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- end loop -->
            
           
        </div>
    </div>
</section>
<!-- end business -->

@endsection
