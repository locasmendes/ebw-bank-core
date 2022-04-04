@extends( 'site.layouts.master' )

@section( 'content' )

<!-- -->
<!-- banner -->
<section 
class="h-screen md:min-h-620px min-h-400px relative bg-no-repeat bg-cover sm:bg-center pt-52 bg-ebw-grey"
{{-- style="background-image: url( {{ asset( 'images/banner-home.jpg' ) }} );" --}}
>
    <div class="container lg:block mx-auto px-4">
        <h1 class="text-size-3.56 text-ebw-medium-grey">
            <span class="text-ebw-medium-grey font-bold ">Diferente</span> é fazer parte de uma das <span>fintechs</span> que mais crescem no país.<br><span>Seja um sócio investidor!</span>
        </h1>
        {{-- <x-btn-primary href="#" data-set="oi" >
            <x-slot name="icon">
                <i class="fas fa-chevron-right ml-4 text-white sm:text-lg text-sm"></i>
            </x-slot>
            Quero investir
        </x-btn-primary> --}}
        <a href="#" class="inline-block bg-ebw-primary sm:px-8 px-4 sm:py-3 py-2 xl:text-2xl sm:text-xl text-sm font-bold uppercase tracking-wider text-white rounded-full">
            Quero investir <i class="fas fa-chevron-right ml-4 text-white sm:text-lg text-sm"></i>
        </a>
    </div>
</section>
<!-- end banner -->

@endsection

