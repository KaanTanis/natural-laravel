<!-- Where Imagination Meets Innovation - VOGO -->
<!-- https://vogo.dev/ -->
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Document</title>
</head>
<body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // axios available in the window object
    })
</script>


<nav class="relative container px-5 md:px-0 mx-auto py-8 flex justify-between items-center bg-transparent">
    <a class="" href="#">
        <img width="140" src="/logo.png" alt="">
    </a>
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-blue-600 p-3">
            <svg class="block h-4 w-4 fill-current text-brown" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>{{ __('Mobil Menü') }}</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
        <li><a class="text-xs text-brown px-2 hover:font-bold duration-200
            {{ request()->routeIs('home') ? 'font-newOrderRegular font-bold' : 'font-newOrderLight'}}
        " href="/">{{ __('ANA SAYFA') }}</a></li>
        <li><a class="text-xs text-brown font-newOrderLight px-2 hover:font-bold duration-200" href="#">{{ __('KURUMSAL') }}</a></li>
        <li><a class="text-xs text-brown  px-2 hover:font-bold duration-200
            {{ request()->routeIs('detail') || request()->routeIs('products') ? 'font-newOrderRegular font-bold' : 'font-newOrderLight'}}
        " href="{{ route('products') }}">{{ __('ÜRÜNLERİMİZ') }}</a></li>
        <li><a class="text-xs text-brown font-newOrderLight px-2 hover:font-bold duration-200" href="#">{{ __('YEMEK TARİFLERİ') }}</a></li>
        <li><a class="text-xs text-brown font-newOrderLight px-2 hover:font-bold duration-200" href="#">{{ __('TESİSİMİZ') }}</a></li>
        <li><a class="text-xs text-brown hover:font-bold duration-200
               {{ request()->routeIs('contact') ? 'font-newOrderRegular font-bold' : 'font-newOrderLight'}}
        " href="{{ route('contact') }}">{{ __('İLETİŞİM') }}</a></li>
    </ul>
    <a class="hidden lg:inline-block lg:ml-auto py-2 px-2 text-sm font-newOrderBold text-brown rounded-xl transition duration-200"
       href="#">TR</a>
    <a class="text-gray-300 hidden lg:inline-block">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
        </svg>
    </a>
    <a class="hidden lg:inline-block py-2 px-2 text-sm font-newOrderRegular rounded-xl text-brown transition duration-200"
       href="#">EN</a>
    <a class="text-gray-300 hidden lg:inline-block">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
        </svg>
    </a>
    <a class="hidden lg:inline-block py-2 px-2 text-sm font-newOrderRegular rounded-xl text-brown transition duration-200"
       href="#">AR</a>
</nav>

<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                <img width="140" src="/logo.png" alt="">
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a class="block p-4 font-newOrderRegular text-sm rounded"
                       href="#">{{ __('ANA SAYFA') }}</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 font-newOrderRegular text-sm rounded"
                       href="#">{{ __('KURUMSAL') }}</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 font-newOrderRegular text-sm text-brown rounded"
                       href="#">{{ __('ÜRÜNLERİMİZ') }}</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 font-newOrderRegular text-sm text-brown rounded"
                       href="#">{{ __('YEMEK TARİFLERİ') }}</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 font-newOrderRegular text-sm text-brown rounded"
                       href="#">{{ __('İLETİŞİM2') }}</a>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6 flex justify-center">
                <a class="block font-newOrderBold text-brown px-4 leading-loose text-xs text-center font-semibold rounded-xl"
                   href="#">TR</a>
                <a class="block font-newOrderRegular text-brown px-4 leading-loose text-xs text-center font-semibold rounded-xl"
                   href="#">EN</a>
                <a class="block font-newOrderRegular text-brown px-4 leading-loose text-xs text-center font-semibold rounded-xl"
                   href="#">AR</a>
            </div>
            <p class="my-4 text-xs text-center text-gray-400 font-newOrderRegular">
                <span>Copyright © {{ date('Y') }}</span>
            </p>
        </div>
    </nav>
</div>

<!-- Body -->
@yield('content')


<section id="footer" class="bg-brown">
    <div class="grid grid-cols-1 text-center md:text-left md:grid-cols-3 container mx-auto relative py-24 px-12">
        <div class="justify-self-center mb-5">
            <img width="190" src="/logo-light.png" alt="">
        </div>
        <div class="mb-5">
            <ul class="text-natural-brown-2 font-newOrderRegular">
                <li>ANA SAYFA</li>
                <li>KURUMSAL</li>
                <li>ÜRÜNLERİMİ</li>
                <li>YEMEK TARİFLERİ</li>
                <li>TESİSLERİMİZ</li>
                <li>İLETİŞİM</li>
            </ul>
        </div>
        <div>
            <ul class="text-natural-brown-2 font-newOrderRegular">
                <li class="mb-3">Çilek Mah. 6394 Sk. No:4 Akdeniz / MERSİN</li>
                <li class="mb-3">natural@naturalgida.com.tr</li>
                <li class="mb-3">+90 324 221 37 87</li>
            </ul>
        </div>
    </div>
</section>


@vite('resources/js/app.js')

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>

</body>
</html>
