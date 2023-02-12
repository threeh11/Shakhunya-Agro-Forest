<?php

namespace App\Actions;

use App\Mail\Mailing;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\Mail;

class SendAboutReviews
{
    private Product $productModel;
    private Review $reviewModel;

    public function __construct(
        Product $productModel,
        Review $reviewModel,
    ) {
        $this->productModel = $productModel;
        $this->reviewModel = $reviewModel;
    }

    public function handle(int $idProduct): void
    {
        $productName = $this->productModel::find($idProduct)->name;
        $review = $this->reviewModel::all()->last();

        Mail::to(env('MAIL_TO'))->send(
            new Mailing([
                'title' => 'Новый заказ!',
                'productName' => $productName,
                'order' => $review,
            ]
        ));
    }
}
