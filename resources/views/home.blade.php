@extends('master')

@section('content')
<section id="home_banner" class="md:flex block md:justify-around mt-12 container mx-auto">
        <div class="md:m-auto justify-center md:justify-start flex">
            <ul class="flex mb-2">
                <li class="flex md:block gap-2">
                    <a href="" class="rounded-full border block border-brown-500/25 hover:bg-brown-300 hover:text-white justify-center text-center p-2 md:mb-2">
                        <x-bxl-facebook class="w-4 h-4 bold"></x-bxl-facebook>
                    </a>
                    <a href="" class="rounded-full border border-brown-500/25 block hover:bg-brown-300 hover:text-white justify-center text-center p-2 md:mb-2">
                        <x-bxl-instagram class="w-4 h-4 bold"></x-bxl-instagram>
                    </a>
                    <a href="" class="rounded-full border border-brown-500/25 block hover:bg-brown-300 hover:text-white justify-center text-center p-2 md:mb-2">
                        <x-bxl-twitter class="w-4 h-4 bold"></x-bxl-twitter>
                    </a>
                </li>
            </ul>
        </div>

        <div class="md:m-auto text-center md:text-left">
            <h1 class="text-brown text-3xl font-newOrderBold">
                SOFRANIZA <br>
                SAĞLIKLI VE LEZZETLİ <br>
                BİR YOLCULUK
            </h1>

            <button class="bg-brown hover:bg-brown-500 rounded-xl py-4 px-8 text-white mt-12 mb-12 md:mb-0">
                1983'ten günümüze
            </button>
        </div>

        <div class="max-w-2xl">
            <img src="/hero.png" alt="">
        </div>

    </section>

<section id="stats" class="container mx-auto mt-32">
    <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
        <div class="justify-self-center webkit-center">
            <div class="bg-brown-secondary h-24 w-24 rounded-2xl flex justify-center">
                <x-bxs-factory class="text-white w-12"></x-bxs-factory>
            </div>
            <div class="text-brown font-bold mt-5 font-newOrderBold">
                1300 m2
            </div>
            <div class="mt-2 text-brown-500 font-newOrderLight">
                tesis
            </div>
        </div>

        <div class="justify-self-center webkit-center">
            <div class="bg-brown-secondary h-24 w-24 rounded-2xl flex justify-center">
                <x-mdi-factory class="text-white w-12"></x-mdi-factory>
            </div>
            <div class="text-brown font-bold mt-5 font-newOrderBold">
                2200 m2
            </div>
            <div class="mt-2 text-brown-500 font-newOrderLight">
                Fabrika Binası
            </div>
        </div>

        <div class="justify-self-center webkit-center">
            <div class="bg-brown-secondary h-24 w-24 rounded-2xl flex justify-center">
                <x-mdi-office-building class="text-white w-12"></x-mdi-office-building>
            </div>
            <div class="text-brown font-bold mt-5 font-newOrderBold">
                3500 m2
            </div>
            <div class="mt-2 text-brown-500 font-newOrderLight">
                Kapalı Depolama
            </div>
        </div>

        <div class="justify-self-center webkit-center">
            <div class="bg-brown-secondary h-24 w-24 rounded-2xl flex justify-center">
                <x-mdi-cog class="text-white w-12"></x-mdi-cog>
            </div>
            <div class="text-brown font-bold mt-5 font-newOrderBold">
                500 Yıl/Ton
            </div>
            <div class="mt-2 text-brown-500 font-newOrderLight">
                Organik Mercimek
            </div>
        </div>

        <div class="justify-self-center webkit-center">
            <div class="bg-brown-secondary h-24 w-24 rounded-2xl flex justify-center">
                <x-mdi-office-building-plus class="text-white w-12"></x-mdi-office-building-plus>
            </div>
            <div class="text-brown font-bold mt-5 font-newOrderBold">
                10.000 Ton
            </div>
            <div class="mt-2 text-brown-500 font-newOrderLight">
                Hammede Stoklama
            </div>
        </div>

        <div class="justify-self-center webkit-center">
            <div class="bg-brown-secondary h-24 w-24 rounded-2xl flex justify-center">
                <x-mdi-office-building-marker class="text-white w-12"></x-mdi-office-building-marker>
            </div>
            <div class="text-brown font-bold mt-5 font-newOrderBold">
                60.000 Yıl/Ton
            </div>
            <div class="mt-2 text-brown-500 font-newOrderLight">
                Hammede İşleme
            </div>
        </div>

    </div>
