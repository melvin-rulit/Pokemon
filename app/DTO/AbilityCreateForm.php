<?php

namespace App\DTO;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class AbilityCreateForm
{
    public string $name_en;
    public string $name_ru;
    public ?string $image = null;


    public function __construct(string $name_en, string $name_ru, ?UploadedFile $image=null)
    {
        $this->name_en = $name_en;
        $this->name_ru = $name_ru;
        $this->image = $image;
    }

    public static function fromRequest(Request $request): AbilityCreateForm
    {
        return new static(
            $request->get('name_en'),
            $request->get('name_ru'),
            $request->file('image')? base64_encode(file_get_contents($request->file('image'))) : null,
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

    public static function fromArray(array $data): AbilityCreateForm
    {
        return new static(
            $data['name_en'] ?? '',
            $data['name_ru'] ?? '',
            $data['image'] ?? null
        );
    }

}
