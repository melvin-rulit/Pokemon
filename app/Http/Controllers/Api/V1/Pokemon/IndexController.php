<?php

namespace App\Http\Controllers\Api\V1\Pokemon;

use App\Http\Controllers\Api\V1\BaseController;
use App\Http\Resources\PokemonResource;
use App\Repositories\Interfaces\PokemonRepositoryInterface;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Request $request, PokemonRepositoryInterface $pokemonRepository): array
    {
        $pokemon = $pokemonRepository->all();

        return PokemonResource::collection($pokemon)->resolve();
    }
}
