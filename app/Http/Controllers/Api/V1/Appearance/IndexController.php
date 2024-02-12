<?php

namespace App\Http\Controllers\Api\V1\Appearance;

use Illuminate\Http\Request;
use App\Http\Resources\AppearanceResource;
use App\Http\Controllers\Api\V1\BaseController;
use App\Repositories\Interfaces\AppearanceRepositoryInterface;

class IndexController extends BaseController
{
    public function __invoke(Request $request, AppearanceRepositoryInterface $appearanceRepository)
    {
        $appearance = $appearanceRepository->all();

        return AppearanceResource::collection($appearance)->resolve();
    }
}
