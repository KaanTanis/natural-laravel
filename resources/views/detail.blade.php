@extends('master')

@section('content')

    <section id="hero" class="
        container mx-auto h-[14rem] md:h-auto md:mb-36 mb-12 px-3 md:px-0 mt-8 relative">

        <img class="w-full rounded-2xl" src="{{ Storage::url($product->_get('banner')) }}" alt="">

{{--        <div class="bg-center bg-cover hero rounded-2xl absolute"--}}
{{--                 style="--}}
{{--             background-image: url({{ Storage::url($product->_get('banner')) }})">--}}
{{--        </div>--}}


            <div class="
            md:text-7xl text-4xl font-newOrderBold text-white
            absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                {{ $product->_get('title') }}
            </div>

        <div class="bottom-arrow"></div>

        <x-bi-arrow-down-short
            class="absolute font-bold -bottom-3 left-0 right-0 mx-auto my-0 w-8 h-auto text-brown">
        </x-bi-arrow-down-short>
    </section>

    <section class="container mx-auto">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center">
            <div class="order-2 md:order-2 font-newOrderRegular md:px-28 px-4 py-4 md:py-8 text-natural-brown-dark">
                {{ $product->_get('field_1') }}
            </div>

            <div class="md:px-24 px-4 order-1 md:order-2">
                <img data-aos="fade-up" src="{{ Storage::url($product->_get('field_1_img')) }}" alt="">
            </div>
        </div>
    </section>

    <section class="container mx-auto mt-12 md:mt-0">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center">
            <div class="md:px-28 px-4">
                <!-- todo 3 farklı görsel olacak -->
                <img
                    data-aos-duration="600"
                    data-aos-anchor-placement="center-bottom"
                    data-aos="fade-up" style="width: 100%" src="{{ Storage::url($product->_get('field_2_img')) }}" alt="">
            </div>
            <div class="font-newOrderRegular md:px-28 px-4 py-4 md:py-56 text-natural-brown-dark">
                {{ $product->_get('field_2') }}
            </div>
        </div>
    </section>

    <section class="mt-6 mb-12">
        <div class="w-full p flex items-center justify-center overflow-x-hidden scroll-snap-type-x mandatory scroll-snap-align-center">
            <span class="font-inter font-bold w-full text-center whitespace-nowrap wrapper">
              <div class="fulltext text-6xl">
                  <!-- todo: fixme -->
                  @for($i = 0; $i < 5; $i++)
                      {{ \Illuminate\Support\Str::upper($product->_get('title')) . ' ' .  __('ÖZELLİKLERİ') }} <span> {{ \Illuminate\Support\Str::upper($product->_get('title')) . ' ' .  __('ÖZELLİKLERİ') }}</span>
                  @endfor
              </div>
            </span>
        </div>
    </section>


    <section class="container mx-auto">
        <div class="">

            <div class="">
                <ul class="p-3 md:p-0 grid grid-cols-2">
                    @foreach(array_chunk($product->fields['properties'], 2, true) as $prop)
                        @php
                             $duration = 100;
                        @endphp
                        @if($loop->iteration %2 == 0)
                            @foreach($prop as $p)
                                <li class="items-center flex mb-4 col-span-2 md:col-start-2" data-aos="fade-up"
                                    data-aos-duration="{{ $duration += $duration }}">
                                    <div class="mr-6 bg-brown px-4 py-6 rounded-full text-natural-white">
                                        <img class="" style="width: 23px; height: 23px; object-fit: contain !important;" src="{{ Storage::url($p['icon']) }}" alt="">
                                    </div>
                                    <span class="font-newOrderRegular tracking-wider">{{ $p['text'] }}</span>
                                </li>
                            @endforeach
                            @else
                            @foreach($prop as $p)
                                <li class="items-center flex mb-4 justify-start col-span-2 col-start-1"
                                    data-aos="fade-up"
                                    data-aos-duration="{{ $duration += $duration }}">
                                    <div class="mr-6 bg-brown px-4 py-6 rounded-full text-natural-white">
                                        <img class="" style="width: 23px; height: 23px; object-fit: contain !important;"
                                             src="{{ Storage::url($p['icon']) }}" alt="">
                                    </div>
                                    <span class="font-newOrderRegular tracking-wider">{{ $p['text'] }}</span>
                                </li>
                            @endforeach
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <section class="relative block -z-10">
        <div class="absolute bottom-32 right-0 -z-10 w-[22rem] md:w-[30rem]">
            <img class="w-auto align-middle" src="/wheat.png" alt="">
        </div>
    </section>


    <section id="" class="
        container mx-auto h-[14rem] md:h-[24rem] md:mb-36 mb-12 px-3 md:px-12 mt-24 relative">

        <img class="w-full bottom-hero" src="{{ Storage::url($product->_get('alt_banner_img')) }}" alt="">

        <div class="webkit-center z-10 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 ">
            <p style="background-color: {{ $product->_get('alt_banner_color') }}" class=" text-white font-newOrderLight p-4 block w-fit rounded-2xl">{{ $product->_get('alt_banner_text_1') }}</p>
            <p style="background-color: {{ $product->_get('alt_banner_color') }}" class=" text-white font-newOrderLight p-4 block w-fit rounded-2xl -mt-4">{{ $product->_get('alt_banner_text_2') }}</p>
        </div>
    </section>
@endsection
