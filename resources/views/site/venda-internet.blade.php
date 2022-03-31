@extends( 'site.layouts.master' )

@section( 'content' )

    <div class="bg-ebw-grey relative pt-72 pb-20">
        <div class="shadow-custom absolute top-0 left-0 right-0 w-full sm:w-1/2"></div>
        <div class="container mx-auto px-5">
            <div class="flex justify-end">
                <div class="w-1/2">
                    <h1 class="font-poppins text-right text-5xl text-ebw-medium-grey leading-snug mb-8">
                        Venda na internet com<br>
                        <span class="font-poppins font-bold text-ebw-medium-grey">segurança, antifraude</span> e<br>
                        parcelamento em até 12x
                    </h1>
                    <p class="text-right text-black text-3xl leading-tight mb-8">EBW Pay foi pensado e desenvolvido<br>para o micro e pequeno empreendedor</p>
                    <div class="flex justify-end">
                        <a href="#" class="shadow-none outline-none c-btn-pattern text-xl c-btn-icon-arrow bg-ebw-primary border-ebw-primary border-2 relative inline-block font-bold uppercase text-white hover:text-ebw-primary bg-ebw hover:bg-transparent py-3 pl-10 pr-28 rounded-full">
                            Comece agora
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="pt-20">
        <div class="container mx-auto border-b-2 border-ebw-input pb-20">
            <div class="flex">
                <div class="w-1/3 pt-8">
                    <h2 class="text-5xl font-bold tracking-wider font-poppins leading-tight mb-10">Tudo o que você precisa para empreender no universo digital.</h2>
                    <p class="font-poppins text-xl mb-6">Toda a nossa infraestrutura de processamento e captura de cartão permite que você faça suas vendas de forma segura e transparente, a partir de sua conta digital na EBW Bank.</p>
                    <p class="font-poppins text-xl mb-16">Você pode vender através do seu próprio site ou marketplace, por meio de uma integração simples e fácil de fazer.</p>
                    <div class="">
                        <a href="#" class="shadow-none outline-none c-btn-pattern text-xl c-btn-icon-arrow bg-ebw-fourth border-ebw-fourth border-2 relative inline-block font-bold uppercase text-white hover:text-ebw-primary bg-ebw hover:bg-transparent py-4 pl-10 pr-28 rounded-full">
                            Comece agora
                        </a>
                    </div>
                </div>
                <div class="w-1/3 ml-36">
                    <div class="flex pb-16 border-b-2 border-ebw-input">
                        <div class="w-1/3">
                            <img src="{{ asset('images/digital-icone-pagamento.png') }}" alt="Gere seu próprios links de pagamento">
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-2xl leading-tight mb-3">Gere seus próprios links de pagamento</h3>
                            <p class="font-poppins text-xl leading-tight">Enviar link de pagamento para receber parcelado, em até 12x com cartão de crédito</p>
                        </div>
                    </div>
                    <div class="flex pb-16 pt-12 border-b-2 border-ebw-input">
                        <div class="w-1/3">
                            <img src="{{ asset('images/digital-icone-qrcode.png') }}" alt="Gere QR CODES para receber rapidamenteo">
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-2xl leading-tight mb-3">Gere QR CODES para receber rapidamente</h3>
                            <p class="font-poppins text-xl leading-tight">Pagar com QR Code para receber suas vendas com praticidade</p>
                        </div>
                    </div>
                    <div class="flex pb-16 pt-12">
                        <div class="w-1/3">
                            <img src="{{ asset('images/digital-icone-receber.png') }}" alt="Gere QR CODES para receber rapidamente">
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-2xl leading-tight mb-3">Escolha quando quer receber</h3>
                            <p class="font-poppins text-xl leading-tight">Enviar link de pagamento para receber parcelado, em até 12x com cartão de crédito;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto pt-20">
            <h2 class="font-poppins font-bold text-5xl mb-12">Por que somos a melhor opção para o empreendedor?</h2>

            <div class="flex flex-wrap justify-between">

                <div class="w-full sm:w-1/2 my-7 flex justify-start even:justify-end">
                    <div class="w-9g/12">
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

                <div class="w-full sm:w-1/2 my-7 flex justify-start even:justify-end">
                    <div class="w-9g/12">
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

                <div class="w-full sm:w-1/2 my-7 flex justify-start even:justify-end">
                    <div class="w-9g/12">
                        <img 
                        src="{{ asset( 'images/icon-undertake.png' ) }}"
                        alt="Empreender">

                        <p class="text-xl text-black font-poppins leading-snug mt-5">
                            Porque Empreender é fazer a diferença.
                            E de fazer a diferença, nós entendemos!
                        </p>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 my-7 flex justify-start even:justify-end">
                    <div class="w-9g/12">
                        <img 
                        src="{{ asset( 'images/icon-technology.png' ) }}"
                        alt="Tecnologia">

                        <p class="text-xl text-black font-poppins leading-snug mt-5">
                            Porque temos a melhor infraestrutura tecnológica.
                        </p>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 my-7 flex justify-start even:justify-end">
                    <div class="w-9g/12">
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

