<?php

namespace App\Actions;

use App\Helpers\Helper;
use App\Models\Product;

class GetProductAction
{
    private Product $productModel;
    private static Helper $helper;

    public function __construct(
        Product $productModel,
        Helper $helper,
    )
    {
        $this->productModel = $productModel;
        self::$helper = $helper;
    }

    public function handle(int $idProduct): array
    {
        $product = $this->productModel::find($idProduct);
        $listImages = self::$helper::getIMagesForArrayInDb($idProduct);
        return [
            'product' => $product,
            'listImages' => $listImages,
        ];
    }
}
