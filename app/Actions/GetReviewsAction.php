<?php

namespace App\Actions;

use App\Models\Product;
use Illuminate\Support\Collection;

class GetReviewsAction
{
    private Product $productModel;

    public function __construct(
        Product $productModel,
    )
    {
        $this->productModel = $productModel;
    }

    public function handle(int $idProduct): Collection
    {
        return $this->productModel::find($idProduct)->reviews;
    }
}
