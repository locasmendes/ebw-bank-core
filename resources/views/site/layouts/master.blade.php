<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:url" content="Link do Site">
        <meta property="og:title" content="Título">
        <meta property="og:site_name" content="EBW">
        <meta property="og:description" content="Descrição do site">
        <meta property="og:image" content="">
        <meta property="og:image:type" content="image/png">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="robots" content="index,follow">
        <meta name="googlebot" content="index,follow">
        <link rel="canonical" href="{{ url()->current() }}">
        <!-- <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}"> -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="">
        <!-- swipercss 7 -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
        <!-- fontspartan -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- fontopensans -->
        <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <title>EBW Bank</title>
        <base href="{{ url()->current() }}">
        @stack('css')
    </head>
    <body>
        @php
            $menu = App\Models\Menu::class::first(); 
            $general = App\Models\General::class::first();
        @endphp

        @include('site.layouts.header')

        @yield('content')

        @include('site.layouts.footer')
    </body>
</html>