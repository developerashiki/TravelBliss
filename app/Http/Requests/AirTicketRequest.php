<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirTicketRequest extends FormRequest
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
            'name'           => 'required',
            'email'          => 'nullable',
            'phone'          => 'required|numeric|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'where_from'     => 'required',
            'where_to'       => 'required',
            'dob'            => 'required',
            'departure_date' => 'required',
            'return_date'    => 'required',
            'adult'          => 'nullable',
            'child'          => 'nullable',
            'infant'         => 'nullable',
            'message'        => 'nullable',

        ];
    }
}
