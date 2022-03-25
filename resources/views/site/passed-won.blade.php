@extends( 'site.layouts.master ' )

@section( 'content' )

<!-- banner desktop -->
<section class="overflow-hidden hidden lg:block">

    <div class="flex">

        <div class="w-full">

            <!-- swiper -->
            <div class="swiper-container js-swiper-banner">

                <div class="swiper-wrapper">

                    <!-- estatico e temporario -->
                    <a
                    class="swiper-slide"
                    href="#">
                        <img
                        src="{{ asset( 'images/banner-image-desktop-1.png' ) }}"
                        alt="Imagem de exemplo">
                    </a>
                    <!-- end estatico e temporario -->

                    {{-- @if( !empty($home) )
                        @if( isset($home->banners) )
                            @foreach( $home->banners as $banners ) 
                                <a 
                                class="swiper-slide" 
                                href="{{ $banners['banner_link'] == true ? $banners['banner_link'] : '#' }}">
                                    @if( isset($banners['banner_desktop']) )
                                        <img
                                        src="{{ Storage::url( $banners['banner_desktop'] ) }}"
                                        alt="">
                                    @endif
                                </a>
                            @endforeach
                        @endif
                    @endif --}}
                </div>
            </div>
            <!-- end swiper -->
        </div>
    </div>
</section>
<!-- end banner desktop -->

<!-- banner mobile -->
<section class="overflow-hidden lg:hidden">

    <div class="flex">

        <div class="w-full">

            <!-- swiper -->
            <div class="swiper-container js-swiper-banner">

                <div class="swiper-wrapper">
                    
                    <!-- estatico e temporario -->
                    <a
                    class="swiper-slide"
                    href="/#">
                        <img
                        src="{{ asset( 'images/banner-image-mobile-1.png' ) }}"
                        alt="Imagem de exemplo">
                    </a>
                    <!-- end estatico e temporario -->

                    {{-- @if( isset($home->banners) )
                        @foreach( $home->banners as $banners )
                            <a 
                            class="swiper-slide" 
                            href="{{ $banners['banner_link'] == true ? $banners['banner_link'] : '#' }}">
                                @if( isset($banners['banner_mobile']) )
                                    <img
                                    src="{{ Storage::url( $banners['banner_mobile'] ) }}"
                                    alt="">
                                @endif
                            </a>
                        @endforeach
                    @endif --}}
                </div>
            </div>
            <!-- end swiper -->
        </div>
    </div>
</section>
<!-- end banner mobile -->

@endsection
