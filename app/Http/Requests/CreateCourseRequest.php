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
        if ($this->method() == 'PUT')
            {
                $name_rule = 'required|min:2|unique:courses,name,' . $this->name . ',name';
            }
            else
            {
                $name_rule = 'required|min:2|unique:courses';
            }
        return [

            'name' => $name_rule
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
