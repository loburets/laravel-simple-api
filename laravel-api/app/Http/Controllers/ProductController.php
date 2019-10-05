<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use App\Http\Resources\Product as ProductResource;
use App\Http\Resources\ProductCollection;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ProductCollection
     */
    public function index()
    {
        return new ProductCollection(Product::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProduct $request
     * @return ProductResource
     */
    public function store(StoreProduct $request)
    {
        $product = Product::create($request->all());

        return $this->show($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return ProductResource
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProduct $request
     * @param  \App\Product $product
     * @return ProductResource
     */
    public function update(UpdateProduct $request, Product $product)
    {
        $product->update($request->all());

        return $this->show($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $product
     * @return array
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return ['data' => ['message' => 'Product has been deleted']];
    }
}
