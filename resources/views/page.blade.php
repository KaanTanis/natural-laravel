@extends('master')

@section('content')
    <section id="hero" class="
        container mx-auto h-[14rem] md:h-auto md:mb-36 mb-12 px-3 md:px-0 mt-8 relative -z-10">

        <img id="hero-img" class="w-full rounded-2xl bottom-hero" src="{{ Storage::url($data->_get('banner')) }}" alt="">
        <div id="hero-title" class="
            md:text-7xl text-4xl font-newOrderBold text-white
            absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            {{ $data->_get('title') }}
        </div>

        <div class="bottom-arrow"></div>

        <x-bi-arrow-down-short
            class="absolute font-bold -bottom-3 left-0 right-0 mx-auto my-0 w-8 h-auto text-brown">
        </x-bi-arrow-down-short>
    </section>


    <section class="container mx-auto">
        <div class="font-newOrderLight text-natural-brown-dark md:!w-3/6 mx-auto text-center mb-14 owl-carousel owl-theme">

            <div class="item">
                <h1 class="text-6xl font-newOrderRegular mb-4">{{ $data->_get('title') }}</h1>
                {!! $data->_get('content') !!}
            </div>
            @if($otherPages->count() > 0)
                @foreach($otherPages as $otherPage)
                    <div class="item">
                        <h1 class="text-6xl font-newOrderRegular mb-4">{{ $otherPage->_get('title') }}</h1>
                        {!! $otherPage->_get('content') !!}
                    </div>
                @endforeach
            @endif
        </div>
        @if($otherPages->count() > 0)
            <div class="flex justify-between mb-24">
                @foreach($otherPages as $otherPage)
                    <div class="text-center">
                    <x-dynamic-component data-title="{{ $otherPage->_get('title') }}" data-banner="{{ Storage::url($otherPage->_get('banner')) }}" data-index="{{ $loop->index }}" style="color: #CE9068" class="loopNav h-24 w-24 hover:cursor-pointer"
                                         :component="$otherPage->_get('icon')"></x-dynamic-component>
                        <span class="font-newOrderLight text-sm text-brown">{{ $otherPage->_get('title') }}</span>
                    </div>
                @endforeach
            </div>
        @endif
    </section>


    @push('scripts')
        <script>
            $(document).ready(function(){
                var mainSlider = $('.owl-carousel');

                mainSlider.owlCarousel({
                    items: 1,
                    navs: false,
                    dots: false
                });

                $('.loopNav').on('click', function() {
                    mainSlider.trigger('to.owl.carousel', $(this).data('index') + 1);

                    $('#hero-img').attr('src', $(this).data('banner'));
                    $('#hero-title').html($(this).data('title'));
                    return false;
                });
            });
        </script>
    @endpush
@endsection
