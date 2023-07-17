<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LostCarteRequest extends FormRequest
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
            'numeroZ' => 'required|exists:cartes,numeroZ',
            'explaination' => 'required|max:1025|string',
        ];
    }
}
