<?php

namespace App\Http\Controllers\Api\V1\Pokemon;

use App\Http\Controllers\Api\V1\BaseController;
use App\Models\Pokemon;
use App\Repositories\Interfaces\PokemonRepositoryInterface;
use Illuminate\Http\JsonResponse;

class DeleteController extends BaseController
{
    public function __invoke(Pokemon $pokemon, PokemonRepositoryInterface $pokemonRepository): JsonResponse
    {
        $pokemonRepository->delete($pokemon);

        return $this->sendResponse('Покемон была успешно удален');
    }
}
