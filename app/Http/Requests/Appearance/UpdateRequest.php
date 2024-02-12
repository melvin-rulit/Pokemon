<?php

namespace App\Http\Requests\Appearance;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required',

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Поле не может быть пустым',
        ];
    }
}
