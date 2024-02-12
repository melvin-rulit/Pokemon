<?php

namespace App\Http\Resources;

use App\Models\Ability;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PokemonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'image' => $this->resource->image,
            'location' => $this->resource->location,
            'abilitie' => $this->resource->abilitie,
            'created_at' => Carbon::createFromDate($this->resource->created_at)->format('d-m-Y'),
            'updated_at' => Carbon::createFromDate($this->resource->updated_at)->format('d-m-Y'),
        ];
    }
}
