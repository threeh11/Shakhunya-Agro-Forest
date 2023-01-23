<?php

namespace App\Http\Controllers;

use App\Actions\GetContactsAction;
use App\Actions\GetCookiesAsArray;
use App\Actions\GetProductAction;
use App\Actions\GetReviewsAction;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    private GetProductAction $getProduct;
    private GetReviewsAction $getReviews;
    private GetContactsAction $getContacts;
    private Product $productModel;
    private GetCookiesAsArray $getCookies;


    public function __construct(
        GetProductAction $getProduct,
        GetReviewsAction $getReviews,
        GetContactsAction $getContacts,
        Product $productModel,
        GetCookiesAsArray $getCookies,
    ) {
        $this->getProduct = $getProduct;
        $this->getReviews = $getReviews;
        $this->getContacts = $getContacts;
        $this->productModel = $productModel;
        $this->getCookies = $getCookies;
    }

    public function index(): View
    {
        $products = $this->productModel::all();
        return view('index', compact('products'));
    }

    public function product(int $idProduct): View
    {
        $product = $this->getProduct->handle($idProduct);
        $reviews = $this->getReviews->handle($idProduct);
        $contacts = $this->getContacts->handle();
        $dataView = [
            'reviews' => $reviews,
            'contacts' => $contacts
        ];
        $dataView = array_merge($product, $dataView);
        return view('productPage', $dataView);
    }

    public function favorites(Request $request): View
    {
        $productsArray = $this->getCookies->hanlde();
        $products = [];

        foreach ($productsArray as $product => $item) {
            $products[$product - 1] = $this->productModel->find((int) $item);
        }

        dd($products);

        return view('favorites', $products);
    }

}
