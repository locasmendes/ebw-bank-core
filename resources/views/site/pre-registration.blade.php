@extends( 'site.layouts.master ' )

@section('title', 'Pré Cadastro')

@section( 'content' )

    <div class="bg-cover bg-center pt-56 pb-16 bg-no-repeat" style="background-image:url({{ asset('images/banner-socio-investidor.jpg') }})">
        <div class="container mx-auto px-6">
            <h1 class="md:text-5.5xl text-4xl text-center leading-tight"><span class="font-bold">Faça parte.</span> Conta digital e <br>cartão de crédito EBW Bank</h1>
        </div>
    </div>
    <section class="bg-ebw-form md:pt-36 pt-20 md:pb-32 pb-20">
        <div class="max-w-4xl mx-auto md:px-10 px-4">
            <h2 class="lg:text-5xl md:text-4xl text-3xl text-ebw-title leading-snug text-center mb-10 tracking-wide">Preencha o formulário para<br>vender pela internet!</h2>
            <div class="border-white border-opacity-50 border-2 p-8">
                @if (session()->has('success'))
                    <h2 class="text-4xl leading-tight font-bold text-center text-white mb-10">
                        Parabéns, seu pré-cadastro foi realizado com sucesso!
                    </h2>
                @else
                    <form action="{{ route('pre-registratation.store') }}" method="POST">
                        @csrf
                        <div class="mb-4 flex">
                            <label class="text-xl text-black input-radio mr-4" for="person-type-pf">
                                <input type="radio" name="person-type" value="pf" id="person-type-pf" checked>
                                <span></span>
                                PF
                            </label>
                            <label class="text-xl text-black input-radio" for="person-type-pj">
                                <input type="radio" name="person-type" value="pj" id="person-type-pj">
                                <span></span>
                                PJ
                            </label>
                        </div>
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
                            value="{{ old('cpf-cnpj') ?? '' }}">
                            @error('cpf-cnpj')
                                <div class="absolute inset-0 border-red-700 pointer-events-none border-2">
                                    <span class="absolute top-1 left-0 right-0 w-full text-center pt-1 text-xs text-red-700 font-medium">{{ $message }}</span>
                                </div>
                            @enderror   
                        </div>

                        <div>
                            <input type="hidden" name="allow-infomation-whatsapp-sms" value="0">
                            <label for="allow-infomation-whatsapp-sms" class="input-checkbox text-lg text-black">
                                <input type="checkbox" name="allow-infomation-whatsapp-sms" id="allow-infomation-whatsapp-sms" value="1">
                                <span></span>
                                Aceito receber informações pelo whatsapp e sms
                            </label>
                        </div>
                        <div class="mb-10">
                            <input type="hidden" name="allow-infomation-email" value="0">
                            <label for="allow-infomation-email" class="input-checkbox text-lg text-black">
                                <input type="checkbox" name="allow-infomation-email" id="allow-infomation-email" value="1">
                                <span></span>
                                Aceito receber informações por e-mail
                            </label>
                        </div>
                        <div class="flex justify-center pb-4">
                            <button type="submit" class="shadow-none outline-none c-btn-pattern text-xl c-btn-icon-arrow u-border-color-primary relative inline-block font-bold uppercase u-color-folk-white hover:u-color-folk-primary u-bg-folk-primary hover:u-bg-folk-none py-4 pl-10 pr-20 rounded-full">
                                Enviar
                            </button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </section>

@endsection