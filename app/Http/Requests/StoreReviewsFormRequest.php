<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewsFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'alpha', 'max:20'],
            'number' => ['required', 'string', 'max:12'],
            'email' => ['email:rfc,dns'],
            'advantages' => ['required', 'string', 'max:1000', 'min:3'],
            'disadvantages' => ['required', 'string', 'max:1000', 'min:3'],
            'comment' => ['required', 'string', 'max:1000', 'min:3'],
        ];
    }
}
