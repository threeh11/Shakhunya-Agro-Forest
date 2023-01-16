<?php

namespace App\Actions;

use App\Models\Product;

class GetAllProductsAction
{
    private Product $productModel;

    public function __construct(
        Product $productModel
    )
    {
        $this->productModel = $productModel;
    }

    public function handle(): array
    {
        $products = $this->productModel::all();
        $productsCount = $this->productModel::all()->count();

        return [
            'products' => $products,
            'productsCount' => $productsCount,
        ];
    }
}
