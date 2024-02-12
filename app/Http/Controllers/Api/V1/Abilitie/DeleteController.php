<?php

namespace App\Http\Controllers\Api\V1\Abilitie;

use App\Http\Controllers\Api\V1\BaseController;
use App\Models\Ability;
use App\Models\Pokemon;
use App\Repositories\Interfaces\AbilitieRepositoryInterface;
use App\Repositories\Interfaces\PokemonRepositoryInterface;
use Illuminate\Http\JsonResponse;

class DeleteController extends BaseController
{
    public function __invoke(Ability $ability, AbilitieRepositoryInterface $abilitieRepository): JsonResponse
    {
        $abilitieRepository->delete($ability);

        return $this->sendResponse('Способность была успешно удалена');
    }
}
