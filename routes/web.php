<?php

use App\Helpers\Helper;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - VOGO
|--------------------------------------------------------------------------
*/
Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('urunler', [PageController::class, 'products'])->name('products');
Route::get('/urunler/{id}/{slug?}', [PageController::class, 'detail'])->name('detail');
Route::get('/iletisim/', [PageController::class, 'contact'])->name('contact');

Route::get('s/{id}/{type?}/{slug?}', [PageController::class, 'page'])->name('page');

Route::get('locale/{locale}', function ($locale) {
    if (! in_array($locale, Helper::getLangCodes())) {
        abort(404);
    }

    session()->put('locale', $locale);
    return back();
})->name('locale');

Route::get('sitemap.xml', SitemapController::class);

Route::get('test', function () {
    $menu = Helper::getMenu('7');
    dd($menu);
});
