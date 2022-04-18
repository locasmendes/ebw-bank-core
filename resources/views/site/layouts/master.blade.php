<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
            	
        <meta name="description" content="A EBW Bank é uma fintech que oferece soluções de pagamento digital e físico, com a maquininha Passou Ganhou. Nossos serviços são voltados para o empreendedor que quer ganhar tempo e impulsionar as vendas." />
        <meta name="keywords" content="banco, ebw bank, fintech, investimentos, ebw, bank, pay, ebw pay, soluções de pagamento, empreendedores, maquininha de cartão" />
        <meta name="title" content="@yield('title', 'EBW Bank') - EBW Bank">
        
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="@yield('title', 'EBW Bank') - EBW Bank" />
        <meta property="og:description" content="A EBW Bank é uma fintech que oferece soluções de pagamento digital e físico, com a maquininha Passou Ganhou. Nossos serviços são voltados para o empreendedor que quer ganhar tempo e impulsionar as vendas." />
        <meta property="og:url" content="https://ebwbank.com.br/" />
        <meta property="og:site_name" content="EBW Bank" />
        <meta property="og:image" content="{{ asset('images/ebw-share.jpg')  }}">
       
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="@yield('title', 'EBW Bank') - EBW Bank">
        <meta property="twitter:description" content="A EBW Bank é uma fintech que oferece soluções de pagamento digital e físico, com a maquininha Passou Ganhou. Nossos serviços são voltados para o empreendedor que quer ganhar tempo e impulsionar as vendas.">
        <meta property="twitter:image" content="{{ asset('images/ebw-share.jpg')  }}">

        {{-- @production
            <script async src="https://www.googletagmanager.com/gtag/js?id=AW-928223794"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            
            gtag('config', 'AW-928223794');
                </script>
                <!-- Event snippet for Cadastro EBW Bank conversion page -->
            <script>
            gtag('event', 'conversion', {'send_to': 'AW-928223794/lcmJCJiZ1P8BELKkzroD'});
            </script>
            
                <!-- Facebook Pixel Code -->
            <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '206222104371563');
            fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=206222104371563&ev=PageView&noscript=1"
            /></noscript>
            <!-- End Facebook Pixel Code -->
        @endproduction --}}
    
        
        <meta name="robots" content="index,follow">
        <meta name="googlebot" content="index,follow">
        <link rel="canonical" href="{{ url()->current() }}">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="manifest" href="">
        {{-- <!-- swipercss 7 --> --}}
        {{-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"> --}}
        <!-- fontspartan -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
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
        @include('site.layouts.header')

        @yield('content')

        @include('site.layouts.footer')
    </body>
</html>