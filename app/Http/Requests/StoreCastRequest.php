<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCastRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_surname'   => ['required', Rule::unique('casts')->ignore($this->cast), 'max:60']
        ];
    }

    public function messages()
    {
        return [
            'name_surname.required'    => 'Name and Surname are required to procede',
            'name_surname.unique'     => 'This Actor is already Memorized'
        ];
    }
}
