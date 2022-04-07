@extends( 'site.layouts.master' )

@section('title', 'Busca no site')

@section( 'content' )

<div class="shadow-md w-full h-1 hidden xl:block"></div>

<div class="container mx-auto px-8 pt-40 pb-20">
    <div class="max-w-5xl mx-auto">
        <h1 class="md:text-4xl sm:text-3xl text-2xl text-center mb-10">Resultados da pesquisa <br><span class="text-ebw-primary font-bold">"{{ $s }}"</span> </h1>
    </div>
    <div class="flex flex-wrap -mx-8">
        <div class="lg:w-8/12 lg:px-16 px-8">
            @if (!$pages->isEmpty())
                <h2 class="md:text-3xl text-2xl text-ebw-secondary font-bold mb-10">Páginas encontradas</h2>
                <ul>
                    @foreach ($pages as $page)
                        <li class="mb-3 py-8 border-b-2 border-ebw-light-grey">
                            <a class="text-ebw-search text-2xl font-bold hover:text-ebw-primary transition-colors duration-150" href="{{ $page['route'] }}">{{ $page['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
            @if (!$posts->isEmpty())
                <h2 class="md:text-3xl text-2xl text-ebw-secondary font-bold mb-10 pt-12">Artigos encontrados no Portal do Empreendedor</h2>
                <ul>
                    @foreach ($posts as $post)
                        <li class="mb-3 py-8 border-b-2 border-ebw-light-grey">
                            <a class="text-ebw-search md:text-2xl text-xl font-bold hover:text-ebw-primary transition-colors duration-150" href="{{ route('portal.show', ['id' => $post->id, 'slug' => $post->slug]) }}">{{ $post->title }}</a>
                            <p class="pt-4 text-ebw-another-grey text-lg">{{ $post->created_at->locale('pt_BR')->translatedFormat('d \d\e F \d\e Y') }}</p>
                        </li>
                    @endforeach
                </ul>
            @endif

            @if ($pages->isEmpty() && $posts->isEmpty())
                <h2 class="text-3xl text-ebw-secondary font-bold mb-10">Não foi encontrado nada!</h2>
            @endif
    
        </div>
        <div class="lg:w-4/12 sm:w-6/12 w-full px-8 pt-12">
            <h2 class="text-ebw-third font-bold md:text-2xl text-xl">Posts Recente</h2>

            <ul>
                @foreach ($recentPosts as $recentPost)
                    <li class="mb-3 py-3 border-b border-ebw-light-grey">
                        <p class="pb-3 text-ebw-another-grey text-lg">{{ $post->created_at->locale('pt_BR')->translatedFormat('d \d\e F \d\e Y') }}</p>
                        <a class="text-ebw-search text-lg font-bold hover:text-ebw-primary transition-colors duration-150" href="{{ route('portal.show', ['id' => $post->id, 'slug' => $post->slug]) }}">{{ $post->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection

