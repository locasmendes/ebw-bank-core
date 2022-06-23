@extends( 'site.layouts.master' )

@section('title', 'Cadastro concluído Banco de Talentos')

@section( 'content' )
<span class="no-floating-menu"></span>
<section class="bg-ebw-red pt-40 pb-8 h-screen bg-contain bg-center bg-no-repeat relative" style="background-image: url({{asset('images/talent-success.png')}})">

    <div class="absolute bottom-20 left-1/2 transform -translate-x-1/2 border-2 border-white p-2 rounded-3xl">
        <a href="{{ route('home') }}" class="absolute -top-6 -right-6 rounded-full w-6 h-6 bg-black flex justify-center items-center">
            <i class="fas fa-times text-white"></i>
        </a>
        <div class="bg-white rounded-2xl w-72 sm:w-118 pt-4 pb-3 px-5">
            <h1 class="text-ebw-red text-3xl font-bold text-center">PRONTO!</h1>
            <div class="flex justify-center pt-1 mb-4">
                <div class="w-16 h-1 bg-ebw-red"></div>
            </div>
            <p class="text-center text-black leading-none mb-4 text-lg">Agora você está cadastrado em nosso banco de talentos. Mantenha seus dados sempre atualizados e fique atento ao seu e-mail.</p>
            <h3 class="font-bold text-center text-black text-lg leading-tight">Nós, da EBW Bank, desejamos sorte e esperamos ter você conosco em breve.</h3>
        </div>
    </div>
</section>

@endsection

