<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AbilitieResource extends JsonResource
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
            'name_en' => $this->resource->name_en,
            'name_ru' => $this->resource->name_ru,
            'image' => $this->resource->image,
            'created_at' => Carbon::createFromDate($this->resource->created_at)->format('d-m-Y'),
            'updated_at' => Carbon::createFromDate($this->resource->updated_at)->format('d-m-Y'),
        ];
    }
}
