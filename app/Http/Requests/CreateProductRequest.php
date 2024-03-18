<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "product_name" =>"required|string|max:255",
            "color" =>"required|string|max:25",
            "manufactorer" =>"required|string|max:255",
            "amount" =>"required|integer|max_digits:6",
            "price" =>"required|integer|max:8",
            "warranty" =>"required|enum",
            "warranty_manufactorer" =>"required|string|max:255",
            "date_of_supply" =>"required|date",
        ];
    }
}
