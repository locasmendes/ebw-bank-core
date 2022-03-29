@extends( 'site.layouts.master ' )

@section( 'content' )

<!-- banner -->
{{-- <section 
class="l-mini-banner relative flex justify-center items-center"
style="background-image: url( {{ asset( 'images/portal-banner.png' ) }} )">

    <div class="container relative mx-auto px-4">

        <div class="flex flex-wrap justify-center">

            <div 
            class="w-10/12 rellax mt-20" 
            data-rellax-speed="2">

                <p class="l-mini-banner__title font-bold text-center text-white">
                    O único banco digital que além de resolver <br>
                    seus pagamentos ainda é parceiro <br>
                    na sua jornada como empreendedor.
                </p>

                <p class="l-mini-banner__text font-bold text-center mt-5">
                    Bem vindo ao Portal do Empreededor EBW Bank
                </p>
            </div>
        </div>
    </div>
</section> --}}
<div>
    <img src="{{ asset('images/banner-blog.jpg') }}" class="w-full" alt="Bem vindo ao BLOG do Empreendedorismo EBW Bank">
</div>
<!-- end banner -->

<section class="l-training py-16">

    <div>

        <div class="flex flex-wrap justify-center">

            <div class="w-6/12 mb-16">
                
                <h3 class="l-training__title font-bold text-center u-color-folk-primary">
                    Dezenas de treinamentos rápidos e conteúdos <br>
                    que vão turbinar você e seu negócio.
                </h3>
            </div>
        </div>

        <div class="flex flex-wrap justify-center">

            <!-- desktop -->
            <div class="w-10/12 lg:w-8/12 mb-16">

                <ul class="l-submenu">

                    <li 
                    class="l-submenu__item u-font-size-9 font-bold uppercase py-4 px-8 js-submenu-item"
                    style="border-color:#DD504D;color:#DD504D"
                    data-color="#DD504D"
                    data-value="all-categories">
                        todas as categorias
                    </li>

                    <!-- loop -->
                    @foreach( $categories as $category )
                        <li 
                        class="l-submenu__item u-font-size-9 font-bold uppercase py-4 px-8 js-submenu-item"
                        style="border-color:{{ $category[ 'category_color' ] }};color:{{ $category[ 'category_color' ] }}"
                        data-color="{{ $category[ 'category_color' ] }}"
                        data-value="{{ $category[ 'category_name' ] }}">
                            <!-- liderança -->
                            {{ $category[ 'category_name'] }}
                        </li>
                    @endforeach
                    <!-- end loop -->
                </ul>
            </div>
            <!-- end desktop -->

            <!-- mobile -->
            <div class="w-full hidden px-4">

                <ul class="l-submenu">
                    <li 
                    class="l-submenu__item u-font-size-9 font-bold uppercase py-4 px-8 js-submenu-item"
                    style="border-color:#DD504D;color:#DD504D"
                    data-color="#DD504D"
                    data-value="all-categories">
                        todas as categorias
                    </li>
                </ul>

                <!-- swiper -->
                <div class="swiper js-swiper-container-categories">

                    <div class="swiper-wrapper">    

                        <div class="swiper-slide">

                            <div 
                            class="l-submenu__item u-font-size-9 font-bold uppercase py-4 px-8 js-submenu-item"
                            style="border-color:#008A73;color:#008A73"
                            data-color="#008A73"
                            data-value="leadership">
                                liderança
                            </div>

                            <div 
                            class="l-submenu__item u-font-size-9 font-bold uppercase py-4 px-8 js-submenu-item"
                            style="border-color:#008A73;color:#008A73"
                            data-color="#008A73"
                            data-value="leadership">
                                liderança
                            </div>

                            <div 
                            class="l-submenu__item u-font-size-9 font-bold uppercase py-4 px-8 js-submenu-item"
                            style="border-color:#008A73;color:#008A73"
                            data-color="#008A73"
                            data-value="leadership">
                                liderança
                            </div>

                            <div 
                            class="l-submenu__item u-font-size-9 font-bold uppercase py-4 px-8 js-submenu-item"
                            style="border-color:#008A73;color:#008A73"
                            data-color="#008A73"
                            data-value="leadership">
                                liderança
                            </div>

                            <div 
                            class="l-submenu__item u-font-size-9 font-bold uppercase py-4 px-8 js-submenu-item"
                            style="border-color:#008A73;color:#008A73"
                            data-color="#008A73"
                            data-value="leadership">
                                liderança
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end swiper -->
            </div>
            <!-- end mobile -->
        </div>

        <div class="flex justify-center">

            <div class="w-full md:w-8/12 border-t u-border-color-gray pt-6 px-4">

                <div class="flex flex-wrap">

                    <!-- loop -->
                    @foreach( $courses as $course )
                        @foreach( $categories as $category )
                            @if( $course[ 'category_id' ] == $category[ 'id' ] )
                                @php $category_current = $category[ 'category_name' ] @endphp
                            @endif
                        @endforeach

                        <div 
                        class="l-training__posts w-full md:w-4/12 my-4 px-4 js-posts"
                        data-value="{{ $category_current }}">

                            <div class="l-training__card p-2">

                                <div class="l-training__card-img flex justify-center items-center">
                                    
                                    <img
                                    src="{{ asset( 'images/background-example.jpg' ) }}"
                                    alt="Imagem de exemplo">
                                </div>

                                <div class="l-training__card-body py-4">

                                    <h4 class="font-semibold">
                                        <!-- Nome do post -->
                                        {{ $course[ 'course_title' ] }}
                                    </h4>

                                    <p class="u-font-size-12 mb-2">
                                        <span class="font-semibold">Categoria: </span> {{ $category_current }}
                                    </p>

                                    <p class="u-font-size-12 mb-4">
                                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et est fringilla, aliquam ante nec, imperdiet eros. Suspendisse posuere tellus felis, ornare tincidunt purus gravida id [...] -->
                                        {{ $course[ 'course_description' ] }}
                                    </p>

                                    <a
                                    class="c-btn-pattern hover:u-opacity:08 u-border-color-primary inline-block u-font-size-9 font-bold uppercase text-white u-bg-folk-primary py-4 px-8"
                                    href="#">
                                        Ler mais
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- end loop -->

                    <!-- <div class="w-full md:w-4/12 my-4 px-4">

                        <div class="l-training__card p-2">

                            <div class="l-training__card-img flex justify-center items-center">
                                
                                <img
                                src="{{ asset( 'images/background-example.jpg' ) }}"
                                alt="Imagem de exemplo">
                            </div>

                            <div class="l-training__card-body py-4">

                                <h4 class="font-semibold">
                                    Nome do post
                                </h4>

                                <p class="u-font-size-12 mb-2">
                                    <span class="font-semibold">Categoria: </span> Liderança
                                </p>

                                <p class="u-font-size-12 mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et est fringilla, aliquam ante nec, imperdiet eros. Suspendisse posuere tellus felis, ornare tincidunt purus gravida id [...]
                                </p>

                                <a
                                class="c-btn-pattern hover:u-opacity:08 u-border-color-primary inline-block u-font-size-9 font-bold uppercase text-white u-bg-folk-primary py-4 px-8"
                                href="#">
                                    Ler mais
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-4/12 my-4 px-4">

                        <div class="l-training__card p-2">

                            <div class="l-training__card-img flex justify-center items-center">
                                
                                <img
                                src="{{ asset( 'images/background-example.jpg' ) }}"
                                alt="Imagem de exemplo">
                            </div>

                            <div class="l-training__card-body py-4">

                                <h4 class="font-semibold">
                                    Nome do post
                                </h4>

                                <p class="u-font-size-12 mb-2">
                                    <span class="font-semibold">Categoria: </span> Liderança
                                </p>

                                <p class="u-font-size-12 mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et est fringilla, aliquam ante nec, imperdiet eros. Suspendisse posuere tellus felis, ornare tincidunt purus gravida id [...]
                                </p>

                                <a
                                class="c-btn-pattern hover:u-opacity:08 u-border-color-primary inline-block u-font-size-9 font-bold uppercase text-white u-bg-folk-primary py-4 px-8"
                                href="#">
                                    Ler mais
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-4/12 my-4 px-4">

                        <div class="l-training__card p-2">

                            <div class="l-training__card-img flex justify-center items-center">
                                
                                <img
                                src="{{ asset( 'images/background-example.jpg' ) }}"
                                alt="Imagem de exemplo">
                            </div>

                            <div class="l-training__card-body py-4">

                                <h4 class="font-semibold">
                                    Nome do post
                                </h4>

                                <p class="u-font-size-12 mb-2">
                                    <span class="font-semibold">Categoria: </span> Liderança
                                </p>

                                <p class="u-font-size-12 mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et est fringilla, aliquam ante nec, imperdiet eros. Suspendisse posuere tellus felis, ornare tincidunt purus gravida id [...]
                                </p>

                                <a
                                class="c-btn-pattern hover:u-opacity:08 u-border-color-primary inline-block u-font-size-9 font-bold uppercase text-white u-bg-folk-primary py-4 px-8"
                                href="#">
                                    Ler mais
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- course hidden -->
        <div class="hidden flex-wrap justify-end">

            <div class="w-full md:w-10/12 border-t u-border-color-gray">

                <div class="flex flex-wrap">

                    <!-- loop -->
                    <div 
                    class="w-full border-b u-border-color-gray py-12 js-section-item"
                    data-value="finances">

                        <div class="flex flex-wrap">

                            <div class="w-full lg:w-4/12 py-5 px-4">

                                <div 
                                class="c-btn-pattern hover:u-opacity:08 inline-block u-font-size-9 font-bold uppercase text-white py-4 px-8" 
                                style="border-color:#37A1C7;background-color:#37A1C7">
                                    finanças
                                </div>

                                <h3 class="l-training__subtitle leading-8 font-bold mt-7">
                                    Tudo o que você <br>
                                    precisa para começar <br>
                                    a empreender <br>
                                    no universo digital.
                                </h3>

                                <div class="flex flex-wrap my-5">

                                    <div class="w-4/12 md:w-2/12 lg:w-4/12 border-r">
                                        <p class="u-font-size-9 u-font-weight-medium uppercase">
                                            tempo est.
                                        </p>
                                            
                                        <p class="u-font-size-18 font-bold">
                                            2 horas
                                        </p>                                        
                                    </div>

                                    <div class="w-4/12 md:w-2/12 lg:w-4/12 border-r flex flex-col items-center">
                                        <p class="u-font-size-9 u-font-weight-medium uppercase">
                                            dificuldade
                                        </p>

                                        <p class="u-font-size-18 font-bold">
                                            Básico
                                        </p>
                                    </div>

                                    <div class="w-4/12 md:w-2/12 lg:w-4/12 flex flex-col items-center">
                                        <p class="u-font-size-9 u-font-weight-medium uppercase">
                                            aulas
                                        </p>

                                        <p class="u-font-size-18 font-bold">
                                            10
                                        </p>
                                    </div>

                                    <div class="w-full md:w-4/12 lg:w-full mt-4 md:mt-0">
                                        <a
                                        class="font-bold hover:underline"
                                        href="#">
                                            Ver o treinamento completo >
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full lg:w-8/12 pl-4">

                                <!-- swiper -->
                                <div class="swiper swiper-container-training js-swiper-container-training">

                                    <div class="swiper-wrapper">
                                        
                                        <!-- loop -->
                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#37A1C7">
                                                        .01
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Conceitos <br>
                                                        gerais <br>
                                                        sobre <br>
                                                        finanças
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#37A1C7"></span>
                                            </div>
                                        </div>
                                        <!-- end loop -->

                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#37A1C7">
                                                        .02
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Tudo sobre <br>
                                                        emissão de <br>
                                                        notas
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#37A1C7"></span>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#37A1C7">
                                                        .03
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Como utilizar <br>
                                                        uma sistema <br>
                                                        digital para <br>
                                                        receber
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#37A1C7"></span>
                                            </div>
                                        </div>

                                         <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#37A1C7">
                                                        .04
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Como utilizar <br>
                                                        uma sistema <br>
                                                        digital para <br>
                                                        receber
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#37A1C7"></span>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#37A1C7">
                                                        .05
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Como utilizar <br>
                                                        uma sistema <br>
                                                        digital para <br>
                                                        receber
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#37A1C7"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end swiper -->
                            </div>
                        </div>
                    </div>

                    <div 
                    class="w-full border-b u-border-color-gray py-12 js-section-item"
                    data-value="management">

                        <div class="flex flex-wrap">

                            <div class="w-full lg:w-4/12 py-5 px-4">

                                <div 
                                class="c-btn-pattern hover:u-opacity:08 inline-block u-font-size-9 font-bold uppercase text-white py-4 px-8" 
                                style="border-color:#E75B4B;background-color:#E75B4B">
                                    gestão
                                </div>

                                <h3 class="l-training__subtitle leading-8 font-bold mt-7">
                                    As práticas essenciais
                                    para você fazer uma
                                    gestão simplificada
                                    e eficiente
                                </h3>

                                <div class="flex flex-wrap my-5">

                                    <div class="w-4/12 md:w-2/12 lg:w-4/12 border-r">
                                        <p class="u-font-size-9 u-font-weight-medium uppercase">
                                            tempo est.
                                        </p>
                                            
                                        <p class="u-font-size-18 font-bold">
                                            3 horas
                                        </p>                                        
                                    </div>

                                    <div class="w-4/12 md:w-2/12 lg:w-4/12 border-r flex flex-col items-center">
                                        <p class="u-font-size-9 u-font-weight-medium uppercase">
                                            dificuldade
                                        </p>

                                        <p class="u-font-size-18 font-bold">
                                            Intermediário
                                        </p>
                                    </div>

                                    <div class="w-4/12 md:w-2/12 lg:w-4/12 flex flex-col items-center">
                                        <p class="u-font-size-9 u-font-weight-medium uppercase">
                                            aulas
                                        </p>

                                        <p class="u-font-size-18 font-bold">
                                            15
                                        </p>
                                    </div>

                                    <div class="w-full md:w-4/12 lg:w-full mt-4 md:mt-0">
                                        <a
                                        class="font-bold hover:underline"
                                        href="#">
                                            Ver o treinamento completo >
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full lg:w-8/12 pl-4">

                                <!-- swiper -->
                                <div class="swiper swiper-container-training js-swiper-container-training">

                                    <div class="swiper-wrapper">
                                        
                                        <!-- loop -->
                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#E75B4B">
                                                        .01
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Gestão básica <br>
                                                        para o ínicio <br>
                                                        de qualquer <br>
                                                        negócio
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#E75B4B"></span>
                                            </div>
                                        </div>
                                        <!-- end loop -->

                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#E75B4B">
                                                        .02
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Gestão <br>
                                                        estratégica
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#E75B4B"></span>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#E75B4B">
                                                        .03
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Gerenciamento <br>
                                                        dos ativos <br>
                                                        da empresa
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#E75B4B"></span>
                                            </div>
                                        </div>

                                         <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#E75B4B">
                                                        .04
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Gerenciamento <br>
                                                        dos ativos <br>
                                                        da empresa
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#E75B4B"></span>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#E75B4B">
                                                        .05
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Gerenciamento <br>
                                                        dos ativos <br>
                                                        da empresa
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#E75B4B"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end swiper -->
                            </div>
                        </div>
                    </div>

                    <div 
                    class="w-full border-b u-border-color-gray py-12 js-section-item"
                    data-value="sales">

                        <div class="flex flex-wrap">

                            <div class="w-full lg:w-4/12 py-5 px-4">

                                <div 
                                class="c-btn-pattern hover:u-opacity:08 inline-block u-font-size-9 font-bold uppercase text-white py-4 px-8" 
                                style="border-color:#1D3167;background-color:#1D3167">
                                    vendas
                                </div>

                                <h3 class="l-training__subtitle leading-8 font-bold mt-7">
                                    As práticas essenciais
                                    para você fazer uma
                                    gestão simplificada
                                    e eficiente
                                </h3>

                                <div class="flex flex-wrap my-5">

                                    <div class="w-4/12 md:w-2/12 lg:w-4/12 border-r">
                                        <p class="u-font-size-9 u-font-weight-medium uppercase">
                                            tempo est.
                                        </p>
                                            
                                        <p class="u-font-size-18 font-bold">
                                            2 horas
                                        </p>                                        
                                    </div>

                                    <div class="w-4/12 md:w-2/12 lg:w-4/12 border-r flex flex-col items-center">
                                        <p class="u-font-size-9 u-font-weight-medium uppercase">
                                            dificuldade
                                        </p>

                                        <p class="u-font-size-18 font-bold">
                                            Básico
                                        </p>
                                    </div>

                                    <div class="w-4/12 md:w-2/12 lg:w-4/12 flex flex-col items-center">
                                        <p class="u-font-size-9 u-font-weight-medium uppercase">
                                            aulas
                                        </p>

                                        <p class="u-font-size-18 font-bold">
                                            10
                                        </p>
                                    </div>

                                    <div class="w-full md:w-4/12 lg:w-full mt-4 md:mt-0">
                                        <a
                                        class="font-bold hover:underline"
                                        href="#">
                                            Ver o treinamento completo >
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full lg:w-8/12 pl-4">

                                <!-- swiper -->
                                <div class="swiper swiper-container-training js-swiper-container-training">

                                    <div class="swiper-wrapper">
                                        
                                        <!-- loop -->
                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#1D3167">
                                                        .01
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Conceitos <br>
                                                        gerais <br>
                                                        sobre <br>
                                                        finanças
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#1D3167"></span>
                                            </div>
                                        </div>
                                        <!-- end loop -->

                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#1D3167">
                                                        .02
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Tudo sobre <br>
                                                        emissão de <br>
                                                        notas
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#1D3167"></span>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#1D3167">
                                                        .03
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Como utilizar <br>
                                                        uma sistema <br>
                                                        digital para <br>
                                                        receber
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#1D3167"></span>
                                            </div>
                                        </div>

                                         <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#1D3167">
                                                        .04
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Gerenciamento <br>
                                                        dos ativos <br>
                                                        da empresa
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#1D3167"></span>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#1D3167">
                                                        .05
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Gerenciamento <br>
                                                        dos ativos <br>
                                                        da empresa
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#1D3167"></span>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#1D3167">
                                                        .06
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Gerenciamento <br>
                                                        dos ativos <br>
                                                        da empresa
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#1D3167"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end swiper -->
                            </div>
                        </div>
                    </div>

                    <div 
                    class="w-full border-b u-border-color-gray py-12 js-section-item"
                    data-value="leadership">

                        <div class="flex flex-wrap">

                            <div class="w-full lg:w-4/12 py-5 px-4">

                                <div 
                                class="c-btn-pattern hover:u-opacity:08 inline-block u-font-size-9 font-bold uppercase text-white py-4 px-8" 
                                style="border-color:#008A73;background-color:#008A73">
                                    liderança
                                </div>

                                <h3 class="l-training__subtitle leading-8 font-bold mt-7">
                                    As práticas essenciais <br>
                                    para você fazer uma <br>
                                    gestão simplificada <br>
                                    e eficiente
                                </h3>

                                <div class="flex flex-wrap my-5">

                                    <div class="w-4/12 md:w-2/12 lg:w-4/12 border-r">
                                        <p class="u-font-size-9 u-font-weight-medium uppercase">
                                            tempo est.
                                        </p>
                                            
                                        <p class="u-font-size-18 font-bold">
                                            3 horas
                                        </p>                                        
                                    </div>

                                    <div class="w-4/12 md:w-2/12 lg:w-4/12 border-r flex flex-col items-center">
                                        <p class="u-font-size-9 u-font-weight-medium uppercase">
                                            dificuldade
                                        </p>

                                        <p class="u-font-size-18 font-bold">
                                            Intermediário
                                        </p>
                                    </div>

                                    <div class="w-4/12 md:w-2/12 lg:w-4/12 flex flex-col items-center">
                                        <p class="u-font-size-9 u-font-weight-medium uppercase">
                                            aulas
                                        </p>

                                        <p class="u-font-size-18 font-bold">
                                            15
                                        </p>
                                    </div>

                                    <div class="w-full md:w-4/12 lg:w-full mt-4 md:mt-0">
                                        <a
                                        class="font-bold hover:underline"
                                        href="#">
                                            Ver o treinamento completo >
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full lg:w-8/12 pl-4">

                                <!-- swiper -->
                                <div class="swiper swiper-container-training js-swiper-container-training">

                                    <div class="swiper-wrapper">
                                        
                                        <!-- loop -->
                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#008A73">
                                                        .01
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Gestão básica <br>
                                                        para o ínicio <br>
                                                        de qualquer <br>
                                                        negócio
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#008A73"></span>
                                            </div>
                                        </div>
                                        <!-- end loop -->

                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#008A73">
                                                        .02
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Gestão <br>
                                                        estratégica
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#008A73"></span>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#008A73">
                                                        .03
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Gerenciamento <br>
                                                        dos ativos <br>
                                                        da empresa
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#008A73"></span>
                                            </div>
                                        </div>

                                         <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#008A73">
                                                        .04
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Gerenciamento <br>
                                                        dos ativos <br>
                                                        da empresa
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#008A73"></span>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#008A73">
                                                        .05
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Gerenciamento <br>
                                                        dos ativos <br>
                                                        da empresa
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#008A73"></span>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            
                                            <div class="l-training__card pt-20 pb-20 lg:pb-0 pl-8 lg:px-5 u-bg-folk-white">

                                                <div class="l-training__card-body">

                                                    <p 
                                                    class="u-font-size-18 font-bold"
                                                    style="color:#008A73">
                                                        .06
                                                    </p>

                                                    <h6 class="l-training__card-title font-bold">
                                                        Gerenciamento <br>
                                                        dos ativos <br>
                                                        da empresa
                                                    </h6>
                                                </div>

                                                <span 
                                                class="l-training__icon-arrow" 
                                                style="background-color:#008A73"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end swiper -->
                            </div>
                        </div>
                    </div>
                    <!-- end loop -->
                </div>
            </div>
        </div> 
        <!-- end course hidden -->

        <!-- button hidden -->
        <div class="hidden flex-wrap">
            <div class="w-full flex justify-center">
                <a 
                class="c-btn-pattern c-btn-icon-arrow u-border-color-primary relative inline-block font-bold u-color-folk-white hover:u-color-folk-primary u-bg-folk-primary hover:u-bg-folk-none mt-12 py-5 pl-7 pr-28" 
                href="#">
                    Ver todos
                </a>
            </div>
        </div>
        <!-- end button hidden -->
    </div>
</section>

<!-- mvv -->
@include( 'site.partials.mvv' )
<!-- end mvv -->

@endsection