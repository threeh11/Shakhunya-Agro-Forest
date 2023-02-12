<?php

namespace App\Actions;

use App\Models\Product;

class UpdateRatingOnProduct
{
    private Product $productModel;

    public function __construct(
        Product $productModel
    ) {
        $this->productModel = $productModel;
    }

    public function handle($idProduct) {
        $product = $this->productModel::find($idProduct);
        $reviews = $product->reviews;
        $sumRating = 0;
        foreach ($reviews as $review) {
            $sumRating += $review->rating;
        }
        $rating = $sumRating / $reviews->count();

        $this->productModel::where('id', $idProduct)->update([
            'rating' => $rating,
        ]);
    }
}
