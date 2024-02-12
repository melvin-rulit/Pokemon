<?php

namespace App\Http\Controllers\Api\V1\Abilitie;

use Illuminate\Http\Request;
use App\Http\Resources\AbilitieResource;
use App\Http\Controllers\Api\V1\BaseController;
use App\Repositories\Interfaces\AbilitieRepositoryInterface;

class IndexController extends BaseController
{
    public function __invoke(Request $request, AbilitieRepositoryInterface $abilityRepository): array
    {
        $pokemon = $abilityRepository->all();

        return AbilitieResource::collection($pokemon)->resolve();
    }
}
