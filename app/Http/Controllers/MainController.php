<?php

namespace App\Http\Controllers;

use App\Actions\SaveBuyAction;
use App\Http\Requests\StoreFormRequest;
use Illuminate\Http\RedirectResponse;

class MainController extends Controller
{
    private StoreFormRequest $storeFormRequest;

    private SaveBuyAction $saveBuy;

    public function __construct(
        StoreFormRequest $storeFormRequest,
        SaveBuyAction $saveBuy,
    )
    {
        $this->storeFormRequest = $storeFormRequest;
        $this->saveBuy = $saveBuy;
    }

    public function saveBuy(int $idProduct): RedirectResponse
    {
        $validData = $this->storeFormRequest->validationData();
        $isSave = $this->saveBuy->handle($validData, $idProduct);

        if (!$isSave)
        {
            dd('АУE');
        }

        return redirect()->route('product', $idProduct);
    }
}
