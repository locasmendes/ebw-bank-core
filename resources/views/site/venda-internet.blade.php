@extends( 'site.layouts.master' )

@section('title', 'Venda pela internet')

@section( 'content' )

    <div class="bg-ebw-grey flex relative h-screen sm:min-h-620px min-h-400px pt-20 pb-20 2xl:px-0 xl:px-8 lg:px-0 md:px-5 bg-no-repeat bg-cover bg-center" style="background-image: url({{ asset('images/banner-venda-internet.jpg') }})">
        <div class="shadow-custom absolute top-0 left-0 right-0 w-full sm:w-1/2"></div>
        <div class="flex flex-col justify-center mx-auto 2xl:px-20 sm:px-8 px-3 w-full 2xl:py-20 xl:pt-20">
            <div class="flex justify-end">
                <div class="2xl:w-1/2 xl:w-7/12 w-full">
                    <h1 class="text-right 2xl:text-6xl xl:text-5xl sm:text-4xl text-2xl text-black xl:leading-none sm:leading-none leading-none 2xl:mb-16 xl:mb-12 mb-10">
                        Venda na internet com<br>
                        <span class="font-bold">segurança, antifraude</span> e<br>
                        parcelamento em até <span class="font-bold 2xl:text-size-5.5 sm:text-6xl text-4xl">12x</span> 
                    </h1>
                    <p class="text-right text-black 2xl:text-3xl sm:text-2xl text-normal leading-tight 2xl:mb-32 xl:mb-20 mb-16"><b>EBW Pay</b> foi pensado e desenvolvido<br>para o micro e pequeno empreendedor</p>
                    <div class="flex justify-center">
                        <a href="{{ route('pre-registratation') }}" class="shadow-custom-small outline-none c-btn-pattern sm:text-xl text-lg c-btn-icon-arrow bg-ebw-primary border-ebw-primary border-2 relative inline-block font-bold uppercase text-white hover:text-ebw-primary bg-ebw hover:bg-transparent py-3 pl-10 sm:pr-28 pr-20 rounded-full">
                            Comece agora
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="pt-20">
        <div class="container mx-auto border-b-2 border-ebw-input pb-4 px-5">
            <div class="flex flex-wrap">
                <div class="2xl:w-1/3 lg:w-1/2 pt-8 2xl:px-0 md:px-10 sm:px-6 px-4 lg:mb-0 mb-16">
                    <h2 class="2xl:text-5xl md:text-4xl text-3xl font-bold tracking-wider font-poppins leading-tight mb-10">Tudo o que você precisa para empreender no universo digital.</h2>
                    <p class="font-poppins text-xl mb-6">Toda a nossa infraestrutura de processamento e captura de cartão permite que você faça suas vendas de forma segura e transparente, a partir de sua conta digital na EBW Bank.</p>
                    <p class="font-poppins text-xl mb-16">Você pode vender através do seu próprio site ou marketplace, por meio de uma integração simples e fácil de fazer.</p>
                    <div class="">
                        <a href="{{ route('pre-registratation') }}" class="shadow-none outline-none c-btn-pattern text-xl c-btn-icon-arrow bg-ebw-fourth border-ebw-fourth border-2 relative inline-block font-bold uppercase text-white hover:text-ebw-primary bg-ebw hover:bg-transparent py-4 pl-10 sm:pr-28 pr-20 rounded-full">
                            Comece agora
                        </a>
                    </div>
                </div>
                <div class="2xl:w-1/3 lg:w-1/2 2xl:ml-36 2xl:px-0 md:px-10 sm:px-6 px-4">
                    <div class="flex pb-16 flex-col sm:flex-row items-center border-b-2 border-ebw-input">
                        <div class="w-1/3">
                            <img class="sm:mb-0 mb-5" src="{{ asset('images/digital-icone-pagamento.png') }}" alt="Gere seu próprios links de pagamento">
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-2xl leading-tight mb-3">Gere seus próprios links de pagamento</h3>
                            <p class="font-poppins text-xl leading-tight">Enviar link de pagamento para receber parcelado, em até 12x com cartão de crédito</p>
                        </div>
                    </div>
                    <div class="flex pb-16 flex-col sm:flex-row items-center pt-12 border-b-2 border-ebw-input">
                        <div class="w-1/3">
                            <img class="sm:mb-0 mb-5" src="{{ asset('images/digital-icone-qrcode.png') }}" alt="Gere QR CODES para receber rapidamenteo">
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-2xl leading-tight mb-3">Gere QR CODES para receber rapidamente</h3>
                            <p class="font-poppins text-xl leading-tight">Pagar com QR Code para receber suas vendas com praticidade</p>
                        </div>
                    </div>
                    <div class="flex pb-16 flex-col sm:flex-row items-center pt-12">
                        <div class="w-1/3">
                            <img class="sm:mb-0 mb-5" src="{{ asset('images/digital-icone-receber.png') }}" alt="Gere QR CODES para receber rapidamente">
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-2xl leading-tight mb-3">Escolha quando quer receber</h3>
                            <p class="font-poppins text-xl leading-tight">Enviar link de pagamento para receber parcelado, em até 12x com cartão de crédito;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto pt-20 2xl:px-5 px-10 pb-12">
            <h2 class="font-poppins font-bold 2xl:text-5xl md:text-4xl text-3xl mb-12">Por que somos a melhor opção para o empreendedor?</h2>

            <div class="flex flex-wrap justify-between">

                <div class="w-full lg:w-1/2 my-7 flex justify-start even:justify-end">
                    <div class="xl:w-9/12 lg:w-10/12 w-full">
                        <img 
                        src="{{ asset( 'images/icon-team.png' ) }}"
                        alt="Equipe">
    
                        <p class="text-xl text-black font-poppins leading-snug mt-5">
                            Porque temos uma equipe de excelência, com 
                            mais de 20 anos de expertise, experiência em 
                            empresas multinacionais e especialização 
                            técnica acima do padrão do mercado.
                        </p>

                    </div>
                </div>

                <div class="w-full lg:w-1/2 my-7 flex justify-start even:justify-end">
                    <div class="xl:w-9/12 lg:w-10/12 w-full">
                        <img 
                        src="{{ asset( 'images/icon-consultants.png' ) }}"
                        alt="Consultores">

                        <p class="text-xl text-black font-poppins leading-snug mt-5">
                            Porque temos consultores treinados em estratégias 
                            de mercado, prontos para a dar a consultoria que 
                            você precisa para fazer o seu negócio prosperar.
                        </p>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 my-7 flex justify-start even:justify-end">
                    <div class="xl:w-9/12 lg:w-10/12 w-full">
                        <img 
                        src="{{ asset( 'images/icon-undertake.png' ) }}"
                        alt="Empreender">

                        <p class="text-xl text-black font-poppins leading-snug mt-5">
                            Porque Empreender é fazer a diferença.
                            E de fazer a diferença, nós entendemos!
                        </p>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 my-7 flex justify-start even:justify-end">
                    <div class="xl:w-9/12 lg:w-10/12 w-full">
                        <img 
                        src="{{ asset( 'images/icon-technology.png' ) }}"
                        alt="Tecnologia">

                        <p class="text-xl text-black font-poppins leading-snug mt-5">
                            Porque temos a melhor infraestrutura tecnológica.
                        </p>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 my-7 flex justify-start even:justify-end">
                    <div class="xl:w-9/12 lg:w-10/12 w-full">
                        <img 
                        class=""
                        src="{{ asset( 'images/icon-solutions.png' ) }}"
                        alt="Soluções de pagamentos digitais">

                        <p class="text-xl text-black font-poppins leading-snug mt-5">
                            Porque temos soluções de pagamentos 
                            digitais e as mais modernas maquininhas, 
                            com taxas negociáveis.
                        </p>
                    </div>
                </div>
            </div> 
        </div>
    </section>
@endsection

