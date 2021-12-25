<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.product.index')->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pages.product.create');
    }

    /**
     * Store a newly created product in storage.
     *
     * @param ProductRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductRequest $request)
    {
        $slug = ['slug' => Str::slug($request->name)];
        Product::query()->create(array_merge($request->all(), $slug));

        return redirect()->route('products.index');
    }

    /**
     * Display the specified product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $product = Product::query()->findOrFail($id)->get();
        return view('pages.product.edit', $product);
    }

    /**
     * Update the specified product in storage.
     *
     * @param ProductRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductRequest $request, $id)
    {
        $slug = ['slug' => Str::slug($request->name)];
        Product::query()->findOrFail($id)->update(array_merge($request->all(), $slug));

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified product from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Product::query()->findOrFail($id)->delete();
        return redirect()->route('products.index');
    }
}
