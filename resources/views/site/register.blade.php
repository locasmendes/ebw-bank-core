@extends( 'site.layouts.master' )

@section( 'content' )

<div class="bg-cover bg-center pt-56 pb-16 bg-no-repeat" style="background-image:url({{ asset('images/banner-socio-investidor.jpg') }})">
    <div class="container mx-auto px-6">
        <h1 class="md:text-5.5xl text-4xl text-center leading-tight"><span class="font-bold">A maquininha</span> ideal para<br>o micro, pequeno, médio e gigante.</h1>
    </div>
</div>

<section class="bg-ebw-form md:pt-28 pt-20 md:pb-32 pb-20">
    <div class="max-w-4xl mx-auto md:px-10 px-4">
        <h2 class="lg:text-5xl md:text-4xl text-3xl text-ebw-title leading-snug text-center mb-10 tracking-wide">Preencha o formulário para adquirir sua maquininha!</h2>
        <div class="border-white border-opacity-50 border-2 p-8">
            @if (session()->has('submission-succeeded'))
                <h2 class="text-4xl leading-tight font-bold text-center text-white mb-10">
                    Dados enviados com sucesso!
                </h2>
            @else
                <form action="{{ route('cadastro-peca-minha-maquininha.store') }}" method="POST">
                    @csrf
                    {{-- <div class="mb-4 flex">
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
                    </div> --}}
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


