@extends( 'site.layouts.master' )

@section('title', 'Home')

@section( 'content' )
<!-- -->
<!-- banner -->
<section
class="md:min-h-720px min-h-400px bg-no-repeat bg-cover bg-center xl:pt-40 pt-24 lg:pb-16 pb-40 relative">
    <img src="{{ asset( 'images/banner_app_novo.jpg' ) }}" alt="Para quem pensa diferente o agora é digital.">
    <div class="container px-4 mx-auto absolute bottom-0 left-0 right-0 lg:pb-20 pb-12">
        <div class="flex justify-between flex-wrap" x-data="{open: false}">
            <div class="order-2 lg:order-1 lg:w-5/12 w-full">
                <h2 class="text-center font-bold sm:text-size-1.7 text-xl text-black">Baixe o App e abra sua conta</h2>

                <div class="flex pt-6 items-center justify-center">
                    <a href="https://apps.apple.com/br/app/ebw-bank/id163485436" class="mr-2" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/app-store.png') }}" class="w-24" alt="App Store">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=br.com.bankeiro.ebwbank" class="mr-8" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/google-play-store.png') }}" class="w-24" alt="Google Play Store">
                    </a>
                    <button
                    x-on:click="open = true"
                    type="button" aria-label="Abrir modal para baixar o app" class="inline-block focus:shadow-none focus:outline-none bg-white hover:bg-ebw-primary transition-all duration-300 pr-8 rounded-full border border-ebw-primary">
                        <div class="inline-flex bg-ebw-primary px-5 h-11 items-center font-medium text-sm leading-none uppercase tracking-wider text-white rounded-full border border-ebw-primary">
                           Abra sua conta
                        </div>
                    </button>
                </div>

                <template x-teleport="body">
                    <div x-show="open" class="fixed inset-0 bg-black bg-opacity-75 z-50" x-trap.inert.noscroll="open"
                    x-transition:enter="transition-all ease-out duration-200"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-all ease-in delay-200 duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    >
                        <div
                        x-show="open"
                        x-transition:enter="transform transition-all ease-out duration-200 delay-200"
                        x-transition:enter-start="translate-x-full"
                        x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition-all ease-in duration-200"
                        x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="translate-x-full"
                        class="bg-ebw-red bg-opacity-90 h-full overflow-y-auto absolute top-0 bottom-0 right-0 text-white rounded-tl-2xl rounded-bl-2xl sm:px-12 px-5 pt-12 flex flex-col justify-between pb-16 2xl:pb-28">
                            <div class="flex justify-end">
                                <button type="button" x-on:click="open = false" aria-label="Fechar modal para baixar app" class="font-light text-sm">FECHAR</button>
                            </div>
                            <div class="max-w-lg">
                                <h2 class="2xl:text-5xl 2xl:leading-snug text-4xl font-light mb-4 leading-snug">Olá,</h2>
                                <p class="font-light 2xl:text-xl 2xl:leading-snug focus-within:text-lg mb-4 leading-snug">você está a um passo de se tornar um cliente EBW Bank</p>
                                <p class="font-light 2xl:text-xl 2xl:leading-snug text-lg leading-snug mb-12">Aponte a câmera do seu celular para o QR Code abaixo e pronto! Você será direcionado para a sua loja de aplicativos. Aí é só baixar o APP e abrir sua conta <b>DE GRAÇA.</b></p>
                                <div class="flex justify-center">
                                    <img src="{{ asset('images/qrcode-abra-sua-conta.png') }}" class="block" alt="QRCode abrir conta">
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            {{-- <div class="order-1 lg:order-2 mb-5 lg:mb-0">
                <a href="{{ asset('images/Regulamento_EBW.pdf') }}" target="_blank" rel="noopener noreferrer" class="inline-block bg-white hover:bg-ebw-primary transition-all duration-300 pr-8 rounded-full relative">
                    <div class="inline-flex bg-ebw-primary px-5 leading-none h-11 items-center uppercase tracking-wider relative text-white rounded-full">
                        Consulte o regulamento
                    </div>
                </a>
            </div> --}}
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

