@extends('master')

@section('content')
    <section class=" mt-12">
        <div class="grid grid-cols-6 gap-24">
            <div class="text-center col-span-4 px-32">
                <h1 class="text-6xl mb-12 font-newOrderBold text-brown">{{ $data->_get('title') }}</h1>

                <p class="font-newOrderLight text-natural-brown">
                    {!! $data->_get('content') !!}
                </p>
            </div>

            <div class="col-span-2">
                <img src="{{ Storage::url($data->_get('side_banner')) }}" alt="">
            </div>
        </div>

    </section>
@endsection
