<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGroupRequest extends FormRequest
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
            'name' => 'required|min:3|unique:groups',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after: start_date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Įveskite Grupės pavadinimą.',
            'name.min' => 'Grupės pavadinimas turi būti bent 3 simboliai.',
            'name.unique' => 'Toks grupės pavadinimas jau yra.',
            'start_date.required' => 'Įveskite pradžios datą.',
            'start_date.date' => 'Įveskite pradžios datą.',
            'end_date.required' => 'Įveskite pabaigos datą.',
            'end_date.date' => 'Įveskite pabaigos datą.',
            'end_date.after' => 'Pabaigos data turi būti vėlesnė, nei pradžios data.'
        ];
    }
}
