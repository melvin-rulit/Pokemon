<?php

namespace App\Http\Requests\Pokemon;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'name' => '',
            'image' => '',
            'location' => '',
            'abilitie_id' => ['required', 'numeric'],

        ];
    }

    public function messages(): array
    {
        return [
            'name.unique' => 'Имя должно быть уникальным',
            'abilitie_id' => 'Способность покемона должно быть заполнена',
        ];
    }
}
