@extends( 'site.layouts.master ' )

@section('title', 'Peça sua maquininha')

@section( 'content' )

<section class="l-machine pt-10 2xl:pt-20 pb-44"><!-- pt-12 -->

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap">

            <div class="w-full mb-16">

                <p class="l-machine__title font-bold text-center u-color-folk-purple">
                    A maquininha <span class="u-color-folk-cyan">ideal</span> para o micro, pequeno, médio e gigante.
                </p>
            </div>

            <div class="w-full">

                <div class="flex flex-wrap">

                    <div class="w-full md:w-6/12 lg:w-3/12 flex items-end px-4">

                        <div class="l-machine__card">

                            <div class="l-machine__card-img flex justify-center mb-4">

                                <img
                                src="{{ asset( 'images/machine-enjoy.png' ) }}"
                                alt="Passou Ganhou Enjoy">
                            </div>

                            <div class="l-machine__card-body">

                                <h4 class="l-machine__card-title font-bold text-center u-color-folk-cyan">
                                    <span class="u-color-folk-purple">Enjoy</span>
                                </h4>

                                <p class="text-sm font-normal">
                                    • Maquininha leve e portátil <br>
                                    • Não precisa de celular <br>
                                    • Bateria de longa duração <br> 
                                    • Envio de comprovante por SMS.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-6/12 lg:w-3/12 flex items-end px-4">

                        <div class="l-machine__card">

                            <div class="l-machine__card-img flex justify-center mb-4">

                                <img
                                src="{{ asset( 'images/machine-revolution.png' ) }}"
                                alt="Passou Ganhou Revolution">
                            </div>

                            <div class="l-machine__card-body">

                                <h4 class="l-machine__card-title font-bold text-center u-color-folk-cyan">
                                    <span class="u-color-folk-purple">Revolution</span>
                                </h4>

                                <p class="text-sm font-normal">
                                    • Imprime comprovante <br>
                                    • Permite pagamento por aproximacão <br>
                                    • Portabilidade absoluta: ideal para pagamento dentro e fora do estabelecimento.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-6/12 lg:w-3/12 flex items-end px-4">

                        <div class="l-machine__card">

                            <div class="l-machine__card-img flex justify-center mb-4">

                                <img
                                src="{{ asset( 'images/machine-ultra.png' ) }}"
                                alt="Passou Ganhou Ultra">
                            </div>

                            <div class="l-machine__card-body">

                                <h4 class="l-machine__card-title font-bold text-center u-color-folk-cyan">
                                    <span class="u-color-folk-purple">Ultra</span>
                                </h4>

                                <p class="text-sm font-normal">
                                    • Design compacto e moderno <br>
                                    • Permite pagamento por QRCode e aproximação <br>
                                    • Imprime comprovante com muita agilidade <br>
                                    • Conectividade total: 4G, Wi-Fi <br>
                                    e Bluetooth.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-6/12 lg:w-3/12 flex items-end px-4">

                        <div class="l-machine__card">

                            <div class="l-machine__card-img flex justify-center mb-4">

                                <img
                                src="{{ asset( 'images/machine-tef.png' ) }}"
                                alt="Passou Ganhou TEF">
                            </div>

                            <div class="l-machine__card-body">

                                <h4 class="l-machine__card-title font-bold text-center u-color-folk-cyan">
                                    <span class="u-color-folk-purple">TEF</span>
                                </h4>

                                <p class="u-font-size-12 font-normal text-center">
                                    Utilizado para Transferência Eletrônica
                                    de Fundos (TEF) ou soluções de
                                    pagamentos proprietárias como
                                    bancos ou cooperativas.
                                    Processador de alta performance
                                    Leitores de tarja magnéticos
                                    e smart card
                                    Possui opção de cabo
                                    DUAL (SERIAL + USB)
                                    Desenvolvida com a mais alta
                                    tecnologia para garantir total
                                    segurança e confiabilidade ao cliente.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap">

            <div class="w-full">

                <div class="flex justify-center">

                    <div class="w-10/12 md:w-4/12 lg:w-4/12 mt-10 mb-4">
                        <a 
                        class="c-btn-pattern c-btn-pattern__arrow-right border-0 relative block u-font-size-18 font-bold uppercase u-color-folk-purple hover:u-color-folk-cyan u-bg-folk-cyan hover:u-bg-folk-purple py-4 px-12" 
                        href="/cadastro">
                            peça sua maquininha
                        </a>
                    </div>
                </div>

                <p class="u-font-size-18 font-bold text-center my-4">
                    Conheça todas as soluções de pagamento da EBW Bank
                </p>

                <p class="text-center">
                    <strong>EBW Pay:</strong> A solução de pagamentos digitais da EBW Bank <br>
                    <strong>Link de Pagamento:</strong> Para você conseguir vender on-line, com segurança <br>
                    <strong>Pague com QRCode:</strong> Receba dos seus clientes com rapidez e segurança
                </p>

                <div class="flex justify-center">

                    <div class="w-10/12 md:w-4/12 lg:w-4/12 mt-10 mb-4">
                        <a 
                        class="c-btn-pattern c-btn-pattern__arrow-right border-0 relative block u-font-size-18 font-bold uppercase u-color-folk-purple hover:u-color-folk-cyan u-bg-folk-cyan hover:u-bg-folk-purple py-4 px-12" 
                        href="{{ route('conheca-ebw') }}"
                        target="_blank"
                        rel="noreferrer noopener">
                            CONHEÇA A EBW BANK
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection