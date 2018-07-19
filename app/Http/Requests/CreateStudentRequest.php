<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
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
            //'type' => 'required|numeric',
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'numeric',
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Įveskite studento vardą.',
            'name.string' => 'Įveskite studento vardą.',
            'name.max' => 'Įveskitestudento vardą.',
            'lastName.required' => 'Įveskite studento pavardę1.',
            'lastName.string' => 'Įveskite studento pavardę2.',
            'lastName.max' => 'Įveskite studento pavardę3.',
            'email.required' => 'Įveskite el.pašto adresą.',
            'email.string' => 'Įveskite el.pašto adresą',
            'email.email' => 'Įveskite galiojantį el.pašto adresą',
            'email.max' => 'Įveskite el.pašto adresą.',
            'email.unique' => 'Toks elpašto adresas jau panaudotas.',
            'phone.numeric' => 'Įveskite telefono numerį.',
            'password.required' => 'Įveskite slaptažodį.',
            'password.string' => 'Įveskite slaptažodį.',
            'password.min' => 'Slaptažodis turi būti ne trumpesnis kaip 6 simboliai.',
            'password.confirmed' => 'Pakartokite slaptažodį.'
        ];
    }
}
