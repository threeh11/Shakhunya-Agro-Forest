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
            'name' => ['required', 'alpha', 'max:20'],
            'number' => ['required', 'string', 'max:12'],
            'email' => ['email:rfc,dns'],
            'text' => ['required', 'string', 'max:1000', 'min:3'],
        ];
    }
}
