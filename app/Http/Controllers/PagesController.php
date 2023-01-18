<?php

namespace App\Http\Controllers;

use App\Actions\GetContactsAction;
use App\Actions\GetProductAction;
use App\Actions\GetReviewsAction;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
class PagesController extends Controller
{
    private GetProductAction $getProduct;

    private GetReviewsAction $getReviews;

    private GetContactsAction $getContacts;


    public function __construct(
        GetProductAction $getProduct,
        GetReviewsAction $getReviews,
        GetContactsAction $getContacts,
    )
    {
        $this->getProduct = $getProduct;
        $this->getReviews = $getReviews;
        $this->getContacts = $getContacts;
    }

    public function index(): View
    {
        return view('index');
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
