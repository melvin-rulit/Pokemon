<?php

namespace App\Http\Requests\Ability;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name_en' => 'required',
            'name_ru' => 'required',
            'file' => ['required', 'image:jpg,jpeg,png'],

        ];
    }

    public function messages(): array
    {
        return [
            'name_en.required' => 'Название способности должно быть заполнено',
            'name_ru.required' => 'Название способности должно быть заполнено',
            'image.required' => 'Картинка способности должна быть загружена',
            'image.image' => 'Картинка не jpg,jpeg,png формата',
        ];
    }

}
