<?php

namespace App\Http\Controllers\Api\V1\Abilitie;

use App\Models\Ability;
use App\DTO\AbilityCreateForm;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\AbilitieResource;
use App\Http\Requests\Ability\CreateRequest;
use App\Http\Controllers\Api\V1\BaseController;
use Illuminate\Support\Facades\Storage;

{
    class CreateController extends BaseController
    {

        public function __invoke(CreateRequest $request): JsonResponse
        {
            $data = AbilityCreateForm::fromRequest($request);

            // Генерируем уникальное имя файла
            $filename = uniqid() . '.' . $data->image->getClientOriginalExtension();

            // Полный путь для сохранения в папке public/image
            $path = $data->image->storeAs('public/image', $filename);

            // Используйте url() для получения URL файла
            $url = url(Storage::url($path));
//            $path = Storage::putFile($data->image, 'Contents');
//            $result = Ability::create($data->toArray());
            $path = $data->image->store('image');
//            return $this->sendResponse('Способность была успешно создана', AbilitieResource::make($result));

            return $this->sendResponse('Способность была успешно создана', $path);
        }
    }
}

