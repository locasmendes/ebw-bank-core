@extends( 'site.layouts.master' )

@section('title', 'Banco de Talentos')

@section( 'content' )
<span class="no-floating-menu"></span>
<section class="bg-ebw-red pt-40 pb-8 relative">
    <span class="fingerprint fingerprint__left-1"></span>
    <span class="fingerprint fingerprint__left-2"></span>
    <span class="fingerprint fingerprint__left-3"></span>
    <span class="fingerprint fingerprint__left-4"></span>
    <span class="fingerprint fingerprint__right-1"></span>
    <span class="fingerprint fingerprint__right-2"></span>
    <span class="fingerprint fingerprint__right-3"></span>
    <span class="fingerprint fingerprint__right-4"></span>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <div>
                <img src="{{ asset('images/img-banco-talentos.png') }}" class="mx-auto mb-8 2xl:max-w-none xl:max-w-xl md:max-w-md sm:max-w-sm" alt="Banco de Talentos">
            </div>
            <h1 class="text-white lg:text-size-2.5 md:text-4xl sm:text-3xl text-xl leading-tightest mb-11">A <b>EBW Bank</b> está sempre em busca<br> de <b>GRANDES PROFISSIONAIS.</b></h1>
            <p class="md:text-2xl text-xl leading-tight text-white mb-8">E o nosso <b>Banco de Talentos</b> é o caminho mais fácil para que você possa fazer parte<br class="hidden lg:block">de uma <b>equipe sensacional</b>, que tem muita garra, vontade de crescer e fazer acontecer.</p>
            <h3 class="md:text-2xl text-xl leading-tight text-white font-bold">Cadastre seu currículo agora mesmo e vem!</h3>
        </div>
    </div>
</section>

