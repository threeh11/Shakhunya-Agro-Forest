<?php

namespace App\Http\Controllers;

use App\Actions\GetContactsAction;
use App\Actions\GetCookiesAsArray;
use App\Actions\GetProductAction;
use App\Actions\GetQuestionsAction;
use App\Actions\GetReviewsAction;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;

class PagesController extends Controller
{
    private GetProductAction $getProduct;
    private GetReviewsAction $getReviews;
    private GetContactsAction $getContacts;
    private GetQuestionsAction $getQuestions;
    private Product $productModel;
    private GetCookiesAsArray $getCookies;
    private SearchRequest $searchRequest;

    public function __construct(
        GetProductAction $getProduct,
        GetReviewsAction $getReviews,
        GetContactsAction $getContacts,
        Product $productModel,
        GetCookiesAsArray $getCookies,
        GetQuestionsAction $getQuestions,
        SearchRequest $searchRequest,
    ) {
        $this->getProduct = $getProduct;
        $this->getReviews = $getReviews;
        $this->getContacts = $getContacts;
        $this->productModel = $productModel;
        $this->getCookies = $getCookies;
        $this->getQuestions = $getQuestions;
        $this->searchRequest = $searchRequest;
    }

    public function index(): View
    {
        $products = $this->productModel::all();
        return view('index', compact('products'));
    }

    public function product(int $idProduct): View
    {
        $product = $this->getProduct->handle($idProduct);
        $reviews = $this->getReviews->handle($idProduct);
        $questions = $this->getQuestions->handle($idProduct);
        $contacts = $this->getContacts->handle();
        $dataView = [
            'reviews' => $reviews,
            'contacts' => $contacts,
            'questions' => $questions,
        ];
        $dataView = array_merge($product, $dataView);
        return view('productPage', $dataView);
    }

    public function favorites(Request $request): View
    {
        $productsArray = $this->getCookies->hanlde();
        $products = [];

        foreach ($productsArray as $product => $item) {
            $products[$product - 1] = $this->productModel->find((int) $item);
        }

        return view('favorites', compact('products'));
    }

    public function search(): View|RedirectResponse
    {
        $validData = $this->searchRequest->validated();

        if ($validData === '' || $validData === null) {
            return redirect()->route('index')->with(['error' => 'Ничего не найдено']);
        }
        $search = '%' . $validData['search'] . '%';
        $products = $this->productModel::where('name', 'like', $search)->get();

        if (count($products) === 0) {
            return redirect()->route('index')->with(['error' => 'Ничего не найдено']);
        }

        return view('index', compact('products'))->with(['success' => 'Результаты поиска']);
    }
}
