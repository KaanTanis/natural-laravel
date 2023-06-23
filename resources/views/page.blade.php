@extends('master')

@section('content')
    <section id="hero" class="
        container mx-auto h-[14rem] md:h-auto md:mb-36 mb-12 px-3 md:px-0 mt-8 relative">

        <img class="w-full rounded-2xl bottom-hero" src="{{ Storage::url($product->_get('banner')) }}" alt="">
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
@endsection
