@extends('master')

@section('content')

    <section class="container mx-auto p-3 mt-24">
        <div class="text-center">
            <h2 class="font-newOrderBold text-4xl text-brown">{{ __('iletişim') }}</h2>

            <form action="">
                <div class="grid grid-cols-1 md:grid-cols-6 gap-4 mt-12 mb-24">
                    <div class="md:col-start-2 md:col-span-2">
                        <input class="w-full px-4 py-2 rounded border border-gray-300 focus:outline-none focus:border-brown"
                               id="name" type="text" placeholder="{{ __('ad soyad') }}">
                    </div>
                    <div class="md:col-span-2">
                        <input class="w-full px-4 py-2 rounded border border-gray-300 focus:outline-none focus:border-brown"
                               id="email" type="text" placeholder="{{ __('e-posta') }}">
                    </div>

                    <div class="md:col-start-2 md:col-span-2">
                        <input class="w-full px-4 py-2 rounded border border-gray-300 focus:outline-none focus:border-brown"
                               id="name" type="text" placeholder="{{ __('telefon') }}">
                    </div>
                    <div class="md:col-span-2">
                        <input class="w-full px-4 py-2 rounded border border-gray-300 focus:outline-none focus:border-brown"
                               id="email" type="text" placeholder="{{ __('konu') }}">
                    </div>

                    <div class="md:col-span-4 md:col-start-2">
                        <textarea class="w-full px-4 py-2 rounded border border-gray-300 focus:outline-none focus:border-brown"
                                  id="message" rows="5" placeholder="{{ __('mesaj') }}"></textarea>
                    </div>

                    <div class="md:col-start-4 md:col-span-4">
                        <div class="">
                            <input class=" block mx-auto mt-8 px-8 py-2 rounded bg-brown text-white font-newOrderRegular"
                                   type="submit" value="{{ __('gönder') }}">
                        </div>
                    </div>
                </div>



            </form>
        </div>
    </section>
@endsection
