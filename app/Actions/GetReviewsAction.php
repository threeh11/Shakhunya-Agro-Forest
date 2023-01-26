<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class GetReviewsAction
{

    public function handle(int $idProduct): Collection
    {
        return DB::table('reviews')->where('product_id', $idProduct)->get();
    }
}
