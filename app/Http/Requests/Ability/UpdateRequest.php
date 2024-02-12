<?php

namespace App\Http\Requests\Ability;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'name_en' => '',
            'name_ru' => '',
            'image' => '',

        ];
    }

    public function messages(): array
    {
        return [
            'name_en' => '',
            'name_ru' => '',
            'image' => '',
        ];
    }
}
