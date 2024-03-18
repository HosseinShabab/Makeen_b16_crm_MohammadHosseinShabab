<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "buyer_first_name" => "required|string|max:255",
            "buyer_last_name" => "required|string|max:255",
            "buyer_gmail" => "required|string|max:255",
            // "product_name" =>"required|string|max:255",
            "color" => "required|string|max:25",
            "payment_method" =>"required|string",
            "address" => "required|string|max:255",
        ];
    }
}
