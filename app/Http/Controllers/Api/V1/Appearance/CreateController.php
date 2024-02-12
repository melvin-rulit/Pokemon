<?php

namespace App\Http\Controllers\Api\V1\Appearance;

use App\Models\Appearance;
use App\DTO\AppearanceCreateForm;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\AppearanceResource;
use App\Http\Requests\Appearance\CreateRequest;
use App\Http\Controllers\Api\V1\BaseController;

{
    class CreateController extends BaseController
    {

        public function __invoke(CreateRequest $request): JsonResponse
        {
            $data = AppearanceCreateForm::fromRequest($request)->toArray();

            $result = Appearance::create($data);

            return $this->sendResponse('Внешний вид для покемона был успешно создан', AppearanceResource::make($result));
        }
    }
}