{{-- <section class="l-register pb-20 pt-12">
    <div class="container mx-auto px-4">
        <div class="flex -mx-4">

            <div class="w-full px-4">

                <div class="flex justify-center -mx-4">

                    <div class="md:w-9/12 px-4">

                      
                        @if (session('submission-succeeded'))
                            <h1 class="text-ebw-primary text-5xl font-bold mb-4">Dados enviados com sucesso</h1>
                        @else
                            <h2 class="text-4xl mb-8 font-bold text-center text-ebw-cyan">
                                Preencha o formulário para adquirir sua maquininha!
                            </h2>
                            
                            <form action="{{ route('cadastro-peca-minha-maquininha.store') }}" method="POST" enctype="multipart/form-data">
                                @method('POST')
                                @csrf

                                <div class="flex flex-wrap justify-center -mx-4">

                                    <div class="w-full relative flex mt-4 px-4 pb-4">
                                        
                                        <span class="u-icon__free u-icon__user before::u-font-size-30 before::u-color-folk-cyan"></span>
                                        
                                        <label
                                        class="w-full flex flex-col pl-4" 
                                        for="name">
                                            <span class="u-font-size-12 font-light">
                                                Nome completo
                                            </span>
                                    
                                            <input
                                            class="l-register__input-field font-medium {{ $errors->has('name') ? 'classe-de-erro' : ''}}"
                                            type="text"
                                            name="name"
                                            id="name"
                                            value="{{ old('name') ? old('name') : '' }}"
                                            placeholder="Fulano De Chagas">
                                        </label>
                                        @error('name')
                                            <p class="c-error__field">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="w-full md:w-6/12 relative flex mt-4 px-4 pb-4">
                                        
                                        <span class="u-icon__free u-icon__address-card before::u-font-size-30 before::u-color-folk-dark-silver"></span>
                                        
                                        <label
                                        class="w-full flex flex-col pl-4" 
                                        for="rg">
                                            <span class="u-font-size-12 font-light">
                                                RG com órgão expedidor
                                            </span>
                                    
                                            <input
                                            class="l-register__input-field font-medium"
                                            type="text"
                                            name="rg"
                                            id="rg"
                                            value="{{ old('rg') ? old('rg') : '' }}"
                                            placeholder="Ex: 170.45 SSP/DF">
                                        </label>
                                        @error('rg')
                                            <p class="c-error__field">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="w-full md:w-6/12 relative flex mt-4 px-4 pb-4">
                                        
                                        <span class="u-icon__free u-icon__id-card before::u-font-size-30 before::u-color-folk-purple"></span>
                                        
                                        <label
                                        class="w-full flex flex-col pl-4" 
                                        for="cpf">
                                            <span class="u-font-size-12 font-light">
                                                CPF
                                            </span>
                                    
                                            <input
                                            class="l-register__input-field font-medium"
                                            type="text"
                                            name="cpf"
                                            id="cpf"
                                            value="{{ old('cpf') ? old('cpf') : '' }}"
                                            placeholder="123.456.789-10">
                                        </label>
                                        @error('cpf')
                                            <p class="c-error__field">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="w-full relative flex mt-4 px-4 pb-4">
                                        
                                        <span class="u-icon__free u-icon__email before::u-font-size-30 before::u-color-folk-cyan"></span>
                                        
                                        <label
                                        class="w-full flex flex-col pl-4" 
                                        for="email">
                                            <span class="u-font-size-12 font-light">
                                                Seu e-mail  
                                            </span>
                                    
                                            <input
                                            class="l-register__input-field font-medium"
                                            type="email"
                                            name="email"
                                            id="email"
                                            value="{{ old('email') ? old('email') : '' }}"
                                            placeholder="meuemail@gmail.com">
                                        </label>
                                        @error('email')
                                            <p class="c-error__field">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="w-full md:w-4/12 relative flex mt-4 px-4 pb-4">
                                        
                                        <span class="u-icon__free u-icon__location-arrow before::u-font-size-30 before::u-color-folk-cyan"></span>
                                        
                                        <label
                                        class="w-full flex flex-col pl-4" 
                                        for="cep">
                                            <span class="u-font-size-12 font-light">
                                                CEP  
                                            </span>
                                    
                                            <input
                                            class="l-register__input-field font-medium"
                                            type="text"
                                            name="cep"
                                            id="cep"
                                            value="{{ old('cep') ? old('cep') : '' }}"
                                            placeholder="70070-300">
                                        </label>
                                        @error('cep')
                                            <p class="c-error__field">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="w-full md:w-4/12 relative flex mt-4 px-4 pb-4">
                                        
                                        <span class="u-icon__free u-icon__road before::u-font-size-30 before::u-color-folk-dark-silver"></span>
                                        
                                        <label
                                        class="w-full flex flex-col pl-4" 
                                        for="rua-quadra">
                                            <span class="u-font-size-12 font-light">
                                                Rua/Quadra  
                                            </span>
                                    
                                            <input
                                            class="l-register__input-field font-medium"
                                            type="text"
                                            name="rua_quadra"
                                            id="rua-quadra"
                                            value="{{ old('rua_quadra') ? old('rua_quadra') : '' }}"
                                            placeholder="70070-300">
                                        </label>
                                        @error('rua_quadra')
                                            <p class="c-error__field">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="w-full md:w-4/12 relative flex mt-4 px-4 pb-4">
                                        
                                        <span class="u-icon__free u-icon__home before::u-font-size-30 before::u-color-folk-purple"></span>
                                        
                                        <label
                                        class="w-full flex flex-col pl-4" 
                                        for="numero">
                                            <span class="u-font-size-12 font-light">
                                                Número da casa/apto/lote
                                            </span>
                                    
                                            <input
                                            class="l-register__input-field font-medium"
                                            type="text"
                                            name="numero"
                                            id="numero"
                                            value="{{ old('numero') ? old('numero') : '' }}"
                                            placeholder="Apto 412">
                                        </label>
                                        @error('numero')
                                            <p class="c-error__field">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="w-full md:w-4/12 relative flex mt-4 px-4 pb-4">
                                        
                                        <span class="u-icon__free u-icon__building before::u-font-size-30 before::u-color-folk-cyan"></span>
                                        
                                        <label
                                        class="w-full flex flex-col pl-4" 
                                        for="bairro">
                                            <span class="u-font-size-12 font-light">
                                                Bairro
                                            </span>
                                    
                                            <input
                                            class="l-register__input-field font-medium"
                                            type="text"
                                            name="bairro"
                                            id="bairro"
                                            value="{{ old('bairro') ? old('bairro') : '' }}"
                                            placeholder="Estrela Dalva 3">
                                        </label>
                                        @error('bairro')
                                            <p class="c-error__field">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="w-full md:w-4/12 relative flex mt-4 px-4 pb-4">
                                        
                                        <span class="u-icon__free u-icon__city before::u-font-size-30 before::u-color-folk-dark-silver"></span>
                                        
                                        <label
                                        class="w-full flex flex-col pl-4" 
                                        for="cidade">
                                            <span class="u-font-size-12 font-light">
                                                Cidade
                                            </span>
                                    
                                            <input
                                            class="l-register__input-field font-medium"
                                            type="text"
                                            name="cidade"
                                            id="cidade"
                                            value="{{ old('cidade') ? old('cidade') : '' }}"
                                            placeholder="Luzlânia">
                                        </label>
                                        @error('cidade')
                                            <p class="c-error__field">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="w-full md:w-4/12 relative flex mt-4 px-4 pb-4">
                                        
                                        <span class="u-icon__free u-icon__globe-americas before::u-font-size-30 before::u-color-folk-purple"></span>
                                        
                                        <label
                                        class="w-full flex flex-col pl-4" 
                                        for="uf">
                                            <span class="u-font-size-12 font-light">
                                                UF (2 letras)
                                            </span>
                                    
                                            <input
                                            class="l-register__input-field font-medium"
                                            type="text"
                                            name="uf"
                                            id="uf"
                                            value="{{ old('uf') ? old('uf') : '' }}"
                                            placeholder="TO">
                                        </label>
                                        @error('uf')
                                            <p class="c-error__field">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="w-full relative flex mt-4 px-4 pb-4">
                                        
                                        <span class="u-icon__free u-icon__phone before::u-font-size-30 before::u-color-folk-cyan"></span>
                                        
                                        <label
                                        class="w-full flex flex-col pl-4" 
                                        for="telefone">
                                            <span class="u-font-size-12 font-light">
                                                Telefone de contato
                                            </span>
                                    
                                            <input
                                            class="l-register__input-field font-medium"
                                            type="text"
                                            name="telefone"
                                            id="telefone"
                                            value="{{ old('telefone') ? old('telefone') : '' }}"
                                            placeholder="Ex: (39) 98765-4321">
                                        </label>
                                        @error('telefone')
                                            <p class="c-error__field">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="w-full md:w-4/12 relative mt-4 px-4 pb-4">

                                        <div class="l-register__box-file u-border-color-cyan py-7 px-4">
                                            
                                            <p class="u-font-size-14 text-center font-normal">
                                                Documento com foto constando CPF (CNH ou RG) <br>
                                                <br>
                                                .pdf ou .jpg de até 1MB 
                                            </p>

                                            <div class="flex">

                                                <div class="w-full mt-4">
                                                    <input
                                                    class="hidden"
                                                    type="file"
                                                    name="documento"
                                                    id="documento">

                                                    <label
                                                    class="block u-font-size-14 font-light text-center u-color-folk-white bg-ebw-cyan hover:bg-ebw-purple-300 transition-colors duration-300 cursor-pointer py-4"
                                                    for="documento">
                                                        Selecionar arquivo
                                                    </label>
                                                </div>
                                            </div>
                                            @error('documento')
                                                <p class="c-error__field">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="w-full mt-4 px-4">

                                        <div class="flex justify-center">

                                            <div class="w-full md:w-2/12">
                                                <input
                                                class="c-btn-submit-2 w-full text-lg font-medium u-color-folk-white py-4 tracking-wide"
                                                type="submit"
                                                value="CONCLUIR">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- 
<script>
    const documento = document.getElementById('documento');

    document.addEventListener('change', function(e) {
        const filename = documento.files[0].name;
        document.querySelector('[for="documento"]').innerText = filename;
    })
</script> --}}

@endsection