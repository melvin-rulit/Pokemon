<?php

namespace App\Http\Controllers\Api\V1\Pokemon;

use App\Http\Controllers\Api\V1\BaseController;
use App\Http\Resources\PokemonResource;
use App\Models\Pokemon;

class ShowController extends BaseController
{
    public function __invoke(Pokemon $pokemon): array
    {
        return PokemonResource::make($pokemon)->resolve();
    }
}
