<?php

namespace App\DTO;

use Illuminate\Http\Request;

class PokemonCreateForm
{
    public string $name;
    public string $abilitie_id;
    public ?string $image = null;
    public ?string $location = null;

    public function __construct(string $name, int $abilitie_id,  ?string $image , ?string $location)
    {
        $this->name = $name;
        $this->abilitie_id = $abilitie_id;
        $this->image = $image;
        $this->location = $location;
    }

    public static function fromRequest(Request $request): PokemonCreateForm
    {
        return new static(
            $request->get('name'),
            $request->get('abilitie_id'),
            $request->get('image'),
            $request->get('location'),
        );
    }
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'abilitie_id' => $this->abilitie_id,
            'image' => $this->image,
            'location' => $this->location,
        ];
    }

}
