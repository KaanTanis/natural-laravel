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

    <section class="container mx-auto mb-24">
        <div class="grid md:grid-cols-5 gap-4">
            <div class="md:col-start-2 font-newOrderRegular webkit-center">
                <x-heroicon-s-location-marker class="w-8 text-brown"></x-heroicon-s-location-marker>
                <p class="mt-4 text-brown font-newOrderRegular text-[13px]">
                    {{ $settings->_get('address') }}
                </p>
            </div>

            <div class="font-newOrderRegular webkit-center">
                <x-heroicon-s-phone class="w-8 text-brown"></x-heroicon-s-phone>
                <p class="mt-4 text-brown font-newOrderRegular text-[13px]">
                    {{ $settings->_get('phone') }}
                </p>
            </div>

            <div class="font-newOrderRegular webkit-center">
                <x-heroicon-s-mail class="w-8 text-brown"></x-heroicon-s-mail>
                <p class="mt-4 text-brown font-newOrderRegular text-[13px]">
                    {{ $settings->_get('email') }}
                </p>
            </div>
        </div>
    </section>

    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8397.990369786949!2d34.67060632704815!3d36.83213861616474!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1527f1f00c1ba03d%3A0xd590cff25c0296af!2sNatural%20G%C4%B1da!5e0!3m2!1str!2str!4v1686918905904!5m2!1str!2str"
                width="100%" height="450"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
