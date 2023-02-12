<?php

namespace App\Helpers;

use App\Models\Product;

class Helper
{
    public static function getIMagesForArrayInDb(int $idProduct): array
    {
        $strPathImages = Product::find($idProduct)->path_to_images;
        return explode(' ', $strPathImages);
    }

    public static function isFavorites(int $idProduct): bool
    {
        if (array_key_exists('productsId', $_COOKIE)) {
            if (count($_COOKIE) !== 0) {
                if ($_COOKIE['productsId'] !== '') {
                    return str_contains($_COOKIE['productsId'], (string)$idProduct);
                }
                return false;
            }
            return false;
        }
        return false;
    }

    public static function getImageProduct(int $idProduct): string
    {
        $strPathImages = Product::find($idProduct)->path_to_images;
	return explode(' ', $strPathImages)[2];
    }

    public static function leadsToNormalAppearance(float $number): float
    {
        return number_format($number, 1);
    }

}
