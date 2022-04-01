@extends( 'site.layouts.master ' )



@section( 'content' )

    <!-- banner -->
    <div class="bg-ebw-grey relative min-h-screen xl:pt-72 md:pt-56 pt-40 pb-10 bg-no-repeat bg-cover bg-center" style="background-image: url({{ asset('images/banner-a-ebw.jpg') }})">
        <div class="shadow-custom absolute top-0 left-0 right-0 w-full"></div>
        <div class="container mx-auto px-5">
            <ul>
                <li class="text-ebw-dark-grey xl:text-5xl lg:text-4xl md:text-3xl sm:text-2xl text-xl leading-tight xl:mb-10 md:mb-6 mb-4">Diferente na forma de <span class="font-bold">olhar, perceber e pensar.</span></li>
                <li class="text-ebw-dark-grey xl:text-5xl lg:text-4xl md:text-3xl sm:text-2xl text-xl leading-tight xl:mb-10 md:mb-6 mb-4">Diferente na forma de <span class="font-bold">se relacionar.</span></li>
                <li class="text-ebw-dark-grey xl:text-5xl lg:text-4xl md:text-3xl sm:text-2xl text-xl leading-tight xl:mb-10 md:mb-6 mb-4">Diferente na forma de <span class="font-bold">ser e fazer.</span></li>
                <li class="text-ebw-dark-grey xl:text-5xl lg:text-4xl md:text-3xl sm:text-2xl text-xl leading-tight xl:mb-10 md:mb-6 mb-4">Diferente na forma de <span class="font-bold">exister.</span></li>
                <li class="text-ebw-dark-grey xl:text-5xl lg:text-4xl md:text-3xl sm:text-2xl text-xl leading-tight xl:mb-10 md:mb-6 mb-4"><span class="font-bold">EBW Bank é assim, diferente.</span></li>
            </ul>
        </div>
    </div>
    <!-- end banner -->

    <!-- manifest -->
    <section>
        <div class="container mx-auto px-5 pt-20 pb-16">
            <h1 class="text-ebw-fourth uppercase font-bold xl:text-5xl lg:text-4xl text-3xl text-center mb-6">Manifesto</h1>
            <p class="first-letter:pl-16 text-black md:text-2xl text-xl leading-normal mb-5 tracking-wide">O mundo está diferente. Os laços de amizade se tornaram mais forte e compassivos. A população mundial provou mais uma vez em meio às crises, o quanto somos abundantes no ato de servir, ajudar e contribuir. Provamos que a nossa maior riqueza está em amar o próximo independente de suas diferenças.</p>
            <p class="first-letter:pl-16 text-black md:text-2xl text-xl leading-normal mb-5 tracking-wide">Na verdade, percebemos que as nossas diferenças trouxeram união, compaixão e muita força para superar as dificuldades e as barreiras que todos nós temos enfrentado nesses últimos tempos. Nossa geração está diferente, porque decidimos fazer a diferença na vida do nosso próximo. E mesmo estando distante de muitos, estamos mais unidos do que nunca. Respeitar as diferenças nos torna pessoas melhores, é isso que nos move, é isso que move o mundo.</p>
        </div>
    </section>
    <!-- end manifest -->

    <!-- mvv -->
    {{-- @include( 'site.partials.mvv' ) --}}
    <!-- end mvv -->

    <!-- about -->
    {{-- <section class="l-about py-12">

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
    </section> --}}
    <!-- end about -->

    <!-- member -->
    <section class="bg-ebw-light-grey pt-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center">
                <div class="2xl:w-10/12 w-full border-b-2 u-border-color-medium-light-gray last:u-border-bottom-none py-12">
                    <div class="flex flex-wrap">
                        <div class="xl:w-6/12 lg:w-7/12 w-full mb-8 lg:mb-0 px-4 ">
                            <div class="l-member__card flex justify-center flex-wrap">

                                <div class="l-member__card-content flex flex-col px-4">
                                    <div class="l-member__card-img flex justify-center">
                                        <img 
                                        class=""
                                        src="{{ asset( 'images/magno.png' ) }}"
                                        alt="Magno Sipaúba">
                                    </div>
                                    <div class="l-member__card-body mt-6">
                                        <h3 class="text-black uppercase tracking-wide sm:text-2xl text-xl font-bold text-center leading-none mb-2">
                                            Magno Sipaúba
                                        </h3>

                                        <p class="font-bold sm:text-2xl text-xl text-ebw-fourth text-center leading-none">
                                            CEO & Fundador da EBW Bank  
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-end sm:pl-6 sm:pt-0 pt-6 pb-1">
                                    <a
                                    class="bg-ebw-primary w-16 h-16 rounded-full flex justify-center items-center hover:bg-opacity-80 transition-colors duration-150"
                                    href="https://www.linkedin.com/in/magnosipauba/"
                                    target="_blank"
                                    rel="noreferrer noopener">
                                        <i class="fab fa-linkedin-in text-4xl text-ebw-light-grey" aria-hidden="true"></i>
                                        <span class="invisible absolute">Linkedin</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="2xl:w-1/3 xl:w-4/12 lg:w-5/12 w-full md:pr-12 my-4 pl-4">

                            <ul class="u-list-style-outside">
                                <li class="sm:text-xl text-lg text-black mb-4 leading-tight">
                                    Fundador da EBW Bank;
                                </li>

                                <li class="sm:text-xl text-lg text-black mb-4 leading-tight">
                                    Consultor Conselheiro da Harvard Business Review;
                                </li>

                                <li class="sm:text-xl text-lg text-black mb-4 leading-tight">
                                    Mais de 20 anos de experiência em gestão e consultoria empresarial;
                                </li>

                                <li class="sm:text-xl text-lg text-black mb-4 leading-tight">
                                    Escritor do 2° livro mais vendido da Amazon.com em 2016, o best seller "Como Vender na Crise e Aumentar Seus Lucros”;
                                </li>

                                <li class="sm:text-xl text-lg text-black mb-4 leading-tight">
                                    Doutor Honoris Causa pela Emill Brunner University, Florida, USA;
                                </li>

                                <li class="sm:text-xl text-lg text-black mb-4 leading-tight">
                                    MBA em Comportamento Organizacional pela Sicoaching Delaware, USA.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="2xl:w-10/12 w-full border-b u-border-color-medium-light-gray last:u-border-bottom-none pt-20 pb-8">

                    <div class="flex flex-wrap">

                        <div class="xl:w-6/12 lg:w-7/12 w-full mb-8 lg:mb-0 px-4">

                            <div class="l-member__card flex justify-center">

                                <div class="l-member__card-content flex flex-col px-4">
                                    <div class="l-member__card-img flex justify-center">
                                        <img 
                                        class=""
                                        src="{{ asset( 'images/eduardo.png' ) }}"
                                        alt="Eduardo Furtado">
                                    </div>

                                    <div class="l-member__card-body mt-6">
                                        <p class="text-black uppercase tracking-wide sm:text-2xl text-xl  font-bold text-center leading-none mb-2">
                                           Eduardo Furtado
                                        </p>

                                        <p class="font-bold sm:text-2xl text-xl  text-ebw-fourth text-center leading-none">
                                            Vice-Presidente de Operações <br>
                                            da EBW Bank 
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-end pl-6 sm:pt-0 pt-6 pb-1">
                                    <a
                                    class="bg-ebw-primary w-16 h-16 rounded-full flex justify-center items-center hover:bg-opacity-80 transition-colors duration-150"
                                    href="https://www.linkedin.com/in/eduardo-furtado-b89279b3/?originalSubdomain=br"
                                    target="_blank"
                                    rel="noreferrer noopener">
                                        <i class="fab fa-linkedin-in text-4xl text-ebw-light-grey" aria-hidden="true"></i>
                                        <span class="invisible absolute">Linkedin</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="2xl:w-1/3 xl:w-4/12 lg:w-5/12 w-full md:pr-12 my-4 pl-4">

                            <ul class="u-list-style-outside">
                                <li class="sm:text-xl text-lg text-black mb-4 leading-tight">
                                    Vice-Presidente de Operações e Diretor Executivo da EBW Bank;
                                </li>

                                <li class="sm:text-xl text-lg text-black mb-4 leading-tight">
                                    Diretor Executivo da Sicoaching Brasil;
                                </li>

                                <li class="sm:text-xl text-lg text-black mb-4 leading-tight">
                                    Member of the Harvard Business Review Advisory Council/USA; <br>
                                </li>

                                <li class="sm:text-xl text-lg text-black mb-4 leading-tight">
                                    Analista Comportamental, com especialização em Comportamento Humano e Comportamento Organizacional;
                                </li>

                                <li class="sm:text-xl text-lg text-black mb-4 leading-tight">
                                    Coach Executivo e Life Coach, formado pelo ICI – Integrated Coaching Institute; certificado pelo ICF - International Coach Federation - Lexington, Kentucky, USA;
                                </li>

                                <li class="sm:text-xl text-lg text-black mb-4 leading-tight">
                                    Diretor executivo nas áreas comerciais, de planejamento estratégico, administrativa e financeira por 23 anos;
                                </li>

                                <li class="sm:text-xl text-lg text-black mb-4 leading-tight">
                                    Expermentor na Área de Gestão e Inovação;
                                </li>

                                <li class="sm:text-xl text-lg text-black mb-4 leading-tight">
                                    Pós-graduado em Administração e Marketing pelo IPAM (Portugal).
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end member -->

    <section class="py-16">
        <div class="container mx-auto px-5">
            <h2 class="2xl:text-6xl xl:text-5xl sm:text-4xl text-2xl text-ebw-red text-center leading-normal mb-10">Muito além do seu banco digital.<br>
               <span class="font-bold text-ebw-red">O banco parceiro do seu negócio</span>
            </h2>

            <div class="flex justify-center items-start xl:-mx-6 -mx-4 mb-10 flex-wrap">
                <div class="lg:w-1/3 xl:px-6 px-4 mb-6">
                    <h3 class="text-center font-bold text-black 2xl:text-3xl text-2xl mb-5 uppercase">Missão</h3>
                    <p class="text-center 2xl:text-2xl text-xl text-black leading-tight 2xl:px-10 xl:px-5">Contribuir para o desenvolvimento dos empreendedores e líderes de qualquer lugar do país e do mundo, oferendo soluções de ponta, com qualificação, orientação e foco no crescimento da economia.</p>
                </div>
                <div class="lg:w-1/3 xl:px-6 px-4 mb-6">
                    <h3 class="text-center font-bold text-black 2xl:text-3xl text-2xl mb-5 uppercase">Visão</h3>
                    <p class="text-center 2xl:text-2xl text-xl text-black leading-tight 2xl:px-10 xl:px-5">Ser uma empresa referência e reconhecida pela excelência dos serviços prestados aos empreendedores, posicionando-se sempre entre as principais fintechs mundiais.</p>
                </div>
                <div class="lg:w-1/3 xl:px-6 px-4 mb-6">
                    <h3 class="text-center font-bold text-black 2xl:text-3xl text-2xl mb-5 uppercase">Valores</h3>
                    <p class="text-center 2xl:text-2xl text-xl text-black leading-tight 2xl:px-10 xl:px-5">Ter preferência do cliente empreendedor, baseada em uma conduta firmemente focada na éticae transparência. Nosso gerenciamento deve ser em equipe.</p>
                </div>
            </div>
            <div>
                <h3 class="text-center font-bold text-black 2xl:text-3xl text-2xl mb-5 uppercase">Propósito</h3>
                <p class="text-center text-ebw-red leading-tight 2xl:text-5xl sm:text-4xl text-2xl">
                    <span class="font-bold text-ebw-red">Apoiar o empreendedor</span>, estimuar o<br class="hidden sm:block">empreendedorismo e <span class="font-bold text-ebw-red">promover o progresso da nação.</span>
                </p>
            </div>
        </div>
    </section>

@endsection