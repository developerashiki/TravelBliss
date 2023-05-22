<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'    => 'required|string',
            'email'   => 'nullable|email'void,
            'phone'   => 'required|numeric|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'message' => 'required',
        ];
    }
}
