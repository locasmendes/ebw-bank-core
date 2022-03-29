@extends( 'site.layouts.master' )

@section( 'content' )

<!-- -->
<!-- banner -->
<section 
class="l-banner pt-52"
style="background-image: url( {{ asset( 'images/banner-home.jpg' ) }} );">

    <div class="container mx-auto px-4">
        <img class="mb-10" src="{{ asset('images/banner-text.png') }}" alt="Para quem pensa diferente, o agora é digital.">
        <a href="{{ route('pre-registratation') }}" class="inline-block bg-ebw-primary px-8 py-3 text-2xl font-bold uppercase tracking-wider text-white rounded-full">Faça seu pré-cadastro <i class="fas fa-chevron-right ml-4 text-white text-lg"></i></a>
    </div>
</section>
<!-- end banner -->

<!-- digital -->
<section class="l-digital py-12">

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center">

            <div class="w-full lg:w-10/12">

                <h3 class="l-digital__title leading-tight font-bold text-center u-color-folk-primary mb-10">
                    Mais do que um banco digital, <br>
                    o parceiro no desenvolvimento de empresas. <br> 
                    Somos diferentes!
                </h3>

                <p class="text-3xl text-black font-normal text-center leading-snug"> 
                    Nascemos com o propósito de promover o progresso dos brasileiros. <br>
                    Crescemos porque acreditamos que empreender faz a diferença.   <br>
                    E fazer a diferença está em nosso DNA.   
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end digital -->

<!-- press -->
<section class="l-press pt-12 pb-32">

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center -mx-4">
            
            <div class="w-10/12 mb-12 px-4">

                <h3 class="l-press__title font-bold text-center uppercase u-color-folk-primary">
                    imprensa
                </h3>

                <p class="l-press__text font-normal text-center">
                    O que estão falando sobre nós.
                </p>
            </div>

            <div class="w-10/12 px-4">

                <div class="flex flex-wrap -mx-4">

                    <!-- loop -->
                    @foreach (array_fill(0, 6, 'a') as $item)
                        <div class="w-4/12 my-4 px-4">
                            <a href="{{ route('single') }}" class="block hover:border-ebw-secondary border-opacity-50 transition-colors border-2 border-transparent">
                                <img
                                src="{{ asset( 'images/image-example.png' ) }}"
                                alt="Imagem de exemplo">
                                <div class="pt-5 pb-10">
                                    <h6 class="text-ebw-secondary font-bold text-center text-xl leading-none mb-4">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </h6>
                                    <p class="text-ebw-title text-lg leading-tight text-center">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                    </p>
                                </div>
                            </a>
                        </div>
                        
                    @endforeach
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end press -->

<!-- investor -->
<section class="l-investor py-20">    

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center -mx-4">

            <div class="w-10/12 flex justify-between px-4">

                <a
                class="c-btn-pattern c-btn-icon-arrow hover:u-opacity:08 u-border-color-primary relative inline-block font-normal uppercase all:u-color-folk-white u-bg-folk-primary py-5 pl-7 pr-16"
                href="{{ route('partner-investor') }}">
                    quero ser <span class="font-bold">sócio investidor</span>
                </a>

                <a
                class="c-btn-pattern c-btn-icon-arrow hover:u-opacity:08 u-border-color-primary relative inline-block font-normal uppercase all:u-color-folk-white u-bg-folk-primary py-5 pl-7 pr-16"
                href="{{ route('conheca-ebw') }}">
                    saiba porque investir na <span class="font-bold">EBW</span>
                </a>
            </div>
        </div>  
    </div>
</section>
<!-- end investor -->

@endsection

