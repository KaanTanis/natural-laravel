@extends('master')

@section('content')

    <section id="hero" class="hero container mx-auto h-[14rem] md:h-[36rem]
                bg-no-repeat bg-cover mb-36 rounded-2xl "
             style="background-image: url({{ Storage::url($product->_get('banner')) }}); background-position: bottom center">
    </section>

    <section class="container mx-auto">
        <div class="grid grid-cols-2 items-center">
            <div class="font-newOrderRegular md:px-28 px-4 py-4 md:py-8 text-natural-brown-dark">
                {{ $product->_get('field_1') }}
            </div>

            <div class="md:px-22 px-4">
                <img data-aos="fade-up" src="{{ Storage::url($product->_get('field_1_img')) }}" alt="">
            </div>
        </div>
    </section>

    <section class="container mx-auto">
        <div class="grid grid-cols-2 items-center">
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
                        @if($loop->iteration %2 == 0)
                            @foreach($prop as $p)
                                <li class="items-center flex mb-4 col-span-2 md:col-start-2">
                                    <div class="mr-6 bg-brown px-4 py-6 rounded-full text-natural-white">
                                        <img class="" style="width: 23px" src="{{ Storage::url($p['icon']) }}" alt="">
                                    </div>
                                    <span class="font-newOrderRegular tracking-wider">{{ $p['text'] }}</span>
                                </li>
                            @endforeach
                            @else
                            @foreach($prop as $p)
                                <li class="items-center flex mb-4 justify-start col-span-2 col-start-1">
                                    <div class="mr-6 bg-brown px-4 py-6 rounded-full text-natural-white">
                                        <img class="" style="width: 23px" src="{{ Storage::url($p['icon']) }}" alt="">
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


    <section id="hero" class="container mx-auto h-[30rem]
                bg-no-repeat bg-cover mb-36 rounded-2xl mt-36
                justify-center flex items-center relative
                "
             style="background-image: url({{ Storage::url($product->_get('alt_banner_img')) }}); background-position: bottom center">
        <div class="webkit-center">
            <p style="background-color: {{ $product->_get('alt_banner_color') }}" class=" text-white font-newOrderLight p-4 block w-fit rounded-2xl">{{ $product->_get('alt_banner_text_1') }}</p>
            <p style="background-color: {{ $product->_get('alt_banner_color') }}" class=" text-white font-newOrderLight p-4 block w-fit rounded-2xl -mt-4">{{ $product->_get('alt_banner_text_2') }}</p>
        </div>
    </section>

@endsection
