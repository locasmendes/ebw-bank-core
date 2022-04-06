@extends( 'site.layouts.master' )

@section('title', 'Home')

@section( 'content' )
<!-- -->
<!-- banner -->
<section 
class="h-screen md:min-h-620px min-h-400px relative bg-no-repeat bg-cover sm:bg-center bg-75% pt-52"
style="background-image: url( {{ asset( 'images/banner-home.jpg' ) }} );">

    <div class="container lg:block mx-auto px-4">
        <img class="mb-10 2xl:w-auto sm:w-112 w-72" loading="lazy" src="{{ asset('images/banner-text.png') }}" alt="Para quem pensa diferente, o agora é digital.">
        
        <a href="{{ route('pre-registratation') }}" class="inline-block bg-ebw-primary sm:px-8 px-4 sm:py-3 py-2 md:text-lg leading-none text-sm font-bold uppercase tracking-wider text-white rounded-full">
            Faça seu pré-cadastro <i class="fas fa-chevron-right ml-4 text-white sm:text-lg text-sm"></i>
        </a>
    </div>
</section>
<!-- end banner -->

<!-- digital -->
<section class="l-digital py-12">

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center">

            <div class="w-full lg:w-10/12">

                <h3 class="l-digital__title leading-tight font-bold text-center u-color-folk-primary mb-10">
                    {!! text_to_html($homeSettings['faixa_title']) !!}
                    {{-- Mais do que um banco digital, <br>
                    o parceiro no desenvolvimento de empresas. <br> 
                    Somos diferentes! --}}
                </h3>

                <p class="l-digital__text leading-snug font-normal text-center text-black"> 
                    {!! text_to_html($homeSettings['faixa_subtitle']) !!}
                    {{-- Nascemos com o propósito de promover o progresso dos brasileiros. <br>
                    Crescemos porque acreditamos que empreender faz a diferença.   <br>
                    E fazer a diferença está em nosso DNA.    --}}
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
            
            <div class="mb-12">

                <h3 class="l-press__title font-bold text-center uppercase u-color-folk-primary">
                    imprensa
                </h3>

                <p class="l-press__text font-normal text-center">
                   {!! $homeSettings['imprensa_subtitle'] !!}
                </p>
            </div>

            <div class="flex flex-wrap -mx-4">
                
                <!-- loop -->
                @foreach ($posts as $post)
                    <div class="w-full md:w-6/12 lg:w-4/12 my-4 px-4">
                        <a href="{{ route('portal.show', ['id' => $post->id, 'slug' => \Illuminate\Support\Str::slug($post->title)]) }}" class="block hover:border-ebw-secondary border-opacity-50 transition-colors border-2 border-transparent">
                            <img
                            loading="lazy"
                            src="{{ asset(Storage::url($post->image)) }}"
                            class="h-64 object-conver object-center w-full"
                            alt="Imagem de exemplo">
                            <div class="pt-5 pb-10">
                                <h3 class="text-ebw-secondary font-bold text-center text-xl leading-none mb-4 break-words">
                                    {{ $post->title }}
                                </h3>
                                <p class="text-ebw-title text-lg leading-tight text-center break-words">
                                    {{ \Illuminate\Support\Str::words(strip_tags($post->body), 25, '...') }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
                <!-- end loop -->
            </div>
            
        </div>
    </div>
</section>
<!-- end press -->

<!-- investor -->
<section class="l-investor py-20">    

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center -mx-4">

            <div class="flex flex-col lg:flex-row justify-center">

                <a
                class="mx-12 c-btn-pattern c-btn-icon-arrow rounded-full hover:u-opacity:08 u-border-color-primary relative inline-block font-normal uppercase all:u-color-folk-white u-bg-folk-primary my-4 lg:my-0 py-5 pl-7 sm:pr-16 pr-12"
                href="{{ route('seja-investidor') }}">
                    quero ser <span class="font-bold">sócio investidor</span>
                </a>

                <a
                class="mx-12 c-btn-pattern c-btn-icon-arrow rounded-full hover:u-opacity:08 u-border-color-primary relative inline-block font-normal uppercase all:u-color-folk-white u-bg-folk-primary my-4 lg:my-0 py-5 pl-7 sm:pr-16 pr-12"
                href="{{ route('conheca-ebw') }}">
                    saiba porque investir na <span class="font-bold">EBW</span>
                </a>
            </div>
        </div>  
    </div>
</section>
<!-- end investor -->

@endsection

