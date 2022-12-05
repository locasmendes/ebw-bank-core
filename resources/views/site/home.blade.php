@extends( 'site.layouts.master' )

@section('title', 'Home')

@section( 'content' )
<!-- -->
<!-- banner -->
<section
class="md:min-h-720px min-h-400px bg-no-repeat bg-cover bg-center xl:pt-40 pt-24 pb-16"
style="background-image: url( {{ asset( 'images/banner_natal.jpg' ) }} );">

    <div class="container mx-auto px-4 relative">
        <div class="xl:ml-52 lg:ml-40 md:ml-10 xl:w-4/12 lg:w-5/12 md:w-6/12 sm:w-7/12 w-10/12 mb-32">
            <img class="mb-3" src="{{ asset('images/promocao-conta-premiada.png') }}" alt="Promoção Conta Premiada">
            <div class="pl-5 pr-2">
                <h3 class="text-center text-black font-bold md:text-size-2 md:text-2xl text-xl mb-3">Esse banco é diferente!</h3>
                <p class="text-center md:text-size-1.7 md:text-2xl text-xl text-black leading-tight mb-4">Abra sua conta e concorra a <b>8 motos elétricas</b></p>
                <h4 class="text-center text-ebw-primary font-medium md:text-5xl text-4xl">Participe!</h4>
            </div>
        </div>
        {{-- <a href="{{ route('pre-registratation') }}" class="inline-block bg-ebw-primary sm:px-8 px-4 sm:py-3 py-2 md:text-lg leading-none text-sm font-bold uppercase tracking-wider text-white rounded-full">
            Faça seu pré-cadastro <i class="fas fa-chevron-right ml-4 text-white sm:text-lg text-sm"></i>
        </a> --}}
    </div>
    <div class="container px-4 mx-auto">
        <div class="flex justify-between flex-wrap">
            <div class="order-2 lg:order-1">
                <div class="inline-block bg-white pr-8 rounded-full">
                    <div class="inline-block bg-ebw-primary px-5 py-5 leading-none sm:text-lg uppercase tracking-wider text-white rounded-full">
                       Baixe o app e abra sua conta
                    </div>
                </div>
                <div class="flex pt-6">
                    <a href="https://apps.apple.com/br/app/ebw-bank/id1634854368" class="mr-8" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/app-store.png') }}" class="w-40" alt="App Store">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=br.com.bankeiro.ebwbank" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/google-play-store.png') }}" class="w-40" alt="Google Play Store">
                    </a>
                </div>
            </div>
            <div class="order-1 lg:order-2 mb-5 lg:mb-0">
                <a href="{{ asset('images/Regulamento_EBW.pdf') }}" target="_blank" rel="noopener noreferrer" class="inline-block bg-white hover:bg-ebw-primary transition-all duration-300 pr-8 rounded-full relative">
                    <div class="inline-block bg-ebw-primary px-5 py-5 leading-none sm:text-lg uppercase tracking-wider relative text-white rounded-full">
                        Consulte o regulamento
                    </div>
                </a>
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

                <h1 class="md:text-size-2.65 text-3xl leading-tightest text-center u-color-folk-primary mb-10">
                    {!! text_to_html($homeSettings['faixa_title']) !!}
                    {{-- Mais do que um banco digital, <br>
                    o parceiro no desenvolvimento de empresas. <br>
                    Somos diferentes! --}}
                </h1>

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

            <div class="mb-12 px-4">

                <h2 class="l-press__title font-bold text-center uppercase u-color-folk-primary">
                    imprensa
                </h2>

                <h3 class="l-press__text font-normal text-center">
                   {!! $homeSettings['imprensa_subtitle'] !!}
                </h3>
            </div>

            <div class="flex flex-wrap px-4">

                <!-- loop -->
                @foreach ($posts as $post)
                    <article class="w-full md:w-6/12 lg:w-4/12 my-4 px-4">
                        <a href="{{ route('portal.show', ['id' => $post->id, 'slug' => \Illuminate\Support\Str::slug($post->title)]) }}" class="block hover:border-ebw-secondary border-opacity-50 transition-colors border-2 border-transparent">
                            <img
                            loading="lazy"
                            src="{{ asset(Storage::url($post->image)) }}"
                            class="h-64 object-cover object-center w-full"
                            alt="Imagem de exemplo">
                            <div class="pt-5 pb-10">
                                <h3 class="text-ebw-secondary font-bold text-center text-xl leading-none mb-4">
                                    {{ $post->title }}
                                </h3>
                                <p class="text-ebw-title text-lg leading-tight text-center">
                                    {{ \Illuminate\Support\Str::words(strip_tags($post->body), 25, '...') }}
                                </p>
                            </div>
                        </a>
                    </article>
                @endforeach
                <!-- end loop -->
            </div>

        </div>
    </div>
</section>
<!-- end press -->

<!-- investor -->
{{-- <section class="l-investor hidden py-20">

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center -mx-4">

            <div class="flex flex-col lg:flex-row justify-center">
                <div>
                    <a
                    class="mx-12 c-btn-pattern c-btn-icon-arrow rounded-full hover:u-opacity:08 u-border-color-primary relative inline-block uppercase all:u-color-folk-white u-bg-folk-primary my-4 lg:my-0 py-4 pl-6 sm:pr-14 pr-10"
                    href="{{ route('seja-investidor') }}#form-investidor">
                        quero ser <span class="font-bold">sócio investidor</span>
                    </a>
                </div>
                <div>
                    <a
                    class="mx-12 c-btn-pattern c-btn-icon-arrow rounded-full hover:u-opacity:08 u-border-color-primary relative inline-block uppercase all:u-color-folk-white u-bg-folk-primary my-4 lg:my-0 py-4 pl-6 sm:pr-12 pr-10"
                    href="{{ route('seja-investidor') }}">
                        saiba porque investir na <span class="font-bold">EBW</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section> --}}
<!-- end investor -->

@endsection

