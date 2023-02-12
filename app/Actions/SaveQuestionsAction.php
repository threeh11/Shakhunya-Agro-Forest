<?php

namespace App\Actions;

use App\Models\Question;

class SaveQuestionsAction
{
    private Question $questionsModel;

    public function __construct(
        Question $questionsModel
    )
    {
        $this->questionsModel = $questionsModel;
    }

    public function handle(array $validData, int $idProduct): bool
    {
        if ($validData === []) {
            return false;
        }

        $this->questionsModel::create([
            'name' => $validData['nameQuestions'],
            'number' => $validData['numberQuestions'],
            'email' => $validData['emailQuestions'],
            'text_message' => $validData['textQuestions'],
            'product_id' => $idProduct,
        ]);

        return true;
    }
}
