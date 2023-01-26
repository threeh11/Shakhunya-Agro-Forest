<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Pagination\Paginator;

class GetReviewsAction
{

    public function handle(int $idProduct): Paginator
    {
        return DB::table('reviews')->where('product_id', $idProduct)->paginate(3);
    }
}
