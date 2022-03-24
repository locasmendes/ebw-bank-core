@extends( 'site.layouts.master ' )

@section( 'content' )

<!-- banner -->
<section 
class="l-mini-banner relative flex justify-center items-center"
style="background-image: url( {{ asset( 'images/single-banner.png' ) }})">

    <div class="container relative mx-auto px-4">

        <div 
        class="flex flex-wrap justify-center rellax"
        data-rellax-speed="2">

            <div 
            class="w-10/12 flex justify-center mt-20">

                <div 
                class="c-btn-pattern relative inline-block u-font-size-8 font-bold text-center uppercase u-color-folk-white py-5 px-12"
                style="border-color:#008A73;background-color:#008A73">
                    liderança
                </div>
            </div>

            <div class="w-10/12 mt-5">

                <p class="l-mini-banner__title font-bold text-center text-white">
                    As práticas essenciais para você fazer uma <br>
                    gestão simplificada e eficiente
                </p>

                <div class="flex justify-center mt-5">
                    <p class="flex flex-col text-center px-5">
                        <span class="u-font-size-8 u-font-weight-medium uppercase u-color-folk-white">tempo est.</span>
                        <span class="u-font-size-15 font-bold u-color-folk-white">2 horas</span>
                    </p>

                    <p class="border-l-2 border-r-2 flex flex-col text-center px-5">
                        <span class="u-font-size-8 u-font-weight-medium uppercase u-color-folk-white">dificuldade</span>
                        <span class="u-font-size-15 font-bold u-color-folk-white">Básico</span>
                    </p>

                    <p class="flex flex-col text-center px-5">
                        <span class="u-font-size-8 u-font-weight-medium uppercase u-color-folk-white">aulas</span>
                        <span class="u-font-size-15 font-bold u-color-folk-white">10</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- hidden -->
<section class="l-single-content hidden py-4">

    <div class="container mx-auto px-4">

        <div class="flex -mx-4">

            <div class="w-full px-4">

                <p class="u-font-size-14 font-regular uppercase mb-4">                    
                    conteúdo deste curso
                </p>

                <div class="l-single-content__box relative">

                    <div class="l-single-content__item relative flex justify-center items-center u-bg-folk-white p-3 pr-8 js-single-content-item-current">
                        <p class="l-single-content__text font-bold">
                            1 - Gestão básica para o início de qualquer negócio
                        </p>
                    </div>

                    <div class="l-single-content__list-topic absolute flex flex-wrap justify-center items-center u-bg-folk-white p-4 js-single-content-list-topic">
                        <a 
                        class="font-bold p-3"
                        href="#">
                            1 - Gestão básica para o início de qualquer negócio
                        </a>

                        <a 
                        class="font-bold p-3"
                        href="#">
                            2 - Gestão básica para o início de qualquer negócio
                        </a>

                        <a 
                        class="font-bold p-3"
                        href="#">
                            3 - Gestão básica para o início de qualquer negócio
                        </a>

                        <a 
                        class="font-bold p-3"
                        href="#">
                            4 - Gestão básica para o início de qualquer negócio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>
<!-- end hidden -->

