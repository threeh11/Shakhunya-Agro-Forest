<?php

namespace App\Actions;

class GetCookiesAsArray
{
    public function hanlde(): array
    {
        if ($_COOKIE['productsId'] !== '') {
            $cookie = $_COOKIE['productsId'];
            $elementsCookie = explode(" ", $cookie);
            foreach ($elementsCookie as $element => $item) {
                if ($item === "") unset($elementsCookie[$element]);
            }
            return $elementsCookie;
        }
        return [];
    }
}