</section>

<section id="properties" class="mt-32">
    <div class="h-96 relative">
        <img class="h-96 w-full object-cover" src="/img/mercimek.jpg" alt="">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <span class="text-5xl text-white font-newOrderBold">mercimeğin türleri</span>
            <span class="text-sm block text-white text-right font-newOrderLight">KIRMIZI MERCİMEK</span>
        </div>
    </div>

    <div class="h-96 relative grid grid-cols-2">
        <div class="bg-natural-white relative">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
                <img class="w-56" src="/img/tane.png" alt="">
                <span class="text-lg text-natural-wine font-newOrderBold">az yağlı</span>
            </div>
        </div>

        <div class="bg-natural-wine relative">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
                <img class="w-56" src="/img/tane.png" alt="">
                <span class="text-lg text-natural-white font-newOrderBold">çok cilalı</span>
            </div>
        </div>
    </div>
</section>

<section id="info">

    <div class="h-[36rem] bg-brown relative">
        <div class="grid grid-cols-2">
            <div class="flex justify-center h-[36rem] align-middle items-center">
                <span class="font-newOrderBold text-center">
                    <span class="text-natural-orange text-5xl">"</span>
                    <p class="text-5xl text-natural-brown-light">
                        kırmızı mercimeği <br>
                        kim keşfetti?
                    </p>
                    <p class="text-natural-brown text-sm px-40 pt-6 font-newOrderRegular">
                        Kırmızı Mercimek, yoksul bir çiftçi ailesinin kızı olan Asurlu Akubu tarafından
                        yaklaşık 3900-4000 sene önce keşfedilmiştir.
                    </p>
                    <div class="mt-8">
                        <a href="javascript:;" class="bg-natural-brown-light hover:bg-natural-brown hover:text-natural-brown-light rounded-xl py-4 px-8
                            text-natural-brown ">
                            devamını Oku
                        </a>
                    </div>
                </span>
            </div>

            <div class="">
                <img class="float-right h-full object-contain" src="/img/info-bg.png" alt="">
            </div>
        </div>
    </div>
</section>



<section id="explore">
    <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
        <div class="w-full relative flex items-center justify-center">
            <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-1000">
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto px-28 py-20">
                        <div class="flex justify-start mt-44 w-screen">
                            <div class="absolute -mt-72 left-32 overflow-hidden"
                                 style="font-size: 430px; z-index: -99; inline-size: -webkit-fill-available;">
                            </div>

                            <div style="font-size: 64px" class="text-5xl -right-24 -top-4 relative text-brown font-newOrderBold">
                                <p class="mb-4" style="letter-spacing: 2px">pirinç ve</p>
                                <p style="letter-spacing: 2px">bakliyat</p>
                            </div>
                            <img class="w-96" src="/explore.png" alt="">
                            <div class="relative ml-8 mb-6">
                                <ul class="bottom-0 absolute font-newOrderBold inline-block w-max text-brown">
                                    <li>kırmızı mercimek</li>
                                    <li>nohut</li>
                                    <li>fasulye</li>
                                    <li>bulgur</li>
                                    <li>yeşil mercimek</li>
                                    <li>pirinç</li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex justify-start mt-44 w-screen">
                            <div class="absolute -mt-72 left-32 overflow-hidden"
                                 style="font-size: 430px; z-index: -99; inline-size: -webkit-fill-available;">
                            </div>

                            <div style="font-size: 64px" class="text-5xl -right-24 -top-4 relative text-brown font-newOrderBold">
                                <p class="mb-4" style="letter-spacing: 2px">pirinç ve</p>
                                <p style="letter-spacing: 2px">bakliyat</p>
                            </div>
                            <img class="w-96" src="/explore.png" alt="">
                            <div class="relative ml-8 mb-6">
                                <ul class="bottom-0 absolute font-newOrderBold inline-block w-max text-brown">
                                    <li>kırmızı mercimek</li>
                                    <li>nohut</li>
                                    <li>fasulye</li>
                                    <li>bulgur</li>
                                    <li>yeşil mercimek</li>
                                    <li>pirinç</li>
                                </ul>
                            </div>
                        </div>

                        <div class="absolute -mt-40 -left-32 overflow-hidden"
                             style="font-size: 430px; z-index: -99; inline-size: -webkit-fill-available;">
                                <span id="products" class="" style="text-shadow: 0 0 1px #2a2a2a; color: #FFF7ED !important;"></span>

                                <script>
                                    let products = document.getElementById("products");
                                    for (let i = 0; i < 25; i++) {
                                        products.innerHTML += 'ürünler';
                                    }
                                </script>
                        </div>

                    </div>
                </div>
            </div>
            <button aria-label="slide forward" class="absolute z-30 right-44 mr-10 top-[16rem]
                text-brown" id="next">
                <x-bx-right-arrow-alt class="w-24 text-brown"></x-bx-right-arrow-alt>
            </button>

        </div>
    </div>

    <script>
        let defaultTransform = 0;
        function goNext() {
            defaultTransform = defaultTransform - window.screen.width;
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);
        function goPrev() {
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + window.screen.width;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);

    </script>
