<?php

namespace App\Http\Controllers;

use App\Actions\SaveBuyAction;
use App\Actions\SaveQuestionsAction;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\StoreQuestionFormRequest;
use App\Http\Requests\StoreReviewsFormRequest;
use Illuminate\Http\RedirectResponse;

class MainController extends Controller
{
    private StoreFormRequest $storeFormRequest;

    private StoreReviewsFormRequest $storeReviewsFormRequest;

    private StoreQuestionFormRequest $storeQuestionsFormRequest;

    private SaveBuyAction $saveBuy;

    private SaveQuestionsAction $saveQuestions;

    public function __construct(
        StoreFormRequest $storeFormRequest,
        StoreQuestionFormRequest $storeQuestionFormRequest,
        SaveBuyAction $saveBuy,
        SaveQuestionsAction $saveQuestions,
        StoreReviewsFormRequest $storeReviewsFormRequest
    ) {
        $this->storeFormRequest = $storeFormRequest;
        $this->storeQuestionsFormRequest = $storeQuestionFormRequest;
        $this->saveBuy = $saveBuy;
        $this->saveQuestions = $saveQuestions;
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

    public function saveQuestions(int $idProduct): RedirectResponse
    {
        $validData = $this->storeQuestionsFormRequest->validated();
        $isSave = $this->saveQuestions->handle($validData, $idProduct);

        return redirect()->route('product', $idProduct)
            ->with(
                $isSave ? ['success' => 'Спасибо за ваш заказ!'] :
                ['error' => 'Не удалось обработать ваш заказ, попбробуйте позже']
            );
    }
}