<section class="pt-16 pb-20" id="talent-form">
    <div class="max-w-5xl mx-auto px-5">
        <h2 class="text-dados text-center text-ebw-red md:text-5xl sm:text-4xl text-2xl mb-8 hidden">Insira abaixo seus dados</h2>
        <h3 class="text-saber text-center text-black md:text-5xl sm:text-4xl text-2xl mb-8 hidden">Queremos saber um pouco sobre você:</h3>
        <form method="POST" action="{{ route('talent.store') }}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="swiper talent-swiper pb-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-hash="passo-1">
                        <div class="border-2 border-black lg:px-40 md:px-28 sm:px-16 px-3 pt-12 pb-16">
                            <h3 class="md:text-3xl sm:text-2xl text-lg font-medium leading-tight text-black text-center mb-5">Cadastre o seu currículo agora mesmo:</h3>
                            <x-input type="text" name="name" placeholder="Nome" data-name="Nome completo" validate="min:3">
                                Nome Completo
                            </x-input>
                            <x-input type="email" name="email" placeholder="contato@email.com.br"  data-name="Email" validate="email" >
                               Seu melhor e-mail
                            </x-input>
                            <x-input type="text" name="phone" placeholder="(00) 00000-0000" data-name="Telefone" validate="min:14">
                               Telefone (Whatsapp)
                            </x-input>

                            <div class="pt-8 flex justify-center">

                              <x-button-right type="button" class="next-button">
                                 Próxima
                              </x-button-right>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-hash="passo-2">
                        <div class="border-2 border-black lg:px-40 md:px-28 sm:px-16 px-3 pt-12 pb-16">
                            <h3 class="md:text-3xl sm:text-2xl text-lg font-medium leading-tight text-black text-center mb-5">Agora, precisamos dos<br>seus dados pessoais:</h3>
                            <x-input type="text" name="document_cpf" data-name="CPF" placeholder="Insira sem pontos ou traços" validate="required">
                                CPF
                            </x-input>
                            <x-input type="text" name="document_rg" data-name="RG" placeholder="Insira sem pontos ou traços" validate="required">
                                RG com Órgão Expedidor
                            </x-input>

                            <div class="pt-8 flex justify-center">
                              <x-button-left type="button" class="prev-button">
                                    Voltar
                                </x-button-left>
                                <x-button-right type="button" class="next-button sm:mx-4 mx-2">
                                    Próxima
                                 </x-button-right>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-hash="passo-3">
                        <div class="border-2 border-black lg:px-40 md:px-28 sm:px-16 px-3 pt-12 pb-16">
                            <h3 class="md:text-3xl sm:text-2xl text-lg font-medium leading-tight text-black text-center mb-5">Queremos saber em que<br>lugar do Brasil você está:</h3>
                            <x-input type="text" name="state" data-name="Estado" placeholder="Estado" validate="required">
                                Estado
                            </x-input>
                            <x-input type="text" name="city" data-name="Cidade" placeholder="Cidade" validate="required">
                                Cidade
                            </x-input>
                            <x-input type="text" name="cep" data-name="CEP" placeholder="00000-000" validate="equal:9">
                                CEP
                            </x-input>

                            <div class="pt-8 flex justify-center">
                              <x-button-left type="button" class="prev-button">
                                    Voltar
                                </x-button-left>
                                <x-button-right type="button" class="next-button sm:mx-4 mx-2">
                                    Próxima
                                 </x-button-right>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-hash="passo-4">
                        <div class="border-2 border-black lg:px-40 md:px-28 sm:px-16 px-3 pt-12 pb-16">
                            <h3 class="md:text-3xl sm:text-2xl text-lg font-medium leading-tight text-black text-center mb-2">Chegou a hora de nos contar sobre as suas três experiências profissionais:</h3>
                            <p class="text-center sm:text-xl text-base leading-tight text-black mb-5">(Coloque o nome da empresa e um breve resumo das suas funções)</p>
                            <x-input type="text" name="company_1" data-name="Nome da empresa" placeholder="Nome da empresa" validate="required">
                               Nome da empresa 1
                            </x-input>
                            <x-input type="text" name="function_1" data-name="Resumo das Funções" placeholder="Resumo das Funções" validate="required">
                                Função
                            </x-input>
                            <div class="w-24 h-1 bg-ebw-red mx-auto my-5"></div>
                            <x-input type="text" name="company_2" data-name="Nome da empresa" placeholder="Nome da empresa" validate="required">
                               Nome da empresa 2
                            </x-input>
                            <x-input type="text" name="function_2" data-name="Resumo das Funções" placeholder="Resumo das Funções" validate="required">
                                Função
                            </x-input>
                            <div class="w-24 h-1 bg-ebw-red mx-auto my-5"></div>
                            <x-input type="text" name="company_3" data-name="Nome da empresa" placeholder="Nome da empresa" validate="required">
                               Nome da empresa 3
                            </x-input>
                            <x-input type="text" name="function_3" data-name="Resumo das Funções" placeholder="Resumo das Funções" validate="required">
                                Função
                            </x-input>

                            <div class="pt-8 flex justify-center">
                              <x-button-left type="button" class="prev-button">
                                    Voltar
                                </x-button-left>
                                <x-button-right type="button" class="next-button sm:mx-4 mx-2">
                                    Próxima
                                 </x-button-right>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-hash="passo-5">
                        <div class="border-2 border-black lg:px-40 md:px-28 sm:px-16 px-3 pt-12 pb-16">
                            <h3 class="md:text-3xl sm:text-2xl text-lg font-medium leading-tight text-black text-center mb-2">Diz pra gente qual foi a sua maior <br> realização profissional ou desafio:</h3>
                            <p class="text-center sm:text-xl text-base leading-tight text-black mb-5">(Essa pergunta não é obrigatória, mas pode ser um diferencial)</p>
                            <x-textarea name="maior_realizacao" placeholder="Digite aqui sua resposta" rows="14" />

                            <div class="pt-8 flex justify-center">
                              <x-button-left type="button" class="prev-button">
                                    Voltar
                                </x-button-left>
                                <x-button-right type="button" class="next-button sm:mx-4 mx-2">
                                    Próxima
                                 </x-button-right>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-hash="passo-6">
                        <div class="border-2 border-black lg:px-40 md:px-28 sm:px-16 px-3 pt-12 pb-16">
                            <h3 class="md:text-3xl sm:text-2xl text-lg font-medium leading-tight text-black text-center mb-6">Cite uma situação profissional em<br>que você exerceu liderança.</h3>
                            <x-textarea name="exerceu_lideranca" data-name="campo" placeholder="Digite aqui sua resposta" rows="14" validate="required" />

                            <div class="pt-8 flex justify-center">
                              <x-button-left type="button" class="prev-button">
                                    Voltar
                                </x-button-left>
                                <x-button-right type="button" class="next-button sm:mx-4 mx-2">
                                    Próxima
                                 </x-button-right>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-hash="passo-7">
                        <div class="border-2 border-black lg:px-40 md:px-28 sm:px-16 px-3 pt-12 pb-16">
                            <h3 class="md:text-3xl sm:text-2xl text-lg font-medium leading-tight text-black text-center mb-6">Que tipo de ambiente de<br>trabalho você prefere?</h3>
                            <x-textarea name="tipo_ambiente" data-name="campo" placeholder="Digite aqui sua resposta" rows="8" validate="required" />

                            <div class="pt-8 flex justify-center">
                              <x-button-left type="button" class="prev-button">
                                    Voltar
                                </x-button-left>
                                <x-button-right type="button" class="next-button sm:mx-4 mx-2">
                                    Próxima
                                 </x-button-right>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-hash="passo-8">
                        <div class="border-2 border-black lg:px-40 md:px-28 sm:px-16 px-3 pt-12 pb-16">
                            <h3 class="md:text-3xl sm:text-2xl text-lg font-medium leading-tight text-black text-center mb-6">Qual a sua escolaridade</h3>

                            <div class="flex justify-center">
                                <div class="xl:w-4/12 md:w-5/12 sm:w-1/2 w-10/12">
                                    <div class="radio-wrapper input-wrapper relative" data-name="-" validate="radio:required">
                                        <x-radio name="escolaridade" value="Doutorado"  />
                                        <x-radio name="escolaridade" value="Mestrado" />
                                        <x-radio name="escolaridade" value="Especialização" />
                                        <x-radio name="escolaridade" value="Graduação" />
                                        <x-radio name="escolaridade" value="Ensino Médio" />
                                        <x-radio name="escolaridade" value="Ensino Fundamental" />

                                        <div class="error-message absolute -top-5 left-0 whitespace-nowrap text-sm text-ebw-red font-medium "></div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-8 flex justify-center">
                              <x-button-left type="button" class="prev-button">
                                    Voltar
                                </x-button-left>
                                <x-button-right type="button" class="next-button sm:mx-4 mx-2">
                                    Próxima
                                 </x-button-right>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-hash="passo-9">
                        <div class="border-2 border-black lg:px-40 md:px-28 sm:px-16 px-3 pt-12 pb-16">
                            <h3 class="md:text-3xl sm:text-2xl text-lg font-medium leading-tight text-black text-center mb-6">Qual seu conhecimento em informática:</h3>

                            <div class="flex justify-center">
                                <div class="xl:w-4/12 md:w-5/12 sm:w-1/2 w-10/12">
                                    <div class="checkbox-wrapper input-wrapper relative" data-name="-" validate="checkbox:required">
                                        <x-checkbox name="conhecimento_informatica[]" value="E-mail" />
                                        <x-checkbox name="conhecimento_informatica[]" value="Redes Sociais" />
                                        <x-checkbox name="conhecimento_informatica[]" value="Pacote Office" />
                                        <x-checkbox name="conhecimento_informatica[]" value="Excell" />
                                        <x-checkbox name="conhecimento_informatica[]" value="Adobe" />
                                        <div class="error-message absolute -top-5 left-0 whitespace-nowrap text-sm text-ebw-red font-medium "></div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-8 flex justify-center">
                              <x-button-left type="button" class="prev-button">
                                    Voltar
                                </x-button-left>
                                <x-button-right type="button" class="next-button sm:mx-4 mx-2">
                                    Próxima
                                 </x-button-right>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-hash="passo-10">
                        <div class="border-2 border-black lg:px-40 md:px-28 sm:px-16 px-3 pt-12 pb-16">
                            <h3 class="md:text-3xl sm:text-2xl text-lg font-medium leading-tight text-black text-center mb-6">Você tem conhecimento em outras línguas, além do Português? Tem vontade de aprender?<br>Conta pra gente sobre isso</h3>
                            <x-textarea name="conhecimento_linguas" placeholder="Digite aqui sua resposta" data-name="campo" validate="required" rows="8" />

                            <div class="pt-8 flex justify-center">
                                <x-button-left type="button" class="prev-button">
                                    Voltar
                                </x-button-left>
                                <x-button-right type="button" class="next-button sm:mx-4 mx-2">
                                    Próxima
                                 </x-button-right>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-hash="passo-11">
                        <div class="border-2 border-black lg:px-40 md:px-28 sm:px-16 px-3 pt-12 pb-16">
                            <h3 class="md:text-3xl sm:text-2xl text-lg font-medium leading-tight text-black text-center mb-6">E pra finalizar. Em que área você deseja uma oportunidade de trabalho:</h3>

                            <div class="flex justify-center">
                                <div class="xl:w-5/12 sm:w-1/2 w-full">
                                    <div class="radio-wrapper input-wrapper relative" data-name="-" validate="radio:required">
                                        <x-radio name="area_trabalho" value="Administrativo" />
                                        <x-radio name="area_trabalho" value="Vendas" />
                                        <x-radio name="area_trabalho" value="Comunicação e Marketing" />
                                        <x-radio name="area_trabalho" value="RH" />
                                        <x-radio name="area_trabalho" value="Engenheria e TI" />
                                        <div class="error-message absolute -top-5 left-0 whitespace-nowrap text-sm text-ebw-red font-medium "></div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-8 flex justify-center">
                                <x-button-left type="button" class="prev-button">
                                    Voltar
                                </x-button-left>
                                <x-button-right type="button" class="next-button sm:mx-4 mx-2">
                                    Próxima
                                 </x-button-right>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-hash="passo-12">
                        <div class="border-2 border-black lg:px-40 md:px-28 sm:px-16 px-3 pt-12 pb-16">
                            <h3 class="md:text-3xl sm:text-2xl text-lg font-medium leading-tight text-black text-center ">Caso deseje, você pode anexar seu currículo.</h3>
                            <p class="text-base font-medium mb-6 text-ebw-red text-center">(Apenas arquivos em PDF)</p>
                            <div class="pt-8 relative">
                                <input type="file" name="curriculo" id="curriculo" class="hidden" accept=".pdf,application/pdf">
                                <div id="curriculo-filename" class=" text-center text-ebw-medium-grey font-medium"></div>
                                <div class="flex justify-center">
                                    <label for="curriculo"class="cursor-pointer text-white bg-ebw-red md:py-4 py-3 md:px-10 sm:px-6 px-4 rounded-full hover:bg-opacity-80 transition-opacity duration-200">
                                        <span class="font-bold uppercase tracking-wide sm:text-xl text-sm">
                                            Anexar currículo
                                        </span>
                                        <i class="fas fa-chevron-right text-white sm:text-lg text-sm sm:ml-2 ml-1"></i>
                                    </label>
                                </div>
                            </div>

                            <p class="text-center sm:text-xl text-base leading-tight text-black mt-10">Se estiver tudo certo, clique em <b>enviar</b>!</p>
                            <div class="pt-4 flex justify-center">
                              <x-button-left type="button" class="prev-button">
                                    Voltar
                                </x-button-left>
                                <x-button-right type="submit" class="sm:mx-4 mx-2">
                                    Enviar
                                 </x-button-right>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </form>
    </div>
</section>

@endsection

