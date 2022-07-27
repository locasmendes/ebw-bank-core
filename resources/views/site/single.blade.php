@extends( 'site.layouts.master ' )

@section('title', $post->title)

@section( 'content' )

<!-- banner -->
<div class="relative">
    <img src="{{ asset('images/background-pre-registration.jpg') }}" class="w-full object-fit object-center xl:min-h-400px sm:min-h-300px min-h-240px" alt="Background Blog">
    <div class="absolute left-1/2 -translate-x-1/2 bottom-20 transform w-full px-5">
        <h1 class="text-white xl:text-6xl sm:text-5xl text-3xl text-center font-bold">Blog EBW Bank</h1>
    </div>
</div>

<section class="l-single">
    <div class="container max-w-full mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-8/12 px-4 pt-5">
                <div class="w-full u-bg-folk-white pt-12 lg:px-4 pb-16 mb-5 rounded-md">

                    <div class="flex justify-center items-start">
                        <img
                        src="{{ asset(Storage::url($post->image)) }}"
                        alt="{{ $post->title }}">
                    </div>
                    <div>
                        <h2 class="text-4xl leading-7 font-bold mt-10 text-center mb-3">
                           {{$post->title }}
                        </h2>
                        <h3 class="text-2xl leading-7 font-semibold text-center mb-10" style="color: {{ $post->category->category_color }}">{{ $post->category->category_name }}</h3>
                    </div>

                    <div class="blog-content">
                        {!! $post->body !!}
                    </div>

                </div>
                @if ($post->attachments)
                    <div
                    x-data="{open: false}"
                    class="bg-white rounded-md pt-5 px-5 pb-6 mb-5"
                    x-on:keyup.escape.window="open = false">
                        <template x-teleport="body">
                            <div class="fixed inset-0 bg-black bg-opacity-80 z-50 flex justify-center items-center h-screen py-20" x-cloak x-show="open">
                                <button
                                x-on:click="open = false"
                                class="absolute top-5 left-5"
                                role="button"
                                aria-label="Close Modal"
                                aria-disabled="false">
                                    <i class="fas fa-times text-5xl text-white"></i>
                                </button>
                                <div class="container h-full">
                                    <div class="swiper swiper-blog-single h-full"
                                    style="padding-bottom: 2.5rem;--swiper-pagination-color: #ffffff;--swiper-pagination-bullet-size: 12px;--swiper-pagination-bullet-inactive-color: #ffffff;--swiper-pagination-bullet-inactive-opacity: 0.4;--swiper-navigation-size: 60px; --swiper-navigation-color: #ffffff">
                                        <div class="swiper-wrapper">
                                            @foreach ($post->attachments as $attachment)
                                                <div class="swiper-slide h-full flex justify-center items-center px-16">
                                                    <img class="h-full rounded-md" src="{{ asset("storage/$attachment") }}" alt="Galeria {{ $post->title }}">
                                                </div>

                                            @endforeach
                                        </div>
                                        <div class="swiper-pagination swiper-pagination-single z-10"></div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <h3 class="text-center font-medium text-3xl mb-10 text-ebw-secondary">Galeria de fotos</h3>
                        <div class="swiper swiper-blog"
                        style="padding-bottom: 2rem;--swiper-pagination-color: #d63733;--swiper-pagination-bullet-size: 10px">
                            <div class="swiper-wrapper">
                                @foreach ($post->attachments as $attachment)
                                    <div class="swiper-slide">
                                        <button class="shadow-gallery rounded-lg overflow-hidden w-full" x-on:click="open = !open; $dispatch('slide-swiper-blog', {index:{{ $loop->index}}})">
                                            <img class="h-44 w-full object-center object-cover" src="{{ asset("storage/$attachment") }}" alt="Galeria {{ $post->title }}">
                                        </button>
                                    </div>

                                @endforeach
                            </div>
                            <div class="swiper-pagination swiper-pagination-blog"></div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- mvv -->
{{-- @include( 'site.partials.mvv' ) --}}
<!-- end mvv -->

@endsection
