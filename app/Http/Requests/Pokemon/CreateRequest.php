<?php

namespace App\Http\Requests\Pokemon;

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
            'name' => ['required', 'unique:pokemon'],
            'image' => '',
            'location' => '',
            'abilitie_id' => ['required', 'numeric'],

        ];
    }

    public function messages(): array
    {
       return [
           'name.required' => 'Имя должно быть обязательно заполнено',
           'name.unique' => 'Имя должно быть уникальным',
           'abilitie_id' => 'Способность покемона должно быть заполнена',
       ];
    }
    public function getFirstName(): string
    {
        return $this->input('firstName');
    }

}
