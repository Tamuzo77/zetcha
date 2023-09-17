<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarteRequest extends FormRequest
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
            'enterprise_name' => 'max:1025',
            'enterprise_address' => 'max:1025',
            'mail' => 'email',
            'phone_number1' => '',
            'phone_number2' => '',
            'lien_facebook' => 'url',
            'lien_twitter' => 'url',
            'lien_linkedin' => 'url',
        ];
    }
}
