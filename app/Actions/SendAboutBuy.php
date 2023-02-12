<?php

namespace App\Actions;

use App\Mail\Mailing;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

class SendAboutBuy
{
    private Product $productModel;
    private Order $orderModel;

    public function __construct(
        Product $productModel,
        Order $orderModel,
    ) {
        $this->productModel = $productModel;
        $this->orderModel = $orderModel;
    }

    public function handle(int $idProduct): void
    {
        $productName = $this->productModel::find($idProduct)->name;
        $order = $this->orderModel::all()->last();

        Mail::to(env('MAIL_TO'))->send(new Mailing([
            'title' => 'Новый заказ!',
            'productName' => $productName,
            'order' => $order,
        ]));
    }
}
