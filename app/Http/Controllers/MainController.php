<?php

namespace App\Http\Controllers;

use App\Actions\SaveBuyAction;
use App\Actions\SaveReviewsAction;
use App\Actions\SaveQuestionsAction;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\StoreQuestionFormRequest;
use App\Http\Requests\StoreReviewsFormRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private StoreFormRequest $storeFormRequest;
    private StoreReviewsFormRequest $storeReviewsFormRequest;

    private StoreQuestionFormRequest $storeQuestionsFormRequest;

    private SaveBuyAction $saveBuy;
    private SaveReviewsAction $saveReviews;

    private SaveQuestionsAction $saveQuestions;

    public function __construct(
        StoreFormRequest $storeFormRequest,
        StoreQuestionFormRequest $storeQuestionFormRequest,
        SaveBuyAction $saveBuy,
        SaveQuestionsAction $saveQuestions,
        StoreReviewsFormRequest $storeReviewsFormRequest,
        SaveReviewsAction $saveReviews
    ) {
        $this->storeFormRequest = $storeFormRequest;
        $this->storeQuestionsFormRequest = $storeQuestionFormRequest;
        $this->saveBuy = $saveBuy;
        $this->saveQuestions = $saveQuestions;
        $this->storeReviewsFormRequest = $storeReviewsFormRequest;
        $this->saveReviews = $saveReviews;
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

    public function saveReviews(int $idProduct): RedirectResponse
    {
        $validDate = $this->storeReviewsFormRequest->validated();
        $isSave = $this->saveReviews->handle($validDate, $idProduct);

        return redirect()->route('product', $idProduct)
            ->with(
                $isSave ? ['success' => 'Спасибо за ваш отзыв!'] :
                    ['error' => 'Не удалось опубликовать ваш, попбробуйте позже']
            );
    }

    public function saveQuestions(int $idProduct): RedirectResponse
    {
        dd (request()->all());
        $validData = $this->storeQuestionsFormRequest->validated();
        $isSave = $this->saveQuestions->handle($validData, $idProduct);

        return redirect()->route('product', $idProduct)
            ->with(
                $isSave ? ['success' => 'Спасибо за ваш заказ!'] :
                ['error' => 'Не удалось обработать ваш заказ, попбробуйте позже']
            );
    }
}
