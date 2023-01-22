<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nameQuestions' => ['required', 'alpha', 'max:20'],
            'numberQuestions' => ['required', 'string', 'max:12'],
            'emailQuestions' => ['required', 'email:rfc,dns'],
            'textQuestions' => ['required', 'string', 'max:1000', 'min:3']
        ];
    }
}
