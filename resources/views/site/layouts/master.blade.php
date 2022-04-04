<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="@yield('title', 'EBW Bank') - EBW Bank" />
        <meta property="og:description" content="A EBW Bank é uma fintech que oferece soluções de pagamento digital e físico, com a maquininha Passou Ganhou. Nossos serviços são voltados para o empreendedor que quer ganhar tempo e impulsionar as vendas." />
        <meta property="og:url" content="https://ebwbank.com.br/" />
        <meta property="og:site_name" content="EBW Bank" />
        <meta property="article:publisher" content="https://www.facebook.com/ebwbank/" />
        <meta property="article:modified_time" content="2021-03-15T18:59:18+00:00" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:label1" content="Est. tempo de leitura" />
        <meta name="twitter:data1" content="4 minutos" />
    	<meta name="description" content="A EBW Bank é uma fintech que oferece soluções de pagamento digital e físico, com a maquininha Passou Ganhou. Nossos serviços são voltados para o empreendedor que quer ganhar tempo e impulsionar as vendas." />
        <meta name="keywords" content="banco, ebw bank, fintech, investimentos, " />
        
        <meta name="robots" content="noindex,nofollow">
        <meta name="googlebot" content="noindex,nofollow">
        <link rel="canonical" href="{{ url()->current() }}">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="manifest" href="">
        <!-- swipercss 7 -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
        <!-- fontspartan -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <title>@yield('title', 'EBW Bank') - EBW Bank</title>
        <base href="{{ url()->current() }}">
        @stack('css')
    </head>
        {{--  page-{{ Request::path() === '/' ? 'home' : Request::path() }} --}}
    <body class="{!! Request::is( 'passou-ganhou' ) ? 'page-passed-won' : '' !!}">
        <style>
            [x-cloak] {
                display: none;
            }
        </style>
        @php
            $menu = App\Models\Menu::class::first(); 
            $general = App\Models\General::class::first();
        @endphp

        @include('site.layouts.header')

        @yield('content')

        @include('site.layouts.footer')
    </body>
</html>