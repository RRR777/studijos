<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLectureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date' => 'required|date',
            'name' => 'required|min: 3',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'date.required' => 'Įveskite paskaitos datą.',
            'date.date' => 'Įveskite paskaitos datą.',
            'name.required' => 'Įveskite paskaitos pavadinimą.',
            'name.min' => 'Paskaitos pavadinimas turi būti bent 3 simboliai.',
            'description.required' => 'Įveskite paskaitos aprašymą.'
        ];
    }
}