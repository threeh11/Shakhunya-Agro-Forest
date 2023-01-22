<?php

namespace App\Http\Controllers;

use App\Actions\SaveBuyAction;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\StoreReviewsFormRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class MainController extends Controller
{
    private StoreFormRequest $storeFormRequest;

    private StoreReviewsFormRequest $storeReviewsFormRequest;

    private SaveBuyAction $saveBuy;

    public function __construct(
        StoreFormRequest $storeFormRequest,
        SaveBuyAction $saveBuy,
        StoreReviewsFormRequest $storeReviewsFormRequest,
    )
    {
        $this->storeFormRequest = $storeFormRequest;
        $this->saveBuy = $saveBuy;
        $this->storeReviewsFormRequest = $storeReviewsFormRequest;
    }

    public function saveBuy(int $idProduct): RedirectResponse
    {
        $validData = $this->storeFormRequest->validationData();
        $isSave = $this->saveBuy->handle($validData, $idProduct);

        return redirect()->route('product', $idProduct);
    }

    /**
     * @param int $idProduct
     * @return void
     */
    #[NoReturn] public function saveReviews(int $idProduct): void
    {
        $validDate = $this->storeReviewsFormRequest->validationData();
        dd($validDate);
    }
}
