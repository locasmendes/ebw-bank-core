@extends( 'site.layouts.master' )

@section( 'content' )

<section class="l-register py-20">

    <div class="container mx-auto px-4">

        <div class="flex -mx-4">

            <div class="w-full px-4">

                <div class="flex justify-center -mx-4">

                    <div class="md:w-9/12 px-4">

                      
                        @if (session('submission-succeeded'))
                            <h1>Dados enviados com sucesso</h1>
                        @else
                            <p class="u-font-18 font-light">
                                Peça agora a sua máquina Passou Ganhou! <br>
                                Primeiro precisamos dos seus dados
                            </p>
                            
                            <form action="{{ route('cadastro.store') }}" method="POST" enctype="multipart/form-data">
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
                                        
                                        <span class="u-icon__free u-icon__address-card before::u-font-size-30 before::u-color-folk-dark-silver!"></span>
                                        
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
                                            type="text"
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
                                                    class="block u-font-size-14 font-light text-center u-color-folk-white u-bg-folk-cyan hover:u-bg-folk-purple py-4"
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
                                                class="c-btn-submit w-full u-font-size-12 font-mediu u-color-folk-white py-4"
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
</section>

<script>
    const documento = document.getElementById('documento');

    document.addEventListener('change', function(e) {
        const filename = documento.files[0].name;
        document.querySelector('[for="documento"]').innerText = filename;
    })
</script>

@endsection