<?php

namespace App\Http\Controllers\Api\V1\Pokemon;

use App\DTO\PokemonCreateForm;
use App\Http\Controllers\Api\V1\BaseController;
use App\Http\Requests\Pokemon\CreateRequest;
use App\Http\Resources\PokemonResource;
use App\Models\Pokemon;
use Illuminate\Http\JsonResponse;

{
    class CreateController extends BaseController
    {

        public function __invoke(CreateRequest $request): JsonResponse
        {
            $data = PokemonCreateForm::fromRequest($request)->toArray();

            $result = Pokemon::create($data);

            return $this->sendResponse('Покемон был успешно создан', PokemonResource::make($result));
        }
    }
}

