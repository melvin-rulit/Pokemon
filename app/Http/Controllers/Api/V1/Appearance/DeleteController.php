<?php

namespace App\Http\Controllers\Api\V1\Appearance;

use App\Models\Appearance;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Api\V1\BaseController;
use App\Repositories\Interfaces\AppearanceRepositoryInterface;

class DeleteController extends BaseController
{
    public function __invoke(Appearance $appearance, AppearanceRepositoryInterface $appearanceRepository): JsonResponse
    {
        $appearanceRepository->delete($appearance);

        return $this->sendResponse('Один из внешних видов был успешно удален');
    }
}
