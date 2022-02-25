@extends( 'site.layouts.master ' )

@section( 'content' )

<!-- banner -->
<section 
class="l-mini-banner relative flex justify-center items-center"
style="background-image: url( {{ asset( 'images/portal-banner.png' ) }} )">

    <div class="container relative mx-auto px-4">

        <div class="flex flex-wrap justify-center">

            <div 
            class="w-full md:w-10/12 rellax mt-20 pb-20 md:pb-0" 
            data-rellax-speed="2">

                <p class="l-mini-banner__text font-medium text-center u-color-folk-primary">
                    Nosso Propósito:
                </p>

                <p class="l-mini-banner__title leading-10 font-regular text-center text-white mt-5">
                    Apoiar o empreendedor, <br>
                    estimular o empreendedorismo <br>
                    e <span class="font-medium text-white">promover o progresso da nação.</span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- mvv -->
@include( 'site.partials.mvv' )
<!-- end mvv -->

<!-- about -->
<section class="l-about py-12">

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center">

            <div class="w-full md:w-10/12">

                <h3 class="l-about__title font-bold mb-12">
                    Por que somos a melhor <br>
                    opção  para o empreendedor?
                </h3>

                <div class="flex flex-wrap justify-between">

                    <div class="w-full md:w-5/12 my-7 px-4">

                        <img 
                        class=""
                        src="{{ asset( 'images/icon-team.png' ) }}"
                        alt="Equipe">

                        <p class="u-font-size-14 font-medium mt-5">
                            Porque temos uma equipe de excelência, com 
                            mais de 20 anos de expertise, experiência em 
                            empresas multinacionais e especialização 
                            técnica acima do padrão do mercado.
                        </p>
                    </div>

                    <div class="w-full md:w-5/12 my-7 px-4">

                        <img 
                        class=""
                        src="{{ asset( 'images/icon-consultants.png' ) }}"
                        alt="Consultores">

                        <p class="u-font-size-14 font-medium mt-5">
                            Porque temos consultores treinados em estratégias 
                            de mercado, prontos para a dar a consultoria que 
                            você precisa para fazer o seu negócio prosperar.
                        </p>
                    </div>

                    <div class="w-full md:w-5/12 my-7 px-4">

                        <img 
                        class=""
                        src="{{ asset( 'images/icon-undertake.png' ) }}"
                        alt="Empreender">

                        <p class="u-font-size-14 font-medium mt-5">
                            Porque Empreender é fazer a diferença.
                            E de fazer a diferença, nós entendemos!
                        </p>
                    </div>

                    <div class="w-full md:w-5/12 my-7 px-4">

                        <img 
                        class=""
                        src="{{ asset( 'images/icon-technology.png' ) }}"
                        alt="Tecnologia">

                        <p class="u-font-size-14 font-medium mt-5">
                            Porque temos a melhor infraestrutura tecnológica.
                        </p>
                    </div>

                    <div class="w-full md:w-5/12 my-7 px-4">

                        <img 
                        class=""
                        src="{{ asset( 'images/icon-solutions.png' ) }}"
                        alt="Soluções de pagamentos digitais">

                        <p class="u-font-size-14 font-medium mt-5">
                            Porque temos soluções de pagamentos 
                            digitais e as mais modernas maquininhas, 
                            com taxas negociáveis.
                        </p>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</section>
<!-- end about -->

<!-- member -->
<section class="l-member py-12">
    
    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center">

            <div class="w-full md:w-10/12 border-b u-border-color-medium-light-gray last:u-border-bottom-none py-12">

                <div class="flex flex-wrap">

                    <div class="w-full md:w-6/12 my-4 md:my-0 px-4">

                        <div class="l-member__card flex justify-center">

                            <div class="l-member__card-content flex flex-col px-4">
                                <div class="l-member__card-img flex justify-center">
                                    <img 
                                    class=""
                                    src="{{ asset( 'images/magno.png' ) }}"
                                    alt="Magno Sipaúba">
                                </div>

                                <div class="l-member__card-body mt-6">
                                    <p class="l-member__name font-bold text-center">
                                        Magno Sipaúba
                                    </p>

                                    <p class="font-medium text-center u-color-folk-primary">
                                        CEO & Fundador da EBW Bank  
                                    </p>
                                </div>
                            </div>

                            <div class="l-member__card-social flex items-end px-4">
                                <a
                                class="l-member__card-link u-icon__brands u-icon__linkedin u-font-size-0 before::u-font-size-24 u-color-folk-primary hover:u-color-folk-white hover:u-bg-folk-primary"
                                href="#"
                                target="_blank"
                                rel="noreferrer noopener">
                                    Link do Linkedin
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-6/12 my-4 md:my-0 px-4">

                        <ul>
                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Fundador da EBW Bank;
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Consultor Conselheiro da
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Harvard Business Review;
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Mais de 20 anos de experiência
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                em gestão e consultoria empresarial;
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Escritor do 2° livro mais vendido da
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Amazon.com em 2016, o best seller "Como
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Vender na Crise e Aumentar Seus Lucros”;
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Doutor Honoris Causa pela Emill
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Brunner University, Florida, USA;
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                MBA em Comportamento Organizacional
                            </li>
                            
                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                pela Sicoaching Delaware, USA.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-10/12 border-b u-border-color-medium-light-gray last:u-border-bottom-none py-12">

                <div class="flex flex-wrap">

                    <div class="w-full md:w-6/12 my-4 md:my-0 px-4">

                        <div class="l-member__card flex justify-center">

                            <div class="l-member__card-content flex flex-col px-4">
                                <div class="l-member__card-img flex justify-center">
                                    <img 
                                    class=""
                                    src="{{ asset( 'images/eduardo.png' ) }}"
                                    alt="Eduardo Furtado">
                                </div>

                                <div class="l-member__card-body mt-6">
                                    <p class="l-member__name font-bold text-center">
                                        Magno Sipaúba
                                    </p>

                                    <p class="font-medium text-center u-color-folk-primary">
                                        Vice-Presidente de Operações <br>
                                        da EBW Bank 
                                    </p>
                                </div>
                            </div>

                            <div class="l-member__card-social flex items-end px-4">
                                <a
                                class="l-member__card-link u-icon__brands u-icon__linkedin u-font-size-0 before::u-font-size-24 u-color-folk-primary hover:u-color-folk-white hover:u-bg-folk-primary"
                                href="#"
                                target="_blank"
                                rel="noreferrer noopener">
                                    Link do Linkedin
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-6/12 my-4 md:my-0 px-4">

                        <ul>
                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Vice-Presidente de Operações e Diretor <br>
                                Executivo da EBW Bank;
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Diretor Executivo da Sicoaching Brasil; <br>
                                Member of the Harvard Business Review
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Advisory Council/USA; <br>
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Analista Comportamental, com especialização <br>
                                em Comportamento Humano e Comportamento <br>
                                Organizacional;
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Coach Executivo e Life Coach, formado pelo ICI – <br>
                                Integrated Coaching Institute; certificado pelo <br>
                                ICF - International Coach Federation - Lexington, 
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Kentucky, USA;
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Diretor executivo nas áreas comerciais, de <br>
                                planejamento estratégico, administrativa e <br>
                                financeira por 23 anos;
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Expermentor na Área de Gestão e Inovação;
                            </li>

                            <li class="u-font-size-14 font-medium u-list-style-outside mb-3">
                                Pós-graduado em Administração e Marketing <br>
                                pelo IPAM (Portugal).
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end member -->

@endsection