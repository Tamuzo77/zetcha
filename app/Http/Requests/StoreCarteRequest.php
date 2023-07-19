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
            'author_id' => 'required|exists:authors,id',
            'numeroZ' => 'required|unique:cartes,numeroZ',
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:1025',
            'planTarifaire_id' => 'required|exists:plan_tarifaires,id',
            'infosProfessionelles' => ''
        ];
    }
}
