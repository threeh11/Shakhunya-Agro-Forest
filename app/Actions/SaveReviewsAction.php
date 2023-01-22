<?php

namespace App\Actions;

use App\Models\Review;

class SaveReviewsAction
{
    private Review $reviewModel;

    public function __construct(
        Review $reviewModel
    )
    {
        $this->reviewModel = $reviewModel;
    }

    public function handle(array $validData, int $idProduct): bool
    {
        if ($validData === []) {
            return false;
        }

        $this->reviewModel::create([
            'date_write' => now()->toDate(),
            'rating' => 5,
            'name' => $validData['name'],
            'phone' => $validData['number'],
            'email' => $validData['email'],
            'advantages' => $validData['advantages'],
            'disadvantages' => $validData['disadvantages'],
            'comment' => $validData['comment'],
            'product_id' => $idProduct,
        ]);

        return true;
    }
}
