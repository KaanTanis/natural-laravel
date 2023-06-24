@extends('master')

@section('content')
<section id="home_banner" class="md:flex block md:justify-around mt-12 container mx-auto">
        <div class="md:m-auto justify-center md:justify-start md:flex hidden">
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

        <div class="max-w-xl">
            <img class="left-12 relative hero-chef z-10" src="/img/1chef.png" alt="">

            <div class="-mt-32 absolute" id="pieces">
                @for($i = 0; $i < 55; $i++)
                    @php
                        $pieces = [1,2,3,4,5];

                        $side = rand(0, 1) ? 'left' : 'right';

                        if ($i < 5) {
                            $top = rand(0, 50);
                        } elseif ($i < 10) {
                            $top = rand(50, 120);
                        } elseif ($i < 15) {
                            $top = rand(200, 240);
                        } elseif ($i < 20) {
                            $top = rand(300, 350);
                        } elseif ($i < 25) {
                            $top = rand(450, 500);
                        } elseif ($i < 30) {
                            $top = rand(600, 650);
                        } elseif ($i < 35) {
                            $top = rand(700, 750);
                        } elseif ($i < 40) {
                            $top = rand(800, 900);
                        } elseif ($i < 45) {
                            $top = rand(930, 960);
                        } elseif ($i < 50) {
                            $top = rand(950, 1000);
                        } elseif ($i <= 55) {
                            $top = rand(960, 1000);
                        } elseif ($i <= 60) {
                            $top = rand(1100, 1150);
                        } elseif ($i <= 65) {
                            $top = rand(1200, 1300);
                        } elseif ($i <= 70) {
                            $top = rand(1400, 1500);
                        } elseif ($i <= 75) {
                            $top = rand(1500, 1600);
                        }

                        $make = $side . ': -' . rand(0, 60) . 'px; top: -' . $top . 'px; transform: rotate(' . rand(0, 360) . 'deg);';
                    @endphp

                    <img class="piece relative " style="{{ $make }}" width="20" src="/img/piece{{ rand(1, 5) }}.png" alt="">
                @endfor
            </div>

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

    <div class="relative grid grid-cols-2">
        <div class="bg-natural-white relative md:h-96 h-48">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
                <img data-aos="fade-right" class="w-56" src="/img/tane.png" alt="">
                <span class="text-lg text-natural-wine font-newOrderBold">az yağlı</span>
            </div>
        </div>

        <div class="bg-natural-wine relative md:h-96 h-48">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
                <img data-aos="fade-left" class="w-56" src="/img/tane.png" alt="">
                <span class="text-lg text-natural-white font-newOrderBold">çok cilalı</span>
            </div>
        </div>

        <div class="bg-natural-wine relative md:h-96 h-48">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
                <img data-aos="fade-down" class="w-56" src="/img/tane.png" alt="">
                <span class="text-lg text-natural-white font-newOrderBold">su cilası</span>
            </div>
        </div>

        <div class="bg-natural-white relative md:h-96 h-48">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
                <img data-aos="fade-down" class="w-56" src="/img/tane.png" alt="">
                <span class="text-lg text-natural-wine font-newOrderBold">orta cila</span>
            </div>
        </div>
    </div>
</section>

<section id="info">

    <div class="md:h-[36rem] bg-brown relative h-[30rem]">
        <div class="grid grid-cols-4 middle-info">
            <div class="flex justify-center md:h-[36rem] p-2 md:p-0 h-[30rem] align-middle items-center md:col-start-1 md:col-span-2 col-span-3">
                <span class="font-newOrderBold text-center">
                    <span class="text-natural-orange text-5xl">"</span>
                    <p class="md:text-5xl text-3xl text-natural-brown-light">
                        kırmızı mercimeği <br>
                        kim keşfetti?
                    </p>
                    <p data-aos="fade-down" class="text-natural-brown text-sm md:px-40 px-10 pt-6 font-newOrderRegular">
                        Kırmızı Mercimek, yoksul bir çiftçi ailesinin kızı olan Asurlu Akubu tarafından
                        yaklaşık 3900-4000 sene önce keşfedilmiştir.
                    </p>
                    <div class="mt-8">
                        <a href="javascript:;" class="bg-natural-brown-light hover:bg-natural-brown hover:text-natural-brown-light rounded-xl py-4 px-8
                            text-natural-brown ">
                            devamını oku
                        </a>
                    </div>
                </span>
            </div>

            <div class="md:h-[36rem] h-[30rem] pt-12 absolute right-0 overflow-hidden middle-info--bg">
                <img data-aos="fade-left" class="float-right h-full object-contain relative" src="/img/info-bg.png" alt="">
            </div>
        </div>
    </div>
