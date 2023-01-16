<?php

namespace App\Http\Controllers;

use App\Actions\GetProductAction;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
class PagesController extends Controller
{
    private GetProductAction $getProduct;

    public function __construct(
        GetProductAction $getProduct,
    )
    {
        $this->getProduct = $getProduct;
    }

    public function index(): View
    {
        return view('index');
    }

    public function product(int $idProduct): View
    {
        $dataView = $this->getProduct->handle($idProduct);
        return view('productPage', $dataView);
    }
}
