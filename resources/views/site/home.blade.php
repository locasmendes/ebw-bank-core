@extends( 'site.layouts.master' )

@section( 'content' )

<!-- banner -->
<section 
class="l-banner flex justify-center items-center py-24 md:py-0"
style="background-image: url( {{ $home->banner ? Storage::url( $home->banner ) : '' }} );">

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap">

            <div class="w-full lg:w-4/12 flex lg:block flex-col items-center lg:ml-32">

                <!-- <p class="l-banner__title leading-12 lg:leading-10 u-font-weight-regular text-center lg:text-left u-color-folk-white">
                    Venda na internet <br>
                    com segurança <br>
                    antifraude e <br>
                    <span class="font-bold u-color-folk-white">parcelamento <br>
                    em até 12x</span>
                </p> -->

                <span class="l-banner__title leading-12 lg:leading-10 block u-font-weight-regular text-center lg:text-left all:u-color-folk-white">
                    @if( !empty( $home ))
                        @if( $home->banner_text_highlight )
                            {!! \Illuminate\Support\Str::markdown( $home->banner_text_highlight ) !!}
                        @endif
                    @endif
                </span>

                <!-- <p class="u-font-size-15 u-font-weight-medium text-center lg:text-left u-color-folk-primary mt-5">
                    EBW Pay foi pensado e desenvolvido <br>
                    para o micro e pequeno empreendedor.
                </p> -->

                <span class="block u-font-size-15 u-font-weight-medium text-center lg:text-left all:u-color-folk-primary mt-5">
                    @if( !empty( $home ))
                        @if( $home->banner_text_small )
                            {!! \Illuminate\Support\Str::markdown( $home->banner_text_small ) !!}
                        @endif
                    @endif
                </span>
                
                @if( !empty( $general ) )
                    @if( $general->button_start_now ) 
                        <a
                        class="c-btn-pattern c-btn-icon-arrow u-border-color-primary relative inline-block font-bold uppercase u-color-folk-white hover:u-color-folk-primary u-bg-folk-primary hover:u-bg-folk-none mt-9 py-5 pl-7 pr-28"
                        href="{{ $general->button_start_now }}">
                            comece agora
                        </a>
                    @endif
                @endif
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- digital -->
<section class="l-digital py-12">

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center">

            <div class="w-full lg:w-10/12">

                <div class="flex flex-wrap">

                    <div class="w-full lg:w-4/12 flex lg:block flex-col items-center lg:mt-20 mb-12 lg:mb-0 sm:px-4 lg:px-0">
                        <!-- <h3 class="l-digital__title leading-10 font-bold">
                            Tudo o que você <br>
                            precisa para <br>
                            empreender no <br>
                            universo digital.
                        </h3> -->

                        <h3 class="l-digital__title leading-10 font-bold">
                            {!! $home->digital_title_highlight !!}
                        </h3>

                        <!-- <p class="u-font-size-14 u-font-weight-medium mt-7">
                            Toda a nossa infraestrutura de processamento <br> 
                            e captura de cartão permite que você faça <br>
                            suas vendas de forma segura e transparente, <br>
                            a partir de sua conta digital na EBW Bank.
                        
                            <br><br>

                            Você pode vender através do seu próprio site <br>
                            ou marketplace, por meio de uma integração <br>
                            simples e fácil de fazer.
                        </p> -->

                        <p class="u-font-size-14 u-font-weight-medium mt-7">
                            @if( !empty( $home ) )
                                @if( isset( $home->digital_description ) )
                                    {!! $home->digital_description !!}
                                @endif
                            @endif
                        </p>

                        @if( !empty( $general ) )
                            @if( $general->button_start_now ) 
                                <a
                                class="c-btn-pattern c-btn-icon-arrow u-border-color-primary relative inline-block font-bold uppercase text-white hover:u-color-folk-primary u-bg-folk-primary hover:u-bg-folk-none mt-12 py-5 pl-7 pr-28"
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

                    <div class="w-full lg:w-4/12 lg:ml-32 sm:pl-4">

                        <div class="flex flex-wrap">

                            <!-- loop -->
                            @if( !empty( $home ) )
                                @if( isset( $home->digital_items ) )
                                    @foreach( $home->digital_items as $item ) 
                                        <div class="l-digital__col-child w-full flex py-12">

                                            <div class="w-1/3">
                                                <!-- <img 
                                                class=""
                                                src="{{ asset( 'images/digital-icone-pagamento.png' ) }}"
                                                alt="Links de Pagamento"> -->

                                                <img 
                                                class=""
                                                src="{{ Storage::url( $item[ 'digital_items_icon' ] ) }}"
                                                alt="{{ $item[ 'digital_items_title' ] }}">
                                            </div>

                                            <div class="w-2/3">
                                                <!-- <h6 class="font-bold">
                                                    Gere seus próprios <br>
                                                    links de pagamento
                                                </h6> -->

                                                <h6 class="font-bold">
                                                    {!! $item[ 'digital_items_title' ] !!}
                                                </h6>

                                                <!-- <p class="u-font-size-13 u-font-weight-medium mt-1">
                                                    Enviar link de pagamento para <br>
                                                    receber parcelado, em até 12x <br>
                                                    com cartão de crédito
                                                </p> -->

                                                <p class="u-font-size-13 u-font-weight-medium mt-1">
                                                    {!! $item[ 'digital_items_text' ] !!}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach  
                                @endif
                            @endif
                            <!-- end loop -->

                            <!-- <div class="l-digital__col-child w-full flex py-12">

                                <div class="w-1/3">
                                    <img 
                                    class=""
                                    src="{{ asset( 'images/digital-icone-qrcode.png' ) }}"
                                    alt="Pagar por QR Code">
                                </div>

                                <div class="w-2/3">
                                    <h6 class="font-bold">
                                        Gere QR CODES para <br>
                                        receber rapidamente
                                    </h6>

                                    <p class="u-font-size-13 u-font-weight-medium mt-1">
                                        Pagar por QR Code para
                                        receber pelas suas vendas
                                        com praticidade
                                    </p>
                                </div>
                            </div>

                            <div class="l-digital__col-child w-full flex py-12">

                                <div class="w-1/3">
                                    <img 
                                    class=""
                                    src="{{ asset( 'images/digital-icone-receber.png' ) }}"
                                    alt="Links de Pagamento">
                                </div>

                                <div class="w-2/3">
                                    <h6 class="font-bold">
                                        Escolha quando <br>
                                        quer receber
                                    </h6>

                                    <p class="u-font-size-13 u-font-weight-medium mt-1">
                                        Enviar link de pagamento para <br>
                                        receber parcelado, em até 12x <br>
                                        com cartão de crédito;
                                    </p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end digital -->

