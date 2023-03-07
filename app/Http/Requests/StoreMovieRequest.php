<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMovieRequest extends FormRequest
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
            'cover_path'        => ['nullable'],
            'title'             => ['required', Rule::unique('movie')->ignore($this->movie), 'max:100'],
            'original_title'    => ['required', Rule::unique('movie')->ignore($this->movie), 'max:100'],
            'nationality'       => ['required', 'max:50'],
            'releade_date'      => ['nullable'],
            'vote'              => ['required'],
            'cast'              => ['nullable']
        ];
    }

    public function messages()
    {
        return [
            'title.requied'           => 'Title Requied to procede',
            'title.unique'            => 'This Title is already Memorized',
            'original_title.requied'  => 'Original Title Requied to procede',
            'original_title.unique'   => 'This Original Title is already Memorized',
            'vote'                    => 'Insert a valid Vote value'
        ];
    }
}
