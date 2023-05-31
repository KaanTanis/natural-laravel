@extends('master')

@section('content')

    <section id="hero" class="hero container mx-auto h-[36rem]
                bg-no-repeat bg-cover mb-36 rounded-2xl "
             style="background-image: url(/hero.jpg); background-position: bottom center">
    </section>

    <section class="container mx-auto">
        <div class="grid grid-cols-2">
            <div class="font-newOrderRegular px-28 py-8 text-natural-brown-dark">
                Buğday (Triticum), buğdaygiller (Poaceae) ailesinden bütün dünyada ıslahı yapılmış tek yıllık otsu bir bitkidir.
                Karasal iklimi tercih eder. Mısır ile birlikte dünya çapında ikinci en fazla ekimi yapılan tahıldır.
            </div>

            <div class="px-28">
                <img data-aos="fade-up" src="/detail_1.png" alt="">
            </div>
        </div>
    </section>

    <section class="container mx-auto">
        <div class="grid grid-cols-2">
            <div class="px-28">
                <!-- todo 3 farklı görsel olacak -->
                <img
                    data-aos-duration="600"
                    data-aos-anchor-placement="center-bottom"
                    data-aos="fade-up" style="width: 100%" src="/detail_2.png" alt="">
            </div>
            <div class="font-newOrderRegular px-28 py-56 text-natural-brown-dark">
                Buğday; un, yem üretilmesinde kullanılan temel bir besin maddesidir.
                Kabuğu ayrılabileceği gibi kabuğu ile de öğütülebilir. Buğday aynı zamanda çiftlik hayvanları için
                bir yem maddesi olarak da yetiştirilmektedir. Hasattan sonra atık ürün olarak saman balyası çıkar.
            </div>
        </div>
    </section>

    <section class="">
        <div class="w-full p flex items-center justify-center overflow-x-hidden scroll-snap-type-x mandatory scroll-snap-align-center">
            <span class="font-inter font-bold w-full text-center whitespace-nowrap wrapper">
              <div class="fulltext">
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



    <section class="relative block -z-10">
        <div class="absolute bottom-0 right-0 -z-10 w-96">
            <img class="w-auto align-middle" src="/wheat.png" alt="">
        </div>
    </section>


    <section class="container mx-auto">
        <div class="grid grid-cols-2">
            <div class="col-span-2">
                <ul>
                    <li>
                        <img src="/icon1.png" alt="">
                        Protein ve karbonhidrat içerir.</li>
                    <li>B vitamini içerir</li>
                </ul>
            </div>

            <div class="col-span-2 text-right">
                <ul>
                    <li>Protein ve karbonhidrat içerir.</li>
                    <li>B vitamini içerir</li>
                </ul>
            </div>
        </div>
    </section>

@endsection
