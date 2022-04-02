<?php

namespace App\Repositories\Products\Admin;

use App\Models\Product;
use App\Repositories\BaseRepository;

class AdminProductRepositoryImpl extends BaseRepository implements AdminProductRepository
{
    protected $model;

    /**
     * Base Repository constructor.
     */
    public function __construct(Product $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }

    public function store(array $data)
    {
        $product = parent::store($data);
//        foreach ($request->file('image') as $key => $value) {
//            $imageRequest = [
//                'product_id' => $product->id,
//                'image' => Storage::putFile('assets/img/products', $request->file('image'))
//            ];
//            ProductImage::query()->create($imageRequest);
//        }
//        var_dump($imageRequest['image']);
        return $product; // TODO: Change the autogenerated stub
    }
}