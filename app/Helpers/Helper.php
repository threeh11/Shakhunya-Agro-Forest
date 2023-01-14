<?php

namespace App\Helpers;

use App\Models\Product;
use JetBrains\PhpStorm\NoReturn;

class Helper
{

    public static function getIMagesForArrayInDb($idProduct): array
    {
        $strPathImages = Product::find($idProduct)->path_to_images;
        return explode(' ', $strPathImages);
    }
}