<!-- machine -->
<section class="l-machine pt-32 pb-64">

    <div class="container mx-auto">

        <div class="flex flex-wrap justify-center">

            <div class="w-full md:w-10/12 lg:w-4/12 order-2 lg:order-1 flex lg:block flex-col items-center mt-12 lg:mt-0 px-4">

                <h3 class="l-machine__title leading-12 lg:leading-10 font-bold text-center lg:text-left u-color-folk-purple">
                    A única maquininha <br>
                    com taxas negociáveis <br>
                    e fidelização dos clientes.
                </h3>

                <p class="l-machine__subtitle font-bold text-center lg:text-left u-color-folk-dark-cyan my-5 lg:my-0">
                    Só com a Passou Ganhou do EBW Bank
                    seus clientes acumulam pontos e
                    você pode negociar suas taxas.
                </p>

                <p class="u-font-size-14 u-font-weight-medium text-center lg:text-left">
                    Toda venda acumula pontos para
                    seu cliente, que poderá trocá-los por
                    descontos nas próximas compras. 

                    <br>
                    <br>

                    O programa de pontos aproxima o cliente
                    da sua loja, aumentando as suas vendas.
                </p>

                <a
                class="c-btn-pattern c-btn-icon-arrow u-border-color-primary relative inline-block font-bold uppercase u-color-folk-white hover:u-color-folk-primary u-bg-folk-primary hover:u-bg-folk-none mt-12 py-5 pl-7 pr-28"
                href="#">
                    peça a sua
                </a>
            </div>

            <div class="w-full lg:w-6/12 order-1 lg:order-2 flex justify-center lg:justify-start items-end px-4">
                <img
                src="{{ asset( 'images/machine-illustration-1.png' )}}"
                alt="Maquininha EBW">
            </div>
        </div>
    </div>
</section>
<!-- end machine -->

<!-- mvv -->
@include( 'site.partials.mvv' )
<!-- end mvv -->

<!-- portal -->
<section class="l-portal py-32">

    <div class="container mx-auto px-4">

        <div class="flex">

            <div class="w-full md:w-8/12 lg:w-4/12 md:ml-28">

                <h3 class="l-portal__title leading-12 md:leading-10 relative font-bold u-color-folk-white pb-10 mb-16">
                    Portal do <br>
                    Empreendedor
                </h3>

                <p class="l-portal__text font-bold u-color-folk-white">
                    Conteúdos em série, <br>
                    formatados em pequenos <br>
                    treinamentos essenciais <br>
                    para o empreendedor <br>
                    superar os desafios <br>
                    e turbinar seu negócio.

                    <br>
                    <br>

                    100% gratuito.
                </p>

                <a
                class="c-btn-pattern c-btn-icon-arrow u-border-color-primary relative inline-block font-bold uppercase u-color-folk-white hover:u-color-folk-primary u-bg-folk-primary hover:u-bg-folk-none mt-12 py-5 pl-7 pr-16 md:pr-28"
                href="#">
                    portal do empreendedor
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end portal -->

@endsection

