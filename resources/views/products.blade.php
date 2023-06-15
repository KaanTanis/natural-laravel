@extends('master')

@section('content')

    <section id="products" class="container mx-auto mt-24 mb-24">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 md:gap-12">

            @foreach($productCategories as $productCategory)
                <div>
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($productCategory->_get('image')) }}" alt="">

                    <div class="mx-auto w-1/2 -top-12 relative font-newOrderRegular">
                        <h2 class="text-3xl">{{ $productCategory->_get('title') }}</h2>

                        <ul class="text-natural-brown mt-4">
                            @foreach($productCategory->products() as $product)
                            <li>
                                <a href="{{ route('detail', $product->id) }}">{{ $product->_get('title') }}</a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

@endsection
