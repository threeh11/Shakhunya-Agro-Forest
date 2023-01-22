<?php

namespace App\Http\Controllers;

use App\Actions\SaveBuyAction;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\StoreReviewsFormRequest;
use Illuminate\Http\RedirectResponse;

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
        $validData = $this->storeFormRequest->validated();
        $isSave = $this->saveBuy->handle($validData, $idProduct);

        return redirect()->route('product', $idProduct)
            ->with(
                $isSave ? ['success' => 'Спасибо за ваш заказ!'] :
                ['error' => 'Не удалось обработать ваш заказ, попбробуйте позже']
            );
    }

     public function saveReviews(int $idProduct): void
    {
        $validDate = $this->storeReviewsFormRequest->validationData();
        dd($validDate);
    }
}
