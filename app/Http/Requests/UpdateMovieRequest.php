<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMovieRequest extends FormRequest
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
            'cover_path'     => ['nullable'],
            'title'          => ['required', Rule::unique('movies')->ignore($this->movie), 'max:100'],
            'original_title' => ['required', Rule::unique('movies')->ignore($this->movie), 'max:100'],
            'nationality'    => ['required', 'max:50'],
            'release_date'   => ['nullable'],
            'vote'           => ['required'],
            'genre_id'       => ['nullable', 'exists:genre,id'],
            'casts'          => ['exists:casts,id']
        ];
    }

    public function messages()
    {
        return [
            // 'title.required'           => 'Title required to procede',
            // 'title.unique'            => 'This Title is already Memorized',
            // 'original_title.required'  => 'Original Title required to procede',
            // 'original_title.unique'   => 'This Original Title is already Memorized',
            // 'nationality.required'     => 'Nationality required to procede',
            // 'vote.required'            => 'Insert a valid Vote value'
        ];
    }
}
