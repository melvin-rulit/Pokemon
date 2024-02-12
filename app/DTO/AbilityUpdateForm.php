<?php

namespace App\DTO;

use Illuminate\Http\Request;

class AbilityUpdateForm
{
    public string $name_en;
    public string $name_ru;
    public ?string $image = null;


    public function __construct(string $name_en, string $name_ru,  ?string $image=null)
    {
        $this->name_en = $name_en;
        $this->name_ru = $name_ru;
        $this->image = $image;
    }

    public static function fromRequest(Request $request): AbilityUpdateForm
    {
        return new static(
            $request->get('name_en'),
            $request->get('name_ru'),
            $request->get('image'),
        );
    }
    public function toArray(): array
    {
        return [
            'name_en' => $this->name_en,
            'name_ru' => $this->name_ru,
            'image' => $this->image
        ];
    }

}
