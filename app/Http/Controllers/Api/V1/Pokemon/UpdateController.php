<?php

namespace App\Http\Controllers\Api\V1\Pokemon;

use App\DTO\PokemonCreateForm;
use App\Http\Controllers\Api\V1\BaseController;
use App\Http\Requests\Pokemon\UpdateRequest;
use App\Models\Pokemon;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Pokemon $pokemon)
    {
        $data = PokemonCreateForm::fromRequest($request);

        $pokemon->update($data->toArray());

        return $this->sendResponse('Покемон был успешно обновлен', $data);
    }
}