<section class="l-single">

    <div class="container max-w-full mx-auto">

        <div class="flex flex-wrap justify-center">

            <!-- hidden -->
            <div class="w-4/12 hidden flex-wrap flex-col items-end u-bg-folk-light-gray pl-4">

                <div class="w-6/12">
                    
                    <div class="l-single__topic p-8">
                        <p class="u-font-size-13 u-font-weight-medium">
                            Plano de treinamento
                        </p>
                    </div>

                    <!-- loop -->
                    <div class="l-single__topic p-8">

                        <p 
                        class="u-font-size-15 font-bold"
                        style="color:#008A73">
                            .01
                        </p>

                        <h3 class="leading-5 font-bold">
                            Gestão básica <br>
                            para o ínicio <br>
                            de qualquer <br>
                            negócio
                        </h3>
                    </div>
                    <!-- end loop -->

                    <div class="l-single__topic active p-8">

                        <p 
                        class="u-font-size-15 font-bold"
                        style="color:#008A73">
                            .02
                        </p>

                        <h3 class="leading-5 font-bold">
                            Gestão <br>
                            estratégica
                        </h3>
                    </div>

                    <div class="l-single__topic p-8">

                        <p 
                        class="u-font-size-15 font-bold"
                        style="color:#008A73">
                            .03
                        </p>

                        <h3 class="leading-5 font-bold">
                            Gestão <br>
                            de processos
                        </h3>
                    </div>

                    <div class="l-single__topic p-8">

                        <p 
                        class="u-font-size-15 font-bold"
                        style="color:#008A73">
                            .04
                        </p>

                        <h3 class="leading-5 font-bold">
                            Liderança <br>
                            responsável
                        </h3>
                    </div>

                    <div class="l-single__topic p-8">

                        <p 
                        class="u-font-size-15 font-bold"
                        style="color:#008A73">
                            .05
                        </p>

                        <h3 class="leading-5 font-bold">
                            Motive seus <br>
                            colaboradores
                        </h3>
                    </div>

                    <div class="l-single__topic p-8">

                        <p 
                        class="u-font-size-15 font-bold"
                        style="color:#008A73">
                            .06
                        </p>

                        <h3 class="leading-5 font-bold">
                            Estabeleça <br>
                            metas
                        </h3>
                    </div>

                    <div class="l-single__topic p-8">

                        <p 
                        class="u-font-size-15 font-bold"
                        style="color:#008A73">
                            .07
                        </p>

                        <h3 class="leading-5 font-bold">
                            Equipe <br>
                            integrada
                        </h3>
                    </div>

                    <div class="l-single__topic p-8">

                        <p 
                        class="u-font-size-15 font-bold"
                        style="color:#008A73">
                            .08
                        </p>

                        <h3 class="leading-5 font-bold">
                            Gestão <br>
                            estratégica 
                        </h3>
                    </div>
                </div>
            </div>
            <!-- end hidden -->

            <div class="w-full lg:w-8/12 u-bg-folk-white px-4">

                <div class="w-full u-bg-folk-white pt-12 lg:px-4">
                    
                    <img
                    class="w-full"
                    src="{{ asset( 'images/background-example.jpg' ) }}"
                    alt="Imagem de exemplo">

                    <h2 class="l-single__title leading-7 font-bold mt-4">
                        Nome do post 01
                    </h2>

                    <p class="u-font-size-14 mb-8">
                        <span class="font-semibold">Categoria:</span> Categoria
                    </p>

                    <p class="u-font-size-12 u-font-family-open-sans mb-8">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dapibus faucibus lectus vitae
                        rhoncus. Morbi eu mollis dolor. Integer vulputate vitae lorem sit amet euismod. Vivamus dapibus
                        justo ac mauris dictum, lobortis porta turpis sollicitudin. Donec sit amet condimentum velit, sed
                        bibendum lorem. Proin tincidunt quam a lacus ultrices ultrices. Suspendisse facilisis vehicula
                        sapien nec elementum. Nulla imperdiet quis lorem vel interdum. Sed facilisis viverra tristique.
                        Donec porta nisl ut accumsan blandit. Mauris imperdiet porttitor ornare. Aenean quis quam sit
                        amet dui tempus luctus. Suspendisse potenti. Ut in pellentesque leo. Nulla malesuada varius libero
                        eget porttitor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus.

                        <br><br>

                        Proin diam massa, consequat facilisis varius eget, venenatis a nibh. Phasellus hendrerit volutpat
                        nulla. Integer dignissim placerat cursus. Ut elementum efficitur massa, vitae vulputate magna
                        venenatis et. Nam tempus ultrices nisi tempus consequat. Nam sit amet pharetra mi, vel luctus
                        dolor. Fusce sollicitudin finibus arcu, non feugiat eros convallis ut. Morbi luctus ipsum sed erat
                        consectetur euismod. Curabitur luctus quam justo, a auctor lectus sagittis laoreet. Sed at semper
                        leo. Sed congue turpis ac odio venenatis, convallis condimentum sapien bibendum.
                    </p>

                    

                    <p class="u-font-size-12 u-font-family-open-sans mt-8">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dapibus faucibus lectus vitae
                        rhoncus. Morbi eu mollis dolor. Integer vulputate vitae lorem sit amet euismod. Vivamus dapibus
                        justo ac mauris dictum, lobortis porta turpis sollicitudin. Donec sit amet condimentum velit, sed
                        bibendum lorem. Proin tincidunt quam a lacus ultrices ultrices. Suspendisse facilisis vehicula
                        sapien nec elementum. Nulla imperdiet quis lorem vel interdum. Sed facilisis viverra tristique.
                        Donec porta nisl ut accumsan blandit. Mauris imperdiet porttitor ornare. Aenean quis quam sit
                        amet dui tempus luctus. Suspendisse potenti. Ut in pellentesque leo. Nulla malesuada varius libero
                        eget porttitor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus.

                        <br><br>

                        Proin diam massa, consequat facilisis varius eget, venenatis a nibh. Phasellus hendrerit volutpat
                        nulla. Integer dignissim placerat cursus. Ut elementum efficitur massa, vitae vulputate magna
                        venenatis et. Nam tempus ultrices nisi tempus consequat. Nam sit amet pharetra mi, vel luctus
                        dolor. Fusce sollicitudin finibus arcu, non feugiat eros convallis ut. Morbi luctus ipsum sed erat
                        consectetur euismod. Curabitur luctus quam justo, a auctor lectus sagittis laoreet. Sed at semper
                        leo. Sed congue turpis ac odio venenatis, convallis condimentum sapien bibendum.
                    </p>

                    <div class="border-b u-border-color-gray my-5"></div>
                </div>
                
                <!-- hidden -->
                <div class="w-full md:w-9/12 hidden flex-col md:flex-row justify-between items-center md:items-start my-12 pl-4 md:pl-12 pr-4">

                    <div class="my-4 md:my-0">
                        <p class="u-font-size-13 u-font-weight-medium text-center md:text-left md:pl-8">
                            Voltar conteúdo
                        </p>

                        <a
                        class="l-single__prev relative font-bold pl-8"
                        href="#">
                            <span class="u-font-size-15" style="color:#008A73">.01</span> Gestão básica para o...
                        </a>
                    </div>

                    <div class="my-4 md:my-0">
                        <p class="u-font-size-13 u-font-weight-medium text-center md:text-right md:pr-8">
                            Próximo conteúdo
                        </p>

                        <a
                        class="l-single__next relative font-bold pr-8"
                        href="#">
                            <span class="u-font-size-15" style="color:#008A73">.03</span> Gestão de processos
                        </a>
                    </div>
                </div>
                <!-- end hidden -->
            </div>
        </div>
    </div>
</section>

<!-- mvv -->
@include( 'site.partials.mvv' )
<!-- end mvv -->

@endsection