@extends( 'site.layouts.master ' )

@section( 'content' )

<!-- banner -->
<section 
class="l-mini-banner relative flex justify-center items-center"
style="background-image: url( {{ asset( 'images/register-banner.png' ) }} )">

    <div class="container relative mx-auto px-4">

        <div class="flex flex-wrap justify-center">

            <div 
            class="w-10/12 rellax mt-20" 
            data-rellax-speed="2">

                <p class="l-mini-banner__text font-medium text-center u-color-folk-primary">
                    Cadastro
                </p>

                <p class="l-mini-banner__title text-center leading-10">
                    <span class="font-regular text-white">Comece agora mesmo uma</span> <br>
                    <span class="font-bold text-white">revolução nos seus negócios.</span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<section class="l-register u-bg-folk-light-gray py-20">

    <div class="container mx-auto px-4">

        <div class="flex justity-center">

            <div class="w-full md:w-11/12">

                <h6 class="l-register__text font-bold text-center mb-12">
                    Preencha os campos abaixo para receber  nosso atendimento exclusivo
                </h6>

                <form>

                    <div class="flex flex-wrap -mx-4">

                        <div class="w-full md:w-4/12">
                            
                            <div class="flex flex-wrap">

                                <div class="w-full flex flex-col my-4 px-4">
                                    <label
                                    class="u-font-size-15 u-font-weight-regular"
                                    for="nome">
                                        Nome
                                    </label>

                                    <input
                                    class="u-border-radius-5 focus:c-btn-reset p-3"
                                    type="text"
                                    id="nome"
                                    name="nome">
                                </div>

                                <div class="w-full flex flex-col my-4 px-4">
                                    <label
                                    class="u-font-size-15 u-font-weight-regular"
                                    for="sobrenome">
                                        Sobrenome
                                    </label>

                                    <input
                                    class="u-border-radius-5 focus:c-btn-reset p-3"
                                    type="text"
                                    id="sobrenome"
                                    name="sobrenome">
                                </div>

                                <div class="w-full flex flex-col my-4 px-4">
                                    <label
                                    class="u-font-size-15 u-font-weight-regular"
                                    for="email">
                                        E-mail
                                    </label>

                                    <input
                                    class="u-border-radius-5 focus:c-btn-reset p-3"
                                    type="email"
                                    id="email"
                                    name="email">
                                </div>

                                <div class="w-full flex flex-col my-4 px-4">
                                    <label
                                    class="u-font-size-15 u-font-weight-regular"
                                    for="telefone">
                                        Telefone
                                    </label>

                                    <input
                                    class="u-border-radius-5 focus:c-btn-reset p-3"
                                    type="text"
                                    id="telefone"
                                    name="telefone">
                                </div>

                                <div class="w-full flex flex-col my-4 px-4">
                                    <label
                                    class="u-font-size-15 u-font-weight-regular"
                                    for="cpf">
                                        CPF
                                    </label>

                                    <input
                                    class="u-border-radius-5 focus:c-btn-reset p-3"
                                    type="text"
                                    id="cpf"
                                    name="cpf">
                                </div>
                            </div>
                        </div>

                        <div class="w-full md:w-8/12">

                            <div class="flex flex-wrap">

                                <div class="w-full flex flex-col my-4 px-4">
                                    <label
                                    class="u-font-size-15 u-font-weight-regular"
                                    for="endereco">
                                        Endereço
                                    </label>

                                    <input
                                    class="u-border-radius-5 focus:c-btn-reset p-3"
                                    type="text"
                                    id="endereco"
                                    name="endereco">
                                </div>

                                <div class="w-full flex flex-col my-4 px-4">
                                    <label
                                    class="u-font-size-15 u-font-weight-regular"
                                    for="complemento">
                                        Complemento
                                    </label>

                                    <input
                                    class="u-border-radius-5 focus:c-btn-reset p-3"
                                    type="text"
                                    id="complemento"
                                    name="complemento">
                                </div>

                                <div class="w-full md:w-6/12 flex flex-col my-4 px-4">
                                    <label
                                    class="u-font-size-15 u-font-weight-regular"
                                    for="cep">
                                        CEP
                                    </label>

                                    <input
                                    class="u-border-radius-5 focus:c-btn-reset p-3"
                                    type="text"
                                    id="cep"
                                    name="cep">
                                </div>

                                <div class="w-full md:w-6/12 flex flex-col my-4 px-4">
                                    <label
                                    class="u-font-size-15 u-font-weight-regular"
                                    for="estado">
                                        Estado
                                    </label>

                                    <input
                                    class="u-border-radius-5 focus:c-btn-reset p-3"
                                    type="text"
                                    id="estado"
                                    name="estado">
                                </div>

                                <div class="w-full flex flex-col my-4 px-4">
                                    <label
                                    class="u-font-size-15 u-font-weight-regular"
                                    for="cidade">
                                        Cidade
                                    </label>

                                    <input
                                    class="u-border-radius-5 focus:c-btn-reset p-3"
                                    type="text"
                                    id="cidade"
                                    name="cidade">
                                </div>

                                <div class="w-full flex justify-end mt-8 px-4">

                                    <div class="w-full md:w-8/12 lg:w-6/12">
                                        <input
                                        class="c-btn-submit w-full block u-font-size-15 font-bold u-color-folk-white p-4"
                                        type="submit"
                                        value="SOCILITAR ATENDIMENTO">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection