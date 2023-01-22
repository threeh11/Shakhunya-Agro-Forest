<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'alpha', 'max:20', 'min:1'],
            'number' => ['required', 'alpha_dash', 'min:1', 'max:13'],
            'email' => ['required', 'email:rfc,dns'],
            'text' => ['required', 'string', 'max:1000', 'min:3'],
        ];
    }
}
