@extends( 'site.layouts.master' )

@section( 'content' )

<!-- -->
<!-- banner -->
<section 
class="l-banner flex justify-center items-center py-24 md:py-0"
style="background-image: url( {{ asset( 'images/banner-new.png' ) }} );">

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap">

            <div class="w-full lg:w-4/12 flex lg:block flex-col items-center lg:ml-32">

                <!-- <p class="l-banner__title leading-12 lg:leading-10 u-font-weight-regular text-center lg:text-left u-color-folk-white">
                    Venda na internet <br>
                    com segurança <br>
                    antifraude e <br>
                    <span class="font-bold u-color-folk-white">parcelamento <br>
                    em até 12x</span>
                </p> -->

                <span class="l-banner__title leading-12 lg:leading-10 block u-font-weight-regular text-center lg:text-left all:u-color-folk-white">
                    @if( !empty( $home ))
                        @if( $home->banner_text_highlight )
                            {!! \Illuminate\Support\Str::markdown( $home->banner_text_highlight ) !!}
                        @endif
                    @endif
                </span>

                <!-- <p class="u-font-size-15 u-font-weight-medium text-center lg:text-left u-color-folk-primary mt-5">
                    EBW Pay foi pensado e desenvolvido <br>
                    para o micro e pequeno empreendedor.
                </p> -->

                <span class="block u-font-size-15 u-font-weight-medium text-center lg:text-left all:u-color-folk-primary mt-5">
                    @if( !empty( $home ))
                        @if( $home->banner_text_small )
                            {!! \Illuminate\Support\Str::markdown( $home->banner_text_small ) !!}
                        @endif
                    @endif
                </span>
                
                @if( !empty( $general ) )
                    @if( $general->button_start_now ) 
                        <a
                        class="c-btn-pattern c-btn-icon-arrow u-border-color-primary relative inline-block font-bold uppercase u-color-folk-white hover:u-color-folk-primary u-bg-folk-primary hover:u-bg-folk-none mt-9 py-5 pl-7 pr-28"
                        href="{{ $general->button_start_now }}">
                            comece agora
                        </a>
                    @endif
                @endif
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- digital -->
<section class="l-digital py-12">

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center">

            <div class="w-full lg:w-10/12">

                <h3 class="l-digital__title u-line-height-100 font-bold text-center u-color-folk-primary mb-12">
                    Mais do que um banco digital, <br>
                    o parceiro no desenvolvimento de empresas. <br> 
                    Somos diferentes!
                </h3>

                <p class="l-digital__text font-normal text-center"> 
                    Nascemos com o propósito de promover o progresso dos brasileiros. <br>
                    Crescemos porque acreditamos que empreender faz a diferença.      
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end digital -->

<!-- press -->
<section class="l-press pt-12 pb-32">

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center -mx-4">
            
            <div class="w-10/12 mb-12 px-4">

                <h3 class="l-press__title font-bold text-center uppercase u-color-folk-primary">
                    imprensa
                </h3>

                <p class="l-press__text font-normal text-center">
                    O que estão falando sobre nós.
                </p>
            </div>

            <div class="w-10/12 px-4">

                <div class="flex flex-wrap -mx-4">

                    <!-- loop -->
                    <div class="w-4/12 my-4 px-4">

                        <div>

                            <div class="l-press__card-img">
                                <img
                                src="{{ asset( 'images/image-example.png' ) }}"
                                alt="Imagem de exemplo">
                            </div>

                            <div class="py-4">

                                <h6 class="l-press__card-title u-line-height-100 font-bold text-center mb-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </h6>

                                <p class="font-normal text-center">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end loop -->

                    <div class="w-4/12 my-4 px-4">

                        <div>

                            <div class="l-press__card-img">
                                <img
                                src="{{ asset( 'images/image-example.png' ) }}"
                                alt="Imagem de exemplo">
                            </div>

                            <div class="py-4">

                                <h6 class="l-press__card-title u-line-height-100 font-bold text-center mb-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </h6>

                                <p class="font-normal text-center">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-4/12 my-4 px-4">

                        <div>

                            <div class="l-press__card-img">
                                <img
                                src="{{ asset( 'images/image-example.png' ) }}"
                                alt="Imagem de exemplo">
                            </div>

                            <div class="py-4">

                                <h6 class="l-press__card-title u-line-height-100 font-bold text-center mb-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </h6>

                                <p class="font-normal text-center">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-4/12 my-4 px-4">

                        <div>

                            <div class="l-press__card-img">
                                <img
                                src="{{ asset( 'images/image-example.png' ) }}"
                                alt="Imagem de exemplo">
                            </div>

                            <div class="py-4">

                                <h6 class="l-press__card-title u-line-height-100 font-bold text-center mb-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </h6>

                                <p class="font-normal text-center">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-4/12 my-4 px-4">

                        <div>

                            <div class="l-press__card-img">
                                <img
                                src="{{ asset( 'images/image-example.png' ) }}"
                                alt="Imagem de exemplo">
                            </div>

                            <div class="py-4">

                                <h6 class="l-press__card-title u-line-height-100 font-bold text-center mb-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </h6>

                                <p class="font-normal text-center">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-4/12 my-4 px-4">

                        <div>

                            <div class="l-press__card-img">
                                <img
                                src="{{ asset( 'images/image-example.png' ) }}"
                                alt="Imagem de exemplo">
                            </div>

                            <div class="py-4">

                                <h6 class="l-press__card-title u-line-height-100 font-bold text-center mb-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </h6>

                                <p class="font-normal text-center">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end press -->

<!-- investor -->
<section class="l-investor py-20">    

    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center -mx-4">

            <div class="w-10/12 flex justify-between px-4">

                <a
                class="c-btn-pattern c-btn-icon-arrow hover:u-opacity:08 u-border-color-primary relative inline-block font-normal uppercase all:u-color-folk-white u-bg-folk-primary py-5 pl-7 pr-16"
                href="#">
                    quero ser <span class="font-bold">sócio investidor</span>
                </a>

                <a
                class="c-btn-pattern c-btn-icon-arrow hover:u-opacity:08 u-border-color-primary relative inline-block font-normal uppercase all:u-color-folk-white u-bg-folk-primary py-5 pl-7 pr-16"
                href="#">
                    saiba porque investir na <span class="font-bold">EBW</span>
                </a>
            </div>
        </div>  
    </div>
</section>
<!-- end investor -->

@endsection

