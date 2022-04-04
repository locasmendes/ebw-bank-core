@extends( 'site.layouts.master ' )

@section('title', 'Sócio Investidor')

@section( 'content' )

    <div class="bg-cover bg-center pt-56 pb-16 bg-no-repeat" style="background-image:url({{ asset('images/banner-socio-investidor.jpg') }})">
        <div class="container mx-auto px-6">
            <h1 class="text-5.5xl text-center leading-tight"><span class="font-bold">Faça parte.</span> Conta digital e <br>cartão de crédito EBW Bank</h1>
        </div>
    </div>
    <section class="bg-ebw-form pt-36 pb-32">
        <div class="max-w-6xl mx-auto px-3">
            <h2 class="text-5xl text-ebw-title leading-snug text-center mb-10 tracking-wider">Quero ser sócio investidor</h2>
            <div class="border-white border-opacity-50 border-2 px-8 pt-16 pb-16">
                @if (session()->has('success'))
                    <h2 class="text-4xl leading-tight font-bold text-center text-white mb-10">
                        Parabéns, seu cadastro foi realizado com sucesso!
                    </h2>
                @else
                    <form action="{{ route('partner-investor.store') }}" method="POST">
                        @csrf
                        <div>
                            <h3 class="text-black text-3xl tracking-wide mb-8">Cadastre-se agora mesmo</h3>
                        </div>
                        <div class="flex -mx-5">
                            <div class="w-7/12 px-5">
                                <div class="bg-ebw-input relative p-2 mb-3">
                                    <label for="name" class="block text-lg text-black">Nome</label>
                                    <input 
                                    type="text" 
                                    class="bg-transparent w-full shadow-none outline-none focus:border-black  border-b border-transparent pl-1" 
                                    name="name" 
                                    id="name" 
                                    autocomplete="off"
                                    placeholder="Nome"
                                    value="{{ old('name') ?? '' }}">
                                    @error('name')
                                        <div class="absolute inset-0 border-red-700 pointer-events-none border-2">
                                            <span class="absolute top-1 left-0 right-0 w-full text-center pt-1 text-xs text-red-700 font-medium">{{ $message }}</span>
                                        </div>
                                    @enderror   
                                </div>
                                <div class="bg-ebw-input relative p-2 mb-3">
                                    <label for="phone" class="block text-lg text-black">Cel</label>
                                    <input 
                                    type="text" 
                                    class="bg-transparent w-full shadow-none outline-none focus:border-black  border-b border-transparent pl-1" 
                                    name="phone" 
                                    id="phone" 
                                    autocomplete="off" 
                                    required
                                    placeholder="(00) 00000-0000"
                                    value="{{ old('phone') ?? '' }}">
                                    @error('phone')
                                        <div class="absolute inset-0 border-red-700 pointer-events-none border-2">
                                            <span class="absolute top-1 left-0 right-0 w-full text-center pt-1 text-xs text-red-700 font-medium">{{ $message }}</span>
                                        </div>
                                    @enderror   
                                </div>
                                <div class="bg-ebw-input relative p-2 mb-3">
                                    <label for="email" class="block text-lg text-black">E-mail</label>
                                    <input 
                                    type="email" 
                                    class="bg-transparent w-full shadow-none outline-none focus:border-black  border-b border-transparent pl-1" 
                                    name="email" 
                                    id="email" 
                                    autocomplete="off" 
                                    required
                                    placeholder="contato@email.com.br"
                                    value="{{ old('email') ?? '' }}">
                                    @error('email')
                                        <div class="absolute inset-0 border-red-700 pointer-events-none border-2">
                                            <span class="absolute top-1 left-0 right-0 w-full text-center pt-1 text-xs text-red-700 font-medium">{{ $message }}</span>
                                        </div>
                                    @enderror   
                                </div>
                                <div class="bg-ebw-input relative p-2 mb-5">
                                    <label for="cpf-cnpj" class="block text-lg text-black">CPF / CNPJ</label>
                                    <input 
                                    type="text" 
                                    class="bg-transparent w-full shadow-none outline-none focus:border-black  border-b border-transparent pl-1" 
                                    name="cpf-cnpj" 
                                    id="cpf-cnpj" 
                                    autocomplete="off" 
                                    required
                                    placeholder="000.000.000-00 / 00.000.000/0001-00"
                                    value="{{ old('name') ?? '' }}">
                                    @error('cpf-cnpj')
                                        <div class="absolute inset-0 border-red-700 pointer-events-none border-2">
                                            <span class="absolute top-1 left-0 right-0 w-full text-center pt-1 text-xs text-red-700 font-medium">{{ $message }}</span>
                                        </div>
                                    @enderror   
                                </div>
            
                                <div class="flex justify-start pt-8">
                                    <button type="submit" class="shadow-none outline-none c-btn-pattern text-xl c-btn-icon-arrow u-border-color-primary relative inline-block font-bold uppercase u-color-folk-white hover:u-color-folk-primary u-bg-folk-primary hover:u-bg-folk-none py-4 pl-10 pr-20 rounded-full">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                            <div class="w-5/12 px-5">
                                <h3 class="font-bold text-black text-2xl leading-none uppercase mb-8">Quanto desejo investir</h3>
                                <label class="text-black text-xl mb-6 input-checkbox" for="above-500">
                                    <input type="radio" name="investment" id="above-500" checked value="Acima de R$ 500 mil">
                                    <span></span>
                                    Acima de R$ 500 mil
                                </label>
                                <label class="text-black text-xl mb-6 input-checkbox" for="between-500-300">
                                    <input type="radio" name="investment" id="between-500-300"  value="Entre R$ 500 mil e R$ 300 mil">
                                    <span></span>
                                    Entre R$ 500 mil e R$ 300 mil
                                </label>
                                <label class="text-black text-xl mb-6 input-checkbox" for="between-300-100" >
                                    <input type="radio" name="investment" id="between-300-100" value="Entre R$ 300 mil e R$ 100 mil">
                                    <span></span>
                                    Entre R$ 300 mil e R$ 100 mil
                                </label>
                                <label class="text-black text-xl mb-6 input-checkbox" for="between-100-50">
                                    <input type="radio" name="investment" id="between-100-50" value="Entre R$ 100 mil e R$ 50 mil">
                                    <span></span>
                                    Entre R$ 100 mil e R$ 50 mil
                                </label>
                                <label class="text-black text-xl mb-6 input-checkbox" for="between-50-20">
                                    <input type="radio" name="investment" id="between-50-20" value="Entre R$ 50 mil e R$ 20 mil">
                                    <span></span>
                                    Entre R$ 50 mil e R$ 20 mil
                                </label>
                                <label class="text-black text-xl mb-6 input-checkbox" for="below-20">
                                    <input type="radio" name="investment" id="below-20" value="Até R$ 20 mil">
                                    <span></span>
                                Até R$ 20 mil
                                </label>
                            </div>
                        </div>
                        </div>
                    </form>
                @endif
            </div>
            <div class="flex justify-center pt-10">
                <a
                href="{{ route('conheca-ebw') }}"
                class="shadow-none outline-none c-btn-pattern text-xl c-btn-icon-arrow u-border-color-primary relative inline-block font-normal uppercase u-color-folk-white hover:u-color-folk-primary u-bg-folk-primary hover:u-bg-folk-none py-4 pl-10 pr-14 rounded-full">
                   Saiba porque investir na <span class="font-bold text-white">EBW</span>
                </a>
            </div>
        </div>
    </section>

@endsection