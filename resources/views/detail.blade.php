@extends('master')

@section('content')

    <section id="hero" class="hero container mx-auto h-[14rem] md:h-[36rem]
                bg-no-repeat bg-cover mb-36 rounded-2xl "
             style="background-image: url(/hero.jpg); background-position: bottom center">
    </section>

    <section class="container mx-auto">
        <div class="grid grid-cols-2 items-center">
            <div class="font-newOrderRegular md:px-28 px-4 py-4 md:py-8 text-natural-brown-dark">
                Buğday (Triticum), buğdaygiller (Poaceae) ailesinden bütün dünyada ıslahı yapılmış tek yıllık otsu bir bitkidir.
                Karasal iklimi tercih eder. Mısır ile birlikte dünya çapında ikinci en fazla ekimi yapılan tahıldır.
            </div>

            <div class="md:px-28 px-4">
                <img data-aos="fade-up" src="/detail_1.png" alt="">
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
                    data-aos="fade-up" style="width: 100%" src="/detail_2.png" alt="">
            </div>
            <div class="font-newOrderRegular md:px-28 px-4 py-4 md:py-56 text-natural-brown-dark">
                Buğday; un, yem üretilmesinde kullanılan temel bir besin maddesidir.
                Kabuğu ayrılabileceği gibi kabuğu ile de öğütülebilir. Buğday aynı zamanda çiftlik hayvanları için
                bir yem maddesi olarak da yetiştirilmektedir. Hasattan sonra atık ürün olarak saman balyası çıkar.
            </div>
        </div>
    </section>

    <section class="mt-6 mb-12">
        <div class="w-full p flex items-center justify-center overflow-x-hidden scroll-snap-type-x mandatory scroll-snap-align-center">
            <span class="font-inter font-bold w-full text-center whitespace-nowrap wrapper">
              <div class="fulltext text-6xl">
                  <!-- todo: fixme -->
                  BUĞDAYIN ÖZELLİKLERİ<span> BUĞDAYIN ÖZELLİKLERİ</span>
                  BUĞDAYIN ÖZELLİKLERİ<span> BUĞDAYIN ÖZELLİKLERİ</span>
                  BUĞDAYIN ÖZELLİKLERİ<span> BUĞDAYIN ÖZELLİKLERİ</span>
                  BUĞDAYIN ÖZELLİKLERİ<span> BUĞDAYIN ÖZELLİKLERİ</span>
                  BUĞDAYIN ÖZELLİKLERİ<span> BUĞDAYIN ÖZELLİKLERİ</span>
              </div>
            </span>
        </div>
    </section>


    <section class="container mx-auto">
        <div class="grid grid-cols-2">
            <div class="col-span-2">
                <ul class="p-3 md:p-0">
                    <li class="items-center flex mb-4">
                        <div class="mr-6 bg-brown px-4 py-6 rounded-full text-natural-white">
                            <img class="" style="width: 23px" src="/icon1.png" alt="">
                        </div>
                        <span class="font-newOrderRegular tracking-wider">Protein ve karbonhidrat içerir.</span>
                    </li>

                    <li class="items-center flex mb-4">
                        <div class="mr-6 bg-brown px-4 py-6 rounded-full text-natural-white">
                            <img class="" style="width: 23px" src="/icon1.png" alt="">
                        </div>
                        <span class="font-newOrderRegular tracking-wider">B Vitamini içerir.</span>
                    </li>
                </ul>
            </div>

            <div class="col-span-2 p-3 md:p-0">
                <ul class="float-right">
                    <li class="items-center flex mb-4">
                        <div class="mr-6 bg-brown px-4 py-6 rounded-full text-natural-white">
                            <img class="" style="width: 23px" src="/icon1.png" alt="">
                        </div>
                        <span class="font-newOrderRegular tracking-wider">
                            Protein ve karbonhidrat içerir
                        </span>
                    </li>

                    <li class="items-center flex mb-4">
                        <div class="mr-6 bg-brown px-4 py-6 rounded-full text-natural-white">
                            <img class="" style="width: 23px" src="/icon1.png" alt="">
                        </div>
                        <span class="font-newOrderRegular tracking-wider">B Vitamini içerir.</span>
                    </li>
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
             style="background-image: url(/hero.jpg); background-position: bottom center">
        <div class="webkit-center">
            <p class="bg-brown text-white font-newOrderLight p-4 block w-fit rounded-2xl">DÜNYA NÜFUSUNUN YARISINDAN FAZLASI İÇİN</p>
            <p class="bg-brown text-white font-newOrderLight p-4 block w-fit rounded-2xl -mt-4">BÜYÜK ÖNEM TAŞIR</p>
        </div>
    </section>

@endsection