</section>



<section id="explore">
    <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
        <div class="w-full relative flex items-center justify-center">
            <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-1000">
                    <div data-aos="fade-right" class="flex flex-shrink-0 relative w-full sm:w-auto md:px-28 md:py-20">

                        @foreach($productCategories as $productCategory)
                        <div class="flex justify-start mt-44 w-screen">
                            <div style="font-size: 64px" class="md:text-5xl z-10 text-3xl md:-right-24 right-0 -top-4 relative text-brown font-newOrderBold">
                                <p class="mb-8 md:mb-4" style="letter-spacing: 2px">
                                    {!!
    // get word count. if word count is bigger than 1, then split the word and add <br> tag between them
    str_word_count($productCategory->_get('title')) > 1 ? implode('<br>', explode(' ', $productCategory->_get('title'))) : $productCategory->_get('title')
!!}
                                </p>
                            </div>
                            <img class="w-96 relative -left-52 md:-left-0" src="
                            {{ Storage::url($productCategory->_get('image')) }}" alt="">
                            <div class="relative ml-8 mb-6 hidden md:block">
                                <ul class="bottom-0 absolute font-newOrderBold inline-block w-max text-brown">
                                    @foreach($productCategory->products() as $product)
                                        <li>
                                            <a href="{{ route('detail', $product->id) }}">{{ $product->_get('title') }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endforeach

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
            <button aria-label="slide forward" class="absolute top-10 right-0 z-30 md:right-44 md:mr-10 md:top-[16rem]
                text-brown" id="next">
                <x-bx-right-arrow-alt class="w-24 text-brown"></x-bx-right-arrow-alt>
            </button>

        </div>
    </div>

    <script>
        let defaultTransform = 0;
        function goNext() {
            defaultTransform = defaultTransform - window.screen.width;
            const slider = document.getElementById("slider");

            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);
        function goPrev() {
            const slider = document.getElementById("slider");

            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + window.screen.width;

            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);

    </script>
</section>


<style>

</style>

<section id="" class="
        home-recipe-hero
        bg-natural-green
        container mx-auto h-[14rem] md:h-[30rem] md:mb-36 mb-12 px-3 md:px-0 mt-8 relative">

    <img class="w-full home_bottom_banner mix-blend-multiply" src="/chef.jpg" alt="">

    <div class="
            md:text-7xl text-4xl font-newOrderBold text-white
            overflow-hidden
            absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
        yemek tarifleri
    </div>
</section>

<section>
    <div class="flex mt-44 relative container mx-auto mb-36 w-full">
        <div class="absolute -mt-24 -left-32 overflow-hidden -z-20 text-[430px]" style="text-shadow: 0 0 1px #2a2a2a; color: #FFF7ED !important; inline-size: -webkit-fill-available;">
            yemektarifleri
        </div>

        <div class="gap-9 grid grid-cols-5 flex-nowrap whitespace-nowrap">
            <div class="h-96 bg-natural-green rounded-full relative">
                <span class="font-newOrderRegular absolute -top-12 text-center w-full">içli köfte</span>
                <img class="object-cover h-full rounded-full" src="/foods/kofte.png" alt="">
            </div>

            <div class="h-96 mt-24 bg-natural-green rounded-full relative">
                <span class="font-newOrderRegular absolute -top-12 text-center w-full">kısır</span>
                <img class="object-cover h-full rounded-full" src="/foods/kisir.png" alt="">
            </div>

            <div class="h-96 bg-natural-green rounded-full relative">
                <span class="font-newOrderRegular absolute -top-12 text-center w-full">kuru fasulye</span>
                <img class="object-cover h-full rounded-full" src="/foods/fasulye.png" alt="">
            </div>

            <div class="h-96 mt-24 bg-natural-green rounded-full relative">
                <span class="font-newOrderRegular absolute -top-12 text-center w-full">pilav</span>
                <img class="object-cover h-full rounded-full" src="/foods/pilav.png" alt="">
            </div>

            <div class="h-96 bg-natural-green rounded-full relative">
                <span class="font-newOrderRegular absolute -top-12 text-center w-full">mercimek çorbası</span>
                <img class="object-cover h-full rounded-full" src="/foods/corba.png" alt="">
            </div>

        </div>
    </div>
</section>

@endsection
