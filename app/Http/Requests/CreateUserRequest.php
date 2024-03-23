<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "first_name"=>"required|string|max:255",
            "last_name"=>"required|string|max:255",
            "gmail"=>"required|string|max:255|unique:users,gmail,".$this->id,
            "password"=>"required|string|max:255",
            "age"=>"required|integer|max_digits:3",
            "jender"=>"required|string",
            "address"=>"required|string|max:255",
            // "birthday"=>"required|date",
            "country"=>"required|string|max:78",
        ];
    }

    // public function messages()
    // {
    //     return[
    //         'required'=>'you should filed all inputes',
    //         'string'=>'first_name&last_name&gmail&password&address&country should be string',
    //         'max'=>'your max length should be below 255 chars',
    //         'integer'=>'your age should be an integer',
    //         'max_digits'=>'your age should be under 200',
    //         'enum'=>'jender should be and enum',
    //         'date'=>'birth_day should be in date format',
    //     ];
    // }
}
