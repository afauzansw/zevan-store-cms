<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = Product::query()->paginate(15);
        return view('pages.product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        return view('pages.product.create');
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(ProductRequest $request)
    {
        $slug = ['slug' => Str::slug($request->name)];
        $product = Product::query()->create(array_merge($request->all(), $slug));

        foreach ($request->file('image') as $key => $value) {
            $imageRequest = [
                'product_id' => $product->id,
                'image' => Storage::putFile('assets/img/products', $request->file('image'))
            ];
            ProductImage::query()->create($imageRequest);
        }

//        var_dump($imageRequest['image']);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified product.
     */
    public function show($id)
    {
        $product = Product::query()->findOrFail($id);

        return view('pages.product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit($id)
    {
        $product = Product::query()->findOrFail($id);
        return view('pages.product.edit', ['product' => $product]);
    }

    /**
     * Update the specified product in storage.
     */
    public function update(ProductRequest $request, $id)
    {
        $slug = ['slug' => Str::slug($request->name)];
        Product::query()->findOrFail($id)->update(array_merge($request->all(), $slug));

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy($id)
    {
        Product::query()->findOrFail($id)->delete();
        return redirect()->back();
    }

}
