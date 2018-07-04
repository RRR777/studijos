<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCourseRequest extends FormRequest
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
            'name' => 'required|min:2|unique:courses',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Įveskite Kurso pavadinimą.',
            'name.min' => 'Kurso pavadinimas turi būti bent 2 simboliai.',
            'name.unique' => 'Toks kursas jau yra sukurtas.'
        ];
    }
}
