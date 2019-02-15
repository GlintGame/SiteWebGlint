<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class AddCommentPost extends FormRequest
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
            'content' => 'bail|required',
            'given_name' => 'bail|required|max:255'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'content.required' => 'Le commentaire ne peut etre vide',
            'given_name.required'  => 'Le nom ne peut etre vide',
            'given_name.max:255'  => 'Le nom ne peut excéder 255 caractères.',
        ];
    }
}
