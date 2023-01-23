<?php

namespace App\Http\Controllers;

use App\Actions\GetContactsAction;
use App\Actions\GetProductAction;
use App\Actions\GetReviewsAction;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class PagesController extends Controller
{
    private GetProductAction $getProduct;
    private GetReviewsAction $getReviews;
    private GetContactsAction $getContacts;
    private Product $productModel;


    public function __construct(
        GetProductAction $getProduct,
        GetReviewsAction $getReviews,
        GetContactsAction $getContacts,
        Product $productModel,
    ) {
        $this->getProduct = $getProduct;
        $this->getReviews = $getReviews;
        $this->getContacts = $getContacts;
        $this->productModel = $productModel;
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

}
