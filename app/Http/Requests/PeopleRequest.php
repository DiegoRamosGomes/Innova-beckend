<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeopleRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:128'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é obrigatório',
            'name.min' => 'O nome deve conter pelo menos 3 caracteres',
            'name.max' => 'O nome deve conter no máximo 128 caracteres',
        ];
    }
}
