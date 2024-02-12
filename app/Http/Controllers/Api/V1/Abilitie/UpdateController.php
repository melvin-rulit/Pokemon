<?php

namespace App\Http\Controllers\Api\V1\Abilitie;

use App\Models\Ability;
use App\DTO\AbilityUpdateForm;
use App\Http\Requests\Ability\UpdateRequest;
use App\Http\Controllers\Api\V1\BaseController;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Ability $ability)
    {
        $data = AbilityUpdateForm::fromRequest($request);

        $ability->update($data->toArray());

        return $this->sendResponse('Способность была успешно обновлена', $data);
    }
}
