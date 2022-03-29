@extends( 'site.layouts.master ' )

@section( 'content' )

<!-- banner -->
<div class="relative">
    <img src="{{ asset('images/background-pre-registration.jpg') }}" class="w-full" alt="">
    <div class="absolute left-1/2 -translate-x-1/2 bottom-20 transform">
        <h1 class="text-white text-6xl text-center font-bold">Blog EBW Bank</h1>
    </div>
</div>

<section class="l-single">
    <div class="container max-w-full mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-8/12 u-bg-folk-white px-4">
                <div class="w-full u-bg-folk-white pt-12 lg:px-4 pb-16">
                    
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
            </div>
        </div>
    </div>
</section>

<!-- mvv -->
@include( 'site.partials.mvv' )
<!-- end mvv -->

@endsection