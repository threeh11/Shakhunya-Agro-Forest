<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;

class GetReviewsAction
{

    public function handle(int $idProduct) 
    {
        return DB::table('reviews')->where('product_id', $idProduct)->paginate(5);
    }
}
