<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatCategoryRequest extends FormRequest
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
            'category_name' =>"required|string|max:",
            'category_id' => "required|integer|max_digits:10",
        ];
    }
}
