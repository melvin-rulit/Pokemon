<?php

namespace App\Http\Controllers\Api\V1\Appearance;

use App\Models\Appearance;
use App\DTO\AppearanceUpdateForm;
use App\Http\Requests\Appearance\UpdateRequest;
use App\Http\Controllers\Api\V1\BaseController;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Appearance $appearance)
    {
        $data = AppearanceUpdateForm::fromRequest($request);

        $appearance->update($data->toArray());

        return $this->sendResponse('Внешний вид был успешно обновлен', $data);
    }
}
