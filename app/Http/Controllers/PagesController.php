<?php

namespace App\Http\Controllers;

use App\Actions\GetAllProductsAction;
use App\Actions\GetProductAction;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
class PagesController extends Controller
{
    private GetProductAction $getProduct;

    private GetAllProductsAction $getAllProducts;

    public function __construct(
        GetProductAction $getProduct,
        GetAllProductsAction $getAllProducts,
    )
    {
        $this->getProduct = $getProduct;
        $this->getAllProducts = $getAllProducts;
    }

    public function index(): View
    {
        $dataView = $this->getAllProducts->handle();
        return view('index', $dataView);
    }

    public function product(int $idProduct): View
    {
        $dataView = $this->getProduct->handle($idProduct);
        return view('productPage', $dataView);
    }
}
