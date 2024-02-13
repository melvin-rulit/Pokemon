<?php

namespace App\Http\Controllers\Api\V1\Abilitie;

use App\Models\Ability;
use App\DTO\AbilityCreateForm;

use Illuminate\Http\JsonResponse;
use App\Http\Resources\AbilitieResource;
use App\Http\Requests\Ability\CreateRequest;
use App\Http\Controllers\Api\V1\BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

{
    class CreateController extends BaseController
    {

        public function __invoke(CreateRequest $request): JsonResponse
        {
            $data = AbilityCreateForm::fromRequest($request);
            $path = Storage::putFile('images', $data->image);
            $data->image = $path;
            $result = Ability::create($data->toArray());
            return $this->sendResponse('Способность была успешно создана', AbilitieResource::make($result));
        }
    }
}

