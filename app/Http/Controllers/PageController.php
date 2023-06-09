<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Filament\Facades\Filament;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * @param int $id
     * @param string|null $type
     * @param string|null $slug
     * @return Application|Factory|View|RedirectResponse
     */
    public function page(int $id, string $type = null, string $slug = null)
    {
        $data = Post::query()
            ->where(function ($query) {
                $query->where('type', 'other_pages')
                    ->orWhere('type', 'page');

                $resources = collect(Filament::getResources());

                foreach ($resources as $resource) {
                    $res = app($resource);
                    if (method_exists($res, 'modelType')) {
                        $query->orWhere('type', $res->modelType());
                    }
                }
            })->where('id', $id)->first();

        if ($slug == null || $type == null) {
            return redirect()->route('page', [
                'id' => $id,
                'type' => __($data->type),
                'slug' => Str::slug($data->_get('title')),
            ])->setStatusCode(301);
        }

        $otherPages = Post::query()
//            ->where('id', '!=', $data->id)
            ->where('type', $data->type)->where('status', true)->get();

        if ((bool)$data->status == false) {
            abort(404);
        }

        if ($data->type == 'other_pages') {
            return view('other-pages', compact('data', 'otherPages'));
        }

        return view('page', compact('data', 'otherPages'));
    }

    public function home()
    {
        $productCategories = Post::query()->where('type', 'product_category')->get();
        $recipes = Post::query()->where('type', 'recipe')->get();
        return \view('home', compact('productCategories', 'recipes'));
    }

    public function detail($id, $slug = null)
    {
        $product = Post::query()->where('type', 'product')->where('id', $id)->firstOrFail();

        if ($slug == null) {
            return redirect()->route('detail', [
                'id' => $id,
                'slug' => Str::slug($product->_get('title')),
            ])->setStatusCode(301);
        }


        return \view('detail', compact('product'));
    }

    public function products()
    {
        $productCategories = Post::query()
            ->where('type', 'product_category')
            ->get();

        return \view('products', compact('productCategories'));
    }

    public function contact()
    {
        return \view('contact');
    }
}
