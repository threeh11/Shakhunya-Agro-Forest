<?php

namespace App\Actions;

use App\Models\Order;

class SaveBuyAction
{
    private Order $orderModel;

    public function __construct(
        Order $orderModel
    )
    {
        $this->orderModel = $orderModel;
    }

    public function handle(array $validData, int $idProduct): bool
    {
        if ($validData === []) {
            return false;
        }

        $this->orderModel::create([
            'name' => $validData['nameModal'],
            'number' => $validData['numberModal'],
            'email' => $validData['emailModal'],
            'text_order' => $validData['text'],
            'product_id' => $idProduct,
        ]);

        return true;
    }
}
