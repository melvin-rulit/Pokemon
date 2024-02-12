<?php

namespace App\DTO;

use Illuminate\Http\Request;

class AppearanceCreateForm
{
    public string $name;


    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function fromRequest(Request $request): AppearanceCreateForm
    {
        return new static(
            $request->get('name')
        );
    }
    public function toArray(): array
    {
        return [
            'name' => $this->name,
        ];
    }

}
