<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductImage;
use App\Repositories\Products\Admin\AdminProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    protected $repository;

    /**
     * Product Controller constructor.
     */
    public function __construct(AdminProductRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = $this->repository->all([], true);
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
        $this->repository->store($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Display the specified product.
     */
    public function show($id)
    {
        $product = $this->repository->show($id);
        return view('pages.product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit($id)
    {
        $product = $this->repository->show($id);
        return view('pages.product.edit', ['product' => $product]);
    }

    /**
     * Update the specified product in storage.
     */
    public function update(ProductRequest $request, $id)
    {
        $this->repository->update($id, $request->all());
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy($id)
    {
        $this->repository->destroy($id);
        return redirect()->back();
    }

}
