<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'code' => 'required|string|unique:products,code',
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'unit' => 'required|in:und,kg,L,m,doc',
            'price' => 'required|numeric|min:0',
        ];
    }
}