</section>





{{--<section id="explore" class="h-[34rem]">--}}
{{--    <div class="flex justify-center mt-44 -left-32 relative">--}}
{{--        <div class="absolute -mt-72 left-32 overflow-hidden"--}}
{{--             style="font-size: 430px; z-index: -99; inline-size: -webkit-fill-available;">--}}
{{--            <span class="" style="text-shadow: 0 0 1px #2a2a2a; color: #FFF7ED !important;">--}}
{{--                ürünlerürünler--}}
{{--            </span>--}}
{{--        </div>--}}
{{--        <div class="absolute flex right-0">--}}
{{--            <x-bx-right-arrow-alt class="w-32 bold text-brown"></x-bx-right-arrow-alt>--}}
{{--        </div>--}}
{{--        <div style="font-size: 64px" class="text-5xl -right-24 -top-4 relative text-brown font-newOrderBold">--}}
{{--            <p class="mb-4" style="letter-spacing: 2px">pirinç ve</p>--}}
{{--            <p style="letter-spacing: 2px">bakliyat</p>--}}
{{--        </div>--}}
{{--        <img class="w-96" src="/explore.png" alt="">--}}
{{--        <div class="relative ml-8 mb-6">--}}
{{--            <ul class="bottom-0 absolute font-newOrderBold inline-block w-max text-brown">--}}
{{--                <li>kırmızı mercimek</li>--}}
{{--                <li>nohut</li>--}}
{{--                <li>fasulye</li>--}}
{{--                <li>bulgur</li>--}}
{{--                <li>yeşil mercimek</li>--}}
{{--                <li>pirinç</li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<style>
    .chef-overlay:after {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        mix-blend-mode: multiply;
        background-color: #93C25D;
        border-radius: 20px;
    }
</style>

<section id="chef" class="mt-24 mb-24">
    <div class="relative container mx-auto">
        <div class="rounded-[20px] h-96 bg-fixed bg-center bg-no-repeat bg-cover chef-overlay" style="background-image: url(/chef.jpg)">
        </div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
            <span class="text-6xl text-white font-newOrderRegular">yemek tarifleri</span>
        </div>
    </div>
</section>

<section>
    <div class="flex justify-center mt-44 relative">
        <div class="absolute -mt-72 overflow-hidden"
             style="font-size: 430px; z-index: -99; inline-size: -webkit-fill-available;">
            <span class="" style="text-shadow: 0 0 1px #2a2a2a; color: #FFF7ED !important;">
                ürünlerürünler
            </span>
        </div>

        <div class="grid grid-cols-4 gap4">
            <div class="h-64 w-32 bg-natural-green"></div>
            <div class="h-64 w-32 bg-natural-green"></div>
            <div class="h-64 w-32 bg-natural-green"></div>
            <div class="h-64 w-32 bg-natural-green"></div>
        </div>
    </div>
</section>

@endsection